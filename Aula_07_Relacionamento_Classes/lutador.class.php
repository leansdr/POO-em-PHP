<?php

class Lutador {

    //Atributos
    private $nome,  $nacionalidade;
    private $idade, $altura, $sexo;
    private $peso, $categoria, $vitorias, $derrotas;
    private $empates; 

    //Metodo Especial - __construct
    public function __construct($no,$na,$id,$al,$se,$pe,$vi,$de,$em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->sexo = $se;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    //Métodos
     public function apresentar(){

        if($this->sexo == "M"){
            $lutador = 'O lutador';
            $pronome = 'Ele';
        }else {
            $lutador = 'A lutadora';
            $pronome = 'Ela';
        }

        if($this->vitorias > 1){
            $plural = 'vitorias';
        }else {
            $singular = 'vitoria';
        }

         echo "<p>--------------IT'S TIME---------------</p>";
         echo "<p>".$lutador." ".$this->getNome();
         echo " veio diretamente de ".$this->getNacionalidade();
         echo " tem ".$this->getIdade()." anos e pesa ".$this->getPeso()." Kg";
         echo "<br>" .$pronome. " tem ".$this->getVitorias()." ".$plural. ", ";
         echo $this->getDerrotas()." derrotas e ".$this->getEmpates()." empate(s)</p>";
     }
     
     public function status(){
         echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
         echo" e já ganhou " . $this->getVitorias() . " vezes, ";
         echo "perdeu " .$this->getDerrotas() . " vezes e ";
         echo "empatou " .$this->getEmpates() . " vezes</p>";
         echo "<p>--------------------------------------</p>";
    }

    public function ganharLuta(){
       $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
       $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
       $this->setEmpates($this->getEmpates() + 1);
    }

    //Métodos Especiais - Getters e Setters
    public function getNome(){
        return $this->nome;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    public function getEmpates(){
        return $this->empates;
    }

    public function setNome($no){
        $this->nome = $no;
    }

    public function setNacionalidade($na){
        $this->nacionalidade = $na;
    }

    public function setIdade($id){
        $this->idade = $id;
    }

    public function setAltura($al){
        $this->altura = $al;
    }

    public function setSexo($se){
        $this->sexo = $se;
    }

    public function setPeso($pe){
        $this->peso = $pe;
        $this->setCategoria();
    }

    private function setCategoria(){
        
        if($this->peso < 52.2){
            $this->categoria = 'Inválido';
        }  elseif($this->peso <= 70.3){
                $this->categoria = 'Leve';
            } elseif($this->peso <= 83.9){
                $this->categoria = 'Médio';
            } elseif($this->peso <= 120.2){
                $this->categoria = 'Pesado';
            } else {
                $this->categoria = 'Inválida';
            }
    }

    public function setVitorias($vi){
        $this->vitorias = $vi;
    }

    public function setDerrotas($de){
        $this->derrotas = $de;
    }

    public function setEmpates($em){
        $this->empates = $em;
    } 
}

?>