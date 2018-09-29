<?php

namespace App\Model\ServiceProvider\MedicalEducation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Degree extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'service_provider_degrees';

    protected $fillable = [
    	'type',  'degree_name',
    	'health_institution_name',
    	'issuing_country'
    ];
}
