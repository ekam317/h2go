<?php

namespace App\Model\ServiceProvider\MedicalEducation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Identification extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'service_provider_identifications';

    protected $fillable = [
        'type',
        'number',
        'expiration_date',
        'profession_name'
    ];
}
