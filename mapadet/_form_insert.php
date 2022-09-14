<div class="modal fade" id="insert">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-info">
        <h4 class="modal-title"><i class="fas fa-route"></i> Nova Rota</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action='model.php' method='POST' class='row gx-2 gy-2 text-center'>
          <div class='form-floating'>
            <select class='form-select' name='pessoa'  required>
            <option value=''>Selecione o motorista</option>
              <?php
                $sql_pessoas = "SELECT * FROM pessoas WHERE pstatus='s' ORDER BY nomeguerra ASC";
                $result_pessoas = mysqli_query($conn, $sql_pessoas);
                $row_pessoas = mysqli_fetch_assoc($result_pessoas);
                do { ?>
                  <option value="<?=$row_pessoas['codmil']?>"><?=$row_pessoas['nomeguerra']?></option>  
              <?php } while($row_pessoas = mysqli_fetch_assoc($result_pessoas)) ?>
            </select>
            <label for='pessoa' class='form-label'>Motorista:</label>
          </div>

          <div class='form-floating'> 
            <select class='form-select' name='idvtr' onchange='atualizaOdomVtr(this.value)' required>
            <option value=''>Selecione uma viatura</option>
              <?php
                $sql_vtr = "SELECT * FROM vtr WHERE vtrstatus='ATIVA' ORDER BY vtrtipo ASC";
                $result_vtr = mysqli_query($conn, $sql_vtr);
                $row_vtr = mysqli_fetch_assoc($result_vtr);
               do { ?> 
                <option value='<?=$row_vtr["vtrid"]?>'><?=$row_vtr["vtrtipo"]?></option>
              <?php } while ($row_vtr = mysqli_fetch_assoc($result_vtr)) ?>
            </select>
            <label for='destino'>Veículo:</label>
          </div>

          <div class='input-group' id='odomentr'>
            <span class='input-group-text'><i class='fas fa-tachometer-alt'></i></span>
            <span class='input-group-text'>Saída:</span>
            <input type='number' class='form-control' name='odomsaida' >
            <span class='input-group-text'>Chegada:</span>
            <input type='number' class='form-control' name='odomentr' >
          </div>
     
          <div class='input-group'>
            <span class="input-group-text"><i class='fa fa-hourglass'></i></span>
            <span class='input-group-text'>Saída:</span>
            <input type='time' class='form-control' name='horasaida' value='<?=date('H:i');?>' required>
            <span class='input-group-text'>Chegada:</span>
            <input type='time' class='form-control' style='color: gray' name='horaentr' value='<?=date('H:i');?>' required>
          </div>
            
          <div class="form-floating  col-sm"> 
            <select class="form-select" name="destino"  required>
              <option value="Abastecimento">Abastecimento</option>
              <option value="Ocorrencia" selected>Ocorrência</option>
              <option value="Oficina">Oficina</option>
              <option value="Ordem de Serviço">Ordem de Serviço</option>
              <option value="Orçamentos">Orçamentos</option>
              <option value="Outros">Outros</option>
              <option value="Ponto Base">Ponto Base</option>
              <option value="QRF">QRF</option>
              <option value="Viagem">Viagem</option>
              <option value="Vistoria">Vistorias</option>
              
              
            </select>
            <label for="destino">Destino:</label>
          </div>

          <div class="form-floating col-sm"> 
            <select class="form-select" name="status" required>
              <option value='aberta' >Aberta</option>
              <option value='fechada' >Fechada</option>
            </select>
            <label for="status">Status:</label>
          </div>

          <div class="form-floating"> 
            <textarea rows="5" cols="30"class="form-control" name="obs" placeholder="obs">RAI:</textarea>
            <label for="obs">Observações:</label>
          </div>

          <input type="text" name="idmapa" value="<?=$idmapa;?>" hidden>

          <div class="form-floating"> 
            <button type="submit" class="btn btn-primary " name="enviar" value="enviar">Enviar</button>
          </div>
        
        </form>
      </div>
    </div>
  </div>
</div>