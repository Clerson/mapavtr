<div class="modal fade" id="insert">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-info">
        <h4 class="modal-title"><i class="fas fa-map"></i> Novo Mapa</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="model.php" method="POST" class="row gx-1 gy-1 text-center">
          <div class="row gx-1 gy-1 text-center">
            <div class="form-floating">
              <h4><i class='fas fa-bookmark'></i> Selecione a Ala</h4> <!-- ALA DO SERVIÇO -->
              <div class="form-check-inline">
                <input type="radio" class="btn-check" name="ala" id="option1" autocomplete="off" value="Alpha" required>
                <label class="btn btn-outline-primary" for="option1">Alpha</label>
              </div>

              <div class="form-check-inline">
                <input type="radio" class="btn-check" name="ala" id="option2" autocomplete="off" value="Bravo" required>
                <label class="btn btn-outline-primary" for="option2">Bravo</label>
              </div>

              <div class="form-check-inline">
                <input type="radio" class="btn-check" name="ala" id="option3" autocomplete="off" value="Charlie" required>
                <label class="btn btn-outline-primary" for="option3">Charlie</label>
              </div>

              <div class="form-check-inline">
                <input type="radio" class="btn-check" name="ala" id="option4" autocomplete="off" value="Delta" required>
                <label class="btn btn-outline-primary" for="option4">Delta</label>
              </div>
            </div>
    
            <div class="form-floating"> <!-- DATA DO SERVIÇO -->
              <input type="date" class="form-control" name="data" placeholder="Data do serviço" value="<?php echo date('Y-m-d');?>"  required>
              <label for="data">Data do serviço:</label>
            </div>
          </div>

          <div class="row gx-1 gy-1 text-center">
            <div class="form-floating col-sm"> <!-- OFICIAL DE DIA -->
              <input class="form-control" list="idofdia" name="idofdia" placeholder="idofdia" required>
                <datalist id="idofdia">
                  <?php
                  $result_ofdia1 = mysqli_query($conn, $sql_pessoas);
                  
                  while($row_ofdia1 = mysqli_fetch_assoc($result_ofdia1))  { ?>
                  <option value="<?php echo $row_ofdia1['nomeguerra'];?>">
                  <?php } ?>

                </datalist>
              <label for="idofdia">Oficial de Dia:</label>
            </div>

            <div class="form-floating col-sm"> <!-- CHEFE DO SERVIÇO DE DIA -->
               <input class="form-control" list="idchefe"  name="idchefe" placeholder="idchefe" required>
                  <datalist id="idchefe">
                    <?php
                    $result_chefe1 = mysqli_query($conn, $sql_pessoas);
                    
                    while($row_chefe1 = mysqli_fetch_assoc($result_chefe1)) { ?>
                      <option value="<?php echo $row_chefe1['nomeguerra'];?>">
                    <?php } ?>

                  </datalist>
              <label for="idchefe">Chefe de Socorro:</label>
            </div>
          </div>

          <div class="row gx-1 gy-1 text-center">
            <div class="form-floating col-sm"> <!-- TELEFONISTA 1 -->
              <input class="form-control" list="idtelefonista1" name="idtelefonista1" placeholder="idtelefonista1" required>
                <datalist id="idtelefonista1">
                  <?php 
                  $result_telef1 = mysqli_query($conn, $sql_pessoas);
                    while($row_telef1 = mysqli_fetch_assoc($result_telef1)) { ?>
                      <option value="<?php echo $row_telef1['nomeguerra'];?>">
                  <?php } ?>
                </datalist>
              <label for="idtelefonista1">Telefonista 1:</label>
            </div>

            <div class="form-floating col-sm"> <!-- TELEFONISTA 2 -->
              <input class="form-control" list="idtelefonista2" name="idtelefonista2" placeholder="idtelefonista2" required>
                <datalist id="idtelefonista2">
                  <?php 
                    $result_telef2 = mysqli_query($conn, $sql_pessoas);
                      while($row_telef2 = mysqli_fetch_assoc($result_telef2)) { ?>
                        <option value="<?php echo $row_telef2['nomeguerra'];?>" >
                    <?php } ?>
                </datalist>
              <label for="idtelefonista2">Telefonista 2:</label>
            </div>
          </div>
              
          <div class="form-floating">
            <button type="submit" class="btn btn-primary" name="acao" value="insertmapa">Enviar</button>
          </div>
      </form>
    </div>
    </div>
  </div>
</div>

