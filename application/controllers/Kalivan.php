<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Kalivan extends CI_Controller{
        public function index(){
            $this->load->helper('url');
            $this->load->view('front/index.php');
        }

        public function commande(){
            $this->load->helper('url');
            $this->load->view('front/commande.php');
        }

        public function panier(){
            $this->load->helper('url');
            $this->load->view('front/panier.php');
        }

        public function contact(){
            $this->load->helper('url');
            $this->load->view('front/contact.php');
        }

        public function sign(){
            $this->load->helper('url');
            $this->load->view('front/login.php');
        }

        public function paiement(){
            $this->load->helper('url');
            $this->load->view('front/paiement.php');
        }

        public function facture(){
            $this->load->helper('url');
            $this->load->view('front/facture.php');
        }


    }
?>