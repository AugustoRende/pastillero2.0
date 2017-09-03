<?php

namespace Pastillero\Http\Controllers;

use Illuminate\Http\Request;
use Pastillero\Http\Requests\DoctorCreateRequest;
use Pastillero\Http\Requests\DoctorUpdateRequest;
use Pastillero\Doctor;
use Session;
use Redirect;
use Auth;
use Illuminate\Routing\Route;


class DoctorController extends Controller
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
        $doctors = Doctor::paginate(10);
        return view('doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor = new Doctor;
        $apms = Auth::user()->organization->apms;
        return view('doctor.create', compact('doctor'), compact('apms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorCreateRequest $request)
    {
        $request['organization_id'] = Auth::user()->organization_id;

        Doctor::create($request->all());

        Session::flash('message','Médico creado correctamente');
        return Redirect::to('/doctor');    
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
        $doctor = Doctor::find($id);
        $apms = Auth::user()->organization->apms;
        return view('doctor.edit',['doctor'=>$doctor, 'apms'=>$apms]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DoctorUpdateRequest $request, $id)
    {
        $doctor = Doctor::find($id);
        $doctor->fill($request->all());
        $doctor->save();

        Session::flash('message','Médico Actualizado correctamente');
        return Redirect::to('/doctor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        Session::flash('message','Médico Eliminado correctamente');
        return Redirect::to('/doctor');
    }
}
