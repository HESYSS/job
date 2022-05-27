<?php
	$key = array('name','time','latitude','longitude','county');
	for($i = 0; $i <5; $i++){
		$data[$i] = $_POST[$key[$i]];
	}
	for($i = 0; $i <5; $i++){ 
	if ($data[$i] == '') { ?>
<script>
	alert('Вы ввели не всю информацию, вернитесь назад и заполните все поля!')
	window.open("adding.html", "_self")
	</script><?php
	}
	}
    for($i = 0; $i <5; $i++){
	$data[$i] = stripslashes($data[$i]);
	$data[$i] = htmlspecialchars($data[$i]);
	$data[$i] = trim($data[$i]);
	}
    include ("bd.php");
	$sql = "INSERT INTO meating (name,time,latitude,longitude,county) VALUES 
            ('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]')";
    if (mysqli_query ($bd,$sql)){?>
<script>
	window.open("meeting.html", "_self")
	</script>;
	<?php
    }
 else {
	?>
<script>
	alert('Ошибка! Вы не зарегистрированы.')
	window.open("adding.html", "_self")
	</script>
 <?php } ?>