<div class="modal fade" id="insert">
  <div class="modal-dialog" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-info">
        <h4 class="modal-title"><i class="fas fa-truck"></i> Inserindo Novo Veículo</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row gx-1 gy-1 text-center">
          <div class="col-sm">

            <form action='' method='POST' class='row gx-1 gy-1 text-center'>
              <div class="input-group">
                <span class="input-group-text">Nomenclatura</span>
                <input type="text" class="form-control" name="vtrtipo" placeholder="Nomenclatura" >
              </div>
              <div class="input-group">
                <span class="input-group-text">Prefixo</span>
                <input type="text" class="form-control" name="vtrpref" placeholder="Prefixo" >
              </div>
              <div class="input-group">
                <span class="input-group-text">Marca/Modelo</span>
                <input type="text" class="form-control"  name="vtrmarcamod"   placeholder="Marca/Modelo" >
              </div>
              <div class="input-group">
                <span class="input-group-text">Ano/Modelo</span>
                <input type="text" class="form-control"  name="vtrano" placeholder="Ano de fabricação">
              </div>
              <div class="input-group">
                <span class="input-group-text">Placa</span>
                <input type="text" class="form-control"  name="vtrplaca"  placeholder="Placa">
              </div>
              <div class="input-group">
                <span class="input-group-text">Chassi</span>
                <input type="text" class="form-control"  name="vtrchassi" placeholder="Chassi">
              </div>
              <div class="input-group">
                <span class="input-group-text">RENAVAN</span>
                <input type="text" class="form-control"  name="vtrrenavan"  placeholder="RENAVAN">
              </div>
              <div class="input-group">
                <span class="input-group-text">Combustível</span>
                <select class="form-select"  name="vtrcombustivel"  placeholder="Combustível">
                  <option value="Gasolina" >Gasolina</option>
                  <option value="Etanol" >Etanol</option>
                  <option value="Diesel" >Diesel</option>
                  <option value="Diesel S10" >Diesel S10</option>
                </select>
              </div>
              <div class="input-group">
                <span class="input-group-text">Pneu</span>
                <input type="text" class="form-control"  name="vtrpneu"  placeholder="Pneu">
              </div>
              <div class="input-group">
                <span class="input-group-text">Outros</span>
                <input type="text" class="form-control"  name="vtroutros"  placeholder="Outros">
               </div> 
              <div class="input-group">
                <span class="input-group-text">Valor Atual TGR</span>
                <input type="number" class="form-control"  name="vtrvaloratualtgr" value="0.00" placeholder="Valor Atual TGR">
              </div>
              <div class="input-group">
                <span class="input-group-text">Espécie</span>
                <select class="form-select"  name="vtrespecie"  placeholder="Espécie">
                  <option value="Passeio" >Passeio</option>
                  <option value="Motocicleta" >Motocicleta</option>
                  <option value="Auto Bomba-Tanque" >Auto Bonba-Tanque</option>
                </select>
              </div>
              <div class="input-group">
                <span class="input-group-text">Classe</span>
                <select class="form-select"  name="vtrclasse"  placeholder="Classe">
                  <option value="Administrativa" >Administrativa</option>
                  <option value="Salvamento" >Salvamento</option>
                  <option value="Resgate" >Resgate</option>
                  <option value="Náutica" >Náutica</option>
                  <option value="Incêndio" >Incêndio</option>
                </select>
              </div>
              <div class="input-group">
                <span class="input-group-text">Status</span>
                <select class="form-select"  name="vtrstatus" placeholder="Status">
                  <option value="ATIVA" >Ativa</option>
                  <option value="INATIVA">Inativa</option>
                </select>
              </div>
              
              <div class="form-floating">
                <button type="submit" class="btn btn-primary " name="acao" value="vtrinsert">Enviar</button>
              </div>
            </form>

        </div>

      </div>

    </div>
    <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>