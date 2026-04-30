<?php


/*

$_GET - contains info about variable passed through url or a form

$_POST = contain info about variable passed through form

$_COOKIE - contain info about variable passed through cookie

$_SESSION - contain info about varible passed through session.

$_SERVER - contain info about server environment

$_ENV - contain info about env variables

$_FILES - contain info about files uploaded to the script

$_REQUEST - contain info about variable passed through a form or a url

*/
echo $_SERVER['SERVER_PORT']."<BR>";

echo $_SERVER['HTTP_HOST']."<BR>";

echo $_SERVER['DOCUMENT_ROOT']."<BR>";

echo $_SERVER['SERVER_NAME']."<BR>";

echo $_SERVER['PHP_SELF']."<BR>";

echo $_SERVER['REQUEST_URI']."<BR>";

echo $_SERVER["SERVER_SOFTWARE"]."<BR>";

echo $_SERVER["HTTP_USER_AGENT"]."<BR>";

echo $_SERVER["REMOTE_ADDR"]."<BR>";

echo $_SERVER["REMOTE_PORT"]."<BR>";










?>
