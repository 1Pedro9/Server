<?php
    $currentFolder = "/home/pedro/";
?>

<h1 class="title">Database</h1>
<br>
<div class="database-container">
    This section will be dedicated for databases and managing databases. 
    This page itself is dedicated for small short cuts. There are different 
    programs but the main one is to look and manage your databases. You 
    can click <span class="italic">Manage Database</span> to open the main application. There is 
    also options for <span class="italic">remote access</span>, <span class="italic">add database</span>, 
    <span class="italic">analytics</span>, <span class="italic">database users</span>.

    <br><br><hr><br>

    <div class="database-buttons">
        <button>Manage Database</button>
        <button>Remote Access</button><br>
        <button>Add Database</button>
        <button>Analytics</button><br>
        <button>Database Users</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>Database name</th>
                <th>Domain</th>
                <th>Created By</th>
                <th>Created On</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Helpmekaar</td>
                <td>schoolhelp.co.za</td>
                <td>pedro</td>
                <td>2021/11/10</td>
            </tr>
            <tr>

            </tr>
        </tbody>
    </table>
</div>

<!-- 
<div class="split" style="border: 1px solid #aaa; border-radius: 10px;">
    <div class="folder">
        <nav class="split">
            <button class="button"><img src="Resources/images/search.svg" alt=""></button>
            <h3>Database</h3>
            <button class="button"><img src="Resources/images/menu-symbolic.svg" alt=""></button>
        </nav>
        <?php 
            $array = array("Helpmekaar", "Devoted", "sessions");
            foreach($array as $i){
                echo "<li class=\"li\">$i</li>";
            }
        ?>
    </div>
    <div class="files">
        <nav class="split">
            <div class="split">
                <button class="button"><img src="Resources/images/left-large-symbolic.svg" alt=""></button>
                <button class="button"><img src="Resources/images/right-large-symbolic.svg" alt=""></button>
            </div>
            
            <nav class="split directory">
                <button class="button"><img src="Resources/images/drive-harddisk-ieee1394-symbolic.svg" alt=""></button>
                <input type="text" value="/home/pedro/Desktop">
                <button class="button"><img src="Resources/images/view-more-symbolic.svg" alt=""></button>
            </nav>

            <div class="split">
                <button class="button"><img src="Resources/images/grid-large-symbolic.svg" alt=""></button>
                <button class="button"><img src="Resources/images/down-small-symbolic.svg" alt=""></button>
            </div>
        </nav>
        <table>
            <thead>
                <tr>
                    <th class="button">ID</th>
                    <th class="button">First Name</th>
                    <th class="button">Last Name</th>
                    <th class="button">Age</th>
                    <th class="button"></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $array = array("Pedro", "Liese", "Christian");
                    $array1 = array("Basson", "Smit", "Basson");
                    $array2 = array("20", "21", "18");
                    for ($i=0; $i < 3; $i++) { 
                        echo "
                            <tr class=\"li\">
                                <td>{$i}</td>
                                <td>{$array[$i]}</td>
                                <td>{$array1[$i]}</td>
                                <td>{$array2[$i]}</td>
                                <td><button class=\"button\"><img src=\"Resources/images/down-small-symbolic.svg\" alt=\"\"></button></td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
        
    </div>
</div>
-->