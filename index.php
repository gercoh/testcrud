<?
session_start();

if(!empty($_GET['lang'])){
	$_SESSION['USER_LANGUAGE'] = $_GET['lang'];
}

if(!$_SESSION['USER_LANGUAGE']){
	SetLang(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,2));
}

function SetLang($p1){
	if(!in_array($p1, array('ru','en'))) $p1 ='en';
	$_SESSION['USER_LANGUAGE']=$p1;
}
include "$_SESSION[USER_LANGUAGE].php";
$login = "admin";
$password = "pass";
$newfile = 'allinfo.txt';
if(isset($_SERVER['PHP_AUTH_USER']) && ($_SERVER['PHP_AUTH_PW']==$password) && (strtolower($_SERVER['PHP_AUTH_USER'])==$login)){
	echo 'Поздравляю вы в системе!';
	include_once "form.php";
    // авторизован успешно
} else {
    // если ошибка при авторизации, выводим соответствующие заголовки и сообщение
    header('WWW-Authenticate: Basic realm="Backend"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Authenticate required!';
} 

