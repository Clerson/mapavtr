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

<?php 

if ($result->num_rows > 0) {

  do { 

        $id = $row["id"];
        $id_entid = $row["id_entid"];
        $tipo = $row["tipo"];
        $contato = $row["contato"];
        $email = $row["email"];
        $observ = $row["observ"];
    ?>

      <tr>
        <td><?=$contato ?></td>
        <td><?=$tipo ?></td>
        <td><?=$email ?></td>
        <td><?=$observ ?></td>
      </tr>


    <?php } 

  while($row = mysqli_fetch_assoc($result)) ;

 } else {

  echo "Sem registro nesta tabela";

} $conn->close() ;?>
   
   </tbody>

</table>

