<?php
    echo "afdsffdsfads";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Task Details - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
    background-color: #f6f6f6;
    margin-top:20px;
}

.card {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}

.card .card-header {
    border-bottom-color: #f9f9f9;
    line-height: 30px;
    -ms-grid-row-align: center;
    align-self: center;
    width: 100%;
    padding: 10px 25px;
    display: flex;
    align-items: center;
}

.card .card-header, .card .card-body, .card .card-footer {
    background-color: transparent;
    padding: 20px 25px;
}   
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
}

.table:not(.table-sm) thead th {
    border-bottom: none;
    background-color: #e9e9eb;
    color: #666;
    padding-top: 15px;
    padding-bottom: 15px;
}

.table .table-img img {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    border: 2px solid #bbbbbb;
    -webkit-box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    -moz-box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    -ms-box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    text-shadow: 0 0 black;
}

.table .team-member-sm {
    width: 32px;
    -webkit-transition: all 0.25s ease;
    -o-transition: all 0.25s ease;
    -moz-transition: all 0.25s ease;
    transition: all 0.25s ease;
}
.table .team-member {
    position: relative;
    width: 30px;
    white-space: nowrap;
    border-radius: 1000px;
    vertical-align: bottom;
    display: inline-block;
}

.table .order-list li img {
    border: 2px solid #ffffff;
    box-shadow: 4px 3px 6px 0 rgba(0,0,0,0.2);
}
.table .team-member img {
    width: 100%;
    max-width: 100%;
    height: auto;
    border: 0;
    border-radius: 1000px;
}
.rounded-circle {
    border-radius: 50% !important;
}

.table .order-list li+li {
    margin-left: -14px;
    background: transparent;
}
.avatar.avatar-sm {
    font-size: 12px;
    height: 30px;
    width: 30px;
}
.avatar {
    background: #6777ef;
    border-radius: 50%;
    color: #e3eaef;
    display: inline-block;
    font-size: 16px;
    font-weight: 300;
    margin: 0;
    position: relative;
    vertical-align: middle;
    line-height: 1.28;
    height: 45px;
    width: 45px;
}

.table .order-list li .badge {
    background: rgba(228,222,222,0.8);
    color: #6b6f82;
    margin-bottom: 6px;
}

.badge {
    vertical-align: middle;
    padding: 7px 12px;
    font-weight: 600;
    letter-spacing: 0.3px;
    border-radius: 30px;
    font-size: 12px;
}

.progress-bar {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-direction: column;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    -ms-flex-pack: center;
    -webkit-box-pack: center;
    justify-content: center;
    overflow: hidden;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #007bff;
    -webkit-transition: width .6s ease;
    transition: width .6s ease;
}

.bg-success {
    background-color: #54ca68 !important;
}

.bg-purple {
    background-color: #9c27b0 !important;
    color: #fff;
}

.bg-cyan {
    background-color: #10cfbd !important;
    color: #fff;
}

.bg-red {
    background-color: #f44336 !important;
    color: #fff;
}

.progress {
    -webkit-box-shadow: 0 0.4rem 0.6rem rgba(0,0,0,0.15);
    box-shadow: 0 0.4rem 0.6rem rgba(0,0,0,0.15);
}

.btn-action {
    color: #fff !important;
    line-height: 25px;
    font-size: 12px;
    min-width: 35px;
    min-height: 35px;
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
</head>


<body>
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
      <div class="p-3"><button class="btn btn-success w-25">+</button></div>
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
<a class="btn btn-primary btn-action mr-1" data-toggle="modal" data-target="#modelId"><i class="fas fa-pencil-alt"></i></a>
<a class="btn btn-danger btn-action" data-toggle="tooltip" title data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
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
<a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
<a class="btn btn-danger btn-action" data-toggle="tooltip" title data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
</td>
</tr>
<tr>
<td class="p-0 text-center">
<div class="custom-checkbox custom-control">
<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-5">
<label for="checkbox-5" class="custom-control-label">&nbsp;</label>
</div>
</td>
<td>Logo Design</td>

<td>2018-04-12</td>
<td>
<a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
<a class="btn btn-danger btn-action" data-toggle="tooltip" title data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
</td>
</tr>
<tr>
<td class="p-0 text-center">
<div class="custom-checkbox custom-control">
<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6">
<label for="checkbox-6" class="custom-control-label">&nbsp;</label>
</div>
</td>
<td>Java Project</td>

<td>2018-01-20</td>
<td>
<a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
<a class="btn btn-danger btn-action" data-toggle="tooltip" title data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
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
                <h5 class="modal-title">Daftar Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form method="post" action="koneksi/proses.php?id=daftar">
                    <div class="form-group">
                    <label for="">Task Name</label>
                    <input type="text" name="tugas" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Due Date</label>
                    <input type="date" name="tanggal" id="" class="form-control"  required placeholder="" aria-describedby="helpId">
                    </div>
                    
            </div>
            <div class="modal-footer">
                <a class="btn btn-secondary text-white" data-dismiss="modal">Close</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>