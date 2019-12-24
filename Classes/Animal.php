<?php

class Animal
{
	  private $nome;

	  function __construct($nome) {
    	  $this->nome = $nome;
    }

  	protected function get_name() {
    	return $this->nome;
  	}

  	protected function set_name($nome) {
    	return $this->nome = $nome;
  	}
}

?>