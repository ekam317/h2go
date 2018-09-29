<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Training;
use Illuminate\Http\Request;

class TrainingsController extends Controller
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
        $model = str_slug('trainings','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $trainings = Training::where('country', 'LIKE', "%$keyword%")
                ->orWhere('year', 'LIKE', "%$keyword%")
                ->orWhere('attachment', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('program_type', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $trainings = Training::paginate($perPage);
            }

            return view('trainings.trainings.index', compact('trainings'));
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
        $model = str_slug('trainings','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('trainings.trainings.create');
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
        $model = str_slug('trainings','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'country' => 'required',
			'year' => 'required',
			'status' => 'required',
			'user_id' => 'required',
			'program_type' => 'required'
		]);
            $requestData = $request->all();
            
            Training::create($requestData);
            return redirect('serviceprovider/trainings')->with('flash_message', 'Training added!');
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
        $model = str_slug('trainings','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $training = Training::findOrFail($id);
            return view('trainings.trainings.show', compact('training'));
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
        $model = str_slug('trainings','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $training = Training::findOrFail($id);
            return view('trainings.trainings.edit', compact('training'));
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
        $model = str_slug('trainings','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'country' => 'required',
			'year' => 'required',
			'status' => 'required',
			'user_id' => 'required',
			'program_type' => 'required'
		]);
            $requestData = $request->all();
            
            $training = Training::findOrFail($id);
             $training->update($requestData);

             return redirect('serviceprovider/trainings')->with('flash_message', 'Training updated!');
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
        $model = str_slug('trainings','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Training::destroy($id);

            return redirect('serviceprovider/trainings')->with('flash_message', 'Training deleted!');
        }
        return response(view('403'), 403);

    }
}
