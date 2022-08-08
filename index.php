<?php
require_once('config.inc.php');
$conn_str= DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
try{
	$pdo=new PDO($conn_str,DB_USER,DB_PASS);
?><!DOCTYPE html>
    <html>
    <head>
         <title>Profiles</title>
         <link rel="stylesheet" href="cssfile.css?v=<?php echo time(); ?>">
    </head>
    <body>
    <?php include_once('header.php'); ?>
    <h1 class="new">Profiles</h1>
    <ul>
<?php
$sql= 'SELECT * FROM profile';
$profiles=$pdo->query($sql);

while($p= $profiles->fetch())
{
    echo "<li><i><a href='show_details.php?id=".$p['id']."'>".$p['name']."</a></i>   from   ".$p['city']."    email:  ".$p['email']."</li><br>";
}
    } catch (PDOException $e) 
    {
        die($e->getMessage());
    }
?>
</ul>
</body>
</html>