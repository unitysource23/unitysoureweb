<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSettings extends Model
{
    use HasFactory;
    protected $fillable = ['phone_one', 'phone_two', 'phone_three', 'address_one', 'address_two', 'facebook_link', 'instagram_link', 'linkin_link'];
}
