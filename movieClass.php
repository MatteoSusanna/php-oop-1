<?php
    class Movie{

        public $titolo;
        public $genere;
        public $copertina;

        public function __construct($titolo, $genere, $copertina)
        {
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->copertina = $copertina;
        }
        public function getTitleGenresUrl(){
            echo    '<div class="card">' .
                        "<div class='wrapper_img'><img src='  $this->copertina  '></div>". 
                        '<h2>'.$this->titolo . '</h2>' . ' ' . '<span>' . $this->genere . '</span>' .
                    '</div>';
        }
    }
?>
