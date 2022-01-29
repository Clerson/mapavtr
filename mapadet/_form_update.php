<div class="modal fade" id="iddetmp<?php echo $row_detmapa["iddetmp"]; ?>">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header btn-warning">
        <h4 class="modal-title">Editando o Registro #<?php echo $row_detmapa["iddetmp"]; ?> <i class="fas fa-ambulance"></i> <?php echo $row_detmapa["vtrtipo"]; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-5">
            <img class="card-img-top" src="../veiculos/vtrimg/<?php echo $row_detmapa["vtrimg"]; ?>" alt="Card image">          
          </div>
          <div class="col-sm">
            <form action='model.php' method='POST' class='row gx-2 gy-2 text-center'>
              <div class="row gx-2 gy-2 text-center">
                <div class="form-floating col-sm-1 me-2 rounded-cycle">
                  <img src="../pessoas/pessoas_img/<?php echo $row_detmapa['img'];?>" width="55" height="65" class=" shadow-sm">
                </div>
                <div class='form-floating ms-3 col-sm'>
                  <select class='form-select' name='pessoa' required>
                    <option value="<?php echo $row_detmapa['idpessoa'];?>"><?php echo $row_detmapa['grad']." ".$row_detmapa['nomeguerra'];?></option>
                      <?php 

                        $idpessoa = $row_detmapa['idpessoa'];

                        $sql_p = "SELECT * FROM pessoas WHERE pstatus = 's' ORDER BY nomeguerra ASC";
                        $result_p = mysqli_query($conn, $sql_p);
                        $row_p = mysqli_fetch_assoc($result_p);

                         do { ?>

                        <option value="<?php echo $row_p['codmil'];?>"><?php echo $row_p['nomeguerra'];?></option>  
                      
                        <?php } while ($row_p = mysqli_fetch_assoc($result_p))

                      ;?>
                  </select>
                  <label for='pessoa' class='form-label'>Motorista:</label>
                </div>
              </div>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-tachometer-alt"></i></span>
                <span class="input-group-text">Saída</span>
                <input type="number" class="form-control"  name="odomsaida"   value="<?php echo $row_detmapa["odomsaida"];?>" placeholder="KM saída">
                <span class="input-group-text">Chegada</span>
                <input type="number" class="form-control"  name="odomentr" min="<?php echo $row_detmapa["odomsaida"];?>" value="<?php echo $row_detmapa["odomentr"];?>" placeholder="kM chegada">
              </div>

              <div class="input-group">
                <span class="input-group-text"><i class='far fa-hourglass'></i></span>
                <span class="input-group-text">Saída</span>
                <input type="time" class="form-control" name="horasaida"  value="<?php echo $row_detmapa["horasaida"];?>" placeholder="Hora saída">
                <span class="input-group-text">Chegada</span>
                <input type="time" class="form-control"  name="horaentr" value="<?php echo $row_detmapa["horaentr"];?>" placeholder="Hora chegada" >
              </div>

              <div class="col-sm form-floating"> 
                <select class="form-select" name="destino"  required>
                  <option value="Abastecimento" <?php if($row_detmapa["destino"] == 'Abastecimento') echo 'selected';?>>Abastecimento</option>
                  <option value="Ocorrencia" <?php if($row_detmapa["destino"] == 'Ocorrencia') echo 'selected';?>>Ocorrência</option>
                  <option value="Oficina" <?php if($row_detmapa["destino"] == 'Oficina') echo 'selected';?>>Oficina</option>
                  <option value="Ordem de Serviço" <?php if($row_detmapa["destino"] == 'Ordem de Serviço') echo 'selected';?>>Ordem de Serviço</option>
                  <option value="Outros" <?php if($row_detmapa["destino"] == 'Outros') echo 'selected';?>>Outros</option>
                  <option value="Ponto Base" <?php if($row_detmapa["destino"] == 'Ponto Base') echo 'selected';?>>Ponto Base</option>
                  <option value="QRF" <?php if($row_detmapa["destino"] == 'QRF') echo 'selected';?>>QRF</option>
                  <option value="Viagem" <?php if($row_detmapa["destino"] == 'Viagem') echo 'selected';?>>Viagem</option>
                  <option value="Vistoria" <?php if($row_detmapa["destino"] == 'Vistorias') echo 'selected';?>>Vistorias</option>
                </select>
                <label for="destino">Destino:</label>
              </div>
    
              <div class="form-floating col-sm"> 
                <select class="form-select" name="status" required>
                  <option value='aberta' <?php if($row_detmapa['detmp_status'] == 'aberta') echo 'selected';?>>Aberta</option>
                  <option value='fechada' <?php if($row_detmapa['detmp_status'] == 'fechada') echo 'selected';?>>Fechada</option>
                </select>
                <label for="status">Status:</label>
              </div>

              <div class="form-floating"> 
                <textarea rows="5" cols="50" class="form-control" name="obs" placeholder="obs"><?php echo $row_detmapa['obs']; ?></textarea>
                <label for="obs">Observações:</label>
              </div>
                <input type="text" name="idmapa" value="<?php echo $row_detmapa['idmapa'];?>" hidden>
                <input type='text' name='iddetmp' value='<?php echo $row_detmapa['iddetmp'];?>' hidden>
                <input type="text" name="idvtr" value="<?php echo $row_detmapa['idvtr'];?>" hidden>

              <div class="form-floating">
                <button type="submit" class="btn btn-primary" name="acao" value="updatemapadet">Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#duplicar<?php echo $iddetmp ;?>">
          <i class="fas fa-ambulance"></i> Duplicar
        </button>
      </div>
    </div>
  </div>
</div>