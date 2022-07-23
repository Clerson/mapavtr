 <?php require '_head.php'; 

    $vtrid = $row["vtrid"];
    $vtrpref = $row["vtrpref"];
    $vtrtipo = $row["vtrtipo"];
    $vtrmarcamod = $row["vtrmarcamod"];
    $vtrano = $row["vtrano"];
    $vtrstatus = $row["vtrstatus"];
    $vtrimg = $row["vtrimg"];
    $vtrplaca = $row["vtrplaca"];
    $vtrchassi = $row["vtrchassi"];
    $vtrrenavan = $row["vtrrenavan"];
    $vtrcombustivel = $row["vtrcombustivel"];
    $vtrpneu = $row["vtrpneu"];
    $vtrodomatual = $row["vtrodomatual"];
    $vtroutros = $row["vtroutros"];
    $vtrvaloratualtgr = $row["vtrvaloratualtgr"];
    $vtrespecie = $row["vtrespecie"];
    $vtrclasse = $row["vtrclasse"];

  ?>
<div class="row gx-1">

  <div class="col-3 text-center">
    <img class="card-img-top" src="../veiculos/vtrimg/<?=$vtrimg?>" alt="Card image">
    <form action="update_vtr_img.php" method="POST" enctype="multipart/form-data">
      <input type="file" class="form-control mt-2" name="fileToUpload" id="fileToUpload" >
      <input type="text" name="vtrid" value="<?=$vtrid?>" hidden>
      <input type="submit"  class="btn btn-primary mt-2" value="Enviar" name="submit">
    </form>
  </div>

  <div class="col">
    <a href="/manutencao/list2.php?idvtr=<?=$vtrid?>" class="btn btn-warning mb-2"><i class="fas fa-cog"></i> Manutenção</a>
    <form action='' method='POST' class='row gx-1 gy-1 text-center'>
      <div class="row gx-1 gy-1">
        <div class="col-2" >
          <div class="form-floating">
            <input type="text" class="form-control" name="vtrtipo" value="<?=$vtrtipo; ?>" placeholder="Nomenclatura" >
            <label for='Nomenclatura'>Nomenclatura</label>
          </div>
        </div>
        <div class="col-2" >  
          <div class="form-floating">
            <input type="text" class="form-control" name="vtrpref" value="<?=$vtrpref; ?>" placeholder="Prefixo"  >
            <label for='vtrpref'>Prefixo</label>
          </div>
        </div>
        <div class="col-3" > 
          <div class="form-floating">
            <input type="text" class="form-control"  name="vtrmarcamod"   value="<?=$vtrmarcamod;?>" placeholder="Marca/Modelo"  >
            <label for='vtrmarcamod'>Marca/Modelo</label>
          </div>
        </div>
     
        <div class="col-2" >
          <div class="form-floating">
            <input type="text" class="form-control"  name="vtrano"  value="<?=$vtrano;?>" placeholder="Ano de fabricação" >
            <label for='vtrano'>Ano/Modelo</label>
          </div>
        </div>
        <div class="col-sm" >
          <div class="form-floating">
            <input type="text" class="form-control"  name="vtrplaca"  value="<?=$vtrplaca;?>" placeholder="Placa" >
            <label for='vtrplaca'>Placa</label>
          </div>
        </div>
     </div>

      <div class="row gx-1 gy-1">
        <div class="col-3" >
          <div class="form-floating">
            <input type="text" class="form-control"  name="vtrchassi"  value="<?=$vtrchassi;?>" placeholder="Chassi" >
            <label for='vtrchassi'>Chassi</label>
          </div>
        </div>

        <div class="col-3" >
          <div class="form-floating">
            <input type="text" class="form-control"  name="vtrrenavan"  value="<?=$vtrrenavan;?>" placeholder="RENAVAN" >
            <label for='vtrrenavan'>RENAVAN</label>
          </div>
        </div>
        <div class="col-sm" >
          <div class="form-floating">
           <select class="form-select"  name="vtrcombustivel"  value="<?=$vtrcombustivel;?>" placeholder="Combustível" >
              <option value="Gasolina" <?php if($vtrcombustivel == 'Gasolina') echo 'selected';?>>Gasolina</option>
              <option value="Etanol" <?php if($vtrcombustivel == 'Etanol') echo 'selected';?>>Etanol</option>
              <option value="Diesel" <?php if($vtrcombustivel == 'Diesel') echo 'selected';?>>Diesel</option>
              <option value="Diesel S10" <?php if($vtrcombustivel == 'Diesel S10') echo 'selected'?>>Diesel S10</option>
            </select> 
            <label for='Combustível'>Combustível</label>
          </div>
        </div>
        <div class="col-sm" >
          <div class="form-floating">
            <input type="text" class="form-control"  name="vtrpneu"  value="<?=$vtrpneu;?>" placeholder="Pneu" >
            <label for='vtrpneu'>Pneu</label>
          </div>
        </div>
      </div>

      <div class="row gx-1 gy-1">
        <div class="col-3" >
          <div class="form-floating">
            <input type="text" class="form-control"  name="vtrodomatual"  value="<?=$vtrodomatual;?>" placeholder="000000" required>
            <label for='vtrodomatual'>Odometro atual (Mapa)</label>
           </div>
        </div>

        <div class="col-sm" > 
          <div class="form-floating">
            <input type="text" class="form-control"  name="vtroutros"  value="<?=$vtroutros;?>" placeholder="Outros">
            <label for='vtroutros'>Observações</label>
           </div>
        </div>

        <div class="col-2" > 
          <div class="form-floating">
            <input type="text" class="form-control"  name="vtrvaloratualtgr"  value="<?=$vtrvaloratualtgr;?>" placeholder="Valor Atual TGR" required>
            <label for='vtrvaloratualtgr'>Valor Atual TGR</label>
          </div>
        </div>
      </div>

      <div class="row gx-1 gy-1">
        <div class="col-3" >
          <div class="form-floating">
            <select class="form-select"  name="vtrespecie"  value="<?=$vtrespecie;?>" placeholder="Espécie" >
              <option value="ABT" <?php if($vtrespecie == 'ABT') echo 'selected';?>>ABT</option>
              <option value="ASA" <?php if($vtrespecie == 'ASA') echo 'selected';?>>ASA</option>
              <option value="AT" <?php if($vtrespecie == 'AT') echo 'selected';?>>AT</option>
              <option value="ATC" <?php if($vtrespecie == 'ATC') echo 'selected';?>>ATC</option>
              <option value="ATP" <?php if($vtrespecie == 'ATP') echo 'selected';?>>ATP</option>
              <option value="AV" <?php if($vtrespecie == 'AV') echo 'selected';?>>AV</option>
              <option value="MN" <?php if($vtrespecie == 'MN') echo 'selected';?>>MN</option>
              <option value="MOTOCICLETA" <?php if($vtrespecie == 'MOTOCICLETA') echo 'selected';?>>MOTOCICLETA</option>
              <option value="UR" <?php if($vtrespecie == 'UR') echo 'selected';?>>UR</option>
              <option value="URS" <?php if($vtrespecie == 'URS') echo 'selected';?>>URS</option>
            </select>
            <label for='vtrespecie'>Espécie</label>
          </div>
        </div>
        <div class="col-sm" >
          <div class="form-floating">
            <select class="form-select"  name="vtrclasse"  value="<?=$vtrclasse;?>" placeholder="Classe" >
              <option value="Administrativa" <?php if($vtrclasse == 'Administrativa') echo 'selected';?>>Administrativa</option>
              <option value="Salvamento" <?php if($vtrclasse == 'Salvamento') echo 'selected';?>>Salvamento</option>
              <option value="Resgate" <?php if($vtrclasse == 'Resgate') echo 'selected';?>>Resgate</option>
              <option value="Náutica" <?php if($vtrclasse == 'Náutica') echo 'selected';?>>Náutica</option>
              <option value="Incêndio" <?php if($vtrclasse == 'Incêndio') echo 'selected';?>>Incêndio</option>
            </select>
            <label for='vtrclasse'>Classe</label>
          </div>
        </div>
        <div class="col-2" >
          <div class="form-floating">
            <select class="form-select"  name="vtrstatus"  value="<?=$vtrstatus;?>" placeholder="Status" >
              <option value="ATIVA" <?php if($vtrstatus == 'ATIVA') echo 'selected';?>>Ativa</option>
              <option value="INATIVA" <?php if($vtrstatus == 'INATIVA') echo 'selected';?>>Inativa</option>
            </select>
            <label for='vtrstatus'>Status</label>
          </div>
        </div>
      </div>
     
      <input type="text" name="vtrid" value="<?=$vtrid;?>" hidden>
      
      <div class="form-floating">
        <button type="submit" class="btn btn-primary " name="acao" value="vtrupdate">Enviar</button>
<!-- <a href="?idvtr=<?=$vtrid?>&excluir=1" type="button" class="btn btn-danger">Excluir <i class="fas fa-trash"></i></a>
-->     </div>

    </form>
  </div>
</div>

<?php require '../templates/footer.php';?>    