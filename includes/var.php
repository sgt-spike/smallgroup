<?php
    global $level;
    function set_link($level) {
        if ($level > 1) {
            $link = '../';  
        } else {
            $link = '';
        }
        return $link;
    }
?>