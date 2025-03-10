<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_title',
        'image',
        'course_type',
        'course_seq',
        'team_id',
        
    ];
    public function demoVideos()
    {
        return $this->hasMany(Videos::class)->where('is_demo', 1); // Define relationship without using first
    }
    
    public function videos()
    {
        return $this->hasMany(Videos::class);
    }
    public function packages()
{
    return $this->hasMany(Package::class, 'course_id');  // Make sure the foreign key is correct (i.e., course_id)
}
public function team()
{
    return $this->belongsTo(Team::class, 'team_id');  // Foreign key: team_id
} 
}
