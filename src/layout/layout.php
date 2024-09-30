<!DOCTYPE html>
<html lang="en">

<head>
    <!-- head includes meta, scripts and styles link  -->
    <?php
    include '_partials/_head.php';
    ?>
</head>

<body class="relative h-full w-full">
    <div class="flex flex-col">

        <!-- top header with email and phone no  -->
        <?php
        include '_partials/_header.php';
        ?>


        <!-- navbar  -->
        <?php
        include '_partials/_navbar.php';
        ?>


        <!-- mobile sidebar  -->
        <?php
        include '_partials/_mobile_nav.php';
        ?>

        <div class="flex-grow">

        <!-- content area  -->
            <?php include $content; ?>
        </div>


        <!-- footer -->
        <?php
        include '_partials/_footer.php';
        ?>
    </div>
</body>

</html>