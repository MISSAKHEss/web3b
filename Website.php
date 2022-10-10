<?php 
defined('BASEPATH') or exit ('no direct script access allowed'); 
class Web extends CI_Controller{ 
    function __construct(){ 
        parent::__construct(); 
    } 
    public function index(){ 
        $data['judul'] = "Halaman Depan"; 
        $this->load->view('view_header',$data); 
        $this->load->view('view_index',$data);
        $this->load->view('view_footer',$data); 
        $this->load->view('view_about',$data);
        $this->load->view('view_kontak',$data);
    } 
}
