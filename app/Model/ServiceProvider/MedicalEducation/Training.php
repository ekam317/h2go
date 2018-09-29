<?php

namespace App\Model\ServiceProvider\MedicalEducation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'service_provider_trainings';

    protected $fillable = [
    	'program_type',
        'health_institution_name',
        'number_of_year',
        'issuing_country'
    ];
}
