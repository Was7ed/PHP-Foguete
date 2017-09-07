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
			} 
		}

		public function passageiros($pass){

			if ($pass < 0) {
				return 'N fode n fião';
			}else if ($pass < 200){
				return 'População ideal';
			}else {
				return 'Lotação atingida';
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
			if (($a/3) < $pass){
				return 'Não há banheiros o suficiente';
			} else if ($a/3 == $pass){
				return 'Número ideal de banheiros';
			}else {
				return 'Gastos exessivos com banheiros';
			}
		}

		public function armamento($a){
			if ($a < 1) {
				return 'Morreram em um ataque alien';
			}else if ($a < 100){
				return 'Ideal para ataques';
			}else {
				return 'F*** YOU M******';
			}
		}

		public function camas ($a){
			if($a < $pass){
				return 'Faltam cama para os passageiros';
			} else if ($a = $pass){
				return 'Número ideal de camas';
			} else {
				return 'Gastos exessivos';
			}
		}

		public function mantimentos($a, $b, $c){
			if ($a == 'arroz' && $b == 'feijão' && $c == 'batata') {
				return 'Boas escolhas';
			} else {
				return 'Morreu de fome';
			}
		}
	}

 ?>