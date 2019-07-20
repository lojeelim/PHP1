<?php
require ("Database.php");
$data = new Database();
//case 1: inserting data

 $case = $data ->execute("INSERT INTO databasetable(name , email , password , address ) VALUES ('Lojee', 'lojeelim@gmail.com' , '1234', 'talisay city')");
echo "CASE 1: ".$case;
 echo"<br>";

// //case 2: updating data
// $case = $data ->execute("UPDATE databasetable SET name = 'Loko' WHERE id=1");
// echo "CASE 2: ".$case;
// echo"<br>";

// //case 3: view all data
// $case = $data ->execute("SELECT * FROM databasetable");
// echo "CASE 3: ".$case;
// echo"<br>";

// //case4: delete data
// $case = $data ->execute("DELETE FROM databasetable WHERE id=1");
// echo "CASE 4: ".$case;
// echo"<br>";

// //case5: inserting data
// $case = $data ->execute("INSERT INTO databasetable(name , email , password , address ) VALUES ('lokojee', 'lokojee@gmail.com' , '12345', 'talisay city')");
// echo "CASE 5: ".$case;
// echo"<br>";

// //case6 update data again
// $case = $data ->execute("UPDATE databasetable SET name = 'Lokoja' WHERE id=1");
// echo "CASE 6: ".$case;
// echo"<br>";
// //case 3: view all data again
// $case = $data ->execute("SELECT * FROM databasetable");
// echo "CASE 7: ".$case;
// echo"<br>";
//case4: delete data again
// $case = $data ->execute("DELETE FROM databasetable WHERE id=1");
// echo "CASE 8:".$case;
// echo"<br>";
?>

