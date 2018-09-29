<?php

namespace App\Http\Controllers\ServiceProvider\MedicalEducation;

use App\Model\ServiceProvider\MedicalEducation\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    /**
     * Validation
    **/
    protected function validator(Request $request) {
        $validator = Validator::make( $request->all(), [
            'title' => 'required',
            'issuing_country' => 'required',
            'number_of_years' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json( [ 'errors' => $validator->errors() ]);
        }
    }

    protected function checkPermission( $user, $role ) {
        $model = str_slug('experiences','-');
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
        //$check_permission = $this->checkPermission( $user, 'view' );
        //if($check_permission) { return $check_permission; }

        $experiences = Experience::orderBy('created_at', 'desc')
                        ->paginate(10)->withPath('');
        $response = [
            'message' => 'List of Experience',
            'experiences' => $experiences
        ];
        return response()->json( $response );
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        /* Permission */
        //$check_permission = $this->checkPermission( $user, 'add' );
        //if($check_permission) { return $check_permission; }

        /* $request Validitaion */
        $validator = $this->validator($request);
        if($validator) { return $validator; }

        $request_array = $request->all();
        $experience = new Experience( $request_array );
        $experience->status = 'update';
        $user->experiences()->save( $experience );

        $response = [
            'message' =>  $experience->degree_name . ' was added!',
            'experience' => $experience,
        ];

        return response()->json( $response);
    }

    public function show($id)
    {
        $user = Auth::user();

        /* Permission */
        //$check_permission = $this->checkPermission( $user, 'view' );
        //if($check_permission) { return $check_permission; }

        $experience = $user->experiences()->find( $id );

        $response = [
            'experience' => $experience
        ];
        return response()->json( $response );
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();

        /* Permission */
        //$check_permission = $this->checkPermission( $user, 'edit' );
        //if($check_permission) { return $check_permission; }

        /* $request Validitaion */
        $validator = $this->validator($request);
        if($validator) { return $validator; }

        $experience = $user->experiences()->find( $id );

        $request_array = $request->all();
        $experience->update( $request_array );

        $response = [
            'message' =>  $experience->degree_name . ' was updated!',
            'experience' => $experience
        ];
        return response()->json( $response);
    }

    public function destroy($id) {
        $user = Auth::user();

        /* Permission */
        //$check_permission = $this->checkPermission( $user, 'delete' );
        //if($check_permission) { return $check_permission; }

        $experience = $user->experiences()->find( $id );
        $experience->delete();

        $response = [
            'message' =>  $experience->degree_name . ' was deleted!',
            'experience' => $experience
        ];

        return response()->json( $response );
    }
}
