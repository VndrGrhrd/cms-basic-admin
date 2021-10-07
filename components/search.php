<?php
require __DIR__. '/../source/medoo_config.php';

$data = $database->select("usuarios", '*',[
        "cpf" => $_POST['search']
      ]);
      echo json_encode($data);

