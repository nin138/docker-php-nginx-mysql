<meta charset="UTF-8">
<title>test</title>
<h1>DB TEST</h1>
<?php

$user = $_ENV['MYSQL_USER'];
$pass = $_ENV['MYSQL_PASSWORD'];
try {
    $db = new PDO('mysql:host=mysql;dbname=test', $user, $pass);
    $db->query('insert into test(date) values (now())');
    $st = $db->query('SELECT * from test');
    while($result = $st->fetch(PDO::FETCH_ASSOC)){
      print($result['id']. ' || ');
      print($result['date'].'<br>');
    }
  } catch (Exception $e) {
    echo($e);
  }
?>

