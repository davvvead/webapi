<?php
$host = "localhost";
$username = "admin";
$password = "1234";

try
{
    $conn = new PDO("mysql:host=$host;dbname=form_database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

// if (isset($_POST)) {
//     var_dump($_POST);
// }

if(isset($_POST['fname']) && $_POST['fname']!='' && isset($_POST['mname']) && $_POST['mname']!='' && isset($_POST['lname']) && $_POST['lname']!='' && isset($_POST['age']) && $_POST['age']!='' && isset($_POST['sex']) && $_POST['sex']!='' && isset($_POST['height']) && $_POST['height']!='' && isset($_POST['ghcard']) && $_POST['ghcard']!='' && isset($_POST['marital']) && $_POST['marital']!='')
{
    $sql = "INSERT INTO form(fname, mname, lname, age, sex, height, ghcard, marital) VALUES('".addslashes($_POST['fname'])."', '".addslashes($_POST['mname'])."', '".addslashes($_POST['lname'])."', '".addslashes($_POST['age'])."', '".addslashes($_POST['sex'])."', '".addslashes($_POST['height'])."', '".addslashes($_POST['ghcard'])."', '".addslashes($_POST['marital'])."') ";
    $conn->query($sql);

    return true;
}
else {
    return false;
}
?>