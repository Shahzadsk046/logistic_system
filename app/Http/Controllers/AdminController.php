<?php

namespace App\Http\Controllers;

use App\Mail\DispatcherCredentials;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.dashboard');
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }

    public function createDispatcher(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        // After creating the dispatcher user and assigning the role
        $email = $request->email;
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        Mail::to($email)->send(new DispatcherCredentials($data));
        // Create the dispatcher user with the "dispatcher" role
        $dispatcher = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        $dispatcher->assignRole('dispatcher');


        // dd($data);

        // Send the email with the login credentials

        // Send login credentials via email (you'll need to create the email template)
        // Use Laravel's built-in Mail class to send the email here

        // Redirect back to the admin dashboard or another appropriate page
        return redirect()->route('admin.dashboard')->with('success', 'Dispatcher account created successfully.');
    }
    
}
