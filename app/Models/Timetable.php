<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    protected $table = 'timetable';

    protected $with = ['student'];

    protected $fillable = [
        'studentsID',
        'date',
        'start_time',
        'pickup_location',
        'purpose',
        'instructorsID',
        'carID',
    ];

    public function student(){
        return $this->belongsTo(User::class, 'studentsID');
    }
    public function instructor(){
        return $this->belongsTo(User::class, 'instructorsID');
    }
    public function car(){
        return $this->belongsTo(Car::class, 'carID');
    }
}
