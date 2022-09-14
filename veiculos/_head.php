<?php include_once "../templates/header.php";?>

<li class="nav-item me-2"><a href="/veiculos" class="btn btn-light"><i class="fas fa-ambulance"></i> Veículos</a></li>
<li class="nav-item me-2"><a href="/manutencao" class="btn btn-light"><i class="fas fa-wrench"></i> Manutenção</a></li>
<li class="nav-item me-2"><a href="list2.php"  class='btn btn-light shadow-sm'><i class="fas fa-align-left"></i> Lista</a>
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
<li class="nav-item me-2"><span class="btn btn-light">Número de viaturas: <b><?=$result->num_rows?></b></span></li>
</li>
</ul>
</nav>
  
</div>

<div class="row p-1 rounded-3 bg-light">
  


