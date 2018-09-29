<?php

namespace App\Http\Controllers;

use App\Country;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('degrees','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            

            return view('serviceprovider/profile.user', compact('degrees','mydegrees'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('degrees','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('serviceprovider/degrees.degrees.create');
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
       
        $model = str_slug('degrees','-');
        
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            
            
          
            $this->validate($request, ['health_institution_name' => 'required','issuing_country' => 'required','medical_education_level' => 'required','degree_name' => 'required','attachements' => 'required']);
            
            $request->request->add(['user_id' => auth()->user()->id]);
            $requestData = $request->all();
            
           $result = Degree::create($requestData);
            
           return redirect('serviceprovider/degrees')->with('flash_message', 'Degree added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('degrees','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $degree = Degree::findOrFail($id);
            return view('serviceprovider/degrees.degrees.show', compact('degree'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('degrees','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $degree = Degree::findOrFail($id);
            return view('serviceprovider/degrees.degrees.edit', compact('degree'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('degrees','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'health_institution_name' => 'required',
			'issuing_country' => 'required',
			'attachements' => 'required'
		]);
            $requestData = $request->all();
            
            $degree = Degree::findOrFail($id);
             $degree->update($requestData);

             return redirect('serviceprovider/degrees')->with('flash_message', 'Degree updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('degrees','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Degree::destroy($id);

            return redirect('serviceprovider/degrees')->with('flash_message', 'Degree deleted!');
        }
        return response(view('403'), 403);

    }
   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function identityinformation()
    {
        $model = str_slug('degrees','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            

            return view('serviceprovider/profile.identityinformation');
        }
        return response(view('403'), 403);

    }


    /*
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    *
    * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    */
    public function saudi()
    {
        $model = str_slug('degrees','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            

            return view('serviceprovider/profile.saudi');
        }
        return response(view('403'), 403);

    }
    

    /*
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    *
    * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    */
    public function academicteaching()
    {
        $model = str_slug('degrees','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            

            return view('serviceprovider/profile.academicteaching');
        }
        return response(view('403'), 403);

    }


    /*
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    *
    * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    */
    public function paymenttransaction()
    {
        $model = str_slug('degrees','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            

            return view('serviceprovider/profile.paymenttransaction');
        }
        return response(view('403'), 403);

    }


    /*
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    *
    * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    */
    public function paymentmethods()
    {
        $model = str_slug('degrees','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            

            return view('serviceprovider/profile.paymentmethods');
        }
        return response(view('403'), 403);


    }

    /*
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    *
    * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    */
    public function urgentrequest1()
    {
        $model = str_slug('degrees','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            

            return view('serviceprovider/profile.urgentrequest1');
        }
        return response(view('403'), 403);

    }

}
