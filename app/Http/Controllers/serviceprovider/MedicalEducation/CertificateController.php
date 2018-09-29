<?php

namespace App\Http\Controllers\ServiceProvider\MedicalEducation;

use App\Model\ServiceProvider\MedicalEducation\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CertificateController extends Controller
{
    public $issuing_country = [
	    'saudi', 'american', 'canadian',
	    'british', 'german', 'australian,',
	    'arab', 'jordanian', 'pakistani',
	    'french','ireland'
    ];

    /**
     * Validation
    **/
    protected function validator(Request $request) {
        $validator = Validator::make( $request->all(), [
            'issuing_country' => 'required|in:' . implode(',', $this->issuing_country),
            'program_title' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json( [ 'errors' => $validator->errors() ]);
        }
    }

    protected function checkPermission( $user, $role ) {
        $model = str_slug('certificates','-');
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

        $certificates = Certificate::where('program_title', 'like', $query)
        				->orderBy('created_at', 'desc')
                        ->paginate( $per_page )->withPath('');

        $response = [
            'message' => 'List of Certificates',
            'certificates' => $certificates
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
        $certificate = new Certificate( $request_array );
        $certificate->status = 'update';
        $user->certificates()->save( $certificate );

        $response = [
            'message' =>  'Certificate in ' . $certificate->program_title . ' was added!',
            'certificate' => $certificate,
        ];

        return response()->json( $response);
    }

    public function show($id)
    {
        $user = Auth::user();

        /* Permission */
        //$check_permission = $this->checkPermission( $user, 'view' );
        //if($check_permission) { return $check_permission; }

        $certificate = $user->certificates()->find( $id );

        $response = [
            'certificate' => $certificate
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

        $certificate = $user->certificates()->find( $id );

        $request_array = $request->all();
        $certificate->update( $request_array );

        $response = [
            'message' =>  'Certificate in ' . $certificate->program_title . ' was updated!',
            'certificate' => $certificate
        ];
        return response()->json( $response);
    }

    public function destroy($id) {
        $user = Auth::user();

        /* Permission */
        //$check_permission = $this->checkPermission( $user, 'delete' );
        //if($check_permission) { return $check_permission; }

        $certificate = $user->certificates()->find( $id );
        $certificate->delete();

        $response = [
            'message' =>  'Certificate in ' . $certificate->program_title . ' was deleted!',
            'certificate' => $certificate
        ];
        return response()->json( $response);
    }
}