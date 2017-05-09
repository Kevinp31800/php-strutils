<?php 
class Strutils{

	private $str;
	public function __construct($string){
		$this ->str = $string;

	}
	public function bold($s){
		if($s){

			return "<strong>".$s."</strong><br>";
		}
		else{

			return "<strong>".$this->str."</strong><br>";
		}
	}
	public function italic($s){
		if($s){
			return "<em>".$s."</em><br>";	
		}
		else{	
			return "<em>".$this->str."</em><br>";
		}
		
	}
	public function underline($s){
		if($s){
			return "<u>".$s."</u><br>";		
		}
		else{	
			return "<u>".$this->str."</u><br>";
		}


	}
	public function capitalize($s){
		return ucwords($this->str)."<br>";
		
	}
	public function uglify($s){
		return $this->bold($this->italic($this->underline($this->capitalize())));
	}
}

?>