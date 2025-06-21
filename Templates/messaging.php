<h1 class="title">Email</h1>
<br>

<div class="split" style="border: 1px solid #aaa; border-radius: 10px;">
    <div class="folder">
        <nav class="split">
            <button class="button"><img src="Resources/images/search.svg" alt=""></button>
            <h3>Messages</h3>
            <button class="button"><img src="Resources/images/menu-symbolic.svg" alt=""></button>
        </nav>
        <?php 
            $array = array("Pedro", "Vida Church", "Cedars Community");
            foreach($array as $i){
                echo "
                    <li class=\"li messages\">
                        <button class=\"button\"><img src=\"Resources/images/person-symbolic.svg\" alt=\"\"></button>
                        <h5>$i</h5>
                    </li>
                ";
            }
        ?>
    </div>
    <div class="files">
        <nav class="split">
            <div class="split">
                <button class="button"><img src="Resources/images/person-symbolic.svg" alt=""></button>
            </div>
            
            <nav class="split directory">
                <button class="button"><img src="Resources/images/drive-harddisk-ieee1394-symbolic.svg" alt=""></button>
                <input type="text" placeholder="Search...">
                <button class="button"><img src="Resources/images/view-more-symbolic.svg" alt=""></button>
            </nav>

            <div class="split">
                <button class="button"><img src="Resources/images/grid-large-symbolic.svg" alt=""></button>
                <button class="button"><img src="Resources/images/down-small-symbolic.svg" alt=""></button>
            </div>
        </nav>
        <table>
            <tbody>
                <?php 
                    $array = array("Hello liese hoe was jou dag", "", "");
                    $info = array("", "Dit was baie lekker dankie", "Hoe was joune");
                    for ($i=0; $i < sizeof($array); $i++) { 
                        echo "
                            <tr class=\"li\">
                                <td>{$info[$i]}</td>
                                <td>{$array[$i]}</td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>