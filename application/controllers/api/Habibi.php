<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');


require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class Habibi extends CI_Controller
{

    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct()
    {
        parent::__construct();
        $this->__resTraitConstruct();
        $this->load->model('User_model');

        $this->methods['index_get']['limit'] = 1000; // 500 requests per hour per user/key
        $this->methods['index_post']['limit'] = 1000; // 500 requests per hour per user/key
        $this->methods['index_put']['limit'] = 1000; // 500 requests per hour per user/key
        $this->methods['index_delete']['limit'] = 1000; // 500 requests per hour per user/key
    }


    //TAMBAH DATA
    public function index_post()
    {

        $nik = htmlspecialchars($this->post('nik'));
        $nama = htmlspecialchars($this->post('nama'));
        $alamat = htmlspecialchars($this->post('alamat'));
        $email = htmlspecialchars($this->post('surel'));

        $ceknik = $this->User_model->getUser($nik);

        if ($ceknik > 0) {
            $this->response([
                'error' => true,
                'message' => 'NIK Sudah terdaftar'
            ], 400);
        } else {
            if ($nik === '' or $nama === '' or $alamat === '' or $email === '') {
                $this->response([
                    'error' => true,
                    'message' => 'Data Tidak Lengkap'
                ], 400);
            } else {
                $data = [
                    'nik' => $nik,
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'email' => $email
                ];

                if ($this->User_model->createUser($data) > 0) {
                    $this->response([
                        'error' => false,
                        'message' => 'Sukses Terdaftar'
                    ], 201);
                } else {
                    $this->response([
                        'error' => true,
                        'message' => 'Failed to added'
                    ], 400);
                }
            }
        }
    }
}
