<?php

$sql_detmapa = "SELECT * FROM detmapa, pessoas, veiculos WHERE  idpessoa=codmil AND idvtr = vtrid ORDER BY iddetmp DESC";

  if(isset($_REQUEST['idmapa'])) {
    $_SESSION['idmapa'] = $_REQUEST['idmapa'];
    $idmapa = $_SESSION['idmapa'];
    $sql_detmapa = "SELECT idvtr FROM detmapa WHERE idmapa=$idmapa GROUP BY idvtr";  

    ;} 

// FIM DA GET IDMAPA --------- ACESSADO PELA PAGINA "sint.php"

  if(isset($_GET['idvtr'])) {

     $idvtr = $_GET['idvtr'];
     $sql_detmapa = "SELECT * FROM detmapa, vtr, pessoas  WHERE idmapa = $idmapa AND idvtr = $idvtr AND idvtr = vtrid AND idpessoa = codmil ORDER BY iddetmp DESC ";
  }

// FIM DA GET idvtr --------- ACESSADO PELA PAGINA "analit.php"


    
if(isset($_GET['iddetmp'])) {

     $iddetmp = $_GET['iddetmp'];
     $sql_detmapa = "SELECT * FROM detmapa, vtr, pessoas WHERE iddetmp = $iddetmp AND idvtr = vtrid AND idpessoa = codmil";

} 
 
    $result_detmapa = mysqli_query($conn, $sql_detmapa);  
    $row_detmapa = mysqli_fetch_assoc($result_detmapa); 
   
      

      
if (!empty($_POST['idmapa'])) {  

    $idmapa = $_POST['idmapa'];
    $idvtr = $_POST["idvtr"];
    $idpessoa = $_POST["pessoa"];
    $odomsaida = $_POST["odomsaida"];
    $odomentr = $_POST["odomentr"];
    $horasaida = $_POST["horasaida"];
    $horaentr = $_POST["horaentr"];
    $destino = $_POST["destino"];
    $status = $_POST["status"];
    $obs = $_POST["obs"];

        $sql_acao = "INSERT INTO detmapa(idmapa, idvtr, idpessoa, odomsaida, odomentr, horasaida, horaentr, destino, detmp_status, obs)
        VALUES ($idmapa, $idvtr, $idpessoa, $odomsaida, $odomentr, '$horasaida', '$horaentr', '$destino', '$status','$obs')";
        
        
        if(!empty($_POST['iddetmp'])) {
        
        $iddetmp = $_POST['iddetmp'];
        $sql_acao = "UPDATE detmapa SET idmapa = $idmapa, idvtr = $idvtr, idpessoa = $idpessoa, odomsaida = $odomsaida, odomentr = $odomentr, horasaida = '$horasaida', horaentr = '$horaentr', destino = '$destino',  detmp_status = '$status', obs = '$obs' WHERE iddetmp = $iddetmp";

        $sql_update_odom = "UPDATE vtr SET vtrodomatual = $odomentr WHERE vtrid = $idvtr";
        $conn->query($sql_update_odom);
        
        }



    if ($conn->query($sql_acao) === TRUE) {            
 
      echo "<script>location.href='analit.php?idmapa=".$idmapa."&idvtr=".$idvtr."'</script>";
    } else {
      echo "Error: " . $sql_acao . "<br>" . $conn->error;
    }

;}

if(isset($_GET['delete'])) {

    $iddetmp = $_GET['delete'];
    $idvtr = $_GET['idvtr'];

     $sql_detmapa = "DELETE FROM detmapa WHERE iddetmp=$iddetmp";

     if ($conn->query($sql_detmapa) === TRUE) {

       if ($_GET['idvtr'] === FALSE) { echo "<script>location.href='analit.php?idmapa=".$idmapa."&idvtr=".$idvtr."'</script>"; } 

       echo "<script>location.href='index.php?idmapa=".$idmapa."'</script>";

      } else {
        echo "Error: " . $sql_detmapa . "<br>" . $conn->error;
      } exit();
     } // FIM DA if(($acao) == 'delete') 

;?>