<?php include_once "../templates/header.php";?>

<li class="nav-item me-2"><a href="index.php" class="btn btn-light"><i class="fas fa-ambulance"></i> Veículos</a></li>
<li class="nav-item me-2">
  <form action="" method="POST" class="d-flex">
    <select class="form-select me-2" name="vtrstatus">
      <option value="" >"Filtrar por status"</option>
      <option value="ATIVA" >Ativas</option>
      <option value="INATIVA" >Inativas</option>
    </select>
    <input type="submit" class="btn btn-primary" name="">
  </form>
</li>
<li class="nav-item me-2"><span class="btn btn-light">Número de viaturas: <b><?=mysqli_num_rows($result_vtr)?></b></span></li>
</ul>
</nav>
  
</div>

<div class="row p-1 rounded-3 bg-light">


