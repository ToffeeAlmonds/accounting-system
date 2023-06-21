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

        return view('/pages/user/user', compact('active_menu'));
    }

    public function displayList()
    {
        $active_list = 'list';
        $active_sub_list = '';
        $users = User::all();

        return view('/pages/user/list', compact('active_list', 'users',));
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

            $fileName = $file->getClientOriginalName();

            $file->move(public_path('uploads'), $fileName);

            $filePath = 'uploads/' . $fileName;
            $model->user_image = $filePath;
        }

        $model->first_name = $validatedData['first_name'];
        $model->last_name = $validatedData['last_name'];
        $model->email = $validatedData['email'];
        $model->password = $validatedData['password'];

        $model->save();

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
        $user = User::find($id);
        print_r ($user);


        // Pass the retrieved record to the view
        // return view('/pages/user/list', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        print_r($id); exit;
        // $user = User::find($id);
        // $user->first_name = $request->input('first_name');
        // $user->last_name = $request->input('last_name');
        // $user->email = $request->input('email');
        // $user->password = $request->input('password');
        // // Update other fields as needed
        // $user->save();

        // return redirect()->back()->with('success', 'You edited the form succesfully!');
        // Redirect or return a response indicating success
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
