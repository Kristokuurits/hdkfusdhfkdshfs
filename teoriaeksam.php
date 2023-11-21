<?php
    requier_once("config.php");
    if (!empty($_REQUEST["teoriatulemus"])){
        $command=$connectionString->prepare("SELECT id, eesnimi, perekonnanimi FROM jalgrattaeksam WHERE teoriatulemus = -1");
        $command->bind_result($id, $eesnimi, $perekonnanimi);
        $command->execute();?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,  Minimum-scale=1.0">
                <meta http-equiv="x-AU-Compatible" content="ie=edge">
            <title>Teoriaeksam</title>
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
                        <form action=''>
                            <input type='hidden' name='id' value='$id' />
                            <input type='text' name='id' value='teooratulemus' />
                            <input type='submit' name='id' value='Sisesta tulemus' />
                        </form>
                    </td>
                </tr>
                ";
            }
            ?>
        </table>
    </body>
</html>