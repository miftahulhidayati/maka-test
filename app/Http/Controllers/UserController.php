<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(Request $request){
        $query = User::query();

        // Search by name
        if ($request->has('name') && $request->name) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        // Search by address
        if ($request->has('address') && $request->address) {
            $query->where('address', 'like', '%' . $request->address . '%');
        }

        $users = $query->paginate(10);

        return response()->json([
            'message' => 'Success',
            'data' => $users,
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'address' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'image','max:2048']
        ]);

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('users', 'public');
        }

        $user = User::query()->create($data);
        return response()->json([
            'message' => 'Created',
            'data' => $user,
        ], 201);
    }
    public function update(Request $request, User $user){
        $data = $request->validate([
            'name' => ['sometimes', 'required', 'string', 'max:100'],
            'address' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'image'],
        ]);

        if($request->hasFile('image')){
            if($user->image){
                Storage::disk('public')->delete($user->image);
            }
            $data['image'] = $request->file('image')->store('users', 'public');
        }
        $user->update($data);

        return response()->json([
            'message' => 'Updated',
            'data' => $user,
        ]);
    }

    public function show(User $user){
        return response()->json([
            'message' => 'Success',
            'data' => $user,
        ]);
    }

    public function destroy(User $user){
        if($user->image){
            Storage::disk('public')->delete($user->image);
        }

        $user->delete();

        return response()->json([
            'message' => 'Deleted',
        ]);
    }
}
