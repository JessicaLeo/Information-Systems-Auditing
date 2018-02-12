<?php
$user = $_POST['x'];
$password = $_POST['y'];
$message = "<b>You have successfully logged in!</b>";
$message2 = "Sorry wrong information has been entered!<br/>";

$x = false;

$u = array(
    "jessica" => 'hello',
    "Soon" => 'GiveHerAnA',

    );

foreach($u as $name => $pass)

    if($user === $name && $password === $pass )
    {
        echo $message;
        echo "<b> Welcome $name</b>";
        $x = true;

    }

if ($x == false)
{
    echo $message2;
}

//This language is used so that a malicious person
//cannot tell if they entered the user or password wrong.
//If they knew one was correct they could then use other
//tactics to figure out the other one.

    include ("articles.php");

?>