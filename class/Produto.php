<?php

  class Produto {

    private $id;
    private $nome;
    private $preco;
    private $usado;
    private $categoria;
    private $descricao;

    function __construct($nome, $preco, $descricao, Categoria $categoria, $usado) {
      $this->nome = $nome;
      $this->preco = $preco;
      $this->descricao = $descricao;
      $this->categoria = $categoria;
      $this->usado = $usado;
    }

    function __toString() {
      return $this->nome.": R$ ".$this->preco;
    }

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getNome() {
      return $this->nome;
    }

    public function getPreco() {
      return $this->preco;
    }

    public function isUsado() {
      return $this->usado;
    }

    public function setUsado($usado) {
      $this->usado = $usado;
    }

    public function getCategoria() {
      return $this->categoria;
    }

    public function getDescricao() {
      return $this->descricao;
    }

    public function precoComDesconto($desconto) {
      if ($desconto > 0 && $desconto <= 50) {
        $this->preco -= $this->preco * ($desconto/100);
      }
      return $this->preco;
    }

  }
