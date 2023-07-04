<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Fonction extends CI_Model{
        function __construct() {
            parent::__construct();
            $this->load->database();
        }

        function inscription($nom,$prenom,$contact,$email,$motDePasse){
            $sql = "INSERT INTO Utilisateur(nom,prenom,contact,email,motDePasse) VALUE(%s,%s,%s,%s,%s)";
            $req = sprintf($sql,$this->db->escape($nom),$this->db->escape($prenom),$this->db->escape($contact),$this->db->escape($email),$this->db->escape($motDePasse));
            $this->db->query($req);
        }

        function verifUtil($email,$mdp){
            $sql = "SELECT * FROM Utilisateur WHERE email = %s AND motDePasse = %s";
            $req = sprintf($sql,$this->db->escape($email),$this->db->escape($mdp));
            $query = $this->db->query($req);
            $num_row =  $query->num_rows();
            $valiny = false;
            if($num_row >= 1){
                $valiny = true;
            }
            return $valiny;
        }

        function verifUtilAdmin($email,$mdp){
            $sql = "SELECT * FROM Utilisateur WHERE email = %s AND motDePasse = %s";
            $req = sprintf($sql,$this->db->escape($email),$this->db->escape($mdp));
            $result = array();
            $valiny = false;
            $query = $this->db->query($req);
            foreach($query->result_array() as $row){
                if($row['isAdmin'] == '0'){
                    $valiny = true;
                }
            }
            return $valiny;
        }

        function insertPanier($idplat,$id,$quantite){
            $sql = "INSERT INTO PANIER(idUtilisateur,idPlat,quantite) VALUES (%s,%s,%d)";
            $req = sprintf($sql,$this->db->escape($idplat),$this->db->escape($idplat),$quantite);
            $query = $this->db->query($req);
        }

        function getAllPlat(){
            $sql = "SELECT * FROM Plat";
            $query = $this->db->query($sql);
            foreach($query->result_array() as $row){
                $valiny[] =  $row;
            }
            return $valiny;
        }

        function getPanier($id){
            $sql = "SELECT * FROM PanierDetails WHERE idUtilisateur = %s";
            $req = sprintf($sql,$this->db->escape($id));
            $query = $this->db->query($req);
            foreach($query->result_array() as $row){
                $valiny[] =  $row;
            }
            return $valiny;
        }

        function insertCommande($id,$lieu,$heure,$carte,$mobile,$montant){
            $sql = "INSERT INTO COMMANDE (IDUTILISATEUR,LIEURECUPERATION,HEURERECUPERATION,NUMEROCARTE,NUMEROMOBILEMONEY,MONTANT) VALUES (%d,%s,%s,%s,%s,%d)";
            $req = sprintf($sql,$id,$this->db->escape($lieu),$this->db->escape($heure),$this->db->escape($carte),$this->db->escape($mobile),$mobile);
            $query = $this->db->query($req);
        }


    }

?>

