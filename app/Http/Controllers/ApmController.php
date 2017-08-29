<?php

namespace Pastillero\Http\Controllers;

use Illuminate\Http\Request;
use Pastillero\Http\Requests\ApmCreateRequest;
use Pastillero\Http\Requests\ApmUpdateRequest;
use Pastillero\Apm;
use Session;
use Redirect;
use Auth;
use Illuminate\Routing\Route;

class ApmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apms = Apm::paginate(10);
        return view('apm.index', compact('apms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apm = new Apm;
        return view('apm.create', compact('apm'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApmCreateRequest $request)
    {
        $request['organization_id'] = Auth::user()->organization_id;

        Apm::create($request->all());

        Session::flash('message','APM creado correctamente');
        return Redirect::to('/apm');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
