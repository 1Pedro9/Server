<?php
    $currentFolder = "/home/pedro/";
?>

<h1 class="title">Drive</h1>
<br>
<div class="split" style="border: 1px solid #aaa; border-radius: 10px;">
    <div class="folder">
        <nav class="split">
            <button class="button"><img src="Resources/images/search.svg" alt=""></button>
            <h3>Files</h3>
            <button class="button"><img src="Resources/images/menu-symbolic.svg" alt=""></button>
        </nav>
        <?php 
            $array = array("Desktop", "Documents", "Downloads");
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
                    <th class="button">Name</th>
                    <th class="button" style="width: 70px;">Size</th>
                    <th class="button" style="width: 70px;">Type</th>
                    <th class="button" style="width: 120px;">Modified</th>
                    <th class="button" style="width: 50px;"></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $output = shell_exec('ls Services/Drive'); 
                    $array = explode("\n", trim($output));
                    foreach($array as $i){
                        echo "
                            <tr class=\"li\">
                                <td>$i</td>
                                <td>1.7 kB</td>
                                <td>Folder</td>
                                <td>12 Feb 2022</td>
                                <td><button class=\"button\"><img src=\"Resources/images/down-small-symbolic.svg\" alt=\"\"></button></td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
        
    </div>
</div>