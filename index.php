<?php
	$connect = mysqli_connect("127.0.0.1","root","","lesson22");

	$text_zapros = "DELETE FROM contacts WHERE id = '9'"; //удалить из списка контактов

	mysqli_query($connect, $text_zapros);
?>