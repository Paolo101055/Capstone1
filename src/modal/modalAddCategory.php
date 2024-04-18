<div class="modal fade" id="modalAddCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      <!--form-->   

     
        <h2>Category Form</h2>
        <form method="POST" action="../backend/categoryrauth.php">
          <fieldset>
            <div class="form-group">
                <label for="categoryname">Category Name</label>
                <input type="text" class="form-control" id="categoryname" name="categoryname" placeholder="Category Name" required>
            </div>
            <div class="form-group">
                <label for="categorydesc">Category Description</label>
                <input type="text" class="form-control" id="categorydesc" name="categorydesc" placeholder="Category Description" required>
            </div>
          </fieldset>

     
  

   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="addCategory" value="addCategory" class="btn btn-primary">Add Category</button>
        </form>
      </div>
    </div>
  </div>
</div>