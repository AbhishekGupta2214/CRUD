<?php

namespace App\Http\Controllers;
use App\Models\Registration;
// use Illuminate\Support\Facades\Validate;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
        $registration = new Registration;
        $registration->uname=$request['uname'];
        $registration->email=$request['email'];
        $registration->password=md5($request['password']);
        $registration->gender=$request['gender'];
        $registration->address=$request['address'];
        $registration->city=$request['city'];
        $registration->state=$request['state'];
        $registration->dob=$request['dob'];
        $registration->phone=$request['phone'];
        $registration->save();
        return view('display');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
