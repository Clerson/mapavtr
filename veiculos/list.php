
<?php 


if (mysqli_num_rows($result) > 0) {
 
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
    $vtrodomatual = $row["vtrodomatual"];
    $vtroutros = $row["vtroutros"];
    $vtrvaloratualtgr = $row["vtrvaloratualtgr"];
    $vtrespecie = $row["vtrespecie"];
    $vtrclasse = $row["vtrclasse"];

  ?>

<?php if($vtrstatus == 'INATIVA') {
  echo "<div class='col-sm-2 shadow rounded-3 bg-secondary m-2'>";
}
else echo "<div class='col-sm-2 shadow rounded-3 m-2'>" ;?>

      <div class="container1" >
      <a href="_form_update.php?vtrid=<?=$vtrid; ?>">
        <img class="image" src="vtrimg/<?=$vtrimg; ?>" alt="Card image">
        <div class="middle">
          <div class="vtrtitle"><?=$vtrtipo; ?><br></div>
        </div>
      </a>
    
    </div>
    
  </div>



 <?php

} while ($row = mysqli_fetch_assoc($result))   ;}


?>



