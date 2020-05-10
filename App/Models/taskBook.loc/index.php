<?php
session_start();

include __DIR__ . '/App/autoload.php';

use \App\Models\Authorization;
use \App\Models\Pagination;
use \App\Db;

$auth = new Authorization(new Db());

$uriPage = '?';

    if ( isset($_GET['page']) && is_numeric($_GET['page']) ) {

        $page = $_GET['page'];
        $uriPage .= 'page=' . $page . '&';

    } else {

        $page = 1;
    }

$pagination = new Pagination(new Db());
$pagination->setLimit(3)->setPage($page);

$uri = '';

$field = $_GET['field'] ?: '';
$sort = $_GET['sort'] ?: '';

$cond =  ( ($field === 'name' || $field === 'email' || $field === 'status') && ($sort === 'asc' || $sort === 'desc'));

    if ($cond){

        $uri .= '&field=' . $field . '&sort=' . $sort;
        $tasks = $pagination->getPageDataSortBy($page, htmlspecialchars(mb_strtoupper($sort)), htmlspecialchars($field));

    } else {

        $tasks = $pagination->getPageData($page);

    }

include __DIR__ . '/App/Views/index.php';



