<?php

namespace App\Http\Controllers\Admin\Operator;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contents.Admin.operator.index', [
            'operator' => User::where('role_id', 1)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.Admin.operator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'fullname' => 'required',
            'password' => 'required|min:8',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'fullname' => $request->fullname,
            'role_id' => '1',
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('admin.operator.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('contents.Admin.operator.edit', [
            'operator' => User::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'fullname' => 'required',
            'password_baru' => 'nullable|min:8',
        ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'fullname' => $request->fullname,
            'role_id' => '1',
            'password' => $request->password_baru ? Hash::make($request->password_baru) : $user->password
        ]);
        return redirect()->route('admin.operator.index')->with('success', 'Data berhasil diubah!');
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
    }
}
