<?php

namespace App\Model\ServiceProvider\MedicalEducation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'service_provider_certificates';

    protected $fillable = [
    	'program_title',
        'issuing_country',
    ];
}
