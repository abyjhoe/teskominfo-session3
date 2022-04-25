<?php


class User_model extends CI_Model
{
    public function getUser($nik = null)
    {
        if ($nik != '') {
            return $this->db->get_where('user', ['nik' => $nik])->row_array();
        }
    }

    public function deleteUser($id)
    {
        $this->db->delete('user', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createUser($data)
    {
        $this->db->insert('user', $data);
        return $this->db->affected_rows();
    }

    public function updateUser($data, $id)
    {
        $this->db->update('user', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
