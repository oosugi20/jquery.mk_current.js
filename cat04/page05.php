<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="/resources/css/import.css">
<script src="/resources/js/loader.js"></script>
</head>
<body>
<h1>/cat04/page05.php<?php
if ($_GET['id']) {
	echo '?id='.$_GET['id'];
}

if ($_GET['fuga']) {
	echo '&amp;?fuga='.$_GET['fuga'];
}
?></h1>
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/resources/inc/nav.inc"); ?>
</body>
</html>