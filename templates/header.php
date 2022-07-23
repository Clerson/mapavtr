<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Mapa Viaturas</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta http-equiv="refresh" content="120" > -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="../img/favico.gif">
<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<?php
session_start(); 
include "../conexao.php";
include "model.php";
include "_form_insert.php";
?>

<body class="bg-dark small">
<!--     <div class="bg-white shadow text-center p-3">
      <h4>MAPA DE CONTROLE DE SAÍDAS DAS VIATURAS DO 9º BBM - CALDAS NOVAS/GO</h4>
    </div> -->

  <div class="container-sm p-4 mb-5">

    <div class="row">

         <div class="col-sm-2 bg-white me-2 p-2 rounded-3 shadow">
          
            <?php include_once "menu_vert_esq.php";?> 
             
          </div>
       
          <div class="col-sm">

            <div class="row mb-2 bg-white shadow rounded-3 sticky-top">

              <nav class="navbar navbar-expand-sm ">
              <ul class="navbar-nav">
                <li class="nav-item"><a href='javascript:history.back()' class='btn btn-light shadow-sm me-2'><i class="fas fa-reply"></i> Voltar</a></li>
                <li class="nav-item me-2">
                  <div class='btn btn-light shadow-sm' data-bs-toggle="modal" data-bs-target="#insert"><i class="fas fa-plus"></i> Adicionar</div>
                </li>
                