<?php

namespace App\Model\ServiceProvider;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $table = 'service_provider_profiles';

    protected $fillable = [
    	'gender', 'date_of_birth',
        'picture_path',
        'country', 'state', 'city',
        'address', 'postal',
        'title', 'cellphone_number',
        'nationality', 'about',
    ];
}
