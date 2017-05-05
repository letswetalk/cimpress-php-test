<?php

require_once 'autoload.php';

use Controller\SiteController;

/** @var SiteController $controller */
$controller = new SiteController();
$controller->indexAction();