<html>
<body>



<?php
$users = array("admin"=>"nimda", "nabila"=>"yorda", "test"=>"test");
#array_key_exists($key, $array)

$usrname = $_POST["name"];
$passwd = $_POST["password"];



if (array_key_exists($usrname, $users)) {
  if ($users[$usrname] == $passwd) {
  echo "Welcome " . strtoupper($usrname);
} else {
  echo "Wrong Password";
}
} else {
  echo "User Not Found";
}
?>

</body>
</html>