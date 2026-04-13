<?php
// Detecta automaticamente o caminho base do projeto.
// - XAMPP local (htdocs/ProjetoAstronomia-php): BASE_URL = "/ProjetoAstronomia-php"
// - InfinityFree (raiz do domínio):             BASE_URL = ""
if (!defined('BASE_URL')) {
    $docRoot     = isset($_SERVER['DOCUMENT_ROOT']) ? str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'])) : '';
    $projectRoot = str_replace('\\', '/', dirname(__DIR__));
    $base = '';
    if ($docRoot && strpos($projectRoot, $docRoot) === 0) {
        $base = substr($projectRoot, strlen($docRoot));
    }
    define('BASE_URL', rtrim(str_replace('\\', '/', $base), '/'));
}
