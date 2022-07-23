<?php include '_head.php';?>

<div class="col-sm">

 <?php do { ;?>  


      <table class="table">
        
        <tr>
          <td><img src="../veiculos/vtrimg/<?=$row_detmapa["vtrimg"]; ?>" width="60px"></td>
          <td><?=$row_detmapa["vtrtipo"]; ?></td>
          <td><?=$row_detmapa["grad"]." ".$row_detmapa["nomeguerra"]; ?></td>
          <td><i class="far fa-clock"></i> <?=date('H:i', strtotime($row_detmapa['horasaida']))."h / ".date('H:i', strtotime($row_detmapa['horaentr']))."h" ;?></td>
          <td><i class='fas fa-tachometer-alt'></i> <?=$row_detmapa["odomentr"];?> / <?=$row_detmapa["odomsaida"];?></td>
          <td><i class="bi bi-geo-alt"></i> <?=$row_detmapa['destino']?></td>
        </tr>
      </table>  

<?php } while ($row_detmapa = mysqli_fetch_assoc($result_detmapa)); ?>
</div>


<?php include '../templates/footer.php';?>

