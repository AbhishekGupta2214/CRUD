<?php

namespace App\Http\Controllers;


use App\Models\Registration;
use Illuminate\Http\Request;
// use Illuminate\Database\Eloquent\SoftDeletes;


class TrashController extends Controller
{
    //
    public function trash()
    {
        $registration = Registration::onlyTrashed()->get();
        $data = compact('registration');
        return view('trash')->with($data);
    }
    public function restore($id)
    {
        $registration = Registration::withTrashed()->find($id);
        if(!is_null($registration))
        {
            $registration->restore();
        }
        return  redirect('reg/show');
    }
    public function fDelete($id)
    {
        $registration = Registration::withTrashed()->find($id);
        if(!is_null($registration))
        {
            $registration->forceDelete();
        }
        return  redirect('trash');
    }
}
