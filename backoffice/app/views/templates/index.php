<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once '../app/views/templates/partials/_head.php' ?>;
</head>

<body>
    <!-- Fixed navbar -->
    <?php include_once '../app/views/templates/partials/_nav.php' ?>;

    <div class="container theme-showcase" role="main" class="row">
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <?php include_once '../app/views/templates/partials/_header.php' ?>;
        <?php echo $content ?>
    </div>

    <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        window.jQuery ||
            document.write(
                '<script src="../../assets/js/vendor/jquery.min.js"><\/script>'
            );
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>