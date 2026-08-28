<!DOCTYPE html>
<html lang="en">

<?php
include_once('php/models/general_model.php');
$model = new generalModel();
$statusTypes = $model->getStatusTypes();
$allUsers = $model->getAllUsers();
include_once('php/views/head.php');
?>

<body>
    <?php
    include_once('php/views/header.php');
    include_once('php/views/navbar.php');
    ?>
    <!-- Start Content-->

    <main id="main" class="main">
        <?php
        $include_file = '';
        if (isset($_GET['submodule'])) {
            $submodule = $_GET['submodule'];
            switch ($submodule) {
                case 'users_list':
                    $include_file = 'php/views/users_list/usersList.php';
                    break;
                default:
                    $include_file = 'php/views/users_list/usersList.php';
                    break;
            }
        } else {
            $include_file = 'php/views/users_list/usersList.php';
        }


        include $include_file;

        ?>
    </main>

    <?php
    include_once('php/views/endpage.php');
    include_once('php/views/foot.php');
    ?>


</body>

</html>