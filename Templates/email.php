<h1 class="title">Email</h1>
<br>

<div class="split" style="border: 1px solid #aaa; border-radius: 10px;">
    <div class="folder">
        <nav class="split">
            <button class="button"><img src="Resources/images/search.svg" alt=""></button>
            <h3>Email</h3>
            <button class="button"><img src="Resources/images/menu-symbolic.svg" alt=""></button>
        </nav>
        <?php 
            $array = array("Do you want to do somethings", "Tomorrow", "Help");
            foreach($array as $i){
                echo "
                    <li class=\"li email\">
                        <h4>Pedro Basson</h4><br>
                        <p>
                            $i: Subject
                        </p>
                    </li>
                ";
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
                    $array = array("basson.pedro@gmail.com", "smit.elaine.lieselotte@gmail.com", "Downloads");
                    $info = array("From", "To", "Subject");
                    for ($i=0; $i < sizeof($array); $i++) { 
                        # code...
                    
                        echo "
                            <tr class=\"li\">
                                <td>{$info[$i]}:</td>
                                <td>{$array[$i]}</td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
        <br>
        <p class="email-paragraph">
            Hello Pedro, hope you are doing well <br>
            This email is to show you all the downloads that we have 
            sent to you to use for university. <br>
            <br>
            Sincerely, Ms Elaine
        </p>
    </div>
</div>