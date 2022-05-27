<?php
include ("bd.php");
if(isset($_GET['del'])) {
		$del = (int) $_GET['del'];
		$query = "DELETE FROM meating WHERE `id` = $del";
		mysqli_query($bd,$query); 
}
?>
<script>
	window.open("meeting.html", "_self")
</script>