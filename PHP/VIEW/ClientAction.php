<?php
$mode = $_GET["m"];
$p = new Client($_POST);
switch ($mode)
{
    case "ajout":
        if($lvl>1)
        ClientManager::add($p);
        break;
    case "modif":
        if($lvl>1)
        ClientManager::update($p);
        break;
    case "suppr":
        if ($lvl==3)
        {
            ClientManager::delete($p);
        }
        break;
}
header("location:index.php?action=ClientListe");
