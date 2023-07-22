<?php 
require_once 'koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
</head>
<body>
	<div class="slider-container">
    <div class="slider">
      <div class="slide-item" style="background-color: #ff5733;"></div>
      <div class="slide-item" style="background-color: #33ff57;"></div>
      <div class="slide-item" style="background-color: #5733ff;"></div>
      <div class="slide-item" style="background-color: #33ff8d;"></div>
    </div>
  </div>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


<div class="container">
<div class="col-md-12 col-12 col-sm-12">
<div class="card">
<div class="card-header">


    <div class="container px-4 text-center">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3"><h4>Task Details</h4></div>
    </div>
    <div class="col">
      <div class="p-3">
      	<div>
      		
      	</div>
      	<a class="btn btn-success text-white " data-toggle="modal" data-target="#modelId">
            +
         </a>
      	
      </div>
    </div>
  </div>
</div>



</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-striped">
<tbody><tr>
<th class="text-center">
<div class="custom-checkbox custom-checkbox-table custom-control">
<input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
<label for="checkbox-all" class="custom-control-label">&nbsp;</label>
</div>
</th>
<th>Task Name</th>
<th>Due Date</th>
<th>Action</th>
</tr>
<tr>
<td class="p-0 text-center">
<div class="custom-checkbox custom-control">
<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
<label for="checkbox-1" class="custom-control-label">&nbsp;</label>
</div>
</td>
<td>Ecommerce website</td>

<td>2018-01-20</td>
<td>
<div class="kotak"><a href="#">Edit</a></div>
<div class="kotak" style="background-color: red;"><a href="#">Hapus</a></div>
</td>
</tr>



<tr>
<td class="p-0 text-center">
<div class="custom-checkbox custom-control">
<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
<label for="checkbox-4" class="custom-control-label">&nbsp;</label>
</div>
</td>
<td>Android App</td>

<td>2018-09-11</td>
<td>
<div class="kotak"><a href="#">Edit</a></div>
<div class="kotak" style="background-color: red;"><a href="#">Hapus</a></div>
</td>

</tr>


<tr>
<td class="p-0 text-center">
<div class="custom-checkbox custom-control">
<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
<label for="checkbox-4" class="custom-control-label">&nbsp;</label>
</div>
</td>
<td>Android App</td>

<td>2018-09-11</td>
<td>
<div class="kotak"><a href="#">Edit</a></div>
<div class="kotak" style="background-color: red;"><a href="#">Hapus</a></div>
</td>

</tr>



<tr>
<td class="p-0 text-center">
<div class="custom-checkbox custom-control">
<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
<label for="checkbox-4" class="custom-control-label">&nbsp;</label>
</div>
</td>
<td>Android App</td>

<td>2018-09-11</td>
<td>
<div class="kotak"><a href="#">Edit</a></div>
<div class="kotak" style="background-color: red;"><a href="#">Hapus</a></div>
</td>

</tr>






</tbody></table>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>




<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form method="post" action="proses.php">
                	<input type="text" name="id" value="tambah" hidden>
                    <div class="form-group">
                    <label for="">Task</label>
                    <input type="text" name="tugas" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Due Date</label>
                    <input type="date" name="tanggal" id="" class="form-control"  required placeholder="" aria-describedby="helpId">
                    </div>
                    
            </div>
            <div class="modal-footer">
                <a class="btn btn-secondary text-white" data-dismiss="modal">Close</a>
                <button type="submit" class="btn btn-primary" name="submit">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>