<?php
if(isset($_POST['contactName']) && isset($_POST['contactMsg'])){
    $contactName = $_POST['contactName'];
    $contactMsg = $_POST['contactMsg'];
    $populated = true;
}else {
    $_POST['contactName']= "";
    $_POST['contactMsg'] = "";
}

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>
<header><h2>Azure Deployment Test | Contact</h2></header>
<nav><a href="index.html">Home</a> &nbsp; <a href="contact.php">Contact</a> </nav>
<div>
    <form action="contact.php" method="post">
    <div>
        <br />
    <label id="contactName">Name:&nbsp;&nbsp; &nbsp;</label>
        <input type="text" name="contactName" id="contactName" value=""/>
    </div>
    <br />
    <div>
        <label id="contactMsg">Message: </label>
        <textarea rows="10" cols="30" id="contactMsg" name="contactMsg" value=""></textarea>
    </div
        <input type="submit" value="Submit" />
        </form>

</div>
<p>
    <?php
    if($populated){
        echo "<dialog>Message Sent</dialog>" . '<br />';
        echo "Contact Name: " . $contactName . '<br />';
        echo "Message: " . $contactMsg . '<br />';
    }

   ?>


</p>
<body>
</body>
</html>