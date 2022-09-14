<?php

$idmapa = $_SESSION['idmapa'];
$sql_detmapa2 = "SELECT idvtr FROM detmapa WHERE idmapa=$idmapa GROUP BY idvtr";
$result_detmapa2 = $conn->query($sql_detmapa2);
$row_detmapa2 = $result_detmapa2->fetch_assoc();

    do { 

    $idvtr = $row_detmapa2['idvtr']; 
    $sql_vtr_m = "SELECT * FROM vtr WHERE vtrid = $idvtr AND vtrstatus='ativa' ORDER BY vtrtipo ASC";
    $result_vtr_m = $conn->query($sql_vtr_m);
    $row_vtr_m = $result_vtr_m->fetch_assoc();


    ;?>  

<div class="col-sm m-1 p-1 shadow rounded-3">

  <a href="analit.php?idmapa=<?=$idmapa;?>&idvtr=<?=$row_vtr_m['vtrid'];?>">

    <img  src="../veiculos/vtrimg/<?=$row_vtr_m['vtrimg']; ?>" width="100%">

    <div class="btn-warning p-2 text-center rounded-3"><?=$row_vtr_m["vtrtipo"]; ?></div>

  </a>
  
</div>
    

<?php } while ($row_detmapa2 = $result_detmapa2->fetch_assoc()); ?>
