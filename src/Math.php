<?php
	namespace App;

	class Math{

		public static function double($nombre){
			return $nombre*2;

		}

		public static function TTC($montant){
			return $montant*1.20;
		}

		public static function compare($v1,$v2){
			if (!($v1 === $v2 && $v1 == $v2)){
				return false;
			}
			return true;
		}

		public static function compare2($v1,$v2){
			
			return (!($v1 < $v2)); 
		}

}

?>

