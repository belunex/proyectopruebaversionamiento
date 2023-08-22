<?php

    class Docente_model extends CI_Model{
        public function listacursoslte()
        {
            $this->db->select('*');
            $this->db->from('docente');
            return $this->db->get();
        }

        public function agregartarealte($data)
        {
            $this->db->insert('docente',$data);
        }
    }