<?php
require __DIR__. '/../../services/db.php';

$data = $database->select("usuarios", '*',[
  "ORDER" => [
    "pontuacao"=> "DESC"
  ] ,
  'LIMIT' => [0, 100]
  // "LIMIT" => [0, 2]
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
 

// require __DIR__ . '/../vendor/autoload.php';

// use Source\Models\User;

// $user = new User();
// $list = $user->find->limit(100)->order('pontuacao DESC')->fetch(true);
// $i = 0;
//    foreach ($list as $userItem) {
//         $data[$i]['id'] = $userItem->id;
//         $data[$i]['nome'] = $userItem->nome;
//         $data[$i]['nickname'] = $userItem->nickname;
//         $data[$i]['cpf'] = $userItem->cpf;
//         $data[$i]['pontuacao'] = $userItem->pontuacao;
//         $data[$i]['moedas'] = $userItem->moedas;
//         $data[$i]['etapa'] = $userItem->etapa;
//         $data[$i]['premio_01'] = $userItem->premio_01;
//         $data[$i]['premio_02'] = $userItem->premio_02;
//     $i++;
//   }
// $list_data = $data;
// echo json_encode($list_data);
