<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "title",
        "image",
        "description"
    ];

    public function courses()
    {
        return $this->hasMany(Courses::class, 'team_id');  // Foreign key: team_id
    }
}
