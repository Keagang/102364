<?php

namespace App\Http\Controllers;

use App\Fees;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Requests\FeesStoreRequest;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('102364.totalfees')->with('fees', Fees::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('102364.fees');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeesStoreRequest $req)
    {
        $validated = $req->validated();
        Fees::create($validated);
        return back()->with('fee-status', 'Fee has been registered!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studentfees = Student::findOrFail($id);
        // dd($studentfees->fees->count());
        return view('102364.specificfee')->with('students',$studentfees);
    }

   
}
