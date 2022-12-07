<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CounterController extends Controller
{
    public function index()
    {
        $counter=Country::first();
        return view('admin.pages.counter.index',compact('counter'));
    }

    public function update(Request $request ,$id)
    {
        $counter=Country::findOrFail($id);
        $data = $request->all();
        $counter->update($data);
        toastr()->success('updated counter  information.');
        return redirect()->route('counter.index');
    }   
}
