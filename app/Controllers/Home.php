<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\M_login;
use App\Models\M_model;


class Home extends BaseController
{
    protected function isLoggedIn()
    {
         return session()->has('id');
     }
    public function index()
    {
        if ($this->isLoggedIn()) {
            return redirect()->to('/dashboard/index');
        }
  
        echo view('login/view');

    }

    public function aksi_login()
    {
        $u=$this->request->getPost('username');
        $p=$this->request->getPost('password');

        // Tambahkan validasi jika field kosong
        if (empty($u) && empty($p)) {
            session()->setFlashdata('error', 'Username dan password tidak boleh kosong');
            return redirect()->to('/Home');
        }

        if (empty($u)) {
            session()->setFlashdata('error', 'Username tidak boleh kosong');
            return redirect()->to('/Home');
        }

        if (empty($p)) {
            session()->setFlashdata('error', 'Password tidak boleh kosong');
            return redirect()->to('/Home');
        }

        $model= new M_login();
        $data=array(
            'username'=>$u,
            'password'=>$p

        );
        $cek=$model->getLoginWithPassword('user', $u, $p);
        if ($cek !== null) {
            session()->set('level', $cek['level']);
            session()->set('id', $cek['id_user']);
            session()->set('username', $cek['username']);
            return redirect()->to('/dashboard/index');
        }else {
            // Tambahkan peringatan username atau password salah
            session()->setFlashdata('error', ' Username atau password Anda salah');
            return redirect()->to('/Home');
        }
    }

    public function log_out()
    {
        session()->destroy();
        return redirect()->to('/Home');
    }
    public function register()
    {
        
		echo view('login/register');
       
	
    }
    public function aksi_register()
{
    $a = $this->request->getPost('username');
    $b = $this->request->getPost('password');
    $c = $this->request->getPost('nama');
    
  
    $imageName = 'default.jpg';

    $simpan = array(
        'username' => $a,
        'password' =>md5($b),
        'nama' => $c,
        'foto' => $imageName
    );

    $model = new M_model();
    $model->simpan('user', $simpan);

    return redirect()->to('/dashboard');
}

public function user()
   { 
        $evan = new M_model();
        $data['okta'] = $evan->tampil('user');
        echo view('header');
        echo view('dashboard');
        echo view('user',$data);
        echo view('footer');
       
    }
    public function ortu()
   { 
        $evan = new M_model();
        $data['okta'] = $evan->tampil('ortu');
        echo view('header');
        echo view('dashboard');
        echo view('ortu',$data);
        echo view('footer');
       
    }

    //<-----------------------------------------------tabel anak------------------------------------->


    public function anak()
   { 
        $evan = new M_model();
        // $on=('ortu.id_anak=anak.id_ortu');
        // $data['okta'] = $evan->jo('anak','ortu',$on);
        $data['okta'] = $evan->tampil('anak');
        echo view('header');
        echo view('dashboard');
        echo view('anak',$data);
        echo view('footer');
       
    }
    public function clear_k($key){
    $level=session()->get('level');
    if ($level==1 ) {
        $raw = new M_model();
        $where = array('id_anak' => $key );
        $raw ->hapus('anak', $where);
        return redirect ()->to('Home/anak');
          }else{
              return redirect()->to('Home');
         }
    }

    public function tambah_a(){
    $level=session()->get('level');
    if ($level==1 || $level==4) {
        $evan = new M_model();
        $data['okta'] = $evan->tampil('anak');
        echo view('header');
        echo view('dashboard');
        echo view('t_anak',$data);
        echo view('footer');
        }else{
            return redirect()->to('Home');
        }
    } 
public function aksi_simpanA ()
    {
$level=session()->get('level');
if ($level==1 ) {
    $evan = new M_model();
    $a=$this->request->getPost('name'); 
    $ab=$this->request->getPost('kode');  
    $ad=$this->request->getPost('harga');
    $data=array(
        'namaanak'=>$a,
        'tgl_lahir'=>$ab,
        'usia'=>$ad
    );
    
    $evan->simpan('anak', $data);
    return redirect ()->to('/Home/anak');
    }
    else{
            return redirect()->to('Home');
        }
    }
    public function edit_A($pop)
    {
        $level=session()->get('level');
        if ($level==1) {
        $evan = new M_model();
        $x = array ('id_anak' => $pop);
        $data['okta'] = $evan->getWhere('anak',$x);
        echo view('header');
        echo view('dashboard');
        echo view('edit_anak',$data);
        echo view('footer');
        }else{
            return redirect()->to('Home');
        }
    }
    public function aksi_editA ()
    {
        $level=session()->get('level');
        if ($level==1 ) {
    $evan = new M_model();
    $id=$this->request->getPost('id');
    $a=$this->request->getPost('name'); 
    $ab=$this->request->getPost('Jumlah'); 
    $ac=$this->request->getPost('kode'); 
    $ad=$this->request->getPost('Harga');
    $where=array('id_anak' => $id);
    $data=array(
        
        'namaanak'=>$a,
        'tgl_lahir'=>$ab,
        'usia'=>$ad
    );
    
    $evan->edit('anak', $data, $where);
    return redirect ()->to('Home/anak');
    }else{
            return redirect()->to('Home');
        }
    }

//<-----------------------------------------------tabel transaksi------------------------------------->
public function spp()
    {
        $level = session()->get('level');
        $id_user = session()->get('id');
        $model = new M_model();
        $data['a'] = [];
    
        if ($level == 1 || $level == 2 || $level == 3|| $level == 4) {
            if ($level == 4) {
                $data['a'] = $model->getpelanngganbypelanggann($id_user);
            } else {
                $data['a'] = $model->getAllPDattta();
            }
        }
    
          
            echo view('header');
            echo view('menuutama');
            echo view('view', $data);
            echo view('footer');
       
    }
     public function tambah_pembayaran()
    {
        $level = session()->get('level');
        $id_user = session()->get('id');
        $model = new M_model();
        $data['a'] = [];
    
        if ($level == 1 || $level == 2 || $level == 3|| $level == 4) {
            if ($level == 4) {
                $data['a'] = $model->tampil('pelanggan');
                $data['c'] = $model->getpelanngganbypelanggaa($id_user);
            } else {
                $data['a'] = $model->tampil('pelanggan');
                $data['c'] = $model->getAllPDattae();
            }
        }else{
            return redirect()->to('/Home');
        }
            echo view('header');
            echo view('menuutama');
            echo  view('pembayaran/tambah_pembayaran',$data);
            echo view('footer');
    }
        
    public function aksi_tambah_pembayaran()
{
    // Mengambil ID pengguna yang sudah login
    $session = session();
    $id_user = $session->get('id'); // Ganti 'id_user' dengan kunci sesi yang sesuai dengan ID pengguna yang login

    // Mengambil ID pelanggan berdasarkan ID pengguna
    $model = new M_model();
    $id_pelanggan = $model->getIdPelangganByUserId($id_user);

    $a = $this->request->getPost('pelanggan');
    $b = $this->request->getPost('tagihan');

    // Pemeriksaan level pengguna
    if ($level === '1' || $level === '2') {
        $pelanggan = $a;
    } else {
        $pelanggan = $id_pelanggan; // Menggunakan ID pelanggan yang terkait dengan ID pengguna yang login
    }

    $simpan = array(
        'pelanggan' => $pelanggan,
        'tagihan' => $b,
        'biaya_ad' => "2000",
        'tanggal' => date('Y-m-d H:i:s'),
        'created_at' => date('Y-m-d H:i:s')
    );

    $model->simpan('pembayaran', $simpan);
    $model->setLunasStatus($b);

    return redirect()->to('/pembayaran');
}

}