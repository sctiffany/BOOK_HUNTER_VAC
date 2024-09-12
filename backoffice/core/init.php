<?php
session_start();
// Initialisation

// 1. Charger les params
require_once '../app/config/params.php';

require_once '../core/constantes.php';

require_once '../core/bouncer.php';

// 2. Charger la connexion
require_once '../core/connexion.php';

// 3. Charger les helpers
require_once '../core/helpers.php';
