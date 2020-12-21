<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['usr_id', 'name', 'cc', 'mileage', 'color'];

    // public function owner()
    // {
    //     return $this->hasOne(User::class, 'id', 'usr_id');
    // }
}
