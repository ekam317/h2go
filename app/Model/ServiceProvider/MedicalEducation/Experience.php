<?php

namespace App\Model\ServiceProvider\MedicalEducation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'service_provider_experiences';

    protected $fillable = [
        'title',
        'issuing_country',
        'number_of_years'
    ];
}
