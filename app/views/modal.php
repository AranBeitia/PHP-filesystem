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