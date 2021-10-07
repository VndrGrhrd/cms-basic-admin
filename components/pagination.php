<?php
require __DIR__. '/../source/medoo_config.php';

$start = $_POST['offset_start'];
$limit =  $_POST['offset_end'];
$data = $database->select("usuarios", '*',[
  "LIMIT" => [$start, $limit],

  "ORDER" => [
    $_POST['filtro']=> $_POST['ordem']
  ] ,
]);
$i = 0;
foreach($data as $userItem) {
          $data[$i]['id'] = $userItem['id'];
          $data[$i]['nome'] = $userItem['nome'];
          $data[$i]['nickname'] = $userItem['nickname'];
          $data[$i]['cpf'] = $userItem['cpf'];
          $data[$i]['pontuacao'] = $userItem['pontuacao'];
          $data[$i]['moedas'] = $userItem['moedas'];
          $data[$i]['etapa'] = $userItem['etapa'];
          $data[$i]['premio_01'] = $userItem['premio_01'];
          $data[$i]['premio_02'] = $userItem['premio_02'];
      $i++;
}
$list_data = $data;
echo json_encode($list_data);
