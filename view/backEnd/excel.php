<?php
require '../../controller/SolutionC.php';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=liste_des_reclamation.com.xls");
$SolutionC = new SolutionC();
$Solution = $SolutionC->afficherSolution();
?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border='2'>
    <thead>
        <tr>
            <th>ID_Solution</th>
            <th>DATE_RESOLUTION</th>
            <th>DESCRIPTION</th>
            <th>ID_REC</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach($Solution as $s) {
        ?>
        <tr>
            <td><?php echo $s['ID_S']; ?></td>
            <td><?php echo $s['DATE_RESOLUTION']; ?></td>
            <td><?php echo $s['DESCRIPTION']; ?></td>
            <td><?php echo $s['ID_REC']; ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
