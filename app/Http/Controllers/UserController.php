<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $active_menu = 'user';
        return view('/pages/user', compact('active_menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'
        ]);
        
        $model = new User(); 

        if ($request->hasFile('user_image')) {
            $file = $request->file('user_image');

            // Get the original file name
            $fileName = $file->getClientOriginalName();

            // Move the uploaded file to a desired storage location
            $file->move(public_path('uploads'), $fileName);

            // Optionally, you can store the file path in the database
            $filePath = 'uploads/' . $fileName;
            $model->user_image = $filePath;
        }



        $model->first_name = $validatedData['first_name'];
        $model->last_name = $validatedData['last_name'];
        $model->email = $validatedData['email'];
        $model->password = $validatedData['password'];
        // Assign other form data to respective model attributes

        // Save the model to the database
        $model->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Your are now registered!');
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
