<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admins = User::where('role_id','3')->where('id', '!=' ,auth()->user()->id)->get();
        return view('backend.pages.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.pages.admin.form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|max:255|unique:users',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|confirmed|max:255|min:5',
        ]);
        try {
            $user = new User();
            $user->name = $request->name;
            $user->user_name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role_id = Role::where('name','like','admin')->first()->id;
            $user->save();
            return redirect('admin/dashboard/admin')->with('message','Admin Created successfully!');
        } catch (\Exception $ex) {
            return redirect('admin/dashboard/admin')->with('error', $ex.'opps something went wrong please try again !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $admin = User::findOrFail($id);
        return view('backend.pages.admin.form', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required|max:255|unique:users,name,'.$id,
            'email' => 'required|max:255|unique:users,email,'.$id,
            'password' => 'nullable|confirmed|max:255|min:5',
        ]);
        try {
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            if (!is_null($request->password)) {
                $user->password = Hash::make($request->password);
            }    
            $user->role_id = Role::where('name','like','admin')->first()->id;
            $user->update();
            return redirect('admin/dashboard/admin')->with('message','Admin Updated successfully!');
        } catch (\Exception $ex) {
            return redirect('admin/dashboard/order')->with('error', $ex.'opps something went wrong please try again !');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::findOrFail($id);
        try {
            $user->delete();
            return redirect()->back()->with('message', 'Admin Deleted successfully!');

        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex.'opps Some Thing went wrong!');
        }
    }}
