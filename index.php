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
	<link rel="stylesheet" href="./app/resources/styles/main.css" />
	<title>File system</title>

</head>
<body>
	<div class="container">
		<header>
			<h1>CRUD</h1>
			<div class="row">
				<div class="col-2 offset-10">
					<button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalAdd">Add</button>
				</div>
			</div>
		</header>
		<main>
			<div class="table-responsive">
				<table id="table_id" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>File</th>
							<th>Type</th>
							<th>Download</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Daniii</td>
							<td>holaa</td>
							<td>holaa</td>
							<td>holaa</td>
							<td>holaa</td>
						</tr>
						<tr>
							<td>Row 2 Data 1</td>
							<td>Row 2 Data 1</td>
							<td>Row 2 Data 1</td>
							<td>Row 2 Data 2</td>
							<td>Row 2 Data 2</td>
						</tr>
					</tbody>
				</table>
			</div>
		</main>
	</div>

<!-- Modal -->
<article class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add file</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
				<form action="" method="POST" id="form-add" enctype="multipart/form-data">
					<label for="file">Insert file</label>
					<input type="file" name="file" id="file" class="form-control">
					<span id="file-updated"></span>
					<div class="modal-footer">
						<input type="hidden" name="operation">
						<input type="submit" name="action" id="action" class="btn btn-success" value="create">
					</div>
				</form>
      </div>
    </div>
  </div>
</article>

</body>
</html>