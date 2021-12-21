<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Hero extends RestController
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Hero_model','hero');
    }

    public function index_get()
    {
        $id = $this->get('id_hero');
        if ($id === null){
            $p = $this->get('page');
            $p = (empty($p) ? 1 : $p);
            $total_data = $this->hero->count();
            $total_page = ceil($total_data / 5);
            $start = ($p - 1) * 5;
            $list = $this->hero->get(null, 5, $start); 
            if ($list){
            $data = [
                'status' => true,
                'page' => $p,
                'total_data' => $total_data,
                'total_page' => $total_page,
                'data' => $list
            ];
            }else{
            $data = [
                'status' => false,
                'msg' => 'Data Tidak Ditemukan'
            ];
            }
            $this->response($data,RestController::HTTP_OK);
        }else{
            $data = $this->hero->get('id_hero');
            if ($data){
            $this->response(['status'=>true,'data'=> $data],RestController::HTTP_OK);
            }else{
            $this->response(['status'=>false,'msg'=> $id .'Data Tidak Ditemukan'],RestController::HTTP_NOT_FOUND);   
            }
        }
    }

    public function index_post()
    {
      $data = [
          'id_hero' => $this->post('id_hero'),
          'nama' => $this->post('nama'),
          'peran' => $this->post('peran'),
          'biodata' => $this->post('biodata'),
          'url_hero' => $this->post('url_hero'),
      ];
      $simpan=$this->hero->add($data);
      if($simpan['status']){
          $this->response(['status'=>true,'msg'=>$simpan['data']. 'Data Telah Ditambahkan'], RestController::HTTP_CREATED);
      }else{
          $this->response(['status'=>false,'msg'=>$simpan['msg']], RestController::HTTP_INTERNAL_ERROR);
      }
    }

    public function index_put()
    {
      $data = [
          'id_hero' => $this->put('id_hero'),
          'nama' => $this->put('nama'),
          'peran' => $this->put('peran'),
          'biodata' => $this->put('biodata'),
          'url_hero' => $this->put('url_hero'),
      ];
      $id = $this->put('id_hero');
      if($id === null){
          $this->response(['status'=>false,'msg'=> 'Masukkan Data Yang Akan Dirubah'], RestController::HTTP_BAD_REQUEST);
      }
      $simpan=$this->hero->update($id, $data);
      if($simpan['status']){
          $status=(int)$simpan['data'];
      if($status > 0)
          $this->response(['status'=>true,'msg'=>$simpan['data']. 'Data Telah Diubah'], RestController::HTTP_OK);
      else
          $this->response(['status'=>false,'msg'=>'Tidak Ada Data Yang Diubah'], RestController::HTTP_BAD_REQUEST);
      }else{
          $this->response(['status'=>false,'msg'=>$simpan['msg']], RestController::HTTP_INTERNAL_ERROR);
      }
    }

    public function index_delete()
    {
        $id = $this->delete('id_hero');
        if($id === null){
            $this->response(['status'=>false,'msg'=> 'Masukakan Data Yang Akan Dihapus'], RestController::HTTP_BAD_REQUEST);
        }
        $delete=$this->hero->delete($id);
        if($delete['status']){
            $status=(int)$delete['data'];
        if($status > 0)
            $this->response(['status'=>true,'msg'=>$id . ' Data Telah Dihapus'], RestController::HTTP_OK);
        else
            $this->response(['status'=>false,'msg'=>'Tidak Ada Data Yang Dihapus'], RestController::HTTP_BAD_REQUEST);
        }else{
            $this->response(['status'=>false,'msg'=>$delete['msg']], RestController::HTTP_INTERNAL_ERROR);
        }
    }
}
