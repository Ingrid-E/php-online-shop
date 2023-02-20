<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APPNAME;?></title>
</head>
<body>
    <?php
        $ajaxPeticion=false;
        require_once '../app/controllers/viewController.php';
        require_once('../app/controllers/clientController.php');
        $viewController = new ViewController();
        $view = $viewController->get_views_controller();
        if($view == "login" || $view == "404"){
            require_once '../app/views/contents/'.$view.'View.php';
        }
        /*
        -----TEST CLIENT CONTROLLER---------

        $clientDaoTest = new ClientController();
        $client = $clientDaoTest->getAllClients()[0];
        $client_img = $client->getImg();
        $dataURI = 'data:image/png;base64,' . base64_encode($client_img);
        echo "<img src='$dataURI'>";
        */
    ?>
</body>
</html>