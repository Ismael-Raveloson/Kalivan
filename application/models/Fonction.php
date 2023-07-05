<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Fonction extends CI_Model{
        function __construct() {
            parent::__construct();
            $this->load->database();
        }

        function inscription($nom,$prenom,$contact,$email,$motDePasse){
            $sql = "INSERT INTO Utilisateur(nom,prenom,contact,email,motDePasse,isAdmin) VALUE(%s,%s,%s,%s,%s,1)";
            $req = sprintf($sql,$this->db->escape($nom),$this->db->escape($prenom),$this->db->escape($contact),$this->db->escape($email),$this->db->escape($motDePasse));
            $this->db->query($req);
            echo $req;
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
            $sql = "SELECT * FROM Utilisateur WHERE email = %d AND motDePasse = %d";
            $req = sprintf($sql,$email,$mdp);
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
            $req = sprintf($sql,$this->db->escape($id),$this->db->escape($idplat),$quantite);
            $query = $this->db->query($req);
        }

        function getAllPlat(){
            $sql = "SELECT * FROM Plat WHERE dispo=1";
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
            $valiny = array();
            foreach($query->result_array() as $row){
                $valiny[] =  $row;
            }
            return $valiny;
        }

        function getSommePanier($id){
            $sql = "SELECT * FROM PanierSomme WHERE idUtilisateur = %s";
            $req = sprintf($sql,$id);
            $query = $this->db->query($req);
            $val = 0;
            foreach($query->result_array() as $row){
                $val = $row['somme'];
            }
            return $val;
        } 

        function insertDetailCommandeUtil($idC,$idP,$quantite){
            $sql = "INSERT INTO DETAILCOMMANDE (IDCOMMANDE,IDPLAT,QUANTITE,ETAT) VALUES (%s,%s,%d,1)";
            $req = sprintf($sql,$this->db->escape($idC),$this->db->escape($idP),$quantite);
            $this->db->query($req);
        }

        function insertCommande($id,$heure,$carte,$mobile){
            $montant = $this->getSommePanier($id);

            $sql = "INSERT INTO COMMANDE (IDUTILISATEUR,HEURERECUPERATION,NUMEROCARTE,NUMEROMOBILEMONEY,MONTANT) VALUES (%d,%s,%s,%s,%d)";
            $req = sprintf($sql,$id,$this->db->escape($heure),$this->db->escape($carte),$this->db->escape($mobile),$montant);
            $this->db->query($req);

            $last = $this->lastCommande();
            $panier = array();
            $panier = $this->getPanierUtil($id);

            for($i=0;$i < count($panier) ; $i++){
                $this->insertDetailCommandeUtil($last,$panier[$i]['idPlat'],$panier[$i]['quantite']);
            }
            $this->viderPanier($id);
        }

        function lastCommande(){
            $sql = "SELECT IDCOMMANDE FROM COMMANDE ORDER BY IDCOMMANDE DESC LIMIT 1";
            $val = "";
            $query = $this->db->query($sql);
            foreach ($query->result_array() as $row){
                $val = $row['IDCOMMANDE'];
            }
            return $val;
        }

        function lastCommandeClient($client){
            $sql = "SELECT IDCOMMANDE FROM COMMANDE WHERE IDUTILISATEUR = %d ORDER BY IDCOMMANDE DESC LIMIT 1";
            $req = sprintf($sql,$client);
            $val = "";
            $query = $this->db->query($req);
            foreach ($query->result_array() as $row){
                $val = $row['IDCOMMANDE'];
            }
            return $val;
        }


        function getPanierUtil($idUtil){
            $sql = "SELECT * FROM PanierDetails WHERE idUtilisateur = %d";
            $req = sprintf($sql,$idUtil);
            $query = $this->db->query($req);
            foreach($query->result_array() as $row){
                $valiny[] = $row;
            }
            return $valiny;
        }
  
        function getIdClient($email,$mdp){
            $sql = "SELECT idUtilisateur FROM Utilisateur WHERE email = %s AND motDepasse = %s";
            $req = sprintf($sql,$this->db->escape($email),$this->db->escape($mdp));
            $val = "";
            $query = $this->db->query($req);
            foreach($query->result_array() as $row){
                $val = $row['idUtilisateur'];
            }
            return $val;
        }

        function getPlatDuJour(){
            $sql = "SELECT * FROM v_pdj WHERE DISPO = 1";
            $query = $this->db->query($sql);
            foreach($query->result_array() as $row){
                $val[] = $row;
            }
            return $val;
        }

        function deleteFromPanier($client,$plat){
            $sql = "DELETE FROM PANIER WHERE idPlat = %s AND idUtilisateur = %s";
            $req = sprintf($sql,$this->db->escape($plat),$this->db->escape($client));
            $this->db->query($req);
        }

        function viderPanier($client){
            $sql = "DELETE FROM PANIER WHERE idUtilisateur = %s";
            $req = sprintf($sql,$client);
            $this->db->query($req);
        }

        function getFacture($idclient){
            $sql = "SELECT * FROM v_facture WHERE IDUTILISATEUR = %d";
            $req = sprintf($sql,$idclient);
            $query = $this->db->query($req);
            $valiny = array();
            foreach($query->result_array() as $row) {
                $valiny[] = $row;
            }
            return $valiny;
        }

        function infoClient($idclient){
            $sql = "SELECT * FROM Utilisateur WHERE IDUTILISATEUR =%s";
            $req = sprintf($sql,$this->db->escape($idclient));
            $query = $this->db->query($req);
            $valiny = array();
            foreach($query->result_array() as $row) {
                $valiny[] = $row;
            }
            return $valiny;
        }

        function getSommeFacture($idclient){
            $sql = "SELECT Somme FROM v_sommeFacture WHERE IDUTILISATEUR = %d";
            $req = sprintf($sql,$idclient);
            $query = $this->db->query($req);
            $valiny = array();
            foreach($query->result_array() as $row) {
                $valiny[] = $row;
            }
            return $valiny;
        }




    }

?>