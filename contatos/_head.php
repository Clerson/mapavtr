<?php include_once "../templates/header.php";?>  

  <li class="nav-item me-2">
    <li class="nav-item"><a href='index.php' class='btn btn-light shadow-sm'><i class="fas fa-home"></i> Início</a></li>
    <form  action="" method="POST" class="d-flex">
      <input class="form-control me-2" type="text" name="entidades">
      <button class="btn btn-primary d-flex align-middle"  type="submit" name="submit"><i class='fa fa-filter'></i></button>
    </form>
  </li>

  <li class="nav-item me-2">
    <span class="btn btn-light">Número de Entidades: <b><?=mysqli_num_rows($result)?></b></span>
  </li> 
</ul>
</nav>
</div>  

<div class="row p-1 rounded-3 bg-light">  