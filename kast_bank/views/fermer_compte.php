<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>liste des comptes</title>
        <?php include("../assets/b.php") ?>
        <?php include("../controllers/getListeComptesNonBloques.php") ?>
    </head>
    <body>
        <header class="min-vh-100">
            <form action="../controllers/bloquerCompte.php" method="POST">
                <?php
                    include("../controllers/bloquerCompte.php");
                ?>
                <center>
                    <h2 style="margin-left: 100px;margin-top: 40px;">Les comptes non Bloques</h2>
                </center>
                <table class="table table-striped table-hover table-sm" style="text-align: center;">
                <caption class="caption-top">Liste des comptes non bloques</caption>
                <thead class = "table-dark">
                    <tr style="font-weight: 500; font-size: 20px; color: #4F6487;">
                        <td></td>
                        <td>Rang</td>
                        <td>Num_compte</td>
                        <td>Date creation</td>
                        <td>Etat</td>
                        <td>Noms clients</td>
                        <td>Solde</td >
                        <td>Type</td>
                        <td colspan="5" style="text-align: center;">Actions</td>
                    </tr>
                </thead>
                    <?php
                        $comptes = getListeComptesNonBloques();
                        $num = 1;
                        for($i = 0; $i < count($comptes); $i++){
                            echo "<tr>";
                            echo "<td scope =\"row\">"."<input type=\"checkbox\" "."value=\"".$comptes[$i]->getNum_compte()."\""."name=\"chexboxee[]\">"."</td>";
                            echo "<td>".$num."</td>";
                            echo "<th scope =\"row\">".$comptes[$i]->getNum_compte()."</th>";
                            echo "<td scope =\"row\">".$comptes[$i]->getDate_creation()."</td>";
                            echo "<td scope =\"row\">".$comptes[$i]->getEtat()."</td>";
                            echo "<td scope =\"row\">".$comptes[$i]->getNomClientCompte()." ".$comptes[$i]->getPrenomClientCompte()."</td>";
                            echo "<td scope =\"row\">".$comptes[$i]->getSolde()."</td>";
                            echo "<td scope =\"row\">".$comptes[$i]->getType_cpt()."</td>";
                            echo "<td><a onclick=\"confirm(alert('voulez-vous Bloquer ce compte?'))\" href=\"./fermer_compte.php?resil=".$comptes[$i]->getNum_compte()."\">"."Bloquer"."</a>"."</td>";
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
                <button type="submit" name="save" class="btn btn-primary border-0 py-2 px-3" style="background-color: #4F6487;height:40px; text-align: center; align-items: center;"><a href="./creer_compte.php" style="color: #fff;">Retour</a></button>
                <button type="submit" name="save" class="btn btn-primary border-0 py-2 px-3" style="background-color: #4F6487;height:40px; text-align: center; align-items: center;"><a href="./les_comptes_bloques.php" style="color: #fff; text-decoration:none;">Comptes bloques</a></button>
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
