<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Model extends CI_Model{
        
        function getAllPlat(){
            $sql = "SELECT * FROM Plat p";
            $query = $this->db->query($sql);
            foreach($query->result_array() as $row){
                $valiny[] =  $row;
            }
            return $valiny;
        }

        function getPlatDuJour(){
            $sql = "SELECT * FROM v_pdj";
            $query = $this->db->query($sql);
            foreach($query->result_array() as $row){
                $val[] = $row;
            }
            return $val;
        }

        function platLany($idPlat){
            $sql = "UPDATE PLAT SET DISPO = 2 WHERE IDPLAT = %d";
            $req = sprintf($sql,$idPlat);
            $this->db->query($req);
        }

        function modifierDispo(){
            $sql = "UPDATE PLAT SET DISPO = 1 WHERE IDPLAT = %d";
            $req = sprintf($sql,$idPlat);
            $this->db->query($sql);
        }

        function modifAll($nom,$information,$prix,$photo,$idCategorie){
            $sql = "UPDATE PLAT SET NOM=%s AND PRIX=%d AND INFORMATION = %s AND PHOTO = %s AND IDCATEGORIE = %d";
            $req = sprintf($sql,$this->db->escape($nom),$prix,$this->db->escape($information),$this->db->escape($photo),$idCategorie);
            $this->db->query($sql);
        }

        function getCategory(){
            $sql = "SELECT * FROM CATEGORIE";
            $query = $this->db->query($sql);
            foreach($query->result_array() as $row){
                $valiny[] =  $row;
            }
            return $valiny;
        }

        function insertPlat($nom,$information,$prix,$photo,$idCategorie){
            $sql = "INSERT INTO PLAT(nom,information,prix,photo,idCategorie,dispo) values (%s,%s,%d,%s,%s,1)";
            $req = sprintf($sql,$this->db->escape($nom),$prix,$this->db->escape($information),$this->db->escape($photo),$idCategorie);
            $this->db->query($req);
        }

        function listeCommandeValidée(){
            $sql = "SELECT * FROM v_CommandeValider";
            $query = $this->db->query($sql);
            $valiny = array();
            foreach($query->result_array() as $row){
                $valiny[] =  $row;
            }
            return $valiny;
        }
        
        function listeCommandeCuisine(){
            $sql = "SELECT * FROM v_CommandeCuisine";
            $query = $this->db->query($sql);
            $valiny = array();
            foreach($query->result_array() as $row){
                $valiny[] =  $row;
            }
            return $valiny;
        }

        function listeCommandeAttente(){
            $sql = "SELECT * FROM v_CommandeAttente";
            $query = $this->db->query($sql);
            $valiny = array();
            foreach($query->result_array() as $row){
                $valiny[] =  $row;
            }
            return $valiny;
        }

        function listeCommandeRecu(){
            $sql = "SELECT * FROM v_CommandeRecu";
            $query = $this->db->query($sql);
            $valiny = array();
            foreach($query->result_array() as $row){
                $valiny[] =  $row;
            }
            return $valiny;
        }

        function annulerDetail($idDetail){
            $sql = "DELETE FROM DETAILCOMMANDE WHERE IDDETAIL = %d";
            $req = sprintf($sql,$idDetail);
            // $this->db->query($idDetail); 
            echo $req;
        }

        function sendCuisine($idDetail){
            $sql = "UPDATE DETAILCOMMANDE SET ETAT = 2 WHERE IDDETAIL=%d";
            $req = sprintf($sql,$req);
            $this->db->query($req);
        }
        
        function sendAttente($idDetail){
            $sql = "UPDATE DETAILCOMMANDE SET ETAT = 3 WHERE IDDETAIL=%d";
            $req = sprintf($sql,$req);
            $this->db->query($req);
        }

        function sendRecu($idDetail){
            $sql = "UPDATE DETAILCOMMANDE SET ETAT = 3 WHERE IDDETAIL=%d";
            $req = sprintf($sql,$req);
            $this->db->query($req);
        }
    }
    
?>