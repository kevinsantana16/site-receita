<?php 
include("conexao.php");

function extrator_text ($arg){
     if (!is_null($arg)){
            $conteudo_text = file_get_contents($arg);
            return $conteudo_text;
        }
    else{
        return null;
    }
}
        

class Imagem{
        public $propriedade_imagem;

        public function __construct($valor1){
            $this->propriedade_imagem = $valor1;

        }

        public function imagem_caminho(){
                $arquivo = $this->propriedade_imagem['tmp_name'];
                $tipo_mime = mime_content_type($arquivo);

                if (strpos($tipo_mime,'image') === 0 ){
                   $Caminho_Destino = "/site-receita/img/";
                    $nomeArquivo = uniqid() . "_" . $this->propriedade_imagem["name"];
                    $caminhoCompleto = $Caminho_Destino . $nomeArquivo;
                    
                        if (move_uploaded_file($this->propriedade_imagem["tmp_name"],  $caminhoCompleto)){
                                return  $caminhoCompleto;

                        }
                    
                        else{
                            return "erro";

                    }
                    
                }
    
                else {
                    return "erro";
                }
        }
    }


class Select_Receitas {
     public $id_receita;
     public $conexao;

     public function __construct($id_receita, $conexao){
        $this->id_receita = $id_receita;
        $this->conexao = $conexao;
     }

    public function Select_Receita(){
       
       $sql = "SELECT * FROM receita WHERE id=$this->id_receita";

        $dados_receita = mysqli_query($this->conexao,$sql);

         $resultado = mysqli_fetch_array($dados_receita, MYSQLI_BOTH);

        return $resultado;
         
        mysqli_free_result($dados_receita);
        mysqli_close($this->conexao);

    } 

}
?>