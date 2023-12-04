<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>liste des retrait</title>
        <?php include("../assets/b.php") ?>
        <?php include("../controllers/getListeRetraits.php") ?>
    </head>
    <body>
        <header class="min-vh-100">
            <form action="../controllers/supprimerRetrait.php" method="POST">
                <?php
                    ob_start();
                    include("../controllers/supprimerRetrait.php");
                ?>
                <center>
                    <h2 style="margin-left: 100px;margin-top: 40px;">Les retrait</h2>
                </center>
                <table class="table table-striped table-hover table-sm" style="text-align: center;">
                <caption class="caption-top">Liste des retrait</caption>
                <thead class = "table-dark">
                    <tr style="font-weight: 500; font-size: 20px; color: #4F6487;">
                        <td></td>
                        <td>Rang</td>
                        <td>Num_retrait</td>
                        <td>Date retrait</td>
                        <td>Montant</td>
                        <td>Noms clients</td>
                        <td>Infos Comptes</td>
                        <td colspan="5" style="text-align: center;">Actions</td>
                    </tr>
                </thead>
                    <?php
                        $retrait = getListeRetraits();
                        $num = 1;
                        for($i = 0; $i < count($retrait); $i++){
                            echo "<tr>";
                            echo "<td scope =\"row\">"."<input type=\"checkbox\" "."value=\"".$retrait[$i]->getNum_retrait()."\""."name=\"chexboxee[]\">"."</td>";
                            echo "<td>".$num."</td>";
                            echo "<th scope =\"row\">".$retrait[$i]->getNum_retrait()."</th>";
                            echo "<td scope =\"row\">".$retrait[$i]->getDate_retrait()."</td>";
                            echo "<td scope =\"row\">".$retrait[$i]->getMontant()."</td>";
                            echo "<td scope =\"row\">".$retrait[$i]->getNomClientRetrait()." ".$retrait[$i]->getPrenomClientRetrait()."</td>";
                            echo "<td scope =\"row\">".$retrait[$i]->getTypeCptRetrait()." ".$retrait[$i]->getSoldeCptRetrait()." $"."</td>";
                            echo "<td><a href=\"./modifierretrait.php?modif=".$retrait[$i]->getNum_retrait()."\">"."<img src=\"../images/modifier.png\" style=\"height: 40px; width: 40px;\"></a>"."</td>";
                            echo "<td><a onclick=\"confirm('voulez-vous imprimer?');window.print()\" href=\"#\">"."<img src=\"../images/imprimente.png\" style=\"height: 40px; width: 40px;\"></a>"."</td>";
                            echo "<td><a onclick=\"confirm(alert('voulez-vous supprimer?'))\" href=\"./les_retrait.php?supp=".$retrait[$i]->getNum_retrait()."\">"."<img src=\"../images/effacer.png\" style=\"height: 40px; width: 40px;\"></a>"."</td>";
                            echo "</tr>";

                            $num++;
                        }
                    ?>
                    <tr>
                        <td>
                            <input type="submit" name="supprimerr" value="Supprimer" class="partene">
                        </td>
                    </tr>
                </table>
            </form>
            <div style="font-size: 20px; font-weight: 500; margin-left: 20px;margin-right:20px; border:2px solid #9949">
                <p>Total : </p>
                <?php
                    include ("../models/calcul_montant.php");
                ?>
            </div>
            <div class="p-3 m-auto text-center mb-3 mt-3">
                <button type="submit" name="save" class="btn btn-primary border-0 py-2 px-3" style="background-color: #4F6487;height:30px; text-align: center; align-items: center;"><a href="./retrait.php" style="color: #fff;">Retour</a></button>
            </div>

        </header>
        <script type="text/javascript">
            //Script js pour la selection du checkbox
            $(document).ready(function(){
                $('#toutselectionner').on('click',function(){
                    if (this.cheked) {
                        $('.checkbox').each(function(){
                            this.cheked=true;
                        });
                    }else{
                        $('.checkbox').each(function(){
                            this.cheked=false;
                        });
                    }
                });
                $('.checkbox').on('click',function(){
                    if($('.checkbox:cheked').lenght ==$('.checkbox').lenght){
                        $('#toutselectionner').prop('cheked',true);
                    }else{
                        $('#toutselectionner').prop('cheked',false);
                    }
                });
            });
        </script>
    </body>
</html>
