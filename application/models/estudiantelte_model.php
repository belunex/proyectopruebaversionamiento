<?php

    class Estudiantelte_model extends CI_Model{
        public function listaestudianteslte()
        {
            $this->db->select('*');
            $this->db->from('estudiante');
            $this->db->where('habilitado','1');
            return $this->db->get();
        }

        public function agregarestudiantelte($data)
        {
            $this->db->insert('estudiante',$data);
        }

        public function eliminarestudiantelte($idestudiante) //este es un hard delete
        {
            $this->db->where('idEstudiante',$idestudiante);
            $this->db->delete('estudiante');
        }

        public function recuperarestudiantelte($idestudiante)
        {
            $this->db->select('*');
            $this->db->from('estudiante');
            $this->db->where('idEstudiante',$idestudiante);
            return $this->db->get();
        }

        public function modificarestudiantelte($idestudiante,$data)
        {
            $this->db->where('idEstudiante',$idestudiante);
            $this->db->update('estudiante',$data);
        }

        public function listaestudiantesdeslte()
        {
            $this->db->select('*');
            $this->db->from('estudiante');
            $this->db->where('habilitado','0');
            return $this->db->get();
        }
    }