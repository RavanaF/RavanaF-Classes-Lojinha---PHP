<?php


class Produtos{
    private $idProduto     = '';
    private $fabriante     = '';
    private $nome          = '';
    private $modelo        = '';
    private $idCategoria   = '';
    private $descricao     = '';
    private $unidadeMedida = '';
    private $largura       = '';
    private $altura        = '';
    private $profundidade  = '';
    private $peso          = '';
    private $cor           = '';
    
    
    function __construct($idProduto, $fabriante, $nome, $modelo, $idCategoria, $descricao, $unidadeMedida, $largura
, $altura, $profundidade, $peso, $cor){
        $this->setIdProduto($idProduto);
        $this->setFabriante($fabriante);
        $this->setNome($nome);
        $this->setModelo($modelo);
        $this->setIdCategoria($idCategoria);
        $this->setDescricao($descricao);
        $this->setUnidadeMedida($unidadeMedida);
        $this->setLargura($largura);
        $this->setAltura($altura);
        $this->setProfundidade($profundidade);
        $this->setPeso($peso);
        $this->setCor($cor);
    }

    public function getIdProduto(){
        return $this->idProduto;
    }

    public function setIdProduto($idProduto){
        $this->idProduto = $idProduto;
        return $this;
    }

    public function getFabriante(){
        return $this->fabriante;
    }

    public function setFabriante($fabriante){
        $this->fabriante = $fabriante;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
        return $this;
    }

    public function getIdCategoria(){
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria){
        $this->idCategoria = $idCategoria;
        return $this;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
        return $this;
    }

    public function getUnidadeMedida(){
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida($unidadeMedida){
        $this->unidadeMedida = $unidadeMedida;
        return $this;
    }

    public function getLargura(){
        return $this->largura;
    }

    public function setLargura($largura){
        $this->largura = $largura;
        return $this;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
        return $this;
    }

    public function getProfundidade(){
        return $this->profundidade;
    }

    public function setProfundidade($profundidade){
        $this->profundidade = $profundidade;
        return $this;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
        return $this;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
        return $this;
    }

}


?>