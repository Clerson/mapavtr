<div class="modal fade" id="duplicar<?=$row_detmapa['iddetmp'] ;?>">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header btn-info">
        <h4 class="modal-title">Duplicando o Registro #<?=$row_detmapa['iddetmp']; ?> <i class="fas fa-ambulance"></i> <?=$row_detmapa["vtrtipo"]; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-5">
            <img class="card-img-top" src="../veiculos/vtrimg/<?=$row_detmapa['vtrimg']; ?>" alt="Card image">
          </div>
          <div class="col-sm">
            <form action='model.php' method='POST' class='row gx-2 gy-2 text-center'>
              <div class="row gx-1 gy-1">

                 <?php if(!empty($row_detmapa['img'])) { ?>
                <div class="form-floating col-sm-1 me-3">
                    <img src="../pessoas/pessoas_img/<?=$row_detmapa['img'];?>" width="55" height="65" class=" shadow-sm rounded-circle">
                </div>
                <?php } ;?>

                <div class='form-floating ms-2 col-sm'>

                  <select class='form-select' name='pessoa' required>
                    <?php if(!$row_detmapa["idvtr"]) echo "<option value=''>Selecione um motorista</option>";?>
                    <option value="<?=$row_detmapa["codmil"];?>"><?=$row_detmapa["grad"]." ".$row_detmapa["nomeguerra"];?></option>
                    <?php
                      $sql_pessoas = "SELECT * FROM pessoas WHERE pstatus = 's' ORDER BY nomeguerra ASC";
                      $result_pessoas = mysqli_query($conn, $sql_pessoas);
                      $row_pessoas = mysqli_fetch_assoc($result_pessoas);
                      do { ?>
                        <option value="<?=$row_pessoas['codmil'];?>"><?=$row_pessoas['nomeguerra'];?></option>  
                      <?php } while ($row_pessoas = mysqli_fetch_assoc($result_pessoas)) ;?>
                    </select>
                    <label for='pessoa' class='form-label'>Motorista:</label>
                </div>
              </div>

              <div class="input-group"  id='odomentr'>
                <span class="input-group-text"><i class="fas fa-tachometer-alt"></i></span>
                <span class="input-group-text">Saída</span>
                <input type="number" class="form-control"  name="odomsaida"   value="<?=$row_detmapa["odomentr"];?>" placeholder="KM saída">
                <span class="input-group-text">Chegada</span>
                <input type="number" class="form-control"  name="odomentr"  min="<?=$row_detmapa["odomentr"];?>" value="<?=$row_detmapa["odomentr"];?>" placeholder="kM chegada" required>
              </div>

              <div class="input-group">
                <span class="input-group-text"><i class='far fa-hourglass'></i></span>
                <span class="input-group-text">Saída</span>
                <input type="time" class="form-control" name="horasaida"  value="<?=date('H:i');?>" placeholder="Hora saída" required>
                <span class="input-group-text">Chegada</span>
                <input type="time" class="form-control" name="horaentr" value="<?=date('H:i');?>" placeholder="Hora chegada" required>
              </div>

              <div class="col-sm form-floating"> 
                <select class="form-select" name="destino"  required>
                  <option value="Abastecimento" >Abastecimento</option>
                  <option value="Ocorrencia" selected>Ocorrência</option>
                  <option value="Oficina" >Oficina</option>
                  <option value="Ordem de Serviço" >Ordem de Serviço</option>
                  <option value="Outros" >Outros</option>
                  <option value="Ponto Base" >Ponto Base</option>
                  <option value="QRF" >QRF</option>
                  <option value="Viagem" >Viagem</option>
                  <option value="Vistoria" >Vistorias</option>
                </select>
                <label for="destino">Destino:</label>
              </div>
        
              <div class="form-floating col-sm"> 
                <select class="form-select" name="status" required>
                  <option value='aberta'>Aberta</option>
                </select>
                <label for="status">Status:</label>
              </div>

              <div class="form-floating"> 
                <textarea rows="5" cols="50" class="form-control" name="obs" placeholder="obs"></textarea>
                <label for="obs">Observações:</label>
              </div>
            
              <input type="number" name="idmapa" value="<?=$row_detmapa["idmapa"];?>" hidden>
              <input type="number" name="idvtr" value="<?=$row_detmapa["idvtr"];?>" hidden>

              <div class="form-floating">
                <button type="submit" class="btn btn-primary " name="enviar" value="enviar">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>