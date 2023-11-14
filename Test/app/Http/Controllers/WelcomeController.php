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

    public function dashboard()
    {
        return view('dashboard');
    }

    //C
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|string|max:255',
    ]);

    Person::create(['name' => $request->name]);

    return redirect()->route('dashboard')->with('success', 'Person added successfully!');
    }
}
