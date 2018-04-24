<?php
	/*Template Name: Design*/
	get_header(); 
?>

	<div class="container">

		<div class="theContent hasBg col-md-6">
			PLAN DESCRIPTION HERE
			<a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Open Modal</a>
		</div>
		<div class="theContent hasBg col-md-6">
			IMAGE OF PLAN HERE
		</div>
		
		

		

	</div>

<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php
	get_footer();
?>
