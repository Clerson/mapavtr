<?php
    include "../conexao.php";

    $sql = "SELECT * FROM contatos";

    if(!empty($_GET['id'])) {

        $id = $_GET['id'];
        $sql = "SELECT * FROM contatos WHERE id=$id";
        
    }

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);




// --------------------------------------------------------------------------------- 

if(!empty($_POST['acao'])) {

        $acao = $_POST['acao'];
        $id_entid = $_POST["id_entid"];
        $tipo = $_POST["tipo"];
        $contato = $_POST["contato"];
        $email = $_POST["email"];
        $observ = $_POST["observ"];
        
    if($acao == 'insert') {
        
        $sql = "INSERT INTO contatos(id_entid, tipo, contato, email, observ)
        VALUES ($id_entid, '$tipo', '$contato', '$email', '$observ')";

          if ($conn->query($sql) === TRUE) {
            $ultimo_registro = $conn->insert_id;
                    
                  // echo "<script>alert('Novo registro inserido com sucesso');</script>";
                  echo "<script>location.href='/contatos/'</script>";
                  echo " 
                    <div class='conteiner-fluid text-center p-2'>
                    <button class='btn btn-primary' disabled>
                    <span class='spinner-border spinner-border-sm'></span>
                    Carregando... 
                    </button>
                    </div>
                    ";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                exit;
        }

     if($acao == 'update') {
        $id = $_POST['id'];
        $sql = "UPDATE contatos SET id_entid='$id_entid', tipo='$tipo', contato='$contato', email='$email' observ='$observ' WHERE id=$id";
                    echo " 
                    <div class='conteiner-fluid text-center p-2'>
                    <button class='btn btn-primary' disabled>
                    <span class='spinner-border spinner-border-sm'></span>
                    Carregando... 
                    </button>
                    </div>
                    ";
          if ($conn->query($sql) === TRUE) {
                


                  // echo "<script>alert('Novo registro inserido com sucesso');</script>";
                  echo "<script>location.href='/contatos'</script>";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }

    }



}
    
 ;?>