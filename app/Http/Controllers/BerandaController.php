<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('HalamanDepan.beranda');
    }

    public function halamansatu()
    {
        //halaman satu
        return view ('Halaman.halaman-satu');
    }

    public function halamandua()
    {
        //halaman dua
        return view ('Halaman.halaman-dua');
    }

    public function registrasi()
    {
        //halaman dua
        return view ('Registrasi.regis');
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
        
       // dd($request);
        $akun =  new User;
        $akun->name = $request->name;
        $akun->level = $request->level;
        $akun->email = $request->email;
        $akun->password = bcrypt($request->password);
        
              

        $akun->save();
        

        // // setelah data disimpan, kembalikan lagi ke view
         return redirect('login')->with(['success' => 'Berhasil Buat Akun, Silahkan Login']);

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
