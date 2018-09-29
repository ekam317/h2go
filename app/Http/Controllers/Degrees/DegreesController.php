<?php

namespace App\Http\Controllers\Degrees;


use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Degree;

use Illuminate\Support\Facades\Storage;

class DegreesController extends Controller
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
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $degrees = Degree::where('health_institution_name', 'LIKE', "%$keyword%")
                ->orWhere('issuing_country', 'LIKE', "%$keyword%")
                ->orWhere('attachements', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $degrees = Degree::paginate($perPage);
            }
           $mydegrees = Degree::where("user_id",auth()->user()->id)->get();
            // $countryList = App\Country::lists('name', 'id')->all();
            // $selected = 71; //let it is the id of Bangladesh(my country) :)
            //Fetch All Degrees

            return view('serviceprovider/degrees.degrees.user', compact('degrees','mydegrees'));
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
            
            $this->validate($request, [
                'health_institution_name' => 'required',
                'issuing_country' => 'required',
                'medical_education_level' => 'required',
                'degree_name' => 'required'
                ]);

                
                
                $file = $request->file('documents');
                $path = $file->store('public/medical_degree');;
                
                $filename = $file->getClientOriginalName();
                
            $request->request->add(['user_id' => auth()->user()->id]);
            $request->request->add(['attachements' => $filename]);
            $request->request->add(['path' => $path]);
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
    }
