<!--Scott Killen's Html Code. November 5, 2014. Assignment 4-->
<html>
<head>
<title>Signup Complete!</title>
<link rel="stylesheet" type="text/css" href="CSSfolder/datingstyle.css"/>
<h1>Thank you for joining the GUNIT family. A match will be found for you shortly. </h1>
</head>
<!--Writing to clients.txt-->
<body>
<?php
$username = "/var/www/html/12sjk11/pics";
if (is_uploaded_file($_FILES["avatar"]["tmp_name"])) {
	move_uploaded_file($_FILES["avatar"]["tmp_name"], "$username/avatar.jpg");
}
?>

<?php
$firstname = $_POST['Name'];
$lastname = $_POST['lName'];
$gender = $_POST['gender'];
$interested = $_POST['interested'];
$Birthday = $_POST['Birthday'];
$Hometown = $_POST['Hometown'];
$coding = $_POST['favouritecodinglanguage'];
$rapper = $_POST['favouriterapper'];
$bio = $_POST['bio'];
$img = $_POST['avatar'];
$fileHandle= fopen("clients.txt",'a');
fwrite($fileHandle, $firstname);
fwrite($fileHandle, ", ");
fwrite($fileHandle, $lastname);
fwrite($fileHandle, ", ");
fwrite($fileHandle, $gender);
fwrite($fileHandle, ", ");
fwrite($fileHandle, $interested);
fwrite($fileHandle, ", ");
fwrite($fileHandle, $Birthday);
fwrite($fileHandle, ", ");
fwrite($fileHandle, $Hometown);
fwrite($fileHandle, ", ");
fwrite($fileHandle, $coding);
fwrite($fileHandle, ", ");
fwrite($fileHandle, $rapper);
fwrite($fileHandle, ", ");
fwrite($fileHandle, $bio);
fwrite($fileHandle, "\r\n");
fclose($fileHandle);
?>
</body>
</html>

