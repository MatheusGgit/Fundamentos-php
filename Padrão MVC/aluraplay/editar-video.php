<?php
$dbpath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbpath");

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
$title = filter_input(INPUT_POST, 'title');
if ($id === false | $url === false | $title === false ){
    header('Location: /index.php?sucesso=0');
    exit();
}

$sql = 'UPDATE videos SET url = :url, title = :title WHERE id = :id;';
$statement = $pdo->prepare($sql);
$statement->bindValue(':url', $url);
$statement->bindValue(':title', $title);
$statement->bindValue(':id', $id);
//$statement->bindValue(1, filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT));

if ($statement->execute() === false){
    header('Location: /index.php?sucesso=0');
} else {
    header('Location: /index.php?sucesso=1');
}