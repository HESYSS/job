<?php
	$key = array('name','time','latitude','longitude','county');
	for($i = 0; $i <5; $i++){
		$data[$i] = $_POST[$key[$i]];
	}
	$f = fopen("1.txt","a");
	if ($data[0] == '') {
	fwrite($f,$data[0]);
	fwrite($f,$data[1]);
	}
	fwrite($f,$data[0] == '');
	$id = $_GET['id'];
	$number = $_GET['number'];
	for($i = 0; $i <5; $i++){ 
	if ($data[0] == '') { ?>
	<script>
	var number = '<?=$number?>' 
	alert('Вы ввели не всю информацию, вернитесь назад и заполните все поля!')
	window.open("edit.html?edit="+number, "_self")
	</script><?php
	}
	}
    for($i = 0; $i <5; $i++){
	$data[$i] = stripslashes($data[$i]);
	$data[$i] = htmlspecialchars($data[$i]);
	$data[$i] = trim($data[$i]);
	}
	include ("bd.php");
	$sql = "UPDATE meating SET name = '$data[0]', time = '$data[1]', latitude = '$data[2]', longitude = '$data[3]', county ='$data[4]'  WHERE id = '$id' ";
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
	window.open("edit.html?edit="+number", "_self")
	</script>
 <?php } ?>