
  <div class="modal fade" id="contato_list<?=$id?>">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header btn-warning">
        <h4 class="modal-title">LISTA DE CONTATOS DE <?=$sigla; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">


  <table class="table table-striped">
    <thead>
      <tr>
        <th>TIPO</th>
        <th>CONTATO</th>
        <th>E-MAIL</th>
        <th>OBSERVAÇÃO</th>
      </tr>
    </thead>
    <tbody>

<?php include "../conexao.php";

        $id_entid = $id;
        $sql_c = "SELECT * FROM contatos WHERE id_entid=$id_entid";
        $result_c = mysqli_query($conn, $sql_c);
        $row_c = mysqli_fetch_assoc($result_c);

  do { 
        $tipo = $row_c["tipo"];
        $contato = $row_c["contato"];
        $email = $row_c["email"];
        $observ = $row_c["observ"];
    ?>

      <tr>
        <td><?=$contato ?></td>
        <td><?=$tipo ?></td>
        <td><?=$email ?></td>
        <td><?=$observ ?></td>
      </tr>


  <?php } while($row_c = mysqli_fetch_assoc($result_c)) ;?>
   
   </tbody>

</table>

</div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#contato_insert<?=$id?>"><i class="fas fa-list"></i> Incluir Contato</button>
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Fechar</button>
      </div>

<!-- FIM DO MODAL -->

</div>
</div>
</div>