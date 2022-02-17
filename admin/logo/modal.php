
<!-- Modal -->
<div class="modal fade" id="user<?php echo $user_row['admin_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6 class= "h6">Are you sure you want to delete <span class="text-danger"> " <?php echo $user_row['admin_name'];?> "</span> ?.</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <a href="delete.php?deleteid=<?php echo $user_row['admin_id'];?>" class="btn btn-danger">Yes</a>
      </div>
    </div>
  </div>
</div>