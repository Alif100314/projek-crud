<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Biodata extends Model
{
    use SoftDeletes;
    protected $table = 'biodatas';
    protected $fillable = [
        'nama',
    	'no_tlp',
        
    ];
    protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
}
