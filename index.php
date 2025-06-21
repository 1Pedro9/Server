<?php
    $menu = "info";
    if(isset($_GET['menu'])){
        $menu = $_GET['menu'];
    }
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server: <?php echo shell_exec('hostname -I');?></title>
    
    <link rel="stylesheet" href="Resources/css/styles.css">
    <link rel="stylesheet" href="Resources/css/drive.css">
    <link rel="stylesheet" href="Resources/css/default.css">
</head>
<body>
    
    <main>
        <section class="sidebar">
            <div class="sidebar-container">
                <nav class="navigate">
                    <button onclick="toggle_sidebar_left()"><img src="Resources/images/dock-right-symbolic.svg" alt=""></button>
                    <h3>Navigate</h3>
                    <hr>
                </nav>
                <li class="li <?php if($menu == "info"){ echo "selected-server"; } ?>" onclick="route(`info`, this)">
                    <button><img src="Resources/images/network-proxy-server-symbolic.svg" alt=""></button>
                    <button>Server Info</button>
                </li>
                <li class="li <?php if($menu == "drive"){ echo "selected-server"; } ?>" onclick="route(`drive`, this)">
                    <button><img src="Resources/images/usb-stick-symbolic.svg" alt=""></button>
                    <button>Drive</button>
                </li>
                <li class="li <?php if($menu == "email"){ echo "selected-server"; } ?>" onclick="route(`email`, this)">
                    <button><img src="Resources/images/mail-unread-symbolic.svg" alt=""></button>
                    <button>Email</button>
                </li>
                <li class="li <?php if($menu == "messaging"){ echo "selected-server"; } ?>" onclick="route(`messaging`, this)">
                    <button><img src="Resources/images/send-symbolic.svg" alt=""></button>
                    <button>Messaging</button>
                </li>
                <li class="li <?php if($menu == "hosting"){ echo "selected-server"; } ?>" onclick="route(`hosting`, this)">
                    <button><img src="Resources/images/globe-alt2-symbolic.svg" alt=""></button>
                    <button>Web Hosting</button>
                </li>
                <li class="li <?php if($menu == "databases"){ echo "selected-server"; } ?>" onclick="route(`databases`, this)">
                    <button><img src="Resources/images/table-symbolic.svg" alt=""></button>
                    <button>Databases</button>
                </li>
                <li class="li <?php if($menu == "software"){ echo "selected-server"; } ?>" onclick="route(`software`, this)">
                    <button><img src="Resources/images/org.gnome.Software-symbolic.svg" alt=""></button>
                    <button>Software</button>
                </li>
                <li class="li <?php if($menu == "media"){ echo "selected-server"; } ?>" onclick="route(`media`, this)">
                    <button><img src="Resources/images/library-music-symbolic.svg" alt=""></button>
                    <button>Media Server</button>
                </li>
                <li class="li <?php if($menu == "security"){ echo "selected-server"; } ?>" onclick="route(`security`, this)">
                    <button><img src="Resources/images/fingerprint-symbolic.svg" alt=""></button>
                    <button>Security System</button>
                </li>
                <li class="li <?php if($menu == "cyber"){ echo "selected-server"; } ?>" onclick="route(`cyber`, this)">
                    <button><img src="Resources/images/password-entry-symbolic.svg" alt=""></button>
                    <button>Cyber Security</button>
                </li>
            </div>
            
        </section>
        <section class="main-container">
            <nav class="navbar">
                <div class="nav-left">
                    <h1><?php echo shell_exec('hostname -I');?></h1>
                </div>
                <div class="nav-right">
                    <button class="button"><img src="Resources/images/down-small-symbolic.svg" alt=""></button>
                    <button class="button" onclick="toggle_sidebar()"><img src="Resources/images/dock-right-symbolic.svg" alt=""></button>
                </div>
            </nav>
            
            <div class="main">
                <?php
                    switch($menu){
                        case "info":
                            require("Templates/info.php");
                            break;
                        case "drive":
                            require("Templates/drive.php");
                            break;
                        case "email":
                            require("Templates/email.php");
                            break;
                        case "messaging":
                            require("Templates/messaging.php");
                            break;
                        case "hosting":
                            require("Templates/hosting.php");
                            break;
                        case "databases":
                            require("Templates/database.php");
                            break;
                    }
                ?>
            </div>
            <?php
                /*
                $output = shell_exec('ls -la');
                echo "<pre>$output</pre>";
                */
            ?>
        </section>
        <section class="sidebar right-sidebar">
        <?php
            switch($menu){
                case "info":
                    require("Templates/sidebar/info.php");
                    break;
                case "drive":
                    require("Templates/sidebar/drive.php");
                    break;
                case "email":
                    require("Templates/sidebar/email.php");
                    break;
                case "messaging":
                    require("Templates/sidebar/messaging.php");
                    break;
                case "hosting":
                    require("Templates/sidebar/hosting.php");
                    break;
                case "databases":
                    require("Templates/sidebar/database.php");
                    break;
            }
        ?>
        </section>
    </main>

    
    
    <script src="Resources/js/app.js"></script>
</body>
</html>
