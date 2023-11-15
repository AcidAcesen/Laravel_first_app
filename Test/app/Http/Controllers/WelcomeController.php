<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
    /*
    public function dashboard()
    {
        return view('dashboard');
    }
    */
    //C
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|string|max:255',
    ]);

    Person::create(['name' => $request->name]);

    return redirect()->route('dashboard')->with('success', 'Person added successfully!');
    }
    //R
    public function dashboard()
    {
        $people = Person::all();

        return view('dashboard', ['people' => $people]);
    }
    //U
    public function edit($id)
    {
        $person = Person::find($id);
        return view('edit', ['person' => $person]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $person = Person::find($id);
        $person->update(['name' => $request->name]);

        return redirect()->route('dashboard')->with('success', 'Person updated successfully!');
    }
    //D
    public function destroy($id)
    {
        $person = Person::find($id);
        $person->delete();

        return redirect()->route('dashboard')->with('success', 'Person deleted successfully!');
    }
}
