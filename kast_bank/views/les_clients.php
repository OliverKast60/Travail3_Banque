<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>liste de client</title>
        <?php include("../assets/b.php") ?>
        <?php include("../controllers/getListeClients.php") ?>
    </head>
    <body>
        <header class="min-vh-100">
            <form action="../controllers/supprimerClient.php" method="POST">
                <?php
                    ob_start();
                    include("../controllers/supprimerClient.php");
                ?>
                <center>
                    <h2 style="margin-left: 100px;margin-top: 40px;">Les clients</h2>
                </center>
                <table class="table table-striped table-hover table-sm" style="text-align: center;">
                <caption class="caption-top">Liste des clients</caption>
                <thead class = "table-dark">
                    <tr style="font-weight: 500; font-size: 25px; color: #4F6487;">
                        <td></td>
                        <td>Rng</td>
                        <td>Num</td>
                        <td>Nom</td>
                        <td>Prénom</td>
                        <td>Sexe</td>
                        <td>Adresse</td>
                        <td>Télephone</td>
                        <td>Date de naissance</td>
                        <td>Email</td>
                        <td>Photo</td>
                        <td colspan="5" style="text-align: center;">Actions</td>
                    </tr>
                </thead>


                    <?php
                    $clients = getListeClients();
                    $num = 1;
                    for($i = 0; $i < count($clients); $i++){
                        echo "<tr>";
                        echo "<td scope =\"row\">"."<input type=\"checkbox\" "."value=\"".$clients[$i]->getNum_client()."\""."name=\"chexboxee[]\">"."</td>";
                        echo "<td>".$num."</td>";
                        echo "<th scope =\"row\">".$clients[$i]->getNum_client()."</th>";
                        echo "<td scope =\"row\">".$clients[$i]->getNom_client()."</td>";
                        echo "<td scope =\"row\">".$clients[$i]->getPrenom_client()."</td>";
                        echo "<td scope =\"row\">".$clients[$i]->getSexe()."</td>";
                        echo "<td scope =\"row\">".$clients[$i]->getAdresse_client()."</td>";
                        echo "<td scope =\"row\">".$clients[$i]->getCode_poste()."</td>";
                        echo "<td scope =\"row\">".$clients[$i]->getNum_tel_client()."</td>";
                        echo "<td scope =\"row\">".$clients[$i]->getDate_naiss()."</td>";
                        echo "<td scope =\"row\">"."<img src=\"../photos_clients/".$clients[$i]->getImage_client()."\"width=\"80\">"."</td>";
                        echo "<td><a href=\"./modifierclient.php?modif=".$clients[$i]->getNum_client()."\">"."<img src=\"../images/modifier.png\" style=\"height: 40px; width: 40px;\"></a>"."</td>";
                        echo "<td><a onclick=\"confirm('voulez-vous imprimer?');window.print()\" href=\"#\">"."<img src=\"../images/imprimente.png\" style=\"height: 40px; width: 40px;\"></a>"."</td>";
                        echo "<td><a onclick=\"confirm(alert('voulez-vous supprimer?'))\" href=\"./les_clients.php?supp=".$clients[$i]->getNum_client()."\">"."<img src=\"../images/effacer.png\" style=\"height: 40px; width: 40px;\"></a>"."</td>";
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
            <div class="p-3 m-auto text-center mb-3 mt-3">
                <button type="submit" name="save" class="btn btn-primary border-0 py-2 px-3" style="background-color: #4F6487;height:30px; text-align: center; align-items: center;"><a href="./creer_client.php" style="color: #fff;">Retour</a></button>
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
