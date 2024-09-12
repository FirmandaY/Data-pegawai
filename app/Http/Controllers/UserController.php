<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = User::all();
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $addresses = City::select('city_name')->get();
        return view('employee.create', compact('addresses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validate = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'address' => 'required',
            'position' => 'required',
            'start_date' => 'required',
            'photo' => 'image|mimes:.jpg,png|max:2048',
        ]);

        // Create a new post and save it to the database
        $employee = new User();
        $employee->name = $validate['name'];
        $employee->email = $validate['email'];
        $employee->address = $validate['address'];
        $employee->position = $validate['position'];
        $employee->start_date = $validate['start_date'];
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $employee->photo = $filename;
        }
        
        $employee->save();

        // Redirect or return a success message
        return redirect()->route('employee.index')->with('success', 'Employee created successfully!');
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
