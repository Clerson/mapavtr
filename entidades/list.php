  <table class="table table-striped">
    <thead>
      <tr>
        <th># SIGLA</th>
        <th>NOME</th>
        <th>ORGANIZAÇÃO</th>
        <th>RESPONSÁVEL</th>
        <th>SEDE</th>
        <th>ACAO</th>
      </tr>
    </thead>
    <tbody>

<?php if ($result_lim->num_rows > 0) {

  do { 
        $id = $row["id"];
        $nome = $row["nome"];
        $sigla = $row["sigla"];
        $organizacao = $row["organizacao"];
        $responsavel = $row["responsavel"];
        $ramo = $row["ramo"];
        $sede = $row["sede"];
        $natureza = $row["natureza"];
        $endereco = $row["endereco"];
    ?>

      <tr>
        <td><?=$sigla ?></td>
        <td><?=$nome ?></td>
        <td><?=$organizacao ?></td>
        <td><?=$responsavel ?></td>
        <td><?=$sede ?></td>
        <td>
          <a href="#" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#entidade<?=$id?>"><i class="fas fa-pencil-alt"></i></a> 
          <a href="/entidades/?id=<?=$row['id'];?>" class="btn btn-primary"><i class="fas fa-folder-open"></i></a>
          <a href="#"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contato_list<?=$id?>"><i class="fas fa-phone-square"></i></a>
        </td>
      </tr>


  <?php 

include '_form_update.php';

include '_form_insert.php';


} while($row = mysqli_fetch_assoc($result_lim)) ;

} else {
  echo "Sem registro nesta tabela";
} $conn->close();?>
   
   </tbody>

<ul class="pagination pagination-sm">

  <?php if ($p > 1) { ?>
  <li class="page-item"><a class="page-link" href="?p=<?=$p-1?>">Anterior</a></li>
  <?php } ?>


  <?php for ($i=1;$i<=$num_paginas;$i++) {
    $estilo = "" ;
    if ($p == $i) $estilo = "active" ?>  
  <li class="page-item <?=$estilo;?>"><a class="page-link" href="?p=<?=$i?>"><?=$i?></a></li>
  <?php } ?>

  <?php if ($p < $num_paginas) { ?>
  <li class="page-item"><a class="page-link" href="index.php?p=<?=$p+1?>">Próximo</a></li>
  <?php } ?>

</ul>

</table>
