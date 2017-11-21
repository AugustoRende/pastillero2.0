<?php

namespace Pastillero\Http\Controllers;

use Illuminate\Http\Request;
use Pastillero\Http\Requests\PatientCreateRequest;
use Pastillero\Http\Requests\PatientUpdateRequest;
use Pastillero\Patient;
use Session;
use Redirect;
use Auth;
use Illuminate\Routing\Route;

class PatientController extends Controller
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
        $patients = Patient::paginate(10);
        return view('patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Auth::user()->organization->doctors;
        $patient = new Patient;
        return view('patient.create', compact('patient'), compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientCreateRequest $request)
    {
        $request['organization_id'] = Auth::user()->organization_id;
        //ARE 20/11/2017 - Encriptación de la password
        $request['password'] = app('hash')->make($request->input('password'));
        $request['email'] = $request['username'];

        Patient::create($request->all());

        Session::flash('message','Paciente creado correctamente');
        return Redirect::to('/patient');    
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
        $patient = Patient::find($id);
        $doctors = Auth::user()->organization->doctors;
        return view('patient.edit',['patient'=>$patient, 'doctors'=>$doctors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatientUpdateRequest $request, $id)
    {
        $patient = Patient::find($id);

        //ARE 20/11/2017 - Encriptación de la password
        $request['password'] = app('hash')->make($request->input('password'));
        $request['email'] = $request['username'];

        $patient->fill($request->all());
        $patient->save();

        Session::flash('message','Paciente Actualizado correctamente');
        return Redirect::to('/patient');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        Session::flash('message','Paciente Eliminado correctamente');
        return Redirect::to('/patient');
    }
}
