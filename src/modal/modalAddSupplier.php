<div class="modal fade" id="modalAddSupplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Supplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      <!--form-->   

     
        <h2>Supplier Form</h2>
        <form method="POST" action="../backend/supplierauth.php">
          <fieldset>
            <div class="form-group">
                <label for="fullname">Supplier Name</label>
                <input type="text" class="form-control" id="supplierName" name="supplierName" placeholder="Supplier Name" required>
            </div>
            <div class="form-group">
                <label for="fullname">Supplier Description</label>
                <input type="text" class="form-control" id="supplierDesc" name="supplierDesc" placeholder="Supplier Description" required>
            </div>
            
            <div class="form-group">
                <label for="address">Supplier Location</label>
                <input type="text" class="form-control" id="supplierLoc" name="supplierLoc" placeholder="Supplier Location" required>
            </div>
            <div class="form-group">
                <label for="phone number">Supplier Status</label>
                <input type="text" class="form-control" id="supplierStatus" name="supplierStatus" placeholder="Supplier Status" required>
</div>
          
                  
         
          </fieldset>

         
     
  

   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="addSupplier" value="addSupplier" class="btn btn-primary">Add Supplier</button>
        </form>
      </div>
    </div>
  </div>
</div>