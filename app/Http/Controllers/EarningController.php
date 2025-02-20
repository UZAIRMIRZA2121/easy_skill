<?php

namespace App\Http\Controllers;

use App\Mail\UserNotificationMail;
use App\Models\Earning;
use App\Models\Skillsider_payment_method;
use App\Models\Transection;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Models\Notification; // Make sure to import your custom Notification model


class EarningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $missingFields = [];

        // Check each field and add to missing fields array if null
        if (is_null(Auth::user()->id_card_name)) $missingFields[] = 'ID Card Name';
        if (is_null(Auth::user()->id_card_number)) $missingFields[] = 'ID Card Number';
        if (is_null(Auth::user()->gender)) $missingFields[] = 'Gender';
        if (is_null(Auth::user()->address)) $missingFields[] = 'Address';
        if (is_null(Auth::user()->city)) $missingFields[] = 'City';
        if (is_null(Auth::user()->pin_code)) $missingFields[] = 'Post Code';
        if (is_null(Auth::user()->dob)) $missingFields[] = 'Date of Birth';
        if (is_null(Auth::user()->state)) $missingFields[] = 'State';
   
        if (empty($missingFields)) {
          
        $earnings = Earning::with('user')->where('user_id', Auth::user()->id)->get();
        $un_paid_amount = Earning::where('user_id', Auth::user()->id)->where('status', 0)->sum('amount');
        $un_paids = Earning::where('user_id', Auth::user()->id)->where('status', 0)->get();

        $transections = Transection::where('user_id', Auth::user()->id)->where('status', 1)->get();
        $transaction_requested = Transection::where('user_id', Auth::user()->id)->where('status', 0)->get();
   
        $transectionCount = Transection::where('user_id', Auth::user()->id)
            ->where('status', 1)->sum('amount');
        $requested_amount = Earning::where('user_id', Auth::user()->id)->where('status', 2)->sum('amount');
        $requests = Earning::where('user_id', Auth::user()->id)->where('status', 2)->get();
   
       $latestTransaction = Transection::where('user_id', Auth::user()->id)
            ->select('created_at')
            ->latest()
            ->first();
        
    

         $currentDate = now()->format('Y-m-d');  

        if ($latestTransaction) {
              $requests_date = optional($latestTransaction)->created_at->format('Y-m-d');
           return view('admin.earning.index', compact('earnings', 'un_paid_amount', 'un_paids', 'requested_amount', 'requests', 'transections', 'transectionCount','requests_date','currentDate'));
        } else {
         $requests_date = '2022-10-14';
         return view('admin.earning.index', compact('earnings', 'un_paid_amount', 'un_paids', 'requested_amount', 'requests', 'transections', 'transectionCount','requests_date','currentDate'));
        }
        } else {
           // Some fields are missing, redirect back with an error message
           $missingFieldsString = implode(', ', $missingFields);
           return redirect()->route('users.edit', ['user' => Auth::user()->id])->withErrors(['msg' => 'Please Complete Your Profile: ' . $missingFieldsString]);
       }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Earning $earning)
    {




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Earning  $earning
     * @return \Illuminate\Http\Response
     */
    public function show(Earning $earning)
    {
        dd(2);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Earning  $earning
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $std_id = $id;

        $payment_method = Skillsider_payment_method::where('user_id', Auth::user()->id)->first();
        if(!$payment_method){
             return redirect()->route('student.payments')->with('error','Please add your payment method first!');
        }

        $earnings = Earning::with('user')
            ->where('status', 0)
            ->where('user_id', Auth::user()->id)
            ->sum('amount');

        $recieved_earnings = Transection::where('status', 1)
            ->where('user_id', Auth::user()->id)
            ->sum('amount');
        return view('admin.earning.withdarw', compact('std_id', 'earnings', 'recieved_earnings', 'payment_method'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Earning  $earning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

        if (Auth::user()->status == 1) {

            $payment_method = Skillsider_payment_method::where('id',$request->payment_method_id)->first();
           
            

            $requested = Earning::where('status', 0)
                ->where('user_id', Auth::user()->id)
                ->update([
                    'status' => 2,
                    'updated_at' => Carbon::now(),
                ]);
            if ($requested) {
                $old_transection = Transection::where('user_id', Auth::user()->id)
                    ->where('status', 0)
                    ->orderBy('created_at', 'desc')->first();
                if ($old_transection) {
                    $old_transection->delete();
                }

                $sum_amount = round(
                    Earning::where('status', 2)
                        ->where('user_id', Auth::user()->id)
                        ->sum('amount') // Number of decimal places
                );
                // Format the amount with commas and prefix "Rs"
                $formatted_sum_amount = ' ' . number_format($sum_amount, 0);



                Transection::create([
                    'user_id' => Auth::user()->id,
                    'amount' => $sum_amount,
                    'created_at' => Carbon::now(),
                ]);
                $email = Auth::user()->email;
                $first_name = Auth::user()->first_name;
                $subject = "Withdrawal Request Sent Successfully";
                $messageData = [
                    'name' => $first_name,
                    'amount' => $formatted_sum_amount,
                ];
              
                Mail::to($email)->send(new UserNotificationMail($subject, $messageData, 'emails.withdrawal-request-sent'));
             
                $notification = Notification::create([
                    'title' => 'Withdrawal Request Sent Successfully.',
                    'message' => 'Dear ' . Auth::user()->first_name . ', your withdrawal request for ' . $formatted_sum_amount . ' has been received and will be processed within 24 hours.',

                    'created_by' => null, // The admin who created the notification
                ]);
                 // Attach notification to the specific user
                 $notification->users()->attach(Auth::user()->id, ['is_read' => 0]);
      
             
                return redirect()->route('earnings.index')->with('success', 'Request have been sent successfully.');
            }
            return redirect()->route('earnings.index')->with('error', 'you do not have enough amount.');
        } else {
            return redirect()->route('earnings.index')->with('error', 'you are not verified until now.');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Earning  $earning
     * @return \Illuminate\Http\Response
     */
    public function destroy(Earning $earning)
    {
        //
    }
    public function payment_request_management()
    {
     
        $payment_method = Skillsider_payment_method::where('user_id', Auth::user()->id)
            ->select('bank', 'account_number', 'account_name')
            ->first();
        
        $requests = Transection::with('user')->where('status', 0)->orderBy('created_at', 'desc')->get();
        
 
       
        return view('admin.payments.payment-requested', compact( 'payment_method', 'requests'));
    }
    public function payment_paid_management()
    {
     
     
        $paids = Transection::where('status', 1)
        ->orderBy('created_at', 'desc')
        ->paginate(20);
       
        return view('admin.payments.payment-paid', compact('paids'));
    }

    public function paid_payment_search(Request $request)
    {
       
        // Query transactions with status = 1 (paid)
        $query = Transection::where('status', 1)->orderBy('created_at', 'desc');
    
        // If an email search filter is applied
        if ($request->has('email') && !empty($request->email)) {
            $query->whereHas('user', function ($q) use ($request) {
                $q->where('email', 'like', '%' . $request->email . '%');
            });
        }
    
        // Paginate results (20 per page)
        $paids = $query->paginate(20);
  
        return view('admin.payments.payment-paid', compact('paids'));
    }
    
    


}