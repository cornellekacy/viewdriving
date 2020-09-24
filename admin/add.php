<?php include 'header.php'; ?>
</div>
<div id="layoutSidenav_content">
	<main>


		<div class="container">
			<div class="row">
				<div class="col-md-2">

				</div>
				<div class="col-md-8">
					<?php
					include 'conn.php';

// Check connection
					if($link === false){
						die("ERROR: Could not connect. " . mysqli_connect_error());
					}
					if(isset($_POST['save'])){
						$name = $_POST['name'];
						$dob = $_POST['dob'];
						$gender = $_POST['gender'];
						$address = $_POST['address'];
						$drivingstatus = $_POST['drivingstatus'];
						$validfrom = $_POST['validfrom'];
						$validto = $_POST['validto'];
						$lisencenumber = $_POST['licencenumber'];
						$issuenumber = $_POST['issuenumber'];
						$inumber = $_POST['inumber'];
						$postcode = $_POST['postcode'];
						if (empty($name)) {
							echo "<div class='alert alert-danger'>
							<strong>Failed!</strong> Name Cannot Be Empty.
							</div>";
						}

						elseif (empty($dob)) {
							echo "<div class='alert alert-danger'>
							<strong>Failed!</strong> Date Of Birth Cannot Be Empty.
							</div>";
						}
						elseif (empty($gender)) {
							echo "<div class='alert alert-danger'>
							<strong>Failed!</strong> Gender Cannot Be Empty.
							</div>";
						}else{

// Attempt insert query execution
							$sql = "INSERT INTO licence (name, dob,gender,address,drivingstatus,validfrom,validto,lisencenumber,issuenumber,inumber,postcode) VALUES ('$name', '$dob', '$gender', '$address','$drivingstatus','$validfrom','$validto','$lisencenumber','$issuenumber','$inumber','$postcode')";
							if(mysqli_query($link, $sql)){
								echo "<div class='alert alert-success'>
								<strong>Success!</strong> New Licence Successfully Created.
								</div>";
							} else{
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
							}
						}
					}
// Close connection
					mysqli_close($link);
					?>

					<div class="card shadow-lg border-0 rounded-lg mt-5">
						<div class="card-header"><h3 class="text-center font-weight-light my-4">Add Licence Details</h3></div>
						<div class="card-body">
							<form method="post">
								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group"><label class="small mb-1" for="inputFirstName">Full Name</label><input class="form-control py-4" name="name"  type="text" /></div>
									</div>
									<div class="col-md-6">
										<div class="form-group"><label class="small mb-1" for="inputLastName">Date Of Birth</label><input class="form-control py-4" name="dob" id="inputLastName" type="Date"  /></div>
									</div>
								</div>
								<div class="form-group"><label class="small mb-1" for="inputEmailAddress">Gender</label>
									<select class="form-control" name="gender" id="sel1">
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>

								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group"><label class="small mb-1" for="inputPassword">Address</label><input class="form-control py-4" name="address" id="inputPassword" type="text"  /></div>
									</div>
									<div class="col-md-6">
										<div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Driving Status</label>

											<select class="form-control" name="drivingstatus" id="sel1">
										<option value="You have a Full Driving License">You have a Full Driving License </option>
										<option value="You have a Provisional Driving License">You have a Provisional Driving License </option>
										<option value="You have a Driving Theory test Certificate">You have a Driving Theory test Certificate  </option>
										<option value="You have a Practical Driving Test pass certificate">You have a Practical Driving Test pass certificate </option>
										<option value="Licence Banned">Licence Banned </option>
										<option value="Licence Suspended "> Licence Suspended </option>
										<option value="A Criminal Charge was found">A Criminal Charge was found </option>
										<option value="On hold for No Vehicle Insurance policy">On hold for No Vehicle Insurance policy</option>
									</select>

											</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group"><label class="small mb-1" for="inputPassword">Licence Valid From</label><input class="form-control py-4" name="validfrom"  type="text"  /></div>
									</div>
									<div class="col-md-6">
										<div class="form-group"><label class="small mb-1" >Licence Valid To</label><input class="form-control py-4" name="validto"  type="text"  /></div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group"><label class="small mb-1" >Driving Licence Number</label><input class="form-control py-4" name="licencenumber" type="text"  /></div>
									</div>
									<div class="col-md-6">
										<div class="form-group"><label class="small mb-1" >Licence Issue Number</label><input class="form-control py-4" name="issuenumber"  type="text"  /></div>
									</div>
								</div>
									<div class="form-row">
									<div class="col-md-6">
										<div class="form-group"><label class="small mb-1" >National Inssurance Number</label><input class="form-control py-4" name="inumber" type="text"  /></div>
									</div>
									<div class="col-md-6">
										<div class="form-group"><label class="small mb-1" >PostCode</label><input class="form-control py-4" name="postcode"  type="text"  /></div>
									</div>
								</div>

								<button class="btn btn-primary btn-block" name="save" type="submit">Create Licence Details</button>
							</form>
						</div>

					</div>
				</div>
				<div class="col-md-2">

				</div>
			</div>
		</div>




	</main>
	<?php include 'footer.php'; ?>