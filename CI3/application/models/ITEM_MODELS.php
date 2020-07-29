<?php
class ITEM_MODELS extends CI_Model {

public function get_all()
{
        $query = $this->db->get('item');
        return $query->result();
}

public function upload($data)
{
        $this->NAMA=$data['nama'];
        $this->PRODUK=$data['produk'];
        $this->HARGA=$data['harga'];
        $this->IMG_LINK=$data['img_link'];
        $this->ASAL=$data['asal'];
        $upload=$this;

        $this->db->insert('item',$upload);
}
public function get_one($id)
	{
		$query = $this->db->get_where('item', array('id' => $id));
		return $query->result();
        }
        public function create2($data)
	{
		$this->NAMA    = $data['namad'] + $data['b'];
		$this->ID_PRODUK    = $data['id_produk'];
		$this->ASAL    = $data['asal'];
		$this->ALAMAT   = $data['alamat'];
		$this->HARGA    = $data['harga'];
		$this->EMAIL    = $data['email'];
		$kirim = $this;
		$this->db->insert('data_pembelia,', $kirim);
	}
}