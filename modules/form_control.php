<?php  

$error = '';

if (trim($_POST['inn']) == '')
	{
		$error = 'Впишите ИНН в поле поиска!';
	}
else if (strlen($_POST['inn']) != 12)
	{
		$error = 'В ИНН должно быть 12 цифр!';
	}
else if ($_POST['fake'] != '')
	{
		$error = 'Вы робот, а а а!';
	}

if ($error != '')
	{
		echo $error;
		exit;
	}
		
require_once 'classes/Authenticity.php';
$authenticity = new Authenticity();

$data = $authenticity->get($_POST['inn']);

		echo 'Проверка ИНН = ' . $_POST['inn'] . ' :'."\n";

	    print_r($data);	

?>