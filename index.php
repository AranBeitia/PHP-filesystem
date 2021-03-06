<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

	<link rel="stylesheet" href="./app/resources/styles/main.css" />
	<title>File system</title>
</head>
<body>
	<div class="container">
		<?php include "./app/views/header.php"; ?>
		<main>
			<?php include "./app/views/table.php"; ?>
		</main>
	</div>
	<?php include "./app/views/modal.php"; ?>
	<script type="text/javascript">
	$(document).ready(function(){
		var datatable = $('#table_files').DataTable({
			"processing": true,
			"serverSide": true,
			"order": [],
			"ajax": {
				url: "./app/php/getRegisters.php",
				type: "POST"
			},
			"columnsDefs": [
				{
				"targets": [0,3,4],
				"orderable": false,
				}
			]
		})
	})
	</script>
</body>
</html>