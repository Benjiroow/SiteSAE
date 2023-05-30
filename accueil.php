<?php

session_start();

$dnn=$_GET['annee'];


// Génération de la page à partir de la vue et du layout
$page_title = "Page d'accueil - Alda";
$css = 'acccueil.style.css';

ob_start();
if ((date('Y')-$dnn)>=18):
    require_once 'app/view/accueil.view.php';
else:
    require_once 'accueil.php';
endif;
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
