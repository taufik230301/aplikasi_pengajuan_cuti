<?php

class M_cuti extends CI_Model
{

    public function insert_data_cuti($id_cuti, $id_user, $alasan, $mulai, $berakhir, $id_status_cuti)
    {
        $this->db->trans_start();
        $this->db->query("INSERT INTO cuti(id_cuti,id_user, alasan, tgl_diajukan, mulai, berakhir, id_status_cuti) VALUES ('$id_cuti','$id_user','$alasan',NOW(),'$mulai', '$berakhir', '$id_status_cuti')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

   



}