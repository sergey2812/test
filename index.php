<?php

?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<title>1-й тест для Back-end Developer на PHP</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>   
    $(function()
        {	
		    $("#search").on('click', function () 
		        {
		        	var inn = $("input[name='inn']").val();

		        	var fake = $("input[name='fake']").val();

		            $.ajax({
		                url: 'modules/form_control.php',
		                type: 'POST',
		                data: { inn: inn, fake: fake },
		                success: function (data) {
		                	
                            $("#inn_result").html(data);    
		                },
		               	error: function (data) {
		                	$("#inn_result").html(data);
		                }
		            });

		        });
		});
</script>
	</head>
	<body>
	<?php require "template/header.php" ?>
	
	<?php require "template/form_inn.php" ?>                          
	</body>
</html>