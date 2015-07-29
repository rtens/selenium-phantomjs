<?php
    $name = "World";
?>
<html>
<head>
    <title>Test page</title>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>
        $(function () {
            $('body').append('<h1>Hello <?php echo $name ?>!</h1>');
        });
    </script>
</head>

<body></body>
</html>
