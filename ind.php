<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Atelier3</title>
</head>
<body>
<div class="container py-4">
     <div class="jumbotron"><h1 class="text-center">Listes Des Etudiants</h1></div>
  
 
    <table class="table table-primary">
       <tr>
            
            <th>Login </th>
            <th>Password</th>
            
   
        </tr>
        
        <?php
         include 'LesFonctions.php';
         $etud=new fonctions;
         $listetud=$etud->readalletudiants();
         while($data = $listetud->fetch())
         {
             echo '<tr>';
             echo '<td>'.$data['id'].'</td>';
             echo '<td>'.$data['firstname'].'</td>';
             echo '<td>'.$data['lastname'].'</td>';
             echo '<td>'.$data['email'].'</td>';
             echo '<td>'.$data['phone'].'</td>';
             echo '<td> <a href="edit.php?id='.$data['id'].'" class="btn btn-outline-success">Editer</a><a href="delete.php?id='.$data['id'].'" class="btn btn-danger">Supprimer</a></td>';
             echo '</tr>';
         };
        ?>
  
    </table>
    
    <a href="create.php" class="btn btn-outline-success">Nouvel Etudiant</a>
  
    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>