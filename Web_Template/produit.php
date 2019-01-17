<?php
class produit{
	//attributs
	protected $ref;
	protected $value;
	protected $category;
	protected $name;
	

	
	protected $diametre;
	protected $heigh;
	protected $length;
	protected $width;
	protected $price;
	protected $photo;
	protected $description;
	//constructeur
	function __construct($name,$ref,$value,$category,$heigh,$length,$width,$price,$description,$photo,$diametre){
		$this->name=$name;
		$this->ref=$ref;
		$this->category=$category;
		$this->value=$value;
		$this->heigh=$heigh;
		$this->length=$length;
		$this->width=$width;
		$this->price=$price;		
		$this->description=$description;
		$this->photo=$photo;
		$this->diametre=$diametre;
		
	}
	function getname(){
		return $this->name;
	}
	function getdiametre(){
		return $this->diametre;
	}
	function getref(){
		return $this->ref;
	}
	function getvalue(){
		return $this->value;
	}
	function getcategory(){
		return $this->category;
	}
	function getcolor(){
		return $this->color;
	}
	function getquantity(){
		return $this->quantity;
	}
	function getype(){
		return $this->type;
	}
	function getheigh(){
		return $this->heigh;
	}
	function getlength(){
		return $this->length;
	}
	function getwidth(){
		return $this->width;
	}
	function getprice(){
		return $this->price;
	}
	function getphoto(){
		return $this->photo;
	}
	function getdescription(){
		return $this->description;
	}
}


?>