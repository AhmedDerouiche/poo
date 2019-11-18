<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editer</title>
   
</head>
<body>
    <?php
        include 'LesFonctions.php';
        $request= new fonctions;
        $req=$request->readunetudiant();
        $data=$req->fetch();
    ?>
    <div class="container">
        <fieldset>
            <legend>Editer Etudiant</legend>
            <form action="update.php" method="post">
                <div class="form-group">
                    <label for="fn">First Name</label>
                    <input type="text" class="form-control" name="firstname" value="<?=$data['firstname']?>">
                </div>
                <div class="form-group">
                    <label for="ln">Last Name</label>
                    <input type="text" class="form-control" name="lastname" value="<?=$data['lastname']?>">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" value="<?=$data['email']?>">
                </div>
                <div class="form-group">
                    <label for="ph">Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?=$data['phone']?>">
                </div>
                <input type="number" name="id" id='id' value="<?=$_GET['id']?>" hidden>
                <button type="submit" class="btn btn-outline-success">Change</button>
            </form>
        </fieldset>
    </div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>