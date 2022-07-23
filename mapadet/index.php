<?php include '_head.php';


   if(mysqli_num_rows($result_detmapa) > 0) {

        do { 

        $idvtr = $row_detmapa['idvtr']; 
        $sql_vtr_m = "SELECT * FROM vtr WHERE vtrid = $idvtr AND vtrstatus='ativa' ORDER BY vtrtipo ASC";
        $result_vtr_m = mysqli_query($conn, $sql_vtr_m);
        $row_vtr_m = mysqli_fetch_assoc($result_vtr_m);

        ;?>  

<div class="col-sm-2 m-1 p-1 shadow rounded">
          
              <a href="analit.php?idmapa=<?php echo $idmapa;?>&idvtr=<?php echo $row_vtr_m['vtrid'];?>">

                <img  src="../veiculos/vtrimg/<?php echo $row_vtr_m['vtrimg']; ?>" width="100%">

                <div class="btn-warning p-2 text-center rounded-3"><?php echo $row_vtr_m["vtrtipo"]; ?></div>

              </a>
</div>
    
       <?php } while ($row_detmapa = mysqli_fetch_assoc($result_detmapa)); 

} else echo "<h3>Selecione um veículo</br><h5>Clique aqui <div class='btn btn-light shadow-sm' data-bs-toggle='modal' data-bs-target='#insert'><i class='fas fa-plus'></i> Adicionar</div></h5></h3>"; 

include '../templates/footer.php';?>

<script src="../scripts/atualizaOdomVtr.js"></script>


