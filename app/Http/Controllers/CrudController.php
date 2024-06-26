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
        return redirect('reg/show');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $registration = Registration::all();
        $data = compact('registration');
        return view('display')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $registration = Registration::find($id);
        if(is_null($registration))
        {
            return redirect('reg/show');
        }
        else
        {
            $url = url('reg/').$id.'/edit';
            $data = compact('url','registration');
            return view('update')->with($data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $registration = Registration::find($id);
        $registration->uname=$request['uname'];
        $registration->email=$request['email'];
        $registration->gender=$request['gender'];
        $registration->address=$request['address'];
        $registration->city=$request['city'];
        $registration->state=$request['state'];
        $registration->dob=$request['dob'];
        $registration->phone=$request['phone'];
        $registration->save();
        return redirect('reg/show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $registration = Registration::find($id);
        $registration->delete();
        return redirect('reg/show');
    }
   
}
