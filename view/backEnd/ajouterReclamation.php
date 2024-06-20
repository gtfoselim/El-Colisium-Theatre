<?php
include_once '../../model/Reclamation.php';
include_once '../../controller\ReclamationC.php';
//include 'header.php';

// Create an empty error message
$error = "";

// Create a new Reclamation object
$Reclamation = null;

// Create a new ReclamationC object
$ReclamationC = new ReclamationC();

// Check if the form has been submitted
if (
    isset($_POST["ID_RECLAMATION"]) &&
    isset($_POST["NAME"]) &&
    isset($_FILES["image"]) &&
    isset($_POST["EMAIL"]) &&
    isset($_POST["SUBJECT"]) &&
    isset($_POST["MESSAGE"])
) {
    // Check if the required fields are not empty
    if (
        !empty($_POST["ID_RECLAMATION"]) &&
        !empty($_POST["NAME"]) &&
        //!empty($_POST["image"]) &&
        !empty($_FILES["image"]["name"]) &&
        !empty($_POST["EMAIL"]) &&
        !empty($_POST["SUBJECT"]) &&
        !empty($_POST["MESSAGE"])
    ) {
        // Get the temporary filename of the uploaded image
        $tmp_name = $_FILES["image"]["tmp_name"];

        // Generate a unique filename for the image
        $filename = uniqid() . '.' . pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

        // Move the uploaded image to a permanent location on the server
        $destination = '../images/' . $filename;
        move_uploaded_file($tmp_name, $destination);

        // Create a new Reclamation object with the image filename
        $Reclamation = new Reclamation(
            $_POST['ID_RECLAMATION'],
            $_POST['NAME'],
            $filename,
           //$_POST['image'],
            $_POST['EMAIL'],
            $_POST['SUBJECT'],
            $_POST['MESSAGE']
        );

        // Add the Reclamation to the database
        $ReclamationC->ajouteReclamation($Reclamation);

        // Redirect the user to the Reclamation list page
        //header('Location: afficherReclamation.php');
       
    } else 
        // Set the error message
        $error = "Missing information";
    
}
?>

<center>
    <div class="col-lg-8 mt-5 mt-lg-0">
        <form action="" method="post" role="form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="number" name="ID_RECLAMATION" class="form-control" id="ID_RECLAMATION" placeholder="Your ID">
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" name="NAME" class="form-control" id="NAME" placeholder="Your Name">
                </div>
                <div class="col-md-6 form-group">
                    <input type="file" name="image" class="form-control" id="image" placeholder="image">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="EMAIL" id="EMAIL" placeholder="Your Email">
                </div>
            </div>
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="SUBJECT" id="SUBJECT" placeholder="SUBJECT">
            </div>
      
                <div class="form-group mt-3">
                    <textarea class name="MESSAGE" rows="8" placeholder="MESSAGE"></textarea>
                </div>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input  class="text-center" type="reset" value="Annuler" >
                    </td>
                </tr>
            </form>
        </div>
  </center>
  

