<?php include '_head.php';


   if($result_detmapa->num_rows > 0) {

        do { 

        $idvtr = $row_detmapa['idvtr']; 
        $sql_vtr_m = "SELECT * FROM vtr WHERE vtrid = $idvtr AND vtrstatus='ativa' ORDER BY vtrtipo ASC";
        $result_vtr_m =$conn->query($sql_vtr_m);
        $row_vtr_m = $result_vtr_m->fetch_assoc();

        ;?>  

<div class="col-sm-2 m-1 p-1 shadow rounded">
          
              <a href="analit.php?idmapa=<?=$idmapa;?>&idvtr=<?=$row_vtr_m['vtrid'];?>">

                <img  src="../veiculos/vtrimg/<?=$row_vtr_m['vtrimg']; ?>" width="100%">

                <div class="btn-warning p-2 text-center rounded-3"><?=$row_vtr_m["vtrtipo"]; ?></div>

              </a>
</div>
    
       <?php } while ($row_detmapa=$result_detmapa->fetch_assoc()); 

} else echo "<h3>Selecione um veículo</br><h5>Clique aqui <div class='btn btn-light shadow-sm' data-bs-toggle='modal' data-bs-target='#insert'><i class='fas fa-plus'></i> Adicionar</div></h5></h3>"; 

include '../templates/footer.php';?>

<script src="../scripts/atualizaOdomVtr.js"></script>


