<?php
 require_once ("config.php");
 if (!empty($_REQUEST["korras_id"])){
     $command=$connectionString->prepare(query:"UPDATE jalgrattaeksam SET ringtee=1 WHERE id=?");
     $command->execute();
}
if (!empty($_REQUEST["vigane_id"])){
    $command=$connectionString->prepare(query:"UPDATE jalgrattaeksam SET ringtee=1 WHERE id=?");
    $command->execute();
}