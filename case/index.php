<?php
session_start();
use Sale\controller\WebController;

require __DIR__ . '/vendor/autoload.php';

$webController = new WebController();
$page = $_REQUEST['page'] ? $_REQUEST['page'] : null;

switch ($page) {
    case "show":
        $webController->showFollowMenuColumn();
        break;
    case "detail":
        $webController->showDetail();
        break;
    case "menu":
        $webController->showMenuContent();
        break;
    case "cart":
        $webController->addToCart();
        break;
    case "check_out":
        $webController->checkOut();
        break;
    case "send":
        $webController->getOrder();
        break;
    case "search":
        $webController->searchProduct();
        break;
    case "login":
        $webController->login();
        break;
    case "login_check":
        $webController->loginCheck();
        break;
    case "adminAdd":
        $webController->adminAdd();
        break;
    case "adminDelete":
        $webController->adminDelete();
        break;
    case "adminUpdate":
        $webController->adminUpdate();
        break;
    case "adminSearch":
        $webController->adminSearch();
        break;
    case "adminCancel":
        $webController->adminCancel();
        break;
    default:
        $webController->homePage();
}
