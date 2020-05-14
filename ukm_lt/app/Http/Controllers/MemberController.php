<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index()
    {
    	// mengambil data dari table member
    	$member = DB::table('member')->get();
 
    	// mengirim data member ke view index
    	return view('index',['member' => $member]);
 
    }

    // method untuk menampilkan view form tambah member
    public function tambah()
    {
        // memanggil view tambah
        return view('tambah');
    }

    // method untuk insert data ke table member
    public function store(Request $request)
    {
        // insert data ke table member
        DB::table('member')->insert([
            'member_nama' => $request->nama,
            'member_tpt_lahir' => $request->tpt_lahir,
            'member_tggl_lahir' => $request->tggl_lahir,
            'member_jenis_kelamin' => $request->jenis_kelamin,
            'member_dept' => $request->dept,
            'member_fak' => $request->fak,
            'member_angktn' => $request->angktn,
            'member_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman member
        return redirect('/member');
    }

    // method untuk edit data member
    public function edit($id)
    {
        // mengambil data member berdasarkan id yang dipilih
        $member = DB::table('member')->where('member_id',$id)->get();
        // passing data member yang didapat ke view edit.blade.php
        return view('edit',['member' => $member]);
    }

    // method untuk update data member
    public function update(Request $request)
    {
        // update data member
        DB::table('member')->where('member_id',$request->id)->update([
            'member_nama' => $request->nama,
            'member_tpt_lahir' => $request->tpt_lahir,
            'member_tggl_lahir' => $request->tggl_lahir,
            'member_jenis_kelamin' => $request->jenis_kelamin,
            'member_dept' => $request->dept,
            'member_fak' => $request->fak,
            'member_angktn' => $request->angktn,
            'member_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman member
        return redirect('/member');
    }

    // method untuk hapus data member
    public function hapus($id)
    {
        // menghapus data member berdasarkan id yang dipilih
        DB::table('member')->where('member_id',$id)->delete();
            
        // alihkan halaman ke halaman member
        return redirect('/member');
    }
}
