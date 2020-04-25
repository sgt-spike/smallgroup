<?php
    include 'header.php';
?>
    <section class="main">
        <div class="content">
            <header>
                <h1>Session 6: Reading the Stories of the New Testament</h1>
            </header>
            <div class="video">
                <video class="video" type="video/mp4" width="850" height="620" src="videos/Session6.m4v" controls poster="img/logo.jpg"></video>
            </div>
            <div class="docs">
                <h2>Study Materials</h2>
                <ul class="list doc-list">
                    <?php
                        $dir = '../smallgroup/docs/Week_06/';
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