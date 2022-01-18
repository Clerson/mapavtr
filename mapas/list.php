
<div class="container-fluid">

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Ala</th>
        <th>Oficial de Dia</th>
        <th>Chefe</th>
        <th>Telefonista 1</th>
        <th>Telefonista 2</th>
        <th>Data</th>
        <th>Opções</th>
      </tr>
    </thead>
    <tbody>

<?php if ($result->num_rows > 0) {

  do { 
      $ala = $row["ala"];
      $idchefe = $row["idchefe"];
      $idofdia = $row["idofdia"];
      $idtelefonista = $row["idtelefonista1"];
      $idtelefonista2 = $row["idtelefonista2"];
    ?>

      <tr>
        <td><?php echo $ala;?></td>
        <td>
          <?php // OFICIAL DE DIA
            $sql_idofdia = "SELECT * FROM pessoas WHERE codmil = $idofdia";
            $result_idofdia = mysqli_query($conn, $sql_idofdia);

            if (mysqli_num_rows($result_idofdia) > 0) {

              while($row_idofdia = mysqli_fetch_assoc($result_idofdia)) { ?>

                <?php echo $row_idofdia["grad"]."<br /><b>".$row_idofdia["nomeguerra"];?>

            <?php } } ;?>

        </td>
        <td>
        <?php
            $sql_chefesos = "SELECT * FROM pessoas WHERE codmil = $idchefe";
            $result_chefesos = mysqli_query($conn, $sql_chefesos);

            if (mysqli_num_rows($result_chefesos) > 0) {

              while($row_chefesos = mysqli_fetch_assoc($result_chefesos)) { ?>

                <?php echo $row_chefesos["grad"]."<br /><b>".$row_chefesos["nomeguerra"];?>

            <?php } } ;?>

        </td>
        <td>
          <?php
            $sql_telef = "SELECT * FROM pessoas WHERE codmil = $idtelefonista";
            $result_telef = mysqli_query($conn, $sql_telef);

            if (mysqli_num_rows($result_telef) > 0) {

              while($row_telef = mysqli_fetch_assoc($result_telef)) { ?>

                <?php echo $row_telef["grad"]."<br /><b>".$row_telef["nomeguerra"];?>

              <?php } 
            } 
              
          ;?>

        </td>

        <td>
          <?php
            $sql_telef2 = "SELECT * FROM pessoas WHERE codmil = $idtelefonista2";
            $result_telef2 = mysqli_query($conn, $sql_telef2);

            if (mysqli_num_rows($result_telef2) > 0) {

              while($row_telef2 = mysqli_fetch_assoc($result_telef2)) { ?>

                <?php echo $row_telef2["grad"]."<br /><b>".$row_telef2["nomeguerra"];?>

              <?php } 
            } 
              
          ;?>
        </td>

        <td><?php echo date('d/m/y', (strtotime($row["data"])));?></td>
        <td><a href="?page=mapas&p=form&idmapa=<?php echo $row["idmapa"] ;?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a> 
          <a href="?page=mapadet&idmapa=<?php echo $row['idmapa'];?>" class="btn btn-primary"><i class="fas fa-folder-open"></i></a></td>
      </tr>
  <?php } while($row = $result->fetch_assoc()) ;

} else {
  echo "Sem registro nesta tabela";
} $conn->close();?>
     </tbody>
  </table>
</div>