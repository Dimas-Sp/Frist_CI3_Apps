<?php
class ITEM_MODELS extends CI_Model {

public function get_all()
{
        $query = $this->db->get('item');
        return $query->result();
}
}