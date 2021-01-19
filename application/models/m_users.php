<?php

class m_users extends CI_Model{
    function cek_login($where, $table){

        return $this->db->get_where($table,$where);

    }
}