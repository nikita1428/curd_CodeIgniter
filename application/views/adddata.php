<?php

include('include/head.php')
?>
<div class="container">

    <a class="btn btn-primary btn-small" href="<?php base_url(); ?>index">back</a>
    <div class="card " style="margin-top: 10%;">
		<form method="POST" action="<?php echo base_url() ?>CurdController/addData">
			<div class="form-group">
				<label for="exampleInputEmail1">name</label>
				<input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
					else.</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">email</label>
				<input type="email" name="email" class="form-control" id="exampleInputPassword1">
			</div>

			<div class="row">


				<div class="col-lg-4">
					<div class="form-check">
						<input class="form-check-input" name="hobby"  type="checkbox" value="singing" id="defaultCheck1">
						<label class="form-check-label" for="defaultCheck1">
                            singing
							
						</label>
					</div>

                </div>
                

               
				<div class="col-lg-4">
					<div class="form-check">
						<input class="form-check-input" name="hobby"  type="checkbox" value="danceing" id="defaultCheck1">
						<label class="form-check-label" for="defaultCheck1">
							danceing
						</label>
					</div>

				</div>
				<div class="col-lg-4">
					<div class="form-check">
						<input class="form-check-input" name="hobby"  type="checkbox" value="playing" id="defaultCheck1">
						<label class="form-check-label" for="defaultCheck1">
							playing
						</label>
					</div>

				</div>
				<div class="col-lg-4">
					<div class="form-check">
						<input class="form-check-input" name="hobby"  type="checkbox" value="gamming" id="defaultCheck1">
						<label class="form-check-label" for="defaultCheck1">
							gamming
						</label>
					</div>

				</div>
			</div>


			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

</div>


<?php

include('include/footer.php')
?>
