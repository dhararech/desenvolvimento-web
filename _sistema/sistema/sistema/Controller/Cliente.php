
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
}   