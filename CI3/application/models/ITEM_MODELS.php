<?php
class ITEM_MODELS extends CI_Model {

public function get_all()
{
        $query = $this->db->get('item');
        return $query->result();
}

public function upload($data)
{
        $this->$NAMA=$data['nama'];
        $this->IMG_LINK=$data['img_link'];
        $this->PRODUK=$data['produk'];
        $this->HARGA=$data['harga'];
        $this->ASAL=$data['asal'];
        $upload=$this;

        $this->db->insert('item',$upload);
}
}