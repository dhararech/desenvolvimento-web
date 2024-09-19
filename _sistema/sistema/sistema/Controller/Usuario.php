<?php
     require_once "../../vendor/autoload.php";

     class Usuario {

        private $id;
        private $nome;
        private $email;
        private $senha;
        private $mensagem;
       

       
        public function getId()
        {
                return $this->id;
        }

        
        public function setId($id): self
        {
                $this->id = $id;

                return $this;
        }

        
        public function getNome()
        {
                return $this->nome;
        }

       
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

       
        public function getEmail()
        {
                return $this->email;
        }

       
        public function setEmail($email): self
        {
                $this->email = $email;

                return $this;
        }

       
        public function getSenha()
        {
                return $this->senha;
        }

       
        public function setSenha($senha): self
        {
                $this->senha = $senha;

                return $this;
        }

       
        public function getMensagem()
        {
                return $this->mensagem;
        }

       
        public function setMensagem($mensagem): self
        {
                $this->mensagem = $mensagem;

                return $this;
        }
        
        //Chamar Conexao com Banco de dados
        public function __construct (){
            $this->con = new Conexao();
            $this->objfn = new Funcoes();
        }
        //Método para Inserir Cliente
       
        //Método para Listar usuario
        
        //Método para Recuper o ID do Banco de Dados
       

        
        //Método Editar
        
        //Método para Deletar 
        
        //Método Logar
       
        //Método Verificar Usuario imprime a Sessao de dados
        
        //Método para Deslogar Usuário
        
         // Método para Obter usuários
       
        // Método para contar o total de usuários
       


} 

?>