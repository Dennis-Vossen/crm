<html>
<head>
<title>insert data in database using PDO(php data object)</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="main">
<h1>Insert data into database using PDO</h1>
<div id="login">
<hr/>
    <form action="" method="post">
            <label>Naam:</label>
            <input type="text" name="naam" placeholder="Naam"><br /><br />
            <label>Email:</label>
            <input type="email" name="email" placeholder="E-mail"><br/><br />
            <label>Telefoon:</label>
            <input type="tel" name="telefoon" placeholder="telefoon"><br/><br />
            <input type="submit" value=" Submit " name="submit"/><br />
    </form>
    </div>
</div>
<?php
if(isset($_POST["submit"])){
$hostname='localhost';
$username='root';
$password='';

try {
$dbh = new PDO("mysql:host=$hostname;dbname=crm",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO klanten (naam, telefoon, email)
VALUES ('".$_POST["naam"]."','".$_POST["telefoon"]."','".$_POST["email"]."')";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>
</body>
</html>