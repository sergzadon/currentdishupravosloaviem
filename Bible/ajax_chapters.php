<?php
include("spisok.php");
$id_book = $_REQUEST['id_book'];
$chapter = $_REQUEST['chapter'];
for ($j = 1; $j <= $ChapterQty[$id_book]; $j++) {
    echo "<a href='' id=$j class=chapter>$j</a> ";
}
?>