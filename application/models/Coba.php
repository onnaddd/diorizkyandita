<?php
class Coba extends CI_Model
{
    var $platnomor;
    
    function tampilData(){
        $query = $this->db->query("select * from kategori");
        return $query->result();
    }
    function tampilDataHome(){
        $query = $this->db->query("select * from home");
        return $query->result();
    }
}

?>