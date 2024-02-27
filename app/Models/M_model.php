<?php 

namespace App\Models;
use CodeIgniter\Model;

class M_model extends model
{
public function tampil($tabel)
	{
		return $this->db->table($tabel)
		                ->get()
		                ->getResult();
	}
    
    
    public function geta()
    {
        return $this->findAll();
    }
    public function hapus($table, $where){
        return $this->db->table($table)->delete($where);
    }
    public function simpan($table, $data){
        return $this->db->table($table)->insert($data);
    }
    public function getWhere($table, $where){
        return $this->db->table($table)->getWhere($where)->getRow();
    }
    public function edit($table, $data, $where){
        return $this->db->table($table)->update($data, $where);
    }
    public function jo($table1, $table2, $on)
    {
        return $this->db->table($table1)
                        ->join($table2,$on)
                        ->get()
                        ->getResult();
                    }
    public function getAllPDattta()
    {
        $builder = $this->db->table('pembayaran');
        $builder->select('*');
        $builder->join('pelanggan', 'pembayaran.pelanggan = pelanggan.id_pelanggan', 'left');
        $builder->join('tagihan', 'pembayaran.tagihan = tagihan.id_tagihan', 'left');
        
        $builder->orderBy('pembayaran.created_at', 'desc');
    
        $query = $builder->get();
        return $query->getResult();
    }
    
    public function getpelanngganbypelanggann($id_user)
{
    $builder = $this->db->table('pembayaran');
    $builder->select('*');
    $builder->join('pelanggan', 'pembayaran.pelanggan = pelanggan.id_pelanggan', 'left');
    $builder->join('tagihan', 'pembayaran.tagihan = tagihan.id_tagihan', 'left');
    $builder->where('pelanggan.user', $id_user);
    $builder->orderBy('pembayaran.created_at', 'desc');

    $query = $builder->get();
    return $query->getResult();
}                
    
}