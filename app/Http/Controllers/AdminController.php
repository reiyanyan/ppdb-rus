<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function daftarkan_siswa(){
        return view('student.daftar');
    }

    public function generate_token(){
        return view('admin.penerima_pendaftaran.generate_token');
    }

    public function cetak_kartu(){
        return view('admin.penerima_pendaftaran.cetak_kartu');
    }

    public function pengaturan_dashboard(){
        return view('admin.pengaturan_dashboard.index');
    }

    public function peruntukan(){
        return view('admin.pengaturan_ppdb.peruntukan');
    }

    public function kustom_pertanyaan(){
        return view('admin.pengaturan_ppdb.kustom_pertanyaan');
    }

    public function pembobotan_nilai(){
        return view('admin.pengaturan_ppdb.pembobotan.nilai');
    }

    public function pembobotan_zona(){
        return view('admin.pengaturan_ppdb.pembobotan.zona');
    }

    public function pembobotan_kuota(){
        return view('admin.pengaturan_ppdb.pembobotan.kuota');
    }

    public function pembobotan_akademik(){
        return view('admin.pengaturan_ppdb.pembobotan.akademik');
    }

    public function pembobotan_non_akademik(){
        return view('admin.pengaturan_ppdb.pembobotan.non_akademik');
    }

    public function verifikasi_data(){
        return view('admin.verifikasi_data.index');
    }

    public function zonasi_formulasi(){
        return view('admin.analisis_data.zonasi.formulasi');
    }

    public function zonasi_approvement(){
        return view('admin.analisis_data.zonasi.approvement');
    }

    public function non_zonasi_formulasi(){
        return view('admin.analisis_data.non_zonasi.formulasi');
    }

    public function non_zonasi_approvement(){
        return view('admin.analisis_data.non_zonasi.approvement');
    }

    public function hasil_data(){
        return view('admin.hasil_data.index');
    }
}
