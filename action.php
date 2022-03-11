<?php
require_once 'vendor/autoload.php';
use App\classes\Main;

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
}
else if(isset($_POST['full_name_button']))
{
    $main = new Main($_POST);
    $main->makeFullName();
}


?>