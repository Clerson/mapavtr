<div class="modal fade" id="entidade<?=$id?>">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header btn-warning">
        <h4 class="modal-title">Editando o Registro #<?=$id ?> <i class="fas fa-ambulance"></i> <?=$nome; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row gx-3 gy-1 text-center">
          <div class="col-sm">


    <form action="model.php" method="POST" class="row gx-2 gy-3 text-center">

    <div class="input-group-text">
      <div class="form-floating  col-sm-2"> <!-- Sigla -->
      <input type="text" class="form-control" name="sigla" placeholder="Sigla" value="<?=$sigla?>"  required>
      <label for="data">Sigla:</label>
      </div>
      
      <div class="form-floating col-sm"> <!-- Nome -->
      <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?=$nome?>"  required>
      <label for="data">Nome:</label>
      </div>

      <div class="form-floating col-sm-3"> <!-- Organização -->
      <input type="text" class="form-control" name="organizacao" placeholder="Organização" value="<?=$organizacao?>"  >
      <label for="data">Organização:</label>
      </div>

    </div>

  <div class="input-group-text">

      <div class="form-floating"> <!-- Responsável -->
      <input type="text" class="form-control" name="responsavel" placeholder="Responsável" value="<?=$responsavel?>"  >
      <label for="data">Responsável:</label>
      </div>

      <div class="form-floating"> <!-- Ramo -->
      <input type="text" class="form-control" name="ramo" placeholder="Ramo" value="<?=$ramo?>"  >
      <label for="data">Ramo:</label>
      </div>

      <div class="form-floating"> <!-- Sede -->
      <input type="text" class="form-control" name="sede" placeholder="Sede" value="<?=$sede?>"  >
      <label for="data">Sede:</label>
      </div>

      <div class="form-floating"> <!-- Natureza -->
      <select class="form-select" name="natureza" >
        <option value='Público' <?php if($natureza == 'Público') echo 'selected';?>>Público</option>
        <option value='Privado' <?php if($natureza == 'Privado') echo 'selected';?>>Privado</option>
      </select>
      <label for="data">Natureza:</label>
      </div>
  </div>

 <div class="input-group-text">
      <div class="form-floating col-sm"> <!-- Endereço -->
      <input type="text" class="form-control" name="endereco" placeholder="Endereço" value="<?=$endereco?>"  >
      <label for="data">Endereço:</label>
      </div>
</div>
  
    <input type="number" name="id" value="<?=$id?>" hidden>

  <div class="form-floating">
    <button type="submit" class="btn btn-primary" name="acao" value="update">Enviar</button>
  </div>

</form>
          </div>
          </div>
          </div>

      <!-- Modal footer -->
      <div class="modal-footer">
<!--         <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#excluir<?=$row_detmapa['iddetmp'] ;?>"><i class="fas fa-trash"></i> Excluir</button>
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#duplicar<?=$row_detmapa['iddetmp'] ;?>"><i class="fas fa-ambulance"></i> Nova Rota</button> -->
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>



