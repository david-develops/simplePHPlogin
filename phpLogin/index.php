<?php
    include_once 'addtl/dbh.php';
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CSS-->
        <link rel="stylesheet" href="style.css">
        <title>Login Page - davidhalldevelops</title>
        <!--Favicon-->
        <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <!-- Google fonts -->
        <link href='https://fonts.googleapis.com/css?family=Coda' rel='stylesheet'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- jQuery CDN-->
    </head>
    <body>
        <header>
            <!--Header bar with link to home page and to be included on every page-->
            <nav id="header-bar">
                <a class="home-nav-link" href="./index.html"><h3>davidhalldevelops.com</h3></a>
                <a class="nav-link" href="./course-work.html">Course Work</a>
                <a class="nav-link" href="./documents/David Hall-Resume.pdf">Resume</a>
                <a class="nav-link" href="./projects.html">Projects</a>
                <a href="javascript:void(0);" class="nav-icon" ><span class="material-icons">menu</span></a>
            </nav>
        </header>
        <div id="page-heading">
            <h2>Login</h2>
        </div>
        <main>
            <div class='section' id='login-div'>
                <form id="login-form" action="post">
                    <label for="userName">User Name</label><br>
                    <input type="text" name="userName" id="userName"><br>
                    <label for="password">Password </label><br>
                    <input type="text" name="password" id="password"><br>
                    <button type="submit">Login</button><br>
                    <a href="newUser.php">New User?</a>
                </form>
            </div>
            <?php
                $sql = "SELECT * FROM user;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['name'];
                    }
                }
            ?>
        </main>
        <footer>
            <div id="icons-wrap">
                <div id="" class="icon-container"><a href="https://www.facebook.com/david.hall.251/"><img class="icon" src="img/facebook_icon.png" alt="Visit my Facebook Page"></a></div>
                <div id="" class="icon-container"><a href="https://www.linkedin.com/in/david-hall-a6a983168/"><img class="icon" src="img/linkedin_icon.png" alt="Visit my Linkedin Page"></a></div>
                <div id="" class="icon-container"><a href="https://github.com/david-devlops"><img class="icon" src="img/github_icon.png" alt="See some of my projects on github"></a></div>
            </div>
            <h4>Made in August 2020 by David Hall</h4>    
        </footer>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    </body>
</html>
        