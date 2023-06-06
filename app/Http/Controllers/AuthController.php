<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function displayLogin()
    {
        //

        return view('/pages/login');
    }

    public function displayRegister()
    {

        return view('/pages/register');
    }

    public function displayDashboard()
    {

        return view('/pages/dashboard');
    }

    public function register(Request $request)
    {
        //
        // return redirect()->back()->with('success', 'Form submitted successfully!');
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'
            // Add validation rules for other fields
        ]);

        // Create a new instance of the model
        $model = new User(); // Replace 'YourModel' with the actual model name

        // Assign form data to model attributes
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

    public function login(Request $request)
    {
        
        //
        // return redirect()->back()->with('success', 'Form submitted successfully!');
        // Validate the form data
        
        $credentials = $request->validate   ([
            'email' => 'required',
            'password' => 'required'
            // Add validation rules for other fields
        ]);

        // Create a new instance of the model
        $model = new User(); // Replace 'YourModel' with the actual model name

        // Assign form data to model attributes
        $model->email = $credentials['email'];
        $model->password = $credentials['password'];
        
        // Assign other form data to respective model attributes

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->withInput()->withErrors([
            'email' => 'Invalid email or password.',
        ]);

    }
    
}
