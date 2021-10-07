<?php 
 
// Load the database configuration file 
require __DIR__ . '/../vendor/autoload.php';
require __DIR__. '/../source/medoo_config.php';
use CsvHilario\ExportCsv\ExportCsv;

$data = $database->select("usuarios", '*',[
  "ORDER" => [
    "pontuacao"=> "DESC"
  ] ,
]);
$header = ["Id", 'Nickname', 'E-mail', "Nome", "CPF", 'Pontuação', 'Moedas', 'Etapa'];
$i = 0;
foreach ($list as $userItem) {
        $datalist[$i]  = array($userItem['id'], $userItem['nickname'], $userItem['email'] , $userItem['nome'],  $userItem['cpf'], $userItem['pontuacao'], $userItem['moedas'], $userItem['etapa']); 
        $i++;
}
$data = array($datalist);

// // $csv = new ExportCsv;
// // $csv->setData($datalist);
// // $csv->setHeader($header);
// // $csv->setDelimiter(";");
// // $csv->setFileName("Hiper_Game_Badotti");
// // $csv->setOutput("S", "../csv");
// // $csv->export();

$csv2 = new ExportCsv;
$csv2->setData($data);
$csv2->setHeader($header);
$csv2->setDelimiter(";");
$csv2->setFileName("Hiper_Game_Badotti");
$csv2->export();