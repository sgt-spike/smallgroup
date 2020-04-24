<?php
    include 'header.php';
?>
    <section class="main">
        <div class="content">
            <header>
                <h1>Session 4: Reading the Law and the Prophets</h1>
            </header>
            <div class="video">
                <video class="video" type="video/mp4" width="850" height="620" src="videos/Session4.m4v" controls></video>
            </div>
            <div class="docs">
                <h2>Study Materials</h2>
                <ul class="list doc-list">
                    <?php
                        $dir = '../smallgroup/docs/Week_04/';
                        if ($handle = opendir($dir)) {
                            while (false !== ($entry = readdir($handle))) {
                                $filename = preg_replace('(.pdf)','',preg_replace('(_)',' ',$entry));
                                if ($entry != '.' && $entry != '..') {
                                    echo "<li><a class=\"link\" href=\"download.php?d={$dir}&file={$entry}\">{$filename}</a></li>";
                                }
                            }
                            closedir($handle);
                        }
                    ?>
                </ul>
            </div>
        </div>
    </section>
<?php
    include 'footer.php';