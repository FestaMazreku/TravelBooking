<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['roli'])) {

    if($_SESSION['roli'] == 1) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Packages</title>
            <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
            <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
            <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
            <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="assets/vendor/datatables/datatables.min.css" rel="stylesheet">
            <link href="assets/css/master.css" rel="stylesheet">
        </head>
        <body>
        <div class="wrapper">
            <?php include 'src/components/navbar.php'?>
            <div id="body" class="active">
                <?php include 'src/components/navbarProfile.php'?>
                <div class="content">
                    <div class="container">
                        <div class="page-title">
                            <h3>Packages</h3>
                        </div>
                        <div class="box box-primary">
                            <div class="box-body">
                                <table width="100%" class="table table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th class="col-lg-2">Id</th>
                                        <th class="col-lg-3">Emri</th>
                                        <th class="col-lg-3">Pershkrimi</th>
                                        <th class="col-lg-1">Fotografia</th>
                                        <th class="col-lg-1">Link</th>
                                        <th class="col-lg-1"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    require "../database/connect.php";
                                    $stmt = $connect->prepare("SELECT * FROM packages");
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while($row = $result->fetch_assoc()):
                                        ?>
                                        <tr>
                                            <td><?= $row['p_id'] ?></td>
                                            <td><?= $row['emri'] ?></td>
                                            <td><?= $row['pershkrimi'] ?></td>
                                            <td><?= $row['fotografia'] ?></td>
                                            <td><?= $row['link'] ?></td>
                                            <td></td>
                                        </tr>
                                    <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/datatables/datatables.min.js"></script>
        <script src="assets/js/initiate-datatables.js"></script>
        <script src="assets/js/script.js"></script>
        </body>
        </html>
        <?php
    }
//nese perdoruesi nuk eshte admin ridrejtoje ne faqen baze pas kyqjes
    else {
        header("Location: index.php");
    }
}
//nese perdoruesi nuk eshte kyq ridrejtoje ne faqen e logimit
else {
    header("Location: login.php");
}
?>