<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class BackOffice extends CI_Controller{
        public function index(){
            $this->load->helper('url');
            $this->load->view('back/home.php');          
        }

        public function board(){
            $this->load->helper('url');
            $this->load->view('back/board.php');
        }

        

    }
?>