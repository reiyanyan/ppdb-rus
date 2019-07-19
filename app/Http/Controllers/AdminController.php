<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    var $role = array(
        1 => 'Siswa',
        2 => 'SuperSuper Admin',
        3 => 'Super Admin',
        4 => 'Admin',
        5 => 'Operator'
    );

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

    public function getAllUsers(){
        $users = User::where('role', '!=', 1)->paginate(20);
        $data = array();
        foreach($users as $user){
            $var['id'] = $user->id;
            $var['nip'] = $user->nip;
            $var['nama'] = $user->name;
            $var['email'] = $user->email;
            $var['handphone'] = $user->handphone;
            $var['status'] = $this->role[$user->role];
            $data[] = $var;
        }
        return response()->json([
            'success' => true,
            'current_page' => $users->currentPage(),
            'last_page' => $users->lastPage(),
            'data' => $data
        ]);
    }

    public function tambah_user(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nip = $request->nip;
        $user->role = $request->role;
        $user->handphone = $request->handphone;
        $user->alamat = $request->alamat;
        $user->password = bcrypt($request->password);
        $user->save();
        if($user->save()){
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false
            ]);
        }
    }

    public function info_user(Request $request){
        $user = User::where('id', $request->id)->first();
        $role = array(
            1 => 'Siswa',
            2 => 'SuperSuper Admin',
            3 => 'Super Admin',
            4 => 'Admin',
            5 => 'Operator'
        );
        return response()->json([
            'success' => true,
            'data' => array(
                'name' => $user->name,
                'email' => $user->email,
                'nip' => $user->nip,
                'status' => $role[$user->role],
                'handphone' => $user->handphone,
                'alamat' => $user->alamat
            )
        ]);
    }

    public function update_user(Request $request){
        $user = User::where('id', $request->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nip = $request->nip;
        $user->role = $request->role;
        $user->handphone = $request->handphone;
        $user->alamat = $request->alamat;
        $user->save();
        if($user->save()){
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false
            ]);
        }
    }

    public function hapus_user(Request $request){
        User::where('id', $request->id)->delete();
        return response()->json([
            'success' => true
        ]);
    }

    public function search_user(Request $request){
        $users = User::where('name', 'LIKE', '%'.$request->search.'%')->orWhere('email', 'LIKE','%'.$request->search.'%')->orWhere('handphone', 'LIKE', '%'.$request->search.'%')->get();        
        $data = array();
        foreach($users as $user){
            $var['id'] = $user->id;
            $var['nip'] = $user->nip;
            $var['nama'] = $user->name;
            $var['email'] = $user->email;
            $var['handphone'] = $user->handphone;
            $var['status'] = $this->role[$user->role];
            $data[] = $var;
        }
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

}
