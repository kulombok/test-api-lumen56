<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'birthdateplace',
        'jeniskelamin',
        'address',
        'phonenumber',
        'maritalstatus',
        'suku',
        'pekerjaan',
        'photo',
        'email',
        'idparrentrelation'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'idparrentrelation'
    ];
}
