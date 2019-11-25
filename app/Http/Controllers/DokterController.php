<?php

namespace App\Http\Controllers;

use App\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{

    public function registerPage(){
        return view('auth.registerdokter');
    }

    public function register(Request $req){
        $cek = \App\User::where('email','=',$req->email)->first();
    	if(!empty($cek)){
    		return redirect()->back()->with('gagal','Email telah digunakan');
    	}else{
    		if ($req->password == $req->password2) {
		    	\App\User::create([
		    		'role' => 'dokter',
		    		'name' => $req->name,
		    		'email' => $req->email,
		    		'password' => bcrypt($req->password2),
		    	]);	
    		}else{
        		return redirect()->back()->with('gagal','Password tidak sesuai');
    		}
    		return redirect('/login');
    	}
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokter $dokter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokter $dokter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokter $dokter)
    {
        //
    }
}
