<?php 
	$currentPage = 'Manage Properties';
	$title = 'Manage Properties';
	$pageTitle = 'Manage Properties';
	include ('stafflayouts/header.php');
 ?>
<?php include('stafflayouts/sidebar.php'); ?>
<div class="main-content-inner">
<?php include('layouts/header_content.php'); ?>
<?php include('stafflayouts/page_title.php'); ?>
    <div class="row justify-content-center">
    	<div class="col col-md-12">
    		<div class="col-12 mt-2">
    			<div class="row mt-3">
                		<div class="col">
                			<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target=".bd-example-modal-lg">Add Properties</button>
                		</div>
                	</div>
                <div class="card mt-3 p-3">
                    <table class="table table-striped table-bordered mt-2">
					  <thead>
					    <tr>
					      <th scope="col" class="text-center">No.</th>
					      <th scope="col" class="text-center">Property Owner</th>
					      <th scope="col" class="text-center">Property Details</th>
					      <th scope="col" class="text-center">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					    
					  </tbody>
					</table>
                </div>
            </div>
    	</div>
    </div>		
</div>
<?php include('stafflayouts/add_property_modal.php'); ?>
<?php include ('stafflayouts/footer.php'); ?>