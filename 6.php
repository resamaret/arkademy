<!DOCTYPE html>

<?php 
	
	$koneksi = mysqli_connect("localhost", "root", "", "arkademy");

 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body>
  	<div class="container-fluid">
  		<div class="row-fluid">
  			<div class="page-header">
  				<div class="row">
  					<h1 class="fluid-left" style="width: 60%;padding: 0px;margin: 0px;">
  						<img src="https://miro.medium.com/fit/c/256/256/0*CsgCV1-vLtSQBUps.jpg" width="128" height="128">
						Example page header
						<button class="btn btn-warning fluid-right">Add</button>  					
					</h1>
  				</div>
			</div>
			<div align="center">
				<table class="table table-bordered" style="width: 75%;">
					<thead>
						<td align="center" style="font-weight: bold;">Name</td>
						<td align="center" style="font-weight: bold;">Work</td>
						<td align="center" style="font-weight: bold;">Salary</td>
						<td align="center" style="font-weight: bold;">Action</td>
					</thead>
					<tbody>
						<?php 
							$sql  = mysqli_query($koneksi, 'SELECT name.name as name, work.name as work, kategori.salary as salary FROM name JOIN work ON name.id_work = work.id JOIN kategori ON name.id_salary = kategori.id');
							while ($baris = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
						?>
							<tr>
								<td align="center"><?php echo $baris['name'] ?></td>	
								<td align="center"><?php echo $baris['work'] ?></td>	
								<td align="center"><?php echo $baris['salary'] ?></td>	
								<td align="center">
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
										<span class="glyphicon glyphicon-trash"></span>
									</button>
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
										<span class="glyphicon glyphicon-edit"></span>
									</button>
								</td>
							</tr>
						<?php
							}
						 ?>
					</tbody>
				</table> 
			</div>
  		</div>
  	</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>

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
        <form action="proses_save.php" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nama Kategori</label>
                  <input type="text" name="modal_name"  class="form-control" placeholder="Modal Name" required/>
                </div>

        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="submit">
            Confirm
        </button>
       	<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
         Cancel
        </button>
      </div>
    </div>
  </div>
</div>