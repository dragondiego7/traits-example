<?php

$PATH_DEFAULT = "Classes/";

require_once($PATH_DEFAULT . "Animal.php");
require_once($PATH_DEFAULT . "Mamifero.php");
require_once($PATH_DEFAULT . "MamiferoAve.php");
require_once($PATH_DEFAULT . "Ave.php");

class Main extends Animal
{
	use Ave;
	use Mamifero;

	function __construct() {
		$animal = new Animal("Toto");
		$nomeAnimal = $animal->get_name();
		echo $nomeAnimal . "<br /><br />";

    	$morcego = new MamiferoAve();
		$morcego->set_name("Batman");
		$morcego->mamaTeta();
		echo "<br /><br />";
		$morcego->botarOvo();
		echo "<br /><br />";
		echo $morcego->get_name();
		echo "<br /><br />";
    }
}

new Main();

?>