<!DOCTYPE html>
<head>
    <title>The Devs</title>
    <link rel="stylesheet" type="text/css" href="css/dev.css">
    <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js/jquery-ui.js"></script>
     <script src="js/jquery.animate-shadow.js"></script>
     <script src="js/dev.js"></script>
</head>

<?php

   session_start();

?>

<body>
    <div id="div_load">
        <table id="tbl_load">
            <tr>
                <td>
                    <span id="label_page">Introducing.</span>
                </td>
            </tr>
            <tr>
                <td>
                    <span id="load">0%</span>
                </td>
            </tr>
        </table>
    </div>


    <div id="content">
        <table id="tbl_content">
            <tr>
                <td>
                     <img src="images/logo_header.png">
                </td>
            </tr>
            <tr>
                <td>
                     <p id="devteam_label">The Dev Team</p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>