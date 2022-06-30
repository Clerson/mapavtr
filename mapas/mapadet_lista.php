<?php require_once "../mapas/model.php";?>

<li class="nav-item dropdown btn-light shadow-sm rounded-2">

   <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
      <i class='fas fa-bookmark'></i> <?php echo $row["ala"];?>
   </a>
  
  <ul class="dropdown-menu">
   <li>
      <a class="dropdown-item" href="#"> 
         Data:<br />
         <b><?php echo date('d/m/y', strtotime($row['data']));?></b>
      </a>
   </li>
   <li>
      <a class="dropdown-item" href="#">
       Oficial de Dia:<br />

               <?php
                  $idofdia = $row["idofdia"];
                  $sql_idofdia = "SELECT * FROM pessoas WHERE codmil = $idofdia";
                  $result_idofdia = mysqli_query($conn, $sql_idofdia);
                  $row_idofdia = mysqli_fetch_assoc($result_idofdia);
                 echo "
                    ".$row_idofdia["grad"]." <b> ".$row_idofdia["nomeguerra"]."</b>
                 "
                ;?>
      </a>
   </li>

    <li>
      <a class="dropdown-item" href="#">
         Chefe de Socorro:<br />

         <?php
            $idchefe = $row["idchefe"];
            $sql1 = "SELECT * FROM pessoas WHERE codmil = $idchefe";
            $result1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
           echo "
              ".$row1["grad"]." <b>".$row1["nomeguerra"]."</b>
           "

          ;?>
      </a>
   </li>    
    <li>
      <a class="dropdown-item" href="#">
      Telefonista 1:<br /> 
         <?php
            $idtelefonista = $row["idtelefonista1"];
            $sql2 = "SELECT * FROM pessoas WHERE codmil = $idtelefonista";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);
           echo "
              ".$row2["grad"]." <b>".$row2["nomeguerra"]."</b>
           "
         ;?>

      </a>
   </li>
    <li>
      <a class="dropdown-item" href="#">
      Telefonista 2:<br /> 
         <?php
            $idtelefonista2 = $row["idtelefonista2"];
            $sql_tel2 = "SELECT * FROM pessoas WHERE codmil = $idtelefonista2";
            $result_tel2 = mysqli_query($conn, $sql_tel2);
            $row_tel2 = mysqli_fetch_assoc($result_tel2);
           echo "
              ".$row_tel2["grad"]." <b>".$row_tel2["nomeguerra"]."</b>
           "
           ;?>

      </a>
   </li>
   </ul>
</li>



