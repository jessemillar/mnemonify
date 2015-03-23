<?php
$page = file_get_contents("http://www.mnemonicgenerator.com/?words=" . urlencode($_GET["m"]));
$page = explode('<h2 name="result" id="result">', $page)[1];
$page = explode('</h2>', $page)[0];
echo json_encode($page);