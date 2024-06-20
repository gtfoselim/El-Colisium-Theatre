

<?php
include_once '../../controller/SolutionC.php';
include_once '../../Model/Solution.php';

//include 'header.php';
$error = "";

    // create adherent
    $solution = null;
    $solutionC = new SolutionC();
    $list =  $solutionC->afficherReclamation();
    if (
    isset($_POST["ID_S"]) &&
    isset($_POST["DATE_RESOLUTION"]) &&
    isset($_POST["DESCRIPTION"]) &&
    isset($_POST["ID_REC"]) 
    ) {
        if (
            !empty($_POST["ID_S"]) &&
            !empty($_POST["DATE_RESOLUTION"]) &&
            !empty($_POST["DESCRIPTION"]) &&
            !empty($_POST["ID_REC"])
        ) {
            $solution = new Solution(
                $_POST['ID_S'],
                new DateTime($_POST['DATE_RESOLUTION']),
                $_POST['DESCRIPTION'],
                $_POST['ID_REC']
            );
            $solutionC->ajouteSolution($solution);
            header('Location:afficherSolution.php');
        }
        else
            $error = "Missing information";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hhhh</title>
    <script type="text/javascript" src="reclamation.js"></script>
</head>
<body>

<?php
    define('DS', DIRECTORY_SEPARATOR);
    define('BASE_PATH', dirname(__FILE__).DS);
    define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER[
'SCRIPT_NAME']).'/');
?>
 <center>
        <script
 src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script>
            $(function(){
                setInterval(function(){
                    $('#ajax-refresh').load('<?php echo BASE_URL;?>chat.php');
                }, 1000);
            });
        </script>
   
        
        </center>
        <button><a href="afficherSolution.php">Retour à la liste des solutions</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        <script>
                   function validateForm() {
  let x = document.forms["emna"]["ID_S"].value;
  if (x == "") {
    alert("ID_S");
    return false;
  }
 /* 
  let b = document.forms["emna"]["DATE_RESOLUTION"].value;
  if (b == "") {
    alert("RESOLUTION");
    return false;
  }
  let c = document.forms["emna"]["DESCRIPTION"].value;
  if (c == "") {
    alert("DESCRIPTION");
    return false;
  }
  let d = document.forms["emna"]["ID_RECLAMATION"].value;
  if (d == "") {
    alert("ID_RECLAMATION");
    return false;
  }
  
  */
}
        </script>
       
        <form action="" name="emna"  method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="ID_S">id:
                        </label>
                    </td>
                    <td><input type="number" name="ID_S" id="ID_S" maxlength="20" ></td>
                    <p ID_S="errorI" class="error"></p>
                </tr>
				
              
                <tr>
                    <td>
                        <label for="date">Date Resolution:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="DATE_RESOLUTION" id="DATE_RESOLUTION" >
                    </td>
                    <p id="errorDR" class="error"></p>
                </tr> 
                <tr>
                    <td>
                        <label for="DESCRIPTION">Description:
                        </label>
                    </td>
                    <td><input type="text" name="DESCRIPTION" id="DESCRIPTION" ></td>
                </tr>
                

                <td>
                    <label for="ID_REC">ID_RECLAMATION:
                    </label>
                </td>
                <td>
                <select name="ID_REC" id="ID_REC">
                <?php
                foreach($list as $Reclamation)
                { 
                    ?> 
                        <option value="<?php echo $Reclamation['ID_RECLAMATION'] ?>"><?php echo $Reclamation['ID_RECLAMATION'] ?></option>             
                        <?php } ?>
                </select>
                
                </td>



               
                       
                <tr>
                    <td></td>
                    <td>
                        <input type="submit"  value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>