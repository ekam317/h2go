<?php

namespace App\Http\Controllers\ServiceProvider\MedicalEducation;

use App\Model\ServiceProvider\MedicalEducation\Degree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DegreeController extends Controller
{
    public $medical_education = [ 'diploma', 'bachelor', 'master', 'phd' ];
    /**
     * Validation
    **/
    protected function validator(Request $request) {
        $validator = Validator::make( $request->all(), [
            'type' => 'required|in:' . implode(',', $this->medical_education),
            'degree_name' => 'required',
            'health_institution_name' => 'required',
            'issuing_country' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json( [ 'errors' => $validator->errors() ]);
        }
    }

    protected function checkPermission( $user, $role ) {
        $model = str_slug('degrees','-');
        if($user->permissions()->where('name','=', $role . '-' . $model)->first() == null) {
            return response([
                'message' => 'Unauthorized'
            ], 403);
        }
        return false;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        /* Permission */
        $check_permission = $this->checkPermission( $user, 'view' );
        if($check_permission) { return $check_permission; }

        $degrees = Degree::orderBy('created_at', 'desc')
                        ->paginate(10)->withPath('');
        $response = [
            'message' => 'List of Degree',
            'degrees' => $degrees
        ];
        return response()->json( $response );
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        /* Permission */
        $check_permission = $this->checkPermission( $user, 'add' );
        if($check_permission) { return $check_permission; }

        /* $request Validitaion */
        $validator = $this->validator($request);
        if($validator) { return $validator; }

        $request_array = $request->all();
        $degree = new Degree( $request_array );
        $degree->status = 'update';
        $user->degrees()->save( $degree );

        $response = [
            'message' =>  $degree->degree_name . ' was added!',
            'degree' => $degree,
        ];

        return response()->json( $response);
    }

    public function show($id)
    {
        $user = Auth::user();

        /* Permission */
        $check_permission = $this->checkPermission( $user, 'view' );
        if($check_permission) { return $check_permission; }

        $degree = $user->degrees()->find( $id );

        $response = [
            'dregee' => $degree
        ];
        return response()->json( $response );
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();

        /* Permission */
        $check_permission = $this->checkPermission( $user, 'edit' );
        if($check_permission) { return $check_permission; }

        /* $request Validitaion */
        $validator = $this->validator($request);
        if($validator) { return $validator; }

        $degree = $user->degrees()->find( $id );

        $request_array = $request->all();
        $degree->update( $request_array );

        $response = [
            'message' =>  $degree->degree_name . ' was updated!',
            'dregee' => $degree
        ];
        return response()->json( $response);
    }

    public function destroy($id) {
        $user = Auth::user();

        /* Permission */
        $check_permission = $this->checkPermission( $user, 'delete' );
        if($check_permission) { return $check_permission; }

        $degree = $user->degrees()->find( $id );
        $degree->delete();

        $response = [
            'message' =>  $degree->degree_name . ' was deleted!',
            'dregee' => $degree
        ];
        return response()->json( $response);
    }
}
