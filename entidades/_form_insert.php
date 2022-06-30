<div class="modal fade" id="insert">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header btn-warning">
        <h4 class="modal-title">Cadastrando Registro</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">



    <form action="model.php" method="POST" class="row gx-2 gy-3 text-center">

    <div class="input-group-text">
      <div class="form-floating  col-sm-2"> <!-- Sigla -->
      <input type="text" class="form-control" name="sigla" placeholder="Sigla" value=""  required>
      <label for="data">Sigla:</label>
      </div>
      
      <div class="form-floating col-sm"> <!-- Nome -->
      <input type="text" class="form-control" name="nome" placeholder="Nome" value=""  required>
      <label for="data">Nome:</label>
      </div>

      <div class="form-floating col-sm-3"> <!-- Organização -->
      <input type="text" class="form-control" name="organizacao" placeholder="Organização" value="">
      <label for="data">Organização:</label>
      </div>

    </div>

  <div class="input-group-text">

      <div class="form-floating"> <!-- Responsável -->
      <input type="text" class="form-control" name="responsavel" placeholder="Responsável" value="">
      <label for="data">Responsável:</label>
      </div>

      <div class="form-floating"> <!-- Ramo -->
      <input type="text" class="form-control" name="ramo" placeholder="Ramo" value="" >
      <label for="data">Ramo:</label>
      </div>

      <div class="form-floating"> <!-- Sede -->
      <input type="text" class="form-control" name="sede" placeholder="Sede" value="">
      <label for="data">Sede:</label>
      </div>

      <div class="form-floating"> <!-- Natureza -->
      <select class="form-select" name="natureza">
        <option value='Público'>Público</option>
        <option value='Privado'>Privado</option>
      </select>
      <label for="data">Natureza:</label>
      </div>
  </div>

 <div class="input-group-text">
      <div class="form-floating col-sm"> <!-- Endereço -->
      <input type="text" class="form-control" name="endereco" placeholder="Endereço" value="">
      <label for="data">Endereço:</label>
      </div>
</div>
  
  <div class="form-floating">
    <button type="submit" class="btn btn-primary" name="acao" value="insert">Enviar</button>
  </div>

</form>
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



