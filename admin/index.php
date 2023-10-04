<?php
include_once 'top.php';
include_once 'menu.php';


?>

<div>


    <div class="container-fluid px-4">
        <!-- <h1>Selamat Datang di Halaman Admin</h1> -->

        <?php

        error_reporting(0);
        $url = $_GET['url'];
        if($url == 'dashboard.php'){
            include_once 'dashboard.php';
        }elseif ($url == 'About.php'){
            include_once 'About.php';
        }
        elseif ($url == 'Contact.php'){
            include_once 'Contact.php';
        }elseif ($url == 'DataTable.php'){
            include_once 'DataTable.php';
        }
        elseif (!empty($url)) {
            include_once ''.$url.'.php';
        }else {
            'dashboard.php';
        }
        ?>
    </div>
</div>

<?php
include_once 'buttom.php';

?>