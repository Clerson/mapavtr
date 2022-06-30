<?php
    include "../conexao.php";

// ----- SELECIONA TODAS AS ENTIDADES -----

    $sql = "SELECT * FROM entidades";

// ----- FILTRA AS ENTIDADES PELO ID -----

    if(!empty($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM entidades WHERE id=$id";
    }


// ------ DEFINE A PAGINAÇÃO -----

    $itens_por_pagina = 30;

    $p = (isset($_GET['p']))?$_GET['p']:1;

    $inicio = ($itens_por_pagina*$p)-$itens_por_pagina;

    $sql_lim = $sql." LIMIT $inicio, $itens_por_pagina"; 
    
    if (!empty($_POST['entidades'])) {
      $entidades = mysqli_real_escape_string($conn, $_POST["entidades"]);
      $sql_lim = $sql." WHERE nome LIKE '%$entidades%' OR sigla LIKE '%$entidades%' OR organizacao LIKE '%$entidades%' OR responsavel LIKE '%$entidades%'";
    } 

// ----- MONTA A QUERY ----

    $result = mysqli_query($conn, $sql);
    $result_lim = mysqli_query($conn, $sql_lim);
    $row = mysqli_fetch_assoc($result_lim);
    
    $num_total =  mysqli_num_rows($result);

    $num_paginas = ceil($num_total/$itens_por_pagina);

// ----- ATRIBUI VALOR DA CONSULTA AS VARIAVEIS -----

        $id = $row["id"];
        $nome = $row["nome"];
        $sigla = $row["sigla"];
        $organizacao = $row["organizacao"];
        $responsavel = $row["responsavel"];
        $ramo = $row["ramo"];
        $sede = $row["sede"];
        $natureza = $row["natureza"];
        $endereco = $row["endereco"];

// ----- ATRIBUI VALOR AS VARIAVEIS A PARTIR DO FORMULÁRIO EXTERNO ---- 

if(!empty($_POST['acao'])) {

        $acao = $_POST['acao'];
        $nome = $_POST["nome"];
        $sigla = $_POST["sigla"];
        $organizacao = $_POST["organizacao"];
        $responsavel = $_POST["responsavel"];
        $ramo = $_POST["ramo"];
        $sede = $_POST["sede"];
        $natureza = $_POST["natureza"];
        $endereco = $_POST["endereco"];  


// ----- EXECUTA INSERT NO BD ----
        
    if($acao == 'insert') {
        
        $sql = "INSERT INTO entidades(nome, sigla, organizacao, responsavel, ramo, sede, natureza, endereco)
        VALUES ('$nome', '$sigla', '$organizacao', '$responsavel', '$ramo', '$sede', 'natureza', 'endereco')";

          if ($conn->query($sql) === TRUE) {
            $ultimo_registro = $conn->insert_id;
                    


                  // echo "<script>alert('Novo registro inserido com sucesso');</script>";
                  echo "<script>location.href='/entidades/'</script>";
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


// ----- EXECUTA UPDATE NO BD -----

     if($acao == 'update') {
        $id = $_POST['id'];
        $sql = "UPDATE entidades SET nome='$nome', sigla='$sigla', organizacao='$organizacao', responsavel='$responsavel',  ramo='$ramo', sede='$sede', natureza='$natureza', endereco='$endereco' WHERE id=$id";
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
                  echo "<script>location.href='/entidades'</script>";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
    }

} // --- FIM DA _POST ACAO
    
 ;?>