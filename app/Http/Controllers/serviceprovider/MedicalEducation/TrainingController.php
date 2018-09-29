<?php

namespace App\Http\Controllers\ServiceProvider\MedicalEducation;

use App\Model\ServiceProvider\MedicalEducation\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
{
    public $training_type = [ 'residency', 'preliminary' ];

    /**
     * Validation
    **/
    protected function validator(Request $request) {
        $validator = Validator::make( $request->all(), [
            'program_type' => 'required|in:' . implode(',', $this->training_type),
            'health_institution_name' => 'required',
			'number_of_year' => 'required',
            'issuing_country' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json( [ 'errors' => $validator->errors() ]);
        }
    }

    protected function checkPermission( $user, $role ) {
        $model = str_slug('trainings','-');
        if($user->permissions()->where('name','=', $role . '-' . $model)->first() == null) {
            return response([
                'message' => 'Un-authorized'
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

        $per_page = ($request->query('per_page')) ? $request->query('per_page') : 25 ;
        $limit = ($request->query('limit')) ? $request->query('limit') : 100 ;
        $query = '%'.$request->query('query').'%';

        $tranings = Training::where('health_institution_name', 'like', $query)
        				->orderBy('created_at', 'desc')
                        ->paginate( $per_page )->withPath('');

        $response = [
            'message' => 'List of Tranings',
            'tranings' => $tranings
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
        $training = new Training( $request_array );
        $training->status = 'update';
        $user->trainings()->save( $training );

        $response = [
            'message' =>  'Training in ' . $training->health_institution_name . ' was added!',
            'training' => $training,
        ];

        return response()->json( $response);
    }

    public function show($id)
    {
        $user = Auth::user();

        /* Permission */
        //$check_permission = $this->checkPermission( $user, 'view' );
        //if($check_permission) { return $check_permission; }

        $training = $user->trainings()->find( $id );

        $response = [
            'training' => $training
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

        $training = $user->trainings()->find( $id );

        $request_array = $request->all();
        $training->update( $request_array );

        $response = [
            'message' =>  'Training in ' . $training->health_institution_name . ' was updated!',
            'training' => $training
        ];
        return response()->json( $response);
    }

    public function destroy($id) {
        $user = Auth::user();

        /* Permission */
        //$check_permission = $this->checkPermission( $user, 'delete' );
        //if($check_permission) { return $check_permission; }

        $training = $user->trainings()->find( $id );
        $training->delete();

        $response = [
            'message' =>  'Training in ' . $training->health_institution_name . ' was deleted!',
            'training' => $training
        ];
        return response()->json( $response);
    }
}
