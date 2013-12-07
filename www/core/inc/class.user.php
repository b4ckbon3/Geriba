<?php
	include('class.uFlex.php');
	
	class user extends uFlex{
	
	 var $fullname;
	
	public function fullnamer(){
		$fullname = $this->parent->username;
	}
	
	}
?>
