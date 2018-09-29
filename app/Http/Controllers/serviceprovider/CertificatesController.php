<?php

namespace App\Http\Controllers\serviceprovider;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Certificate;
use Illuminate\Http\Request;

class CertificatesController extends Controller
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
        $model = str_slug('certificates','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $certificates = Certificate::where('board_type', 'LIKE', "%$keyword%")
                ->orWhere('title', 'LIKE', "%$keyword%")
                ->orWhere('country', 'LIKE', "%$keyword%")
                ->orWhere('attachment', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $certificates = Certificate::paginate($perPage);
            }

            return view('certificates.certificates.index', compact('certificates'));
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
        $model = str_slug('certificates','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('certificates.certificates.create');
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
        $model = str_slug('certificates','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'board_type' => 'required',
			'title' => 'required',
			'country' => 'required',
			'attachment' => 'required',
			'status' => 'required',
			'user_id' => 'required'
		]);
            $requestData = $request->all();

            Certificate::create($requestData);
            return redirect('serviceprovider/certificates')->with('flash_message', 'Certificate added!');
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
        $model = str_slug('certificates','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $certificate = Certificate::findOrFail($id);
            return view('certificates.certificates.show', compact('certificate'));
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
        $model = str_slug('certificates','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $certificate = Certificate::findOrFail($id);
            return view('certificates.certificates.edit', compact('certificate'));
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
        $model = str_slug('certificates','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'board_type' => 'required',
			'title' => 'required',
			'country' => 'required',
			'attachment' => 'required',
			'status' => 'required',
			'user_id' => 'required'
		]);
            $requestData = $request->all();

            $certificate = Certificate::findOrFail($id);
             $certificate->update($requestData);

             return redirect('serviceprovider/certificates')->with('flash_message', 'Certificate updated!');
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
        $model = str_slug('certificates','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Certificate::destroy($id);

            return redirect('serviceprovider/certificates')->with('flash_message', 'Certificate deleted!');
        }
        return response(view('403'), 403);

    }
}
