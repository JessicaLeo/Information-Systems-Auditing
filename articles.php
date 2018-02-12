
<html>
<head>
    <title>Articles</title>
</head>
<body>
<?php echo '<h1>IT Security Articles</h1>';

@ $db_conn = new mysqli
('localhost', 'jessica', 'jess123', 'ITAudit');

 $query = "select * from Articles";


  $stmt = $db_conn -> prepare($query);
   $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($biztype,$link);

   while ($stmt->fetch()) {

	 echo "<p>Business Type: <b>".$biztype."</b></br>";
	 echo "Article: <a href='.$link.'>$link</a><br />";

	 echo "<p/>";
  }
  $stmt->free_result();

  $db_conn->close();

?>
</body>
</html>
