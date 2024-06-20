<?php
    include '../../Controller/AdminC.php';
    include '../../Model/Admin.php';

    $AdminC = new AdminC();
    if(isset($_POST['update_User'])){
        $Admin = new Admin($_POST['username_admin'],$_POST['firstname_admin'], $_POST['lastname_admin'] , $_POST['email_admin'],$_POST['phone_admin'],$_POST['password_admin'],$_POST['photo_admin'] );
        $AdminC->updateAdmin($_GET['id_admin'],$Admin);
        header('Location:../back/tables_admin.php');
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
                            <a href="tables_admin.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        

                        <?php
                        if(isset($_GET['id_admin']))
                        {
                            $r=$AdminC->getAdmin($_GET['id_admin']);
                                ?>
                                <img src="../images/<?= $r['photo_admin'] ?>" alt="" width="100" height="100" class="round-image">
                                <style>
                                   .round-image {
        display: block;
        margin: auto;
        border-radius: 50%;
       
    } </style>
                                <form method="POST">
                                <div class="mb-3">
                                    <label>Username</label>
                                    <input type="text" name="username_admin" class="form-control" value="<?=$r['username_admin']?>">
                                </div>
                                <div class="mb-3">
                                    <label>FirstName</label>
                                    <input type="text" name="firstname_admin" class="form-control" value="<?=$r['firstname_admin']?>">
                                </div>
                                <div class="mb-3">
                                    <label>lastname</label>
                                    <input type="text" name="lastname_admin" class="form-control" value="<?=$r['lastname_admin']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Password</label>
                                    <input type="password" name="password_admin" class="form-control" value="<?=$r['password_admin']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="text" name="email_admin" class="form-control" value="<?=$r['email_admin']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <input type="text" name="phone_admin" class="form-control" value="<?=$r['phone_admin']?>">
                                </div>
                               
                                <div class="mb-3">
                                    <label>Photo</label>
                                 <input type="file" name="photo_admin" class="form-control" value="<?= $r['photo_admin']?>">
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