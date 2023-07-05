<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Kalivan extends CI_Controller{
        public function index(){
            $this->load->helper('url');
            $this->load->view('front/index.php');
        }

        public function commande(){
            $this->load->helper('url');
            $this->load->model('Fonction');
            $data = array();
            $data['jour'] = $this->Fonction->getPlatDuJour();
            $data['produit'] = $this->Fonction->getAllPlat();
            $this->load->view('front/commande.php',$data);
        }

        public function panier(){
            $this->load->helper('url');
            $this->load->model('Fonction');
            $data = array();
            // solona session
            $idClient = 2;
            $data['panier'] = $this->Fonction->getPanier($idClient);
            if($data['panier'] != null){
                $this->load->view('front/panier.php',$data);
            }else{
                $data['panier'] = [];
                $this->load->view('front/panier.php',$data);
            }
            
        }

        public function contact(){
            $this->load->helper('url');
            $this->load->view('front/contact.php');
        }

        public function contactClient(){
            $this->load->helper('url');
            $this->load->view('front/contactClient.php');
        }

        public function sign(){
            $this->load->helper('url');
            $this->load->view('front/login.php');
        }

        public function paiement(){
            $this->load->helper('url');
            $this->load->view('front/paiement.php');
        }

        
        public function inscription(){
            $this->load->helper('url');
            $this->load->view('front/inscription.php');
        }

        public function facture(){
            $this->load->helper('url');
            $this->load->model('Fonction');
            $data = array();
            // solona session aveo
            $idClient = 2;

            $data['facture'] = $this->Fonction->getFacture($idClient);
            $data['info'] = $this->Fonction->infoClient($idClient);
            $data['idCommande'] = $this->Fonction->lastCommandeClient($idClient);
            $data['somme'] = $this->Fonction->getSommeFacture($idClient);
            $this->load->view('front/facture.php',$data);
        }

        public function deconnecter(){
            // vonona ny session
            $this->load->helper('url');
            $this->load->view('front/login.php');
        }

        public function client(){
            $this->load->helper('url');
            $this->load->library('session');    
            $this->load->view('front/client.php');
        }

        public function commandeClient(){
            $this->load->helper('url');
            $this->load->library('session');    
            $this->load->model('Fonction');
            $data = array();
            $data['jour'] = $this->Fonction->getPlatDuJour();
            $data['produit'] = $this->Fonction->getAllPlat();
            $this->load->view('front/commandeClient.php',$data);
        }


        public function commandePlat(){
            $this->load->helper('url');
            $this->load->library('session');

            if($this->session->userdata('idClient')){
                echo 'misy id';
            }else{
                redirect(base_url('Kalivan/sign'));
            }
        }

        public function inscriptionUtil(){
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->model('Fonction');
            
            $email = $this->input->post('email');
            $nom = $this->input->post('nom');
            $prenom = $this->input->post('prenom');
            $num = $this->input->post('num');
            $mdp = $this->input->post('mdp');

            $val = $this->Fonction->verifUtil($email,$mdp);
            $idClient = $this->Fonction->getIdClient($email,$mdp);

            if($val == true){
                $this->session->set_userdata('idClient',$idClient);
                redirect(base_url('Kalivan/client'));
            }else{
                $this->Fonction->inscription($nom,$prenom,$num,$email,$mdp);
                $this->session->set_userdata('idClient',$idClient);
                redirect(base_url('Kalivan/client'));
            }
        }

        public function verifLogin(){
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->model('Fonction');

            $email = $this->input->post('email');
            $mdp = $this->input->post('mdp');
            $val = $this->Fonction->verifUtil($email,$mdp);
            $valAdmin = $this->Fonction->verifUtilAdmin($email,$mdp);
            $idClient = $this->Fonction->getIdClient($email,$mdp);

            if($val == true && $valAdmin == false){
                $this->session->set_userdata('idClient',$idClient);
                redirect(base_url('Kalivan/client'));
            }else{
                if($val == true && $valAdmin == true){
                    $this->session->set_userdata('idClient',$idClient);
                    redirect(base_url('BackOffice/index'));
                }else{
                    $error = "Email ou Mot de passe incorrect";
                    redirect(base_url('Kalivan/sign?error='.$error));    
                }
                
            }

        }

        public function insertPanier(){
            $this->load->helper('url');
            $this->load->model('Fonction');

            $quantite = $this->input->post('quantite');
            $idPlat = $this->input->post('idplat');
            // ovaina session aveo
            $idClient = 2 ;

            $this->Fonction->insertPanier($idPlat,$idClient,$quantite);
            redirect(base_url('Kalivan/commandeClient'));
        }

        public function deleteFromPanier(){
            $this->load->helper('url');
            $this->load->model('Fonction');

            $idPlat = $this->input->post('idPlat');
            // ovaina session aveo
            $idClient = 2;

            $this->Fonction->deleteFromPanier($idClient,$idPlat);
            redirect(base_url('Kalivan/panier'));
        }

        public function validerCommande(){
            $this->load->helper('url');
            $this->load->model('Fonction');

            $heure = $this->input->post('heure');
            $carte = $this->input->post('carte');
            $mobile = $this->input->post('numero');

            //solona session aveo
            $idUtilisateur = 2;

            $heureOuverture= strtotime('08:00');
            $heureFermeture= strtotime('17:00');
            $heureCommande = strtotime($heure);
            if($heureCommande > $heureOuverture && $heureCommande < $heureFermeture){
                $this->Fonction->insertCommande($idUtilisateur,$heure,$carte,$mobile);
                redirect(base_url('Kalivan/facture'));
            }else{
                redirect(base_url('Kalivan/paiement'));
            }
        
        }


    }
?>