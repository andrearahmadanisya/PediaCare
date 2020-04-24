<?php

class KonsultasiModel extends CI_Model
{
    public function getAllKonsultasi()
    {
        // get all data
        $query = $this->db->query("SELECT * FROM konsultasi");
        return $query->result_array();
    }

    public function getById($id)
    {
        $query = $this->db->query("SELECT * FROM konsultasi WHERE id_konsultasi = '" . $id . "'");
        return $query->row_array();
    }

    public function AddKonsultasi($data)
    {
        return $this->db->insert('konsultasi', $data);
    }

    public function UpdateKonsultasi($data, $id_konsultasi)
    {
        $this->db->where('id_konsultasi', $id_konsultasi);
        return $this->db->update('konsultasi', $data);
    }

    public function DeleteKonsultasi($id_konsultasi)
    {
        return $this->db->delete('konsultasi', ['id_konsultasi' => $id_konsultasi]);
    }

}
