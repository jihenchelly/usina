<?php

class participant{{
	private $nom;
	private $prenom;
	private $cin;
	private $formation_id;
	
	
	function __construct($nom,$prenom,$cin,$formation_id){
	
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->cin=$cin;
		$this->formation_id=$formation_id;
	
		}
	function getNom(){
		return $this->nom;	
	}
	function getPrenom(){
		return $this->prenom;	
	}
	
	function getcin(){
		return $this->cin;	
	}
	
	function getFormation_id(){
		return $this->formation_id;	
	}
	
	
}
?>