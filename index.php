<?php

require 'functions.php';
//require 'router.php';
require 'Db.php';

$db = new Database();
$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);