<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pangkat extends CI_Controller{
    public function __construct(){
        
        parent::__construct();
        $this->load->model('mpangkat');
        $this->load->library('form_validation');   
        $this->load->helper('url');    

        
    }

    public function index(){
        $this->load->view('pangkat',array("hasil"=>""));
    }
    public function hitung(){
        $hasil = $this->mpangkat->hitung($_POST);
        $this->load->view('pangkat',array("hasil"=>$hasil));
    }
    public function showtable(){
        $data = array('data'=>$this->mpangkat->get_data());
        $this->load->view('table',$data);
    }
}