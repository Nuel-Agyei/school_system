<?php

namespace App\Http\Controllers;

use App\Http\Requests\schoolRequest;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{

    public function index()
    {
        $school=School::all();
        // dd($school);
        return view('school.index', [
            'school' => $school
        ] );
    }
    public function create()
    {
        return view('school.create');
    }
    public function store(schoolRequest $request)
    {
        School::create([
            'name'=>$request->name,
            'class'=>$request->class,
            'course'=>$request->course,
            'is_added'=>0

        ]);

        $request->session()->flash('alert--success','Registered Successfully!' );
        return redirect()->route('school.index');
    }
    public function delete(Request $request)
{
    $school = School::find($request->school_id);
    if (!$school) {
        request()->session()->flash('error', 'Unable to locate');
        return to_route('school.index')->withErrors([
            'error' => 'Unable to locate'
        ]);
}
  $school->delete();
  $request->session()->flash('alert-info', 'Todo deleted successfully!');
  return to_route('school.index');
}

}
