<?php

header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="downloaded.png"');

echo $text = $_GET["text"];