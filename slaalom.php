<?php
    require_once ("config.php");
    if (!empty($_REQUEST["korras_id"])){
        $command=$connectionString->prepare(query:"UPDATE jalgrattaeksam SET slaalom=2 WHERE id=?");
        $command->bind_param(type: "i", $_REQUEST["korras_id"]);
        $command->execute();
    }
    if (!empty($_REQUEST["vigane_id"])){
        $command=$connectionString->prepare(query:"UPDATE jalgrattaeksam SET slaalom=2 WHERE id=?");
        $command->bind_param(type: "i", $_REQUEST["vigane_id"]);
        $command->execute();
    }
    $command=$connectionString->prepare(query:"SELECT id, eesnimi, perekonnanimi FROM jalgrattaeksam WHERE teooriatulemus>=9 AND slaalon=-1");
    $command->bind_param($id, $eesnimi, $perekonnanimi);
    $command->execute();
    ?>
 <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,  Minimum-scale=1.0">
                <meta http-equiv="x-AU-Compatible" content="ie=edge">
            <title>Slaalon</title>
        </head>
        <body>
            <table>
                <?php
                    while($command->fetch()){
                        echo"
                            <tr>
                                <td>$eesnimi</td>
                                <td>$perekonnanimi</td>
                                <td>
                                    <a href='?korras_id=$id'>Korras</a>
                                    <a href='?vigane_id=$id'>ebaõnnestus</a>
                            </tr>
                        ";
                ?>