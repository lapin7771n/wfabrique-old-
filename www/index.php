<!DOCTYPE html>
<html lang="en">
<?php
include_once 'blocks\head.php';
 ?>
<body>
    <div id="wrapper">
        <?php include_once 'blocks\header.php'; ?>
        <div class="content">
           <!--Блок«Наши прокты»-->
            <?php include_once 'blocks\projects.php'; ?>
            <!--Блок Наша Команда -->
            <?php include_once 'blocks\about_us.php';
                  include_once 'blocks\team.php';
                  include_once 'blocks\add.php';
                  ?>
        </div>
            <?php include_once 'blocks\footer.php'; ?>
    </div>
</body>
</html>
