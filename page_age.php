<?php



require_once 'config.php';

// Génération de la page à partir de la vue et du layout
$page_title = "Validation âge - Alda";
$css = 'page_age.style.css';

ob_start();
require_once 'app/view/page_age.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 










