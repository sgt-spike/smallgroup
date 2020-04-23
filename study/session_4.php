<?php
    include '../header.php';
?>
    <section>
        <header>
            <h1>Session 4: Reading the Law and the Prophets</h1>
        </header>
        <div class="video">
            <video class="video" type="video/mp4" width="850" height="620" src="../videos/Session4.m4v" controls></video>
        </div>
        <div class="docs">
            <ul>
                <?php
                    if ($handle = opendir('/config/www/dev/smallgroup/docs/Week_04/')) {
                        while (false !== ($entry = readdir($handle))) {
                            if ($entry != '.' && $entry != '..') {
                                echo "<li><a href=\"download.php?file={$entry}\">{$entry}</a></li>";
                            }
                        }
                        closedir($handle);
                    }else {
                        echo '<p>Not the right Directory</p>';
                    }
                ?>
            </ul>
        </div>
    </section>
<?php
    include '../footer.php';