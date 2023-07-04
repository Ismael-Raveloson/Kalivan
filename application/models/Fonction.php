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
            $query = $this->db->query($req);
            foreach($query->result_array() as $row){
                if($row['nom'] == 'admin' && )
            }
            
        }
    }

?>

