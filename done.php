<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style>
    body{
        background: linear-gradient(180deg, rgba(9,9,9,0.9584034297312675) 3%, rgba(47,156,212,1) 57%);
        background-repeat: no-repeat;
        height:100vh;
        margin:200px;
        font-family:'roboto';
    }
    h1,h2{
        color:white;
        padding: 6rem 0;
        text-align:center;
    }

    h2{
        color:red;
        padding: 5rem 0;
        text-align:center;
    }

    </style>

</head>
<body>
<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    if( $name != '' && $email != ''){
            echo "<center>
            <h1>Congratulations! You have succesfully subscribed</h1>
            </center>";
    }else{

        echo"<h2>Error please check again</h2>";
        
    }
}
?>
    





</body>
</html>

