 <div class="modal fade bd-example-modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Property Details</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
                <div class="modal-body">
                     <div class="row">
                       <div class="col">
                            <h5>Property Ownership</h5>
                       </div>
                    </div>
                    <div class="row mt-3">
                          <div class="col col-md-4">
                            <select name="category" id="category" class="form-control form-control-lg">
                                <option value="">Please Select Category</option>
                                <option value="Deed of Sale">Deed of Sale</option>
                                <option value="Deed of Donation">Deed of Donation</option>
                            </select>
                       </div>
                    </div>
              <?php include('property_sale.php'); ?>
              <?php include('property_donation.php'); ?>
        </div>
    </div>
  </div>
</div>