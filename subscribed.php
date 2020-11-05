<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subcribtion</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style>
    body{
        background: linear-gradient(180deg, rgba(9,9,9,0.9584034297312675) 3%, rgba(47,156,212,1) 57%);
        background-repeat: no-repeat;
        height:100vh;
        margin:200px;
        font-family:'roboto';
    }

    h1{
        color:white;
    }

    form{
        padding: 3rem 2.5rem;
        border-radius: 7px;
        width: 800px;
        margin: 0 auto;
    }
   
    label{
            display: block;
            margin-bottom: 0.5rem;
            text-align:left;
            margin: 10px 0;
            font-size:1.5rem;
            color:white; 
        }

        input{
            
        width: 100%;
    padding: 0.6rem;
    border-radius: 6px;
    font-size: 1.1rem;
    border: 1px solid #0d55df;
    
        }     

        input[type="submit"]{
            width:20%;
            margin-top:2rem;
            margin-right:50rem;
        }

    </style>
</head>
<body>
    <center>
    <h1>Please enter your details</h1>
    <form action="done.php" method="post">
        <label for="name">Full Name:</label>
        <input type="text" name="name" placeholder="Enter Full name">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter email">
        <input type="submit" name="submit" value="Submit">
    </form>
    </center>





</body>
</html>

