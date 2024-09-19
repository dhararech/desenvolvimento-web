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
    
        function inserirProduto($dados)
        {
            try
            {
                $this->nome = $dados["nome"];
                $this->mensagem = $dados["mensagem"];
    
                //Inserir Imagem (Arquivo)
                $md5 = md5(time());
                $this->foto = $md5.$_FILES["foto"]["name"];
                $this->foto_tamanho = $_FILES["foto"]["size"];
                $this->foto_tipo = $_FILES["foto"]["type"];
    
                $caminho = __DIR__ . "/imagem/";
    
                if(strpos($this->foto_tipo, "png" ) && $this->foto_tamanho < 10000000000 )
                {
                    move_uploaded_file($_FILES["foto"]["tmp_name"],$caminho . $this->foto );
    
                    //Inserir no Banco de Dados
                    $cst = $this->con->conectar()->prepare("INSERT INTO produto (nome,foto,mensagem) VALUES(:nome,:foto,:mensagem) ");
                    $cst->bindParam("nome",$this->nome,PDO::PARAM_STR);
                    $cst->bindParam("foto",$this->foto,PDO::PARAM_STR);
                    $cst->bindParam("mensagem",$this->mensagem,PDO::PARAM_STR);
                }
                else
                {
                    echo "<script>alert('Apenas PNG e Menor que 1 Mega');top.location.href='../produto.php'; </script>";
                }
    
                if($cst->execute())
                {
                    return "ok";
                }
                else
                {
                    echo "Não foi Possível";
                }
            }
            catch (PDOException $ex)
            {
                echo $ex->getMessage();
            }
        }
    
        //Método para Listar Produto (Imagem)
        public function listarProdutos()
        {
            try {
                $cst = $this->con->conectar()->prepare("SELECT * FROM produto");
                $cst->execute();
                return $cst->fetchAll();
            }catch (PDOException $ex)
            {
                echo $ex->getMessage();
            }
        }
    
        //Editar
        public function queryUpdate($dados)
        {
            try
            {
                $this->id = $this->objfcn->base64($dados['func'], 2);
                $this->nome = $dados['nome'];
                $this->mensagem = $dados['mensagem'];
    
                //Para Editar a Imagem
                $md5 = md5(time());
                $this->foto = $md5.$_FILES["foto"]["name"];
                $this->foto_tamanho = $_FILES["foto"]["size"];
                $this->foto_tipo = $_FILES["foto"]["type"];
    
                $caminho = __DIR__ . "/imagem/";
    
                if(strpos($this->foto_tipo, "png" ) && $this->foto_tamanho < 10000000000 ) {
    
                    move_uploaded_file($_FILES["foto"]["tmp_name"], $caminho . $this->foto);
    
    
                    $cst = $this->con->conectar()->prepare("UPDATE produto SET  nome = :nome, foto = :foto,  mensagem = :mensagem WHERE id = :idProduto");
    
                    $cst->bindParam(":idProduto", $this->id, PDO::PARAM_INT);
                    $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
                    $cst->bindParam(":foto", $this->foto, PDO::PARAM_STR);
                    $cst->bindParam(":mensagem", $this->mensagem, PDO::PARAM_STR);
                }
                else
                    {
                        echo "<script>alert('Apenas PNG e Menor que 1 Mega');top.location.href='../produto.php'; </script>";
                    }
    
                if($cst->execute())
                {
                    return 'ok';
                }
                else
                {
                    echo '<script type="text/javascript">alert("Não  alterou");</script>';
                }
            }
            catch (PDOException $ex)
            {
                print_r ($ex->getMessage());
            }
        }
    
        //Método Selecionar id (Editar)
        public function querySelecionaid($dado)
        {
            try
            {
                $this->id = $this->objfcn->base64($dado, 2);
                $cst = $this->con->conectar()->prepare("SELECT id, nome, foto, mensagem FROM produto WHERE id = :idProduto ");
                $cst->bindParam(":idProduto", $this->id, PDO::PARAM_INT);
                $cst->execute();
                return $cst->fetch();
            } catch (PDOException $ex) {
                return 'error '.$ex->getMessage();
            }
        }
    
        //Método para Selecionar a Foto
        public function selecionarFoto()
        {
            try {
                $cst = $this->con->conectar()->prepare("SELECT * FROM produto  WHERE  id = :id ");
                $cst->bindValue(":id",$this->id,PDO::PARAM_INT);
    
                $cst->execute();
    
                return $cst->fetchAll();
    
            }catch (PDOException $ex)
            {
                echo $ex->getMessage();
            }
        }
    
    
        //Método para Deletar
        public function queryDelete($dado)
        {
            try
            {
                $this->id = $this->objfcn->base64($dado, 2);
                $cst = $this->con->conectar()->prepare("DELETE FROM produto WHERE id = :idProduto");
                $cst->bindValue(":idProduto",$this->id,PDO::PARAM_INT);
    
                foreach ($this->selecionarFoto() as $rst)
                {
                    if($rst["id"] == $rst["foto"])
                    {
                        unlink(__DIR__ . "/imagem/" .$rst["foto"] );
                    }
                    else
                    {
                        unlink(__DIR__ . "/imagem/" .$rst["foto"] );
                    }
                }
    
                if($cst->execute())
                {
                    return 'ok';
                }
                else
                {
                    echo "Não foi possível Deletar";
                }
    
            }
            catch (PDOException $exc)
            {
                echo $exc->getTraceAsString();
            }
        }
    
    
    
    
    
    }