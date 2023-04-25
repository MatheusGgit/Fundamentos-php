<?php
$dbpath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbpath");

$id = $_GET['id'];

$sql = 'DELETE FROM videos WHERE id = ?';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $id);
//$statement->bindValue(1, filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT));

if ($statement->execute() === false){
    header('Location: /index.php?sucesso=0');
} else {
    header('Location: /index.php?sucesso=1');
}