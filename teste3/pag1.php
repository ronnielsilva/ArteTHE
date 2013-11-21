<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap 101 Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            /* Prevents slides from flashing */
            #slides {
                display:none;
            }
        </style>

        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="jquery.slides.min.js"></script>

        <script>
            $(function() {
                $("#slides").slidesjs({
                    width: 940,
                    height: 528
                });
            });
        </script>
    </head>
    <body>
       
        <script src="http://code.jquery.com/jquery.js"></script>

        <div id="slides">
            <img src="http://placehold.it/940x528">
            <img src="http://placehold.it/940x528">
            <img src="http://placehold.it/940x528">
            <img src="http://placehold.it/940x528">
            <img src="http://placehold.it/940x528">
        </div>
    </body>
</html>