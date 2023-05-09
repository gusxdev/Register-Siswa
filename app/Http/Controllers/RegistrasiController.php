<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class RegistrasiController extends Controller
{
    public $registrasi;
    // Membuat objek baru dari kelas Mahasiswa
    public function __construct()
    {
       $this->registrasi = new Registrasi;
    }
    public function main()
    {
        return view('registrasi.main');
    }
    public function index(Request $request)
    {
        $cari = $request->search;
        $index = DB::table('registrasi')
                ->where('nama', 'LIKE', "%$cari%")
                ->orWhere('asal_sekolah', 'LIKE', "%$cari%")
                ->get();
        // $index = Registrasi::all();
        return view('registrasi.index', compact('index'));
        
    }

    public function export ()
    {
        $index = Registrasi::all();
        $pdf = Pdf::loadView('pdf.export-data', ['index' => $index]);
        return $pdf->download('export-data-'.Carbon::now()->timestamp.'.pdf');  
    }

    public function registrasi()
    {
        return view('registrasi.create');
    }


    public function simpan(Request $request)
    {
        //fungsi untuk menyimpan data baru customer
        $rules = [
            'nama'              => 'required',
            'asal_sekolah'      => 'required',
            'jurusan'           => 'required',
            'alamat'            => 'required',
            'jk'                => 'required',
            'agama'             => 'required',
        ];
 
        $messages = [
            'required'      => ":attribute gak boleh kosong",
        ];
 
        $this->validate($request, $rules, $messages);
 
        $no_reg = "R-".rand(100, 999);

        $this->registrasi->nama = $request->nama;
        $this->registrasi->asal_sekolah = $request->asal_sekolah;
        $this->registrasi->jurusan = $request->jurusan;
        $this->registrasi->jk = $request->jk;
        $this->registrasi->agama = $request->agama;
        $this->registrasi->alamat = $request->alamat;
        $this->registrasi->no_reg = $no_reg;
 
        $this->registrasi->save();
 

        return redirect()->route('registrasi.main')->with('success', 'Data registrasi berhasil ditambahkan');
    }


    public function show(Registrasi $registrasi)
    {
        //
    }

    public function edit($id)
    {
        $edit = Registrasi::findOrFail($id);
        return view('registrasi.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = Registrasi::findOrFail($id);

        if ($update->nama == $request->nama && $update->jurusan == $request->jurusan
        && $update->alamat == $request->alamat && $update->jurusan == $request->jurusan
        && $update->asal_sekolah == $request->asal_sekolah && $update->jk == $request->jk
        && $update->no_reg == $request->no_reg
        ) {
            return redirect()->route('registrasi.index');
        } else{
            $rules = [
                'nama'              => 'required',
                'asal_sekolah'      => 'required',
                'jurusan'           => 'required',
                'alamat'            => 'required',
                'jk'                => 'required',
                'agama'             => 'required',
                'no_reg'             => 'required',
            ];
            $messages = [
                'required'      => ":attribute gak boleh kosong",
            ];
     
            $this->validate($request, $rules, $messages);
     
            $this->registrasi->nama = $request->nama;
            $this->registrasi->asal_sekolah = $request->asal_sekolah;
            $this->registrasi->jurusan = $request->jurusan;
            $this->registrasi->jk = $request->jk;
            $this->registrasi->agama = $request->agama;
            $this->registrasi->alamat = $request->alamat;
            $this->registrasi->no_reg = $request->no_reg;
    
        }
        // simpan data menggunakan method save()
        $update->nama = $request->nama;
        $update->asal_sekolah = $request->asal_sekolah;
        $update->jurusan = $request->jurusan;
        $update->jk = $request->jk;
        $update->agama = $request->agama;
        $update->alamat = $request->alamat;
        $update->no_reg = $request->no_reg;
        $update->save();
 
        // redirect halaman serta kirimkan pesan berhasil
        return redirect()->route('registrasi.index')->with('success', 'Data registrasi berhasil diubah');
    }

    public function delete($id)
    {
        $destroy = Registrasi::findOrFail($id);

        $destroy->delete();
        return redirect()->route('registrasi.index')->with('success', 'Data registrasi berhasil dihapus');
    }
}
