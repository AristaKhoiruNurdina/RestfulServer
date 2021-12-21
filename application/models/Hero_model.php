<?php

class Hero_model extends CI_model{

    public function __construct()
    {
        parent::__construct();
    }

    public function get($id=null, $limit = 5, $ofsite = 0)
    {
        if ($id === null) {
          return $this->db->get('tb_hero')->result();
        }else{
            return $this->db->get_where('tb_hero',['nama' => $id])->result_array();
        }
    }

    public function count(){
        return $this->db->get('tb_hero')->num_rows();
        
    }

    public function add($data){
        try{
            $this->db->insert('tb_hero',$data);
            $error=$this->db->error();
            if(!empty($error['code'])){
                throw new Exception('Terjadi Kesalahan: '.$error['message']);
                return false;
            }
            return ['status' => true, 'data' => $this->db->affected_rows()];
        } catch (Exception $ex){
            return ['status' => false, 'msg' => $ex->getMessage()];
        }
    }
    
    public function update($id, $data){
        try{
            $this->db->update('tb_hero',$data, ['id_hero' => $id]);
            $error=$this->db->error();
            if(!empty($error['code'])){
                throw new Exception('Terjadi Kesalahan: '.$error['message']);
                return false;
            }
            return ['status' => true, 'data' => $this->db->affected_rows()];
        } catch (Exception $ex){
            return ['status' => false, 'msg' => $ex->getMessage()];
        }
    }

    public function delete($id){
        try{
            $this->db->delete('tb_hero', ['id_hero' => $id]);
            $error=$this->db->error();
            if(!empty($error['code'])){
                throw new Exception('Terjadi Kesalahan: '.$error['message']);
                return false;
            }
            return ['status' => true, 'data' => $this->db->affected_rows()];
        } catch (Exception $ex){
            return ['status' => false, 'msg' => $ex->getMessage()];
        }
    }
}