<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Country extends Model
{

    protected $table = 'countries';
    public $timestamps = false;

    protected $fillable = ['name', 'active', 'timezone', 'currency_code'];



}
