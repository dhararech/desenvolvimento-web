<?php
     require_once "../../vendor/autoload.php";

     class Cliente {

        private $id;
        private $nome;
        private $estado;
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

       
        public function getEstado()
        {
                return $this->estado;
        }

        
        public function setEstado($estado): self
        {
                $this->estado = $estado;

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

         
        public function __construct (){
            $this->con = new Conexao();
            $this->objfn = new Funcoes();
        }

        //Método para Inserir Cliente
        public function inserirCliente($dados){
         
         try{
            $this->nome = $dados['nome'];
            $this->estado = $dados['estado'];
            $this->mensagem = $dados['mensagem'];


           
            $cst =  $this->con->conectar()->prepare("INSERT INTO clientes (nome,estado,mensagem) VALUES (:nome,:estado, :mensagem) ");
            $cst->bindParam(":nome" , $this->nome , PDO::PARAM_STR);
            $cst->bindParam(":estado" , $this->estado , PDO::PARAM_INT);
            $cst->bindParam(":mensagem" , $this->mensagem , PDO::PARAM_STR);

            if($cst->execute() ){
                  return "ok";
            } else{
               echo "Não deu";
            }

         }catch(PDOExecption $ex){
            echo $ex;
         }

        }

        //Método para Listar Clientes
        public function selecionarCliente(){
         
                try{

                        $cst =  $this->con->conectar()->prepare("SELECT i.id, i.nome, i.mensagem, t.estado
                        FROM clientes i
                        join estado t on t.id = i.estado");

                        $cst->execute();

                        return $cst->fetchAll();

                }catch(PDOExecption $ex){
                        echo $ex;
                }
        }

        public function selecionarEstado()
        {
            try
            {
                $cst = $this->con->conectar()->prepare("SELECT id, estado FROM estado ");
                $cst->execute();

                return $cst->fetchAll();
            }

            catch(PDOException $ex)
            {
                echo $ex;
            }
        }
        //Método para Recuper o ID do Banco de Dados
        public function selecionaId($dado) {
                try{
                    $this->id = $this->objfn->base64($dado, 2);
                    $cst = $this->con->conectar()->prepare("SELECT id, nome, estado, mensagem FROM clientes WHERE id = :idCliente ");
                    $cst->bindParam(":idCliente", $this->id, PDO::PARAM_INT);
    
                        $cst->execute();
    
                        return $cst->fetch();
                }
                catch(PDOException $ex){
                    echo $ex;
                }
            }

        //Método Editar
        public function editarCliente($dados){
                try{

                        $this->id = $this->objfn->base64($dados['func'],2);
                        $this->nome = $dados['nome'];
                        $this->estado = $dados['estado'];
                        $this->mensagem = $dados['mensagem']; 

                        $cst = $this->con->conectar()->prepare("UPDATE clientes SET nome = :nome ,estado = :estado, mensagem = :mensagem WHERE id = :idCliente");
                        $cst->bindParam(":idCliente" , $this->id , PDO::PARAM_INT);
                        $cst->bindParam(":nome" , $this->nome , PDO::PARAM_STR);
                        $cst->bindParam(":estado" , $this->estado , PDO::PARAM_STR);
                        $cst->bindParam(":mensagem" , $this->mensagem , PDO::PARAM_STR);
                        
                        if($cst->execute()){
                                return "ok";
                        }else{
                                echo "Não editou";
                        }

                }catch(PDOException $ex) {
                        echo $ex;
                }        

        }
        //Método para Deletar 
        public function deletarId($dado){
                try{
                        $this->id = $this->objfn->base64($dado, 2);
            
                        $cst = $this->con->conectar()->prepare("DELETE FROM clientes WHERE id= :idCliente");
                        $cst->bindParam(":idCliente" , $this->id, PDO::PARAM_INT);
                            if($cst->execute()){
                                return "ok";
                            } else{
                                return "Não deu";
                            }
                        }catch(PDOException $ex){
                            echo $ex;
                        }
        }
        //Método para Pesquisar Clientes
        public function querySelecionaFiltro($filtro) {
                try
                {
                        $cst = $this->con->conectar()->prepare("
                        SELECT i.id, i.nome, i.mensagem, e.estado
                        FROM clientes i
                        JOIN estado e ON e.id = i.estado
                        WHERE i.nome LIKE :filtro
                        ");

                $filtro = "%$filtro%";
                $cst->bindParam(':filtro', $filtro, PDO::PARAM_STR);
        
                $cst->execute();
        
                return $cst->fetchAll();
            }
            catch (PDOException $ex)
            {
                echo $ex->getMessage(); 
            }
        }
} 

?>