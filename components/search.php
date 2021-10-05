<?php
require __DIR__. '/../../services/db.php';

$data = $database->select("usuarios", '*',[
        "cpf" => $_POST['search']
      ]);
      echo json_encode($data);


// require __DIR__ . '/../vendor/autoload.php';

// use Source\Models\User;

// $model = new User();
// $user = $model->find("cpf = :cpf", "cpf=719.271.589-15")->fetch();
//         $data[0]['id'] = $user->id;
//         $data[0]['nome'] = $user->nome;
//         $data[0]['nickname'] = $user->nickname;
//         $data[0]['cpf'] = $user->cpf;
//         $data[0]['pontuacao'] = $user->pontuacao;
//         $data[0]['moedas'] = $user->moedas;
//         $data[0]['etapa'] = $user->etapa;
//         $data[0]['premio_01'] = $user->premio_01;
//         $data[0]['premio_02'] = $user->premio_02;
// echo json_encode($data);


