<?php

/**
 * PHP Config
 */
ini_set("display_errors",'0');
$site_info=array(
    'title'=>'Shafayat Hossain',
    'page_info'=>array(
        'home'=>array(
            'page_title'=>'Home'
            )
    )
);
$page='home';
if($_REQUEST['page'])
$page=$_REQUEST['page'];
$page_info=$site_info['page_info'][$page];
include_once('header.php');
?>
<?php
include_once($page.".php");
?>
<?php
include_once('footer.php');
?>