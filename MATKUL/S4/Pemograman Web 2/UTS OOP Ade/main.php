<?php
require_once 'Television.php';

function main() {
    // with inheritence
    $television = new Television("TV LG 123", "LG", 1000, "LCD");
    echo $television->Info();
}