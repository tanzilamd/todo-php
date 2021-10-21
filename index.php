<?php
    session_start();
    // session_unset();
    // $todo_list = [4,12];

    print("<pre>");
    // echo 'request <br>';
    // print_r ($_REQUEST);
    echo 'post <br>';
    print_r ($_POST);
    // echo 'get <br>';
    // print_r ($_GET);
    // array_push($todo_list, $_POST['title']);
    echo "session";
    // print_r($_SESSION);
    // $_SESSION['todo_list'] = [];
    if (isset($_POST['title'])) {
        array_push($_SESSION['todo_list'], $_POST['title']);
    }
    print_r($_SESSION);
    // print_r($todo_list);
    print("</pre>");
?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>

    <body>
        <div class="section my-5">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <form action="index.php" method="POST">
                            <input name="title" class="form-control" placeholder="name">
                            <br>
                            <button class="btn btn-success btn-sm">submit</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-body">
                        <ul class="list-group d-flex flex-column-reverse flex-wrap">
                            <?php foreach($_SESSION['todo_list'] as $key => $item) { ?>
                            <li class="list-group-item d-flex justify-content-between mt-1"><?php echo $item; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>