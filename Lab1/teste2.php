<?php
$pdo = new PDO('mysql:host=localhost:3306;dbname=test', 'root', '');

if($_POST){    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

	$sql = "select * from usuario where nome = :nome and senha = :senha";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':nome', $nome);
	$stmt->bindValue(':senha', $senha);
	$run = $stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	var_dump($result);
}
?>