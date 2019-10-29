<!<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            header {
                background: #e3e3e3;
                padding: 2em;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <!-- You can omit the closing tag if the file is solely PHP.  
            If it's being added to something like HTML, for example, you must include closing tag. -->
            <h1>
                <?php
                    // Get value associated with the name key on the query string (e.g. `http://localhost:888?name=Ed`)
                    // $_GET is an array that references query string (?)
                    $name = $_GET['name'];
                    // For above path, will be `Hello, Ed`
                    echo "Hello, $name";
                ?>
            </h1>
            <!-- The same output as above.  Cannot interpolate because we are referencing an item in an
            array, NOT a variable, so we must concatenate. -->
            <h1>
                <?php echo "Hello, " . $_GET['name']; ?>
                <!-- The below is equivalent to the above - That opening tag is equivalent to saying
                "open up php, and echo out text." -->
                <?= "Hello, " . $_GET['name']; ?>
                <!-- THE ABOVE IS SUSPECTIBLE TO CODE INJECTION!  Users can pass html code in as "name" value and
                it will be viewed as such. -->
                
                <!-- Below, we make use of the built in `htmlspecialchars` function to convert text to html
                representation, and sanitize the input -->
                <?= 'Hello, ' . htmlspecialchars($GET_['name']) ?>
            </h1>
        </header>
        
    </body>
</html>