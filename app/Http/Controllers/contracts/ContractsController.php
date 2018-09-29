<?php

namespace App\Http\Controllers\contracts;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contract;
use Illuminate\Http\Request;

class ContractsController extends Controller
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
        $model = str_slug('contracts','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $contracts = Contract::where('category_id', 'LIKE', "%$keyword%")
                ->orWhere('speciality_id', 'LIKE', "%$keyword%")
                ->orWhere('request_date', 'LIKE', "%$keyword%")
                ->orWhere('summary', 'LIKE', "%$keyword%")
                ->orWhere('totaltime', 'LIKE', "%$keyword%")
                ->orWhere('cost', 'LIKE', "%$keyword%")
                ->orWhere('currency', 'LIKE', "%$keyword%")
                ->orWhere('totalcost', 'LIKE', "%$keyword%")
                ->orWhere('request_type', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('hit_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $contracts = Contract::paginate($perPage);
            }

            return view('serviceprovider.contracts.index', compact('contracts'));
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
        $model = str_slug('contracts','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('serviceprovider.contracts.create');
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
        $model = str_slug('contracts','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'category_id' => 'required',
			'speciality_id' => 'required',
			'request_date' => 'required',
			'summary' => 'required',
			'cost' => 'required',
			'currency' => 'required',
			'totalcost' => 'required',
			'request_type' => 'required',
			'status' => 'required',
			'hit_id' => 'required'
		]);
            $requestData = $request->all();
            
            Contract::create($requestData);
            return redirect('serviceprovider/contracts')->with('flash_message', 'Contract added!');
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
        $model = str_slug('contracts','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $contract = Contract::findOrFail($id);
            return view('serviceprovider.contracts.show', compact('contract'));
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
        $model = str_slug('contracts','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $contract = Contract::findOrFail($id);
            return view('serviceprovider.contracts.edit', compact('contract'));
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
        $model = str_slug('contracts','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'category_id' => 'required',
			'speciality_id' => 'required',
			'request_date' => 'required',
			'summary' => 'required',
			'cost' => 'required',
			'currency' => 'required',
			'totalcost' => 'required',
			'request_type' => 'required',
			'status' => 'required',
			'hit_id' => 'required'
		]);
            $requestData = $request->all();
            
            $contract = Contract::findOrFail($id);
             $contract->update($requestData);

             return redirect('serviceprovider/contracts')->with('flash_message', 'Contract updated!');
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
        $model = str_slug('contracts','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Contract::destroy($id);

            return redirect('serviceprovider/contracts')->with('flash_message', 'Contract deleted!');
        }
        return response(view('403'), 403);

    }

   public function viewContract()
    {
        return view('serviceprovider/contracts.form_pending');
    }
}
