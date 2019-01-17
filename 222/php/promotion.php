<?php

class promotion {
	private $nom;
	private $date_debut;
	private $date_fin;
	private $produit;
	private $pourcentage;
	private $Id_reduction;
	
	function __construct($date_debut,$date_fin,$produit,$pourcentage,$Id_reduction){
	
	    $this->date_debut=$date_debut;
		$this->date_fin=$date_fin;
		$this->produit=$produit;
		$this->pourcentage=$pourcentage;
		$this->Id_reduction=$Id_reduction;
		}
	
	function getDate_debut(){
		return $this->date_debut;	
	}
	
	function getDate_fin(){
		return $this->date_fin;	
	}
	
	function getProduit(){
		return $this->produit;	
	}
	
	function getPourcentage(){
		return $this->pourcentage;	
	}
	
	function getID(){
		return $this->Id_reduction;	
	}
}
?>