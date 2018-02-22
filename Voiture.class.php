<?php

class Voiture {

	public $couleur = 'noir carbonne';
	public $puissance = '550 chvx';
	public $marque = 'lamborghini';

	public function afficherCouleur(){
		return "Je suis une voiture de couleur ".$this->couleur. '<br>';
	}

	public function afficherPuissance(){
		return "Je suis une voiture de puissance ".$this->puissance. "<br>";
	}

	public function afficherMarque(){
		return "Je suis une voiture de marque " .$this->marque. "<br>";
	}
}

$voiture = new Voiture();
echo $voiture->afficherMarque();
echo $voiture->affichercouleur();
echo $voiture->afficherPuissance();

echo "<pre>";
print_r($voiture);
echo "</pre>";

$voiture->couleur = 'rouge';
$voiture->puissance = '470 chvx';
$voiture->marque = 'ferrari';

echo $voiture->afficherMarque();
echo $voiture->afficherPuissance();
echo $voiture->afficherCouleur();



