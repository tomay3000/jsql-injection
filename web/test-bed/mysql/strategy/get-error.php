<?php
# http://127.0.0.1/mysql/strategy/get-error.php?id=0

mysql_connect("127.0.0.1", "login", "password");

mysql_select_db("my_database");

$result = mysql_query("SELECT col1, col2 FROM my_table where id=$_GET[id]") or die("Could not connect: ". mysql_error());