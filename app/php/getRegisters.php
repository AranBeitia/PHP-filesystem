<?php
	include("./dbConection.php");
	include("./functions.php");

	$query = "";
	$output = array();
	$query = "SELECT * FROM files";

	if(isset($_POST["search"]["value"])) {
		$query .= 'WHERE file LIKE "%' . $_POST["search"]["value"] . '%" ';
		$query .= 'OR type LIKE "%' . $_POST["search"]["value"] . '%" ';
	}

	if(isset($_POST["order"])) {
		$query .= 'ORDER BY' . $_POST['order'][0]['column'] . ' '. $_POST['order'][0]['dir'] . ' ';
	} else {
		$query .= 'ORDER BY id DESC ';
	}

	if($_POST["length"] != -1) {
		$query .= 'LIMIT' . ($_POST["start"]. ', '. $_POST["length"]);
	}

	$stmt = $connection -> prepare($query);
	$stmt->execute();
	$result = $stmt->fetchAll();
	$data = array();
	$filtered_rows = $stmt->rowCount();

	foreach($result as $row) {
		$file = '';
		if($row['file'] != ''){
			$file = '<p>'.$row['file'].'</p>';
		} else {
			$file = '';
		}

		$sub_array = array();
		$sub_array[] = $row["id"];
		$sub_array[] = $row["file"];
		$sub_array[] = $row["type"];
		$sub_array[] = $row["download"];
		$sub_array[] = $row["date_created"];
		$sub_array[] = 'button type="button" name="edit" id"'.$row["id"].'" class="btn btn-warning btn-xs edit">Edit</button>';
		$sub_array[] = 'button type="button" name="delete" id"'.$row["id"].'" class="btn btn-warning btn-xs edit">Delete</button>';
		$data = $sub_array
	}

	$out = array(
		"draw" 						=> intval($_POST["draw"]),
		"records" 				=> $filtered_rows,
		"recordsFiltered" => getAllFiles(),
		"data" 						=> $data
	);

	echo json_encode($out);
