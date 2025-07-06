<?php
$data = [
  'tanggal' => $_POST['tanggal'],
  'shift' => $_POST['shift'],
  'jumlah' => $_POST['jumlah'],
  'jenis' => $_POST['jenis'],
  'pekerja' => $_POST['pekerja']
];

$file = 'data/data.json';
$allData = [];

if (file_exists($file)) {
  $json = file_get_contents($file);
  $allData = json_decode($json, true);
}

$allData[] = $data;

file_put_contents($file, json_encode($allData, JSON_PRETTY_PRINT));
header("Location: index.php");
exit;
?>
