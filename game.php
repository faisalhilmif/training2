<?php
class Player {
	public $name;
	public $blood;
	public $mana;
	
	
	public function __construct($name){
		$this->name = $name;
		$this->blood = 100;
		$this->mana = 40;
	}
	public function result(){
		echo $this->get_name(). ": mana = ".$this->get_mana().", blood = " .$this->get_blood()."\n";
	}
	public function set_name($name){
		$this->name=$name;
	}
	public function get_name(){
		return $this->name;
	}
	public function set_blodd($blood){
		$this->blood=$blood;
	}
	public function get_blood(){
		return $this->blood;
	}
	public function set_mana($mana){
		$this->mana=$mana;
	}
	public function get_mana(){
		return $this->mana;
	}
	
	public function attack_player1(){
		$this->mana -= 10;
	}
	public function attack_player2(){
		$this->mana -= 10;
	}
	public function deffend_player1(){
		$this->blood -= rand(10,25);
	}
	public function deffend_player2(){
		$this->blood -= rand(10,25);
	}
}
echo "=======WELCOME BACK TO THE BATTLE=======\n";
echo "1-> type 'new' to create a character\n";
echo "2-> type 'start' to begin the battle\n";
echo "======================================\n";
echo "Current Hero : \n";
echo "MAX Hero 2!!\n";
echo "-------------------------------------\n";
echo "Choose your Answer ";
	fscanf(STDIN, "%s\n", $jwb);
if ($jwb == "new"){
echo "Put your Name : ";
	fscanf(STDIN, "%s\n", $name);
	$player = new Player($name);
echo "Choose position attack or deffend : ";
	fscanf(STDIN, "%s\n", $posisi1);
	echo "\n";
	echo "\n";
echo "=======WELCOME BACK TO THE BATTLE=======\n";
echo "----------------------------------------\n";
echo "1-> type 'new' to create a character\n";
echo "2-> type 'start' to begin the battle\n";
echo "======================================\n";
echo "Current Hero : \n";
	print_r($posisi1);echo " -> OK!";
echo "\n";
echo "MAX Hero 2!!\n";
echo "-------------------------------------\n";
echo "Choose your Answer ";
	fscanf(STDIN, "%s\n", $jwb2);
if ($jwb2 == "new"){
echo "Put second hero Name : ";
	fscanf(STDIN, "%s\n", $name);
	$player2 = new Player($name);
echo "Choose position attack or deffend : ";
	fscanf(STDIN, "%s\n", $posisi2);
	echo "\n";
	echo "\n";
echo "=======WELCOME BACK TO THE BATTLE=======\n";
echo "----------------------------------------\n";
echo "1-> type 'new' to create a character\n";
echo "2-> type 'start' to begin the battle\n";
echo "======================================\n";
echo "Current Hero : \n";
	print_r($posisi1); echo " -> OK!";
	echo "\n";
	print_r($posisi2); echo " -> OK!";
	echo "\n";
	echo "*MAX HERO 2!\n";
	echo "------------------------\n";
	echo "Type 'start' to begin the battle\n";
	fscanf(STDIN, "%s\n", $jwb2);
	echo "\n";
	echo "\n";
	if ($jwb2 == "start"){
		while ($player->get_mana() > 0 && $player->get_blood() > 0 && $player2->get_mana() > 0 && $player2->get_blood() > 0){
			echo "-------------------BATTLE START---------------------\n";
			if(($posisi1) == "attack"){
				$player->attack_player1();
			}
			if(($posisi1) == "deffend"){
				$player2->attack_player2();
			}
			if(($posisi2) == "attack"){
				$player->deffend_player1();
			}
			if(($posisi2) == "deffend"){
				$player2->deffend_player2();
			}
			$player->result();
			$player2->result();
		}
	}
}
}
	elseif ($jwb == "start"){
		echo "==WELCOME TO THE JUNGLE==\n";
		echo "please input your hero name first\n";
	}
	else {
		echo "ABORTING!\n";}
	
?>