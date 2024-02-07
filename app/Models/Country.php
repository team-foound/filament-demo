<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Country extends Model
{

    protected $table = 'countries';
    public $timestamps = false;

    protected $fillable = ['name', 'active', 'timezone', 'currency_code'];


    public function currency()
    {
        return $this->belongsTo('App\Models\Currency', 'currency_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rates()
    {
        return $this->hasMany('App\Models\CountryRate');
    }

}
