<?php
 $user = "ontheway.cash_wordpressuser";
 $password = "Yanjiuai123.";
 $database = "ontheway.cash_database";
 $table = "todo";

 try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
 echo "<h2>TODO</h2><ol>";
 foreach($db->query("SELECT content FROM $table") as $row) {
    echo "<li>" . $row['content'] . "</li>";
  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
