<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','name','nim','noanggota','notelpon','email','password','role','status'
    ];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtUser = User::all();
        return view ('data-user',compact('dtUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create-data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    protected function validator(array $nilai)
    {
        return Validator::make($nilai, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    public function store(Request $nilai)
    {
        User::create([
            'name' => $nilai['name'],
            'nim' => $nilai ['nim'],
            'noanggota' => $nilai ['noanggota'],
            'email' => $nilai['email'],
            'password' => Hash::make($nilai['password']),
            'notelpon' => $nilai ['notelpon'],
            'role' => $nilai ['role'],
            'status' => $nilai ['status']
        ]);
        return redirect ('data')->with('toast_success','Data Telah Diinputkan!');
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
         $us = User::where('id','=', $id)->first();
        // dd($us);
        return view('edit-data',compact('us'));
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
        $us = User::findorfail($id);
        $us->update($request->all());
        return redirect ('data')->with('toast_success','Data Telah Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $us = User::findorfail($id);
        $us->delete();
        return back()->with('info','Data Telah Dihapus!');;
        // redirect ('data')->with('toast_success','Data Telah Di Ubah!');
    }
}
