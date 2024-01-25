<?php

    class Movies{
        public $titolo;
        public $genere;
        public $imageUrl;
        public $data_pubblicazione;

           /**
         * Construct function that generate a movie.
         * 
         * @param String $titolo The Movies's title.
         * @param String $genere The Movies's genrs.
         * @param String $imgUrl The image Url of the movie.
         * @param String $data_pubblicazione The release date of the movie.
         */

        public function __construct(String $titolo, String $genere, String $imageUrl, String $data_pubblicazione){
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->imageUrl = $imageUrl;
            $this->data_pubblicazione = $data_pubblicazione;
        }

        public function getTitle() {
            return $this->titolo;
        }

        public function getGenre() {
            return $this->genere;
        }

    }

    ?>