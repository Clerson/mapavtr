<?php

$idmapa = $_SESSION['idmapa'];
$sql_detmapa2 = "SELECT idvtr FROM detmapa WHERE idmapa=$idmapa GROUP BY idvtr";
$result_detmapa2 = mysqli_query($conn, $sql_detmapa2);
$row_detmapa2 = mysqli_fetch_assoc($result_detmapa2);

    do { 

    $idvtr = $row_detmapa2['idvtr']; 
    $sql_vtr_m = "SELECT * FROM vtr WHERE vtrid = $idvtr AND vtrstatus='ativa' ORDER BY vtrtipo ASC";
    $result_vtr_m = mysqli_query($conn, $sql_vtr_m);
    $row_vtr_m = mysqli_fetch_assoc($result_vtr_m);


    ;?>  

<div class="col-sm m-1 p-1 shadow rounded-3">

  <a href="analit.php?idmapa=<?php echo $idmapa;?>&idvtr=<?php echo $row_vtr_m['vtrid'];?>">

    <img  src="../veiculos/vtrimg/<?php echo $row_vtr_m['vtrimg']; ?>" width="100%">

    <div class="btn-warning p-2 text-center rounded-3"><?php echo $row_vtr_m["vtrtipo"]; ?></div>

  </a>
  
</div>
    

<?php } while ($row_detmapa2 = mysqli_fetch_assoc($result_detmapa2)); ?>
