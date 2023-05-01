<!DOCTYPE html>

<html lang="hi-IN">

<head>
<title> Recipe Submission Details </title>
<link rel="icon" type="image/x-icon" href="Favicon.png">
<link rel="stylesheet" href="style.css">
</head>

<body>
<h1> <a href="file:///C:/Users/shiva/Documents/Baking/Home.html"> <img src="Logo.png" alt="A Sweet Hello" title="Click here to go to the Home page" style="width:200px;height:200px;"> </a> </h1>

<?php
$password= $_POST['password'];
if ($password == "activate")
{
$fhandle= fopen("C:\\Users\\shiva\\Documents\\Baking\\Recipe_submission_data.txt","w");
echo "<h2>Submission Details</h2>";
$date= $_POST['date'];
$category= $_POST['category'];
$name= $_POST['name'];
$image= $_POST['image'];
echo "DATE: ".$date."<br><br>CATEGORY: ".$category."<br><br>NAME: ".$name."<br><br>IMAGE: ".$image."<br><br>";
$data= "DATE: ".$date."\n\nCATEGORY: ".$category."\n\nNAME: ".$name."\n\nIMAGE: ".$image."\n\n";
if (isset($_POST["ingredient"]) && isset($_POST["amount"]))
{
echo "INGREDIENTS: <br>";
$data= $data."INGREDIENTS: \n";
foreach ($_POST["ingredient"] as $ing)
{
echo $ing."<br>";
$data= $data.$ing."\n";
}
echo "<br>AMOUNTS: <br>";
$data= $data."\nAMOUNTS: \n";
foreach ($_POST["amount"] as $amt)
{
echo $amt."<br>";
$data= $data.$amt."\n";
}
}
else
{ echo "Error: No data"; }
$preheattemp= $_POST['preheattemp'];
$preheattime= $_POST['preheattime'];
$baketemp= $_POST['baketemp'];
$baketime= $_POST['baketime'];
$steps= $_POST['steps'];
$notes= $_POST['notes'];
echo "<br>PREHEAT TEMP.: ".$preheattemp."\t&\tPREHEAT TIME: ".$preheattime."<br>BAKE TEMP.: ".$baketemp."\t&\tBAKE TIME: ".$baketime."<br><br>STEPS: ".$steps."<br><br>NOTES: ".$notes."<br>";
$data= $data."\nPREHEAT TEMP.: ".$preheattemp."\t&\tPREHEAT TIME: ".$preheattime."\nBAKE TEMP.: ".$baketemp."\t&\tBAKE TIME: ".$baketime."\n\nSTEPS: ".$steps."\n\nNOTES: ".$notes."\n";
fwrite($fhandle, $data);
fclose($fhandle);
}
else
{ echo "<h2>Invalid password!<\h2>"; }
?>
</body>
</html>
