<?php
$host = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "RE";

// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$yourName = $conn->real_escape_string($_POST['your_name']);
$yourEmail = $conn->real_escape_string($_POST['your_email']);
$yourPhone = $conn->real_escape_string($_POST['your_phone']);
$comments = $conn->real_escape_string($_POST['comments']);
$postVars = array_keys($_POST);
$insertTables = "";
$questionMarks = "";
$param_type = "";
for($i = 0; $i<count($postVars); $i++){
  $insertTables.=", " . $postVars[$i];
  $questionMarks.=", ?";
  $param_type.="s";
}
$insertTables = substr($insertTables, 2);
$questionMarks = substr($questionMarks, 2);
$a_params = array();
$a_params[] = & $param_type;
$paramVals = array_values($_POST);
for($i = 0; $i < count($paramVals); $i++) {
  /* with call_user_func_array, array params must be passed by reference */
  $a_params[] = & $paramVals[$i];
}
$sql="INSERT INTO Prototype (".$insertTables.") VALUES (".$questionMarks.")";
echo $sql;
$stmt = $conn->prepare($sql);
if($stmt === false) {
  echo('Wrong SQL: ' . $sql . ' Error: ' . $conn->errno . ' ' . $conn->error);
}
call_user_func_array(array($stmt, 'bind_param'), $a_params);

echo $statement->queryString;
if(!$result = $stmt->execute()){
die('There was an error running the query [' . $stmt->error . ']');
}else{
echo "Thank you! We will contact you soon";
}

?>
