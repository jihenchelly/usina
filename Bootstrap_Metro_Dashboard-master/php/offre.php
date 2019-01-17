<?php

class offre{
	private $nom;
	private $date_debut;
	private $date_fin;
	private $produit;
	private $imag;
	private $description;
	private $pourcentage;

	
	function __construct($date_debut,$date_fin,$produit,$img,$description,$pourcentage){
	
	    $this->date_debut=$date_debut;
		$this->date_fin=$date_fin;
		$this->produit=$produit;
		$this->img=$img;
		$this->description=$description;
		$this->pourcentage=$pourcentage;

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
	
	
}
?>