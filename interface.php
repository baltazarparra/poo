<?php
    interface Veiculo {
        public function acelerar($velocidade);
        public function freiar($velocidade);
        public function trocar($marcha);
    }

    class Gol implements Veiculo {
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
?>