<?php
    interface Veiculo {
        public function acelerar($velocidade);
        public function freiar($velocidade);
        public function trocar($marcha);
    }

    abstract class Auto implements Veiculo {
        public function acelerar($velocidade) {
            echo "Aceleração: ".$velocidade;
        }

        public function freiar($velocidade) {
            echo "Frenagem: ".$velocidade;
        }

        public function trocar($marcha) {
            echo "Marcha: ".$marcha;
        }
    }

    class Gol extends Auto {
        public function empurrar() {
            echo "Empurrando o carro velho";
        }
    }
?>