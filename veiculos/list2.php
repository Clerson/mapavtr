 <?php require '_head.php'; ?>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>VTR</th>
        <th></th>
        <th>PREFIXO</th>
        <th>MARCA/MOD</th>
        <th>ANO</th>
        <th>PLACA</th>
        <th>OPÇÕES</th>
      </tr>
    </thead>
    <tbody>

<?php if ($result->num_rows > 0) {
 
do { 

    $vtrid = $row["vtrid"];
    $vtrpref = $row["vtrpref"];
    $vtrtipo = $row["vtrtipo"];
    $vtrmarcamod = $row["vtrmarcamod"];
    $vtrano = $row["vtrano"];
    $vtrstatus = $row["vtrstatus"];
    $vtrimg = $row["vtrimg"];
    $vtrplaca = $row["vtrplaca"];
    $vtrchassi = $row["vtrchassi"];
    $vtrrenavan = $row["vtrrenavan"];
    $vtrcombustivel = $row["vtrcombustivel"];
    $vtrpneu = $row["vtrpneu"];
    $vtroutros = $row["vtroutros"];
    $vtrvaloratualtgr = $row["vtrvaloratualtgr"];
    $vtrespecie = $row["vtrespecie"];
    $vtrclasse = $row["vtrclasse"];

  ?>

      <tr>
        <td><img src="vtrimg/<?=$vtrimg?>" alt="<?=$vtrimg?>" width="80"></td>
        <td><?=$vtrid?>

          <?php // VEÍCULO
            $sql_vtr = "SELECT * FROM vtr WHERE vtrid =".$vtrid;
            $result_vtr = mysqli_query($conn, $sql_vtr);
            $row_vtr = mysqli_fetch_assoc($result_vtr);

            if (mysqli_num_rows($result_vtr) > 0) {

              do {

                $vtrtipo = $row_vtr["vtrtipo"];
                $vtrimg = $row_vtr["vtrimg"];

                echo $vtrtipo;

              } 

              while($row_vtr = mysqli_fetch_assoc($result_vtr)); 

            } ?>

        </td>
        
        <td><?=$vtrpref?></td>

        <td><?=$vtrmarcamod?></td>

        <td><?=$vtrano?></td>

        <td><?=$vtrplaca?></td>

        <td>
          <a href="_form_update.php?vtrid=<?=$vtrid?>" class="btn btn-primary" >
            <i class="fas fa-pencil-alt"></i>
          </a> 
          
        </td>
      </tr>



  <?php 


} while ($row = mysqli_fetch_assoc($result)) ;

} else {   echo "Sem registro nesta tabela!"; } ;?>
   
   </tbody>

</table>


<?php require '../templates/footer.php';?>