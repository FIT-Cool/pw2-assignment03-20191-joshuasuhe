<?php
include_once 'db_function/insurance_func.php';
include_once 'db_function/patient_func.php';
?>

<!DOCTYPE html>

<html>
<head>
    <title>Pemrograman Web 2</title>
    <meta name="author" content="Joshua (1772013)">
    <meta name="description" content="PHP Navigation and PHP Data Object (PDO)">
    <link rel="stylesheet" type="text/css" href="css/tableStyle.css">
    <script src="js/my_js.js"></script>
</head>

<body marginwidth="10%">
<div class="page">
    <nav>
            <h2>
            <a href="?menu=hm">Home</a>
            <a href="?menu=pt">Patient</a>
            <a href="?menu=ins">Insurance</a>
            </h2>
    </nav>

    <main>
        <?php
        $targetMenu = filter_input(INPUT_GET, 'menu');
        switch ($targetMenu) {
            case 'hm':
                include_once 'view/home.php';
                break;
            case 'pt':
                include_once 'view/patient.php';
                break;
            case 'ins':
                include_once 'view/insurance.php';
                break;
            case 'updIns':
                include_once 'view/insurance_update.php';
                break;
            case 'updPat':
                include_once 'view/patient_update.php';
                break;
            default:
                include_once 'view/home.php';
        }
        ?>
    </main>
</div>
</body>
</html>
