<?php
    require_once('db.php');

    class Produto{
        public $id = -1;
        public $descricao = '';
        public $observacao = '';
        public $preco = 0.00;
        public $especialidade = false;
        public $peso = 0.000;
        // public $ingredientes = [];

        private static function get_conexao() {
            $db = new db();

            return $db->conecta_mysql();
        }

        public static function all() {
            return Produto::executa(" SELECT p.* FROM produtos p ORDER BY p.descricao ");
        }

        public static function especialidades() {
            return Produto::executa(" SELECT p.* FROM produtos p WHERE p.especialidade = TRUE ORDER BY p.descricao ");
        }

        private static function executa($sql) {
            $con = Produto::get_conexao();

            $query = mysqli_query($con, $sql) or die ("Erro ao Consultar os Produtos!");

            $count = 0;
            $retorno = [];
            
            while ($registro = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                $retorno[$count++] = Produto::map_object($registro);
            }

            return $retorno;
        }

        private static function map_object($registro) {
            $produto = new Produto();

            $produto->id = $registro['id'];
            $produto->descricao = $registro['descricao'];
            $produto->observacao = $registro['observacao'];
            $produto->preco = $registro['preco'];
            $produto->especialidade = $registro['especialidade'];
            $produto->peso = $registro['peso'];
            // $produto->ingredientes = $registro['ingredientes'];

            return $produto;
        }
    }
?>