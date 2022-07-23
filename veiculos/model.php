<?php
   include "../conexao.php";

$sql = "SELECT * FROM vtr ORDER BY vtrtipo ASC";

	if (!empty($_GET['vtrid'])) {
	    
	    $vtrid = $_GET['vtrid'];
	    $sql = "SELECT * FROM vtr WHERE vtrid = $vtrid";   
  }

  if (!empty($_GET['idvtr'])) { // USADO EM MAPADET
      
      $vtrid = $_GET['idvtr'];
      $sql = "SELECT * FROM vtr, detmapa WHERE idvtr = vtrid AND vtrid = $vtrid";
  }

    if (!empty($_POST['vtrstatus'])) {
      
      $vtrstatus = $_POST['vtrstatus'];
      $sql = "SELECT * FROM vtr WHERE vtrstatus = '$vtrstatus'";   
  }

	  if (!empty($_GET['idmapa']) ) { 
      $sql = "SELECT * FROM vtr WHERE vtrstatus='ativa' ORDER BY vtrtipo ASC";
    } // usado na form da index

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['acao'])) {

	 $acao = $_POST['acao'];
    $vtrpref = $_POST["vtrpref"];
    $vtrtipo = $_POST["vtrtipo"];
    $vtrmarcamod = $_POST["vtrmarcamod"];
    $vtrano = $_POST["vtrano"];
    $vtrstatus = $_POST["vtrstatus"];
    $vtrplaca = $_POST["vtrplaca"];
    $vtrchassi = $_POST["vtrchassi"];
    $vtrrenavan = $_POST["vtrrenavan"];
    $vtrcombustivel = $_POST["vtrcombustivel"];
    $vtrpneu = $_POST["vtrpneu"];
    $vtrodomatual = $_POST["vtrodomatual"];
    $vtroutros = $_POST["vtroutros"];
    $vtrvaloratualtgr = $_POST["vtrvaloratualtgr"];
    $vtrespecie = $_POST["vtrespecie"];
    $vtrclasse = $_POST["vtrclasse"];

     if($acao == 'vtrupdate') {    

      $vtrid = $_POST["vtrid"];

      $sql = "UPDATE vtr SET 
      vtrpref='$vtrpref', 
      vtrtipo='$vtrtipo', 
      vtrmarcamod='$vtrmarcamod', 
      vtrano='$vtrano', 
      vtrstatus='$vtrstatus', 
      vtrplaca='$vtrplaca', 
      vtrchassi='$vtrchassi', 
      vtrrenavan='$vtrrenavan', 
      vtrcombustivel='$vtrcombustivel', 
      vtrpneu='$vtrpneu',
      vtrodomatual=$vtrodomatual,
      vtroutros='$vtroutros', 
      vtrvaloratualtgr=$vtrvaloratualtgr, 
      vtrespecie='$vtrespecie', 
      vtrclasse='$vtrclasse'

      WHERE vtrid=$vtrid";

    if ($conn->query($sql) === TRUE) {      

      echo "<script>location.href='/veiculos/_form_update.php?idvtr=$vtrid'</script>";              
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }

    }

    if($acao == 'vtrinsert') {

    	$sql = "INSERT INTO vtr (
      vtrpref, 
      vtrtipo, 
      vtrmarcamod, 
      vtrano, 
      vtrstatus,
      vtrplaca, 
      vtrchassi, 
      vtrrenavan, 
      vtrcombustivel, 
      vtrpneu,
      vtrodomatual,
      vtroutros, 
      vtrvaloratualtgr, 
      vtrespecie, 
      vtrclasse
        )
    	VALUES (
        '$vtrpref', 
        '$vtrtipo', 
        '$vtrmarcamod', 
        '$vtrano', 
        '$vtrstatus',
        '$vtrplaca',
        '$vtrchassi',
        '$vtrrenavan',
        '$vtrcombustivel',
        '$vtrpneu',
        '$vtroutros',
        $vtrodomatual,
        $vtrvaloratualtgr,
        '$vtrespecie',
        '$vtrclasse'
      )";

    }

    if ($conn->query($sql) === TRUE) {      

      echo "<script>location.href='/veiculos'</script>";              
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }

} 


  if(isset($_GET['delete'])) {

    $vtrid = $_GET['delete'];

     $sql = "DELETE FROM vtr WHERE vtrid=$vtrid";

            echo " 
            <div class='conteiner-fluid text-center p-2'>
            <button class='btn btn-primary' disabled>
            <span class='spinner-border spinner-border-sm'></span>
            Carregando... 
            </button>
            </div>
            ";

     if ($conn->query($sql) === TRUE) {
        echo "
        <script>location.href='index.php'</script>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      } exit();
    
    } // FIM DA if(($acao) == 'delete')