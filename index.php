<?php

function putPage($page) {
    // put a list of allowed pages here
    $allowed = array('page1', 'page2');

    $page = trim($page);
    $page = (in_array($page, $allowed)) ? $page : 'home';

    echo @file_get_contents('.\html\\' . $page . '.html');

}

?>

<html>
    <head>
        <title>Title</title>
        <!-- put stylesheets, js files, etc. here -->
        		<link rel="stylesheet" type="text/css" href="/css/main.css">
    </head>
    <body>
        <!-- you can have a nav bar or something here -->
        <div class="navbar">
            <a href="?page=page1">Page 1</a> <a href="?page=page2">Page 2</a>
        </div>
        <?php  putPage($_GET['page']); ?>
        <!-- put a footer here -->
    </body>
</html>
