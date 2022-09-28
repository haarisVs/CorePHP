<?php
include_once('clsData.php');
$Page = $_GET['type'] ?? '';
print($objData = (new clsData())->Page($Page));

