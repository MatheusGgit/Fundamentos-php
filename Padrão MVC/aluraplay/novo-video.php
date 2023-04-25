<?php
$dbpath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbpath");

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
$title = filter_input(INPUT_POST, 'title');

if ($url === false){
    header('Location: /index.php?sucesso=0');
    exit();
}

$sql = 'INSERT INTO videos (url, title) VALUES (?, ?)';
$statement = $pdo->prepare($sql);
$statement->bindvalue(1, $url);
$statement->bindvalue(2, $title);
if ($statement->execute() ===  false){
    header('Location: /index.php?sucesso=0');
} else {
    header('Location: /index.php?sucesso=1');
}
