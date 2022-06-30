<div class="modal fade" id="insert">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header btn-warning">
        <h4 class="modal-title">Cadastrando Contato de <?=$sigla?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

    <form action="model.php" method="POST" class="row gx-2 gy-3 text-center">

    
      <div class="form-floating m-2"> <!-- Tipo -->
        <select class="form-select" name="tipo">
        <option value='residencial'>Residencial</option>
        <option value='comercial'>Comercial</option>
        <option value='celular'>Celular</option>
        <option value='recado'>Recado</option>
        <option value='whatsapp'>Whatsapp</option>
        </select>
      <label for="data">Tipo:</label>
      </div>

      <div class="form-floating m-2"> <!-- Contato -->
        <input type="tel" class="form-control" name="contato" placeholder="99-9999-9999" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" required>
      <label for="contato">Contato:</label>
      </div>

      <div class="form-floating m-2"> <!-- E-mail -->
        <input type="email" class="form-control" name="email" placeholder="contato@email.com.br" >
      <label for="contato">E-mail:</label>
      </div>

      <div class="form-floating m-2"> <!-- Observação -->
      <input type="text" class="form-control" name="observ" placeholder="Observação" value="">
      <label for="data">Observação:</label>
      </div>

  <div class="form-floating">
    <button type="submit" class="btn btn-primary" name="acao" value="insert">Enviar</button>
  </div>

</form>
          </div>



      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>



