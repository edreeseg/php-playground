<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Conditionals</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <h1>Task For The Day</h1>
        <ul>
            <li>
                <strong>Name: </strong><?=$task['title'];?>
            </li>
            <li>
                <strong>Due Date: </strong><?=$task['due'];?>
            </li>
            <li>
                <strong>Person Responsible: </strong><?=$task['assigned_to'];?>
            </li>
            <li>
                <strong>Status: </strong>
                <span class="icon">
                    <?php
                        if ($task['completed']){
                            echo 'Complete';
                        } else {
                            echo 'Incomplete';
                        }
                    ?>
                </span>
            </li>
            <li>
                <strong>Status: </strong>
                <!-- Identical to above: -->
                <?php if ($task['completed']) : ?>
                    <span class="icon">Complete</span>
                <?php else : ?>
                    <span class="icon">Incomplete</span>
                <?php endif; ?>
            </li>
        </ul>
    </body>
</html>