<link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
	<!-- Custom styles for this template -->
	<link href="headers.css" rel="stylesheet">
	
	
	<?php
		include ("bd.php");
		$sql = 'SELECT id, name,time FROM meating';
		$result = mysqli_query($bd, $sql);
	?>
		<div class="bd-example">
			<table class="table table-striped"  overflow="scroll" width="10%">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Название</th>
						<th scope="col">Дата</th>
						<th scope="col">Детали</th>
						<th scope="col">Изменить</th>
						<th scope="col">Удалить</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					$index = 0;
					while ($row = mysqli_fetch_array($result)) {
						$index++?>	
					<tr>
						<th scope="row"><?php print($index) ?></th>
						<td width="60%"><?php echo ("<textarea rows=\"1%\" cols=\"100%\" name=\"text\" disabled wrap=\"hard\">" .$row['name'] ."  </textarea>") ?></td>
						<td><?php print($row['time']) ?></td>
						<?php echo "<td><a name=\"inf\" href=\"info.html?inf=".$index."\"><img src=\"inform.png\" width=\"15%\"></a></td>" ?>
						<?php echo "<td><a name=\"edit\" href=\"edit.html?edit=".$index."\"><img src=\"edit.jpg\" width=\"30%\"></a></td>" ?>
						<?php echo "<td><a name=\"del\" href=\"delete.php?del=".$row["id"]."\"><img src=\"delete.jpg\" width=\"30%\"></a></td>" ?>
					</tr><?php } ?>
				</tbody>
			</table>
		</div>
		<script>
