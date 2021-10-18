<?php
session_start();

if(isset($_POST["sub"]))
{
require_once 'addNameProc.php';
$addName = new AddNamesProc();
$nm=$_POST["nm"];
$max=count($_SESSION['nm']);
$_SESSION['nm'][$max+1] = $addName->set_name($nm); // name added to session
}
else if(isset($_POST["cl"]))
{
   $_SESSION['nm']=array(5);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Add Names</title>
  </head>
  <body>
<form action="" method="POST">
<h2>Add Names</h2>
<input type="submit" name="sub" value="Add Names" class="btn btn-primary">
<input type="submit" name="cl" value="Clear Names" class="btn btn-primary">
<br>
Enter Names
<br>
<input type="text" name="nm" class="form-control">
<br>
List of Names
<textarea name="ta" rows="50" class="form-control">
<?php
$max=count($_SESSION['nm']);
$output="";
for($i=1;$i<$m;$i++)
{
   $output .=$_SESSION['nm'][$i]['lname'].",".$_SESSION['nm'][$i]['fname']."\n";
}
echo $output;
?>

</textarea>
</form>
</body>
</html>