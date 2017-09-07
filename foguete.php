<?php 
	
	class Foguete
	{
		public $pass;
		
		function __construct()
		{
			
		}

		public function gas($a){
			if ($a > 3000){
				return 'Combustível suficiente';
			}
			else if ($a > 6000){
				return 'Preço inviável';
			}
			else {
				return 'Combustível insuficiente';
			}
		}

		public function piloto($a)
		{
			if ($a < 0) {
				return 'Número inviável de pilotos';
			} else if ($a < 3){
				return 'Número ideal de pilotos';
			} else{
				return 'Festa na cabine';
			}
		}

		public function passageiros($pass){

			if ($a < 0) {
				return 'N fode n fião';
			}else if ($a < 200){
				return 'Niceeeeeee';
			}else {
				return 'Azedou';
			}

		}

		public function junctions($a){

			if ($a < 1) {
				return 'N fode n fião';
			}else if ($a < 200){
				return 'Ok';
			}else {
				return 'Muitas';
			}
	 	}				

		public function banco($a){

			if ($a < 0) {
				return 'N fode n fião';
			}else if ($a < 200){
				return 'Niceeeeeee';
			}else {
				return 'Azedou';
			}
		}

		public function janelas($a){

			if ($a < 1) {
				return 'Clastrofobia Bate certo';
			}else if ($a < 100){
				return 'Iluminação natural';
			}else {
				return 'Sol demais cegou a tripulação';
			}
		}

		public function banheiros($a){
			if (($a/3) < )
		}

		public function armamento{

		}

		public function camas ($a){

		}

		public function mantimentos($a, $b, $c){
			if ($a == 'arroz' && $b == 'feijão' && $c == 'batata') {
				
			}
		}
	}

 ?>