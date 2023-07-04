<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class BackOffice extends CI_Controller{

        function __construct() {
            parent::__construct();
            $this->load->database();
        }


        public function index(){
            $this->load->helper('url');
            $this->load->model('Model');
            $data = array();
            $data['jour'] = $this->Model->getPlatDuJour();
            $data['menu'] = $this->Model->getAllPlat();
            $this->load->view('back/home.php',$data);          
        }

        public function board(){
            $this->load->helper('url');
            $this->load->model('Model');
            $data = array();
            $data['valider'] = $this->Model->listeCommandeValidée();
            $data['cuisine'] = $this->Model->listeCommandeCuisine();
            $data['recu'] = $this->Model->listeCommandeRecu();
            $this->load->view('back/board.php',$data);
        }
        
        public function modifJour(){
            $this->load->helper('url');
            $this->load->view('back/modifpj.php');
        }

        public function ajout(){
            $this->load->helper('url');
            $this->load->view('back/ajout.php');
        }

        public function modification(){
            $this->load->helper('url');
            $this->load->view('back/modification.php');
        }
        
        public function ajouterPlat(){
            $this->load->helper('url');

            $config['upload_path'] = base_url('assets/frontoffice/img/photo');
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1024; 
            $config['encrypt_name'] = TRUE; 

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('userfile')) {
                
                $data = $this->upload->data();
                // Accédez aux informations sur le fichier téléchargé
                $file_name = $data['file_name'];
                $file_size = $data['file_size'];
                $file_type = $data['file_type'];
                // Autres actions à effectuer avec le fichier téléchargé

                // Afficher un message de succès
                echo "Le fichier $file_name a été téléchargé avec succès.";
            } else {
                // Le téléchargement a échoué, afficher les erreurs
                $error = $this->upload->display_errors();
                echo $error;
            }
        }

        public function outPlat(){
            $this->load->helper('url');
            $this->load->model('Model');

            $plat = $this->input->post('idplat');
            $this->Model->platLany($plat);
            redirect(base_url('BackOffice/index'));
        }

    }
?>