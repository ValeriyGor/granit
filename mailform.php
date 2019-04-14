<?php 
	$to = "valeriy.gorbachevskiy@gmail.com"; // Здесь нужно написать e-mail, куда будут приходить письма
	$from = $_POST['email']; // this is the sender's Email address
	$name = $_POST['name'];
	$phone = $_POST['phone'];

	$subject = $from;
	// $message = $name . " оставил сообщение:" . "\n\n" . $_POST['message'];

	$headers = "From:" . $from;

	// mail($to,$subject,$message,$headers);

	// mail('valeriy.gorbachevskiy@gmail.com', 'My Subject', $name);

	// echo "Сообщение отправлено. Спасибо Вам " . $name . ", мы скоро свяжемся с Вами.";
	// echo "<br /><br /><a href='/'>Вернуться на сайт.</a>";

	$message = $phone . "\n\n" . $name . " оставил сообщение:" . "\n\n" . $_POST['message'];

	// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()

	$message = wordwrap($message, 70);

	// Отправляем

	mail($to, $subject, $message);
	echo "Сообщение отправлено. Спасибо Вам " . $name . ", мы скоро свяжемся с Вами.";
	echo "<br /><br /><a href='/'>Вернуться на сайт.</a>";
	echo $phone;
	echo $message;
	echo $name;

?>