<?php
    $now = time();
    $week = 7*24*60*60;
    echo "<br> za tydzien". date("d.m.Y h:i:s a", $now+$week);
?>