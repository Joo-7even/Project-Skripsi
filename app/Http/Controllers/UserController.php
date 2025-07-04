<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        if ($roles->isEmpty()) {
            // Make sure roles is not empty
            // Do something...
            $roles = [];  // or null, depending on your needs
        }
         return view('tables.usermanagemet', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'role' => 'required|exists:roles,name',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
            'password' => Hash::make('12345678'),
        ]);

        $user->assignRole($request->role);

        return redirect()->route('usermanagement.index')
            ->with('success', 'User created successfully');
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
    $user = User::findOrFail($id);
    $roles = Role::all();
    return view('tables.usermanagemet', compact('user', 'roles'));            

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // Validate the request
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $id,
                'phone' => 'required|string|max:20',
                'role' => 'required|exists:roles,name',
            ]);
    
            $user = User::findOrFail($id);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
    
            $user->syncRoles($request->role);

            return redirect()->route('usermanagement.index')
                ->with('success', 'User updated successfully');
    
            return response()->json([
                'success' => true,
                'message' => 'User berhasil diperbarui',
            ], 200);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating user: ' . $e->getMessage()
            ], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
