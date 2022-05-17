<?php

class M_cuti extends CI_Model
{

    public function get_all_cuti()
    {
        $hasil = $this->db->query('SELECT * FROM cuti JOIN user ON cuti.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail');
        return $hasil;
    }

    public function get_all_cuti_by_id_user($id_user)
    {
        $hasil = $this->db->query("SELECT * FROM cuti JOIN user ON cuti.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE cuti.id_user='$id_user'");
        return $hasil;
    }

    public function insert_data_cuti($id_cuti, $id_user, $alasan, $mulai, $berakhir, $id_status_cuti, $perihal_cuti)
    {
        $this->db->trans_start();
        $this->db->query("INSERT INTO cuti(id_cuti,id_user, alasan, tgl_diajukan, mulai, berakhir, id_status_cuti, perihal_cuti) VALUES ('$id_cuti','$id_user','$alasan',NOW(),'$mulai', '$berakhir', '$id_status_cuti', '$perihal_cuti')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function delete_cuti($id_cuti)
    {
        $this->db->trans_start();
        $this->db->query("DELETE FROM cuti WHERE id_cuti='$id_cuti'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function confirm_cuti($id_cuti, $id_status_cuti)
    {
        $this->db->trans_start();
        $this->db->query("UPDATE cuti SET id_status_cuti='$id_status_cuti' WHERE id_cuti='$id_cuti'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

   



}