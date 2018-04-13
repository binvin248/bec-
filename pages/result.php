<?php
if(isset($_SESSION['result'])){
?>
<!--modal start-->
<!-- The Modal -->
<div class="modal fade" id="resultModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <?php echo $_SESSION['result']; ?>
	</div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!--modal end-->
<?php 
unset($_SESSION['result']);
}
else{
	
}
?>