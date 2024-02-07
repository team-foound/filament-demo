<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Iso6393 extends Model
{

    use HasTranslations;

    /**
     * @var array
     */
    protected $table = 'iso6393';
    protected $fillable = ['id3', 'Part2B', 'Part2T', 'iso2', 'name', 'written', 'spoken', 'website_status', 'manager_status', 'client_status', 'store_status', 'website_content_status'];
    public $timestamps = false;
    protected $translatable = ['name'];




}
