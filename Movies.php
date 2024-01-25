<?php

    class Movies{
        public $titolo;
        public $genere;
        public $cast;
        public $data_pubblicazione;

        public function __construct(String $titolo, String $genere, Float $cast, Float $data_pubblicazione){
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->cast = $cast;
            $this->data_pubblicazione = $data_pubblicazione;
        }

        public function getName() {
            echo $this->titolo;
        }

        public function getGenre() {
            echo $this->genere;
        }

        public function getWeight() {
            echo $this->cast;
        }
    }

    ?>