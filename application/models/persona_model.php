<?php

    class Persona_model extends CI_Model{
        public function listaestudiantes()
        {
            $this->db->select('*');
            $this->db->from('estudiantee');
            $this->db->where('habilitado','1');
            return $this->db->get();
        }

        public function recuperarestudiante($idestudiante)
        {
            $this->db->select('*');
            $this->db->from('estudiantee');
            $this->db->where('idEstudiante',$idestudiante);
            return $this->db->get();
        }

        public function modificarestudiante($idestudiante,$data)
        {
            $this->db->where('idEstudiante',$idestudiante);
            $this->db->update('estudiantee',$data);
        }
    }