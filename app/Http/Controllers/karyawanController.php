<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;

class karyawanController extends Controller
{
    public function main(){
        $karyawans = karyawan::all();
        return view('chipchap.main', compact('karyawans')); //nama file di view
    }

    public function add(){
        return view('chipchap.add'); //nama file di view
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|min:5|max:20',
            'umur' => 'required|integer|min:21',
            'alamat' => 'required|string|min:10|max:40',
            'telp' => 'required|string|min:9|max:12|regex:/^08[0-9]{7,10}$/'
        ]);

        $newData = karyawan::create($data); //membuat data dari $data

        //redirect setelah add data
        return redirect(route('karyawan.main'))->with('success','Berhasil menambahkan data karyawan');;
    }

    public function edit(karyawan $karyawan){
        return view('chipchap.edit', compact('karyawan'));
    }

    public function update(karyawan $karyawan, Request $request){
        $data = $request->validate([
            'name' => 'required|string|min:5|max:20',
            'umur' => 'required|integer|min:21',
            'alamat' => 'required|string|min:10|max:40',
            'telp' => 'required|string|min:9|max:12|regex:/^08[0-9]{7,10}$/'
        ]);      

        $karyawan->update($data);

        return redirect(route('karyawan.main'))->with('success','Berhasil memmperbaharui data karyawan');
    }

    public function delete(karyawan $karyawan){
        $karyawan->delete();
        return redirect(route('karyawan.main'))->with('success','Berhasil menghapus data karyawan');
    }

}
