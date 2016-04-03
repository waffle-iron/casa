<?php 

//discard or delete   classified

    if($_POST){
    
//$discard=$_GET['page'];
$id=$_GET['id'];


$query="DELETE from properties where  property_id='$id'";

$result=mysqli_query($dbc,$query);


}


function discardModal(){


  ?>
<!-- modal beginning -->
<div class="modal fade" data-backdrop="static" id="discard" tab-index="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content">
    <!-- modal header -->
    <div class="modal-header">
  <button type="btn" class="close" data-dismiss="modal" aria-hidden="true">x</button>
  <h4 class="modal-title" id="modalLabel">Discard Classified?</h4></div>
    <!-- modal body -->

    <div class="modal-body">
      You are about to delete this listing for good? this can't be reversed. Do you wish to continue?

    </div>

    <!-- modal footer -->

    <div class="modal-footer">
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="form-inline">
    <button class="btn" type="button" data-dismiss="modal">Close </button>
    
    <input type="submit" class="btn btn-danger "  value="Proceed" name="discard" >
    </form>
    </div>

    </div>




  </div>

</div>

  <?php
}

//calling the logout function
discardModal();