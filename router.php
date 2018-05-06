<?php

foreach (glob("classes/*.class.php") as $filename)
{
    include $filename;
}

if (!isset($_SERVER['PATH_INFO'])) {
  header('Location: router.php/FormController/viewForm');
}

$pathInfo = $_SERVER['PATH_INFO'];
$mvc = explode("/", $pathInfo);
$controller = $mvc[1];
$method = $mvc[2];

if (isset($_POST)) {
  $c = new FormController();
  $c->setData($_POST);
  $c->setFile($_FILES);
}
call_user_func(array($c, $method));
