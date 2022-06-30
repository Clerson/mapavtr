<?php include '_head.php';?>

<div class="col-sm">
 
 <div class="row">

  <?php

do { 

    if($row_detmapa['detmp_status'] == 'aberta') {

      echo "<div class='col-sm-2 m-1 p-1 shadow rounded'>";
    }

    else echo "<div class='col-sm-2 m-1 p-1 rounded bg-secondary'>";   

    ;?>  

      <a href="#" data-bs-toggle="modal" data-bs-target="#iddetmp<?=$row_detmapa['iddetmp'] ;?>">
        <div class="btn-warning p-2 text-center rounded"><?=$row_detmapa["vtrtipo"]; ?></div>
        <img  src="../veiculos/vtrimg/<?=$row_detmapa["vtrimg"]; ?>" width="100%">
      </a>
      <div class="bg-light text-center rounded" style="font-size: 12px;">
        <i class="fas fa-route"></i> <?=$row_detmapa['destino']?> <br/>
        <i class="far fa-clock"></i> <?=date('H:i', strtotime($row_detmapa['horasaida']))."h / ".date('H:i', strtotime($row_detmapa['horaentr']))."h" ;?>
      </div>

    </div>


<?php 

include '_form_update.php';

include '_form_modal.php';

include '_form_delete.php';

} while ($row_detmapa = mysqli_fetch_assoc($result_detmapa)); ?>

</div>

</div>

<div class="col-sm-2"> <?php include '_sint.php';?> </div>

</div>

</div>


<?php include '../templates/footer.php';?>

<script src="atualizaOdomVtr.js"></script>
