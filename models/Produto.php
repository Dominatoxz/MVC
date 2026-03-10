<?php
//Define o que o sistema é!
//Model é responsável pelos dados
class Produto {
    public static function todos() {
        //public static - permite chamar o método todos diretamente na classe
        //static: se precisar cirar objeto para usar na classe ou não
        return [ // => operador de atribuição de array
            ['nome' => 'Teclado Mecânico', 'preco' => 250],
            ['nome' => 'Mouse Gamer', 'preco' => 150],
            ['nome' => 'Monitor 144hz', 'preco' => 1200]
        ];
    }
}

?>