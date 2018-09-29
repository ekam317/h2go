<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Project\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Validation
    **/
    protected function validator(Request $request) {
        $validator = Validator::make( $request->all(), [
            'gender' => 'required',
            'date_of_birth' => 'required',
            'picture_path' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'postal' => 'required',
            'title' => 'required',
            'cellphone_number' => 'required',
            'nationality' => 'required',
            'about' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json( [ 'errors' => $validator->errors() ]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Profile Index";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $request Validitaion */
        $validator = $this->validator($request);
        if($validator) { return $validator; }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id) {
            //return 'user - ' . $id;
        }

        return $this->auth()->user();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
