<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingModel extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = ['user_id', 'amount', 'code', 'date_from', 'date_to'];
}
