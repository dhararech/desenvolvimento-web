<?php
    require_once  "../../vendor/autoload.php";

    class Produto
    {
        private $id;
        private $nome;
        private $foto;
        private $foto_tipo;
        private $foto_tamanho;
        private $mensagem;
        private $con;
        private $objfcn;
    
       
        public function getPreco()
        {
            return $this->preco;
        }
    
        
        public function setPreco($preco)
        {
            $this->preco = $preco;
        }
    
    
    
    
    
        public function getObjfcn()
        {
            return $this->objfcn;
        }
    
        public function setObjfcn($objfcn)
        {
            $this->objfcn = $objfcn;
        }
    
      
        public function getId()
        {
            return $this->id;
        }
    
       
        public function setId($id)
        {
            $this->id = $id;
        }
       
        public function getCon()
        {
            return $this->con;
        }
    
        
        public function setCon($con)
        {
            $this->con = $con;
        }
    
       
        public function getNome()
        {
            return $this->nome;
        }
    
       
        public function setNome($nome)
        {
            $this->nome = $nome;
        }
    
        
        public function getFoto()
        {
            return $this->foto;
        }
    
        
        public function setFoto($foto)
        {
            $this->foto = $foto;
        }
    
       
        public function getFotoTipo()
        {
            return $this->foto_tipo;
        }
    
       
        public function setFotoTipo($foto_tipo)
        {
            $this->foto_tipo = $foto_tipo;
        }
    
       
        public function getFotoTamanho()
        {
            return $this->foto_tamanho;
        }
    
       
        public function setFotoTamanho($foto_tamanho)
        {
            $this->foto_tamanho = $foto_tamanho;
        }
    
        
        public function getMensagem()
        {
            return $this->mensagem;
        }
    
       
        public function setMensagem($mensagem)
        {
            $this->mensagem = $mensagem;
        }
    
    
        public function __construct()
        {
            $this->con = new Conexao();
            $this->objfcn = new Funcoes();
        }
    
    }