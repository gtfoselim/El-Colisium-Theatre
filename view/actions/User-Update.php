<?php
    include '../../Controller/UserC.php';
    include '../../Model/User.php';

    $UserC = new UserC();
    if(isset($_POST['update_User'])){
        $User = new User($_POST['username'],$_POST['firstname'], $_POST['lastname'] , $_POST['email'],$_POST['phone'],$_POST['password'],$_POST['photo'] );
        $UserC->updateUser($_GET['id'],$User);
        header('Location:../backEnd/tables-data.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Profile Update</title>
</head>
<body>
  
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile Update 
                            <a href="tables-data.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        

                        <?php
                        if(isset($_GET['id']))
                        {
                            $r=$UserC->getUser($_GET['id']);
                                ?>
                                <img src="../images/<?= $r['photo'] ?>" alt="" width="100" height="100" class="round-image">
                                <style>
                                   .round-image {
        display: block;
        margin: auto;
        border-radius: 50%;
       
    } </style>
                                <form method="POST">
                                <div class="mb-3">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" value="<?=$r['username']?>">
                                </div>
                                <div class="mb-3">
                                    <label>FirstName</label>
                                    <input type="text" name="firstname" class="form-control" value="<?=$r['firstname']?>">
                                </div>
                                <div class="mb-3">
                                    <label>lastname</label>
                                    <input type="text" name="lastname" class="form-control" value="<?=$r['lastname']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" value="<?=$r['password']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="<?=$r['email']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" value="<?=$r['phone']?>">
                                </div>
                               
                                <div class="mb-3">
                                    <label>Photo</label>
                                 <input type="file" name="photo" class="form-control" value="<?= $r['photo']?>">
                                </div>
                               
                                    <div class="mb-3">
                                        <button type="submit" name="update_User" class="btn btn-primary">
                                            Update Profile
                                        </button>
                                    </div>

                                </form>
                                <?php
                        }
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>