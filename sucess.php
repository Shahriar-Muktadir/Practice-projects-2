<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success page</title>
    <style>
    body{
        background: linear-gradient(180deg, rgba(9,9,9,0.9584034297312675) 3%, rgba(47,156,212,1) 57%);
        background-repeat: no-repeat;
        height:100vh;
        margin:200px;
    }
    table{
        border-collapse: collapse;
    }
        table,td,th{
            
            border: 1px solid #8106e8;
            padding: 8px;
            
        }

        table tr:nth-child(even){background-color: #0cd0a2;}
        table tr:nth-child(odd){background-color: #e8e174;}

        table tr:hover {
            background-color: #ddd;}
h1,h2{
            color: #40c3ff;
            font-size: 2em;
}

ol{
    margin:0;
}
           

    </style>
</head>
<body>
    <center>
    <h1>You have succesfully completed the form</h1>
    <h2>Here are your details:</h2>
    </center>

    <?php

if(isset($_POST['submit']))
{


  
		$name = $_POST['name']; 
		$email = $_POST['email']; 
		$age = $_POST['age']; 

		$selected_val = $_POST['favorite-selector'];
		$radiod = $_POST['recommend-friend'];
        // For checkbox
   

		$comments = $_POST['comments'];
        $favoriteselector = $_POST['favorite-selector'];
		$recomend = $_POST['recommend-friend'];
        $currentstate = $_POST['dropdown-selector-role'];
	
}

?>
<center>
<table>
    <tr>
        <th>Name:</th>
        <td><?php echo $name;?></td>
    </tr>

    <tr>
        <th>Email:</th>
        <td><?php echo $email;?></td>
    </tr>
    <tr>
        <th>Age:</th>
        <td><?php echo $age;?></td>
    </tr>

    <tr>
        <th>You like:</th>
        <td><?php echo $favoriteselector;?></td>
    </tr>

    <tr>
        <th>Recomendation:</th>
        <td>You <?php echo $recomend;?> recomend us.</td>
    </tr>

    <tr>
        <th>Your current state:</th>
        <td><?php echo $currentstate;?></td>
    </tr>

    <tr>
        <th>You suggested:</th>
        <td><?php  if(!empty($_POST['Reco'])){
            echo "<ol>";
            foreach($_POST['Reco'] as $checkd){
                echo "<li>".$checkd."</li><br>";
        }

        echo "</ol>";
       
    }
    ?></td>
    </tr>
    <tr>
        <th>Your messages:</th>
        <td><?php echo $comments;?></td>
    </tr>
</table>
</center>


</body>
</html>

