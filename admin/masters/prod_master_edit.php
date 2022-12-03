<!DOCTYPE html>
<html lang="en">
<?php     include("./../dbconnection.php"); ?>
<!-- Mirrored from themekita.com/demo-atlantis-bootstrap/livepreview/examples/demo2/forms/formvalidation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 13:09:45 GMT -->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Forms - Atlantis Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="https://themekita.com/demo-atlantis-bootstrap/livepreview/examples/assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>
<body data-background-color="dark">
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark2">
				
				<a href="../index.html" class="logo">
					<img src="https://themekita.com/demo-atlantis-bootstrap/livepreview/examples/assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">My Profile</a>
										<a class="dropdown-item" href="#">My Balance</a>
										<a class="dropdown-item" href="#">Inbox</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Account Setting</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" data-background-color="dark2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary">
						<li class="nav-item active">
							
							<div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
									<li>
										<a href="index.html">
											<span class="sub-item">Dashboard</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#masters">
								<i class="fas fa-pen-square"></i>
								<p>Masters</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="masters">
								<ul class="nav nav-collapse">
                                    <li>
										<a href="brand_master_model.html">
											<span class="sub-item">Product Brand</span>
										</a>
									</li>
									<li>
										<a href="category_master_model.html">
											<span class="sub-item">Product Category</span>
										</a>
									</li>
									<li>
										<a href="sub_category_master_model.php">
											<span class="sub-item">Product Sub Category</span>
										</a>
									</li>
                                    <li>
										<a href="prod_master_model.php">
											<span class="sub-item">Products</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#views">
								<i class="fas fa-pen-square"></i>
								<p>Views <Table></Table></p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="views">
								<ul class="nav nav-collapse">
                                    <li>
										<a href="prod_master_view.php">
											<span class="sub-item">Products View</span>
										</a>
									</li>
									<li>
										<a href="brand_master_view.php">
											<span class="sub-item">Product Brands</span>
										</a>
									</li>
									<li>
										<a href="category_master_view.php">
											<span class="sub-item">Product Category</span>
										</a>
									</li>
									<li>
										<a href="sub_category_master_view.php">
											<span class="sub-item">Product Sub Category</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->


		<div class="main-panel">
			<div class="container">
				<div class="page-inner">
					<!-- <div class="page-header">
						<h4 class="page-title">Brand Master</h4>
						
					</div> -->
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">product Master</div>
									<!-- <div class="card-category">Form validation with jQuery from <a href="https://jqueryvalidation.org/">jQuery Validate</a></div> -->
								</div>
                                <?php 
                                    $sql="select * from tbl_products where PRODTID='".$_GET['id']."'";
                                    // echo $sql;
                                    $results=mysqli_query($con,$sql);
									while($row=mysqli_fetch_array($results)){
                                        $prod_name=$row['PRODN01'];
                                        $prod_code=$row['PRODN02'];
                                        $brand_id=$row['PRODN03'];
                                        $sub_category_id=$row['PRODN04'];
                                        if($sub_category_id>0){
                                            $selected="selected";
                                        }
                                        $prod_desc=$row['PRODN05'];
                                        $price=$row['PRODN06'];
                                        $image=$row['PRODN07'];
                                        $status=$row['PRODN08'];
                                        $imageURL1 = './prod_uploads/'.$row["PRODN07"];
										$prod_id=$row['PRODTID'];
										
                                    }
                                ?>
								<form id="exampleValidation" action="controllerProdData.php" method="POST" enctype="multipart/form-data">
									<div class="card-body">
										<div class="form-group form-show-validation row">
											<label for="prod_name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">product Name <span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type='hidden' name='prod_id' id='prod_id' value='<?php echo $prod_id; ?>'>
												<input type="text" class="form-control" id="prod_name" name="prod_name" value="<?php echo $prod_name; ?>" placeholder="Enter Productname" required>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="prod_code" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Product Code <span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												
												<input type="text" class="form-control" id="prod_code" name="prod_code" value="<?php echo $prod_code; ?>" placeholder="Enter Product Code" required>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="category_id" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Category<span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<div class="select2-input">
													<select id="category_id" name="category_id" class="form-control" onchange="dropdown_category()" required>
															<option value="">Please select Category</option>
															<?php
																$sql="select * from tbl_category 
																left join tbl_subcategory on CATEGTID=SUBCAT02
																where CATEG02='Active' group by SUBCAT02";
																// echo $sql;
																$results=mysqli_query($con,$sql);
																while($row=mysqli_fetch_array($results)){
																	if($sub_category_id==$row['CATEGTID']){
                                                                        $selected="selected";
                                                                    }
																	echo '<option value="'.$row['CATEGTID'].'">'.$row['CATEG01'].'</option>';
																}
															?>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="sub_category_id" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Sub Category<span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<div class="select2-input" id="view_sub_category">
													<select id="sub_category_id" name="sub_category_id" class="form-control" required>
															<option value="">Please select sub Category</option>
															<?php
																$sql="select * from tbl_subcategory";
																// echo $sql
																$results=mysqli_query($con,$sql);
																while($row=mysqli_fetch_array($results)){
                                                                    if($sub_category_id==$row['SUBCATID']){
                                                                        $selected="selected";
                                                                    }
																	echo '<option value="'.$row['SUBCATID'].'"  '.$selected.'>'.$row['SUBCAT01'].'</option>';
																}
															?>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="brand_id" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> Brand<span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<div class="select2-input">
													<select id="brand_id" name="brand_id" class="form-control" required>
															<option value="">Please select Brand</option>
															<?php
																$sql="select * from tbl_brands where BRAND02='Active'";
															
																$results=mysqli_query($con,$sql);
																while($row=mysqli_fetch_array($results)){
                                                                    if($brand_id==$row['BRANDTID']){
                                                                        $selected="selected";
                                                                    }
																	echo '<option value="'.$row['BRANDTID'].'"  '.$selected.'>'.$row['BRAND01'].'</option>';
																}
															?>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Product Description <span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
											<textarea id="prod_des"  class="form-control" name="prod_des" rows="4" cols="50" required><?php echo $prod_desc; ?></textarea>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Product Price <span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="number" class="form-control" id="prod_price" name="prod_price" value="<?php echo $price; ?>" placeholder="Enter Product Price" required>
											</div>
										</div>
                                        <div class="form-group form-show-validation row">
											<label for="brand_id" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> Status<span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<div class="select2-input">
													<select id="brand_id" name="status" class="form-control" required>
															<option value="">Please select status</option>
                                                            <option value="Active" <?php echo ($status == 'Active')?"selected":"" ?>>Active</option>
                                                            <option value="InActive" <?php echo ($status == 'InActive')?"selected":"" ?>>InActive</option>
															
													</select>
												</div>
											</div>
										</div>
										<div class="separator-solid"></div>
										<div class="form-group form-show-validation row">
											<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Image <span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<div class="input-file input-file-image">
													<img class="img-upload-preview img-circle" width="100" height="100" src="<?php echo $imageURL1; ?>" alt="preview">
													<input type="file" class="form-control form-control-file" id="uploadImg" name="uploadImg" value="<?php echo $image; ?>" accept="image/*"  >
													<label for="uploadImg" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload a Image</label>
												</div>
											</div>
										</div>
                                        
									<div class="card-action">
										<div class="row">
											<div class="col-md-12">
												<input class="btn btn-success" type="submit" value="Submit" name="submit_edit" >
												<button class="btn btn-danger">Cancel</button>
											</div>										
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
                function dropdown_category(){ 
					// alert("test");
					var category_id = $("#category_id").val();
                        $.ajax({
                            url:'controllerProdData.php',
                            method:'POST',
                            data:{dropdown_category:'dropdown_category',category_id:category_id},
                            cache: false,
                            success: function(respose){
								$('#view_sub_category').html(respose);
                            }
                         });
                }

            </script>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="http://www.themekita.com/">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="http://www.themekita.com/">ThemeKita</a>
					</div>				
				</div>
			</footer>
		</div>
		<div class="quick-sidebar">
		<a href="#" class="close-quick-sidebar">
			<i class="flaticon-cross"></i>
		</a>
		<div class="quick-sidebar-wrapper">
			<ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
				<li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#messages" role="tab" aria-selected="true">Messages</a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tasks" role="tab" aria-selected="false">Tasks</a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a> </li>
			</ul>
			<div class="tab-content mt-3">
				<div class="tab-chat tab-pane fade show active" id="messages" role="tabpanel">
					<div class="messages-contact">
						<div class="quick-wrapper">
							<div class="quick-scroll scrollbar-outer">
								<div class="quick-content contact-content">
									<span class="category-title mt-0">Contacts</span>
									<div class="avatar-group">
										<div class="avatar">
											<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar">
											<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar">
											<img src="../assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar">
											<img src="../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar">
											<span class="avatar-title rounded-circle border border-white">+</span>
										</div>
									</div>
									<span class="category-title">Recent</span>
									<div class="contact-list contact-list-recent">
										<div class="user">
											<a href="#">
												<div class="avatar avatar-online">
													<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
												</div>
												<div class="user-data">
													<span class="name">Jimmy Denis</span>
													<span class="message">How are you ?</span>
												</div>
											</a>
										</div>
										<div class="user">
											<a href="#">
												<div class="avatar avatar-offline">
													<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
												</div>
												<div class="user-data">
													<span class="name">Chad</span>
													<span class="message">Ok, Thanks !</span>
												</div>
											</a>
										</div>
										<div class="user">
											<a href="#">
												<div class="avatar avatar-offline">
													<img src="../assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
												</div>
												<div class="user-data">
													<span class="name">John Doe</span>
													<span class="message">Ready for the meeting today with...</span>
												</div>
											</a>
										</div>
									</div>
									<span class="category-title">Other Contacts</span>
									<div class="contact-list">
										<div class="user">
											<a href="#">
												<div class="avatar avatar-online">
													<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
												</div>
												<div class="user-data2">
													<span class="name">Jimmy Denis</span>
													<span class="status">Online</span>
												</div>
											</a>
										</div>
										<div class="user">
											<a href="#">
												<div class="avatar avatar-offline">
													<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
												</div>
												<div class="user-data2">
													<span class="name">Chad</span>
													<span class="status">Active 2h ago</span>
												</div>
											</a>
										</div>
										<div class="user">
											<a href="#">
												<div class="avatar avatar-away">
													<img src="../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle border border-white">
												</div>
												<div class="user-data2">
													<span class="name">Talha</span>
													<span class="status">Away</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="messages-wrapper">
						<div class="messages-title">
							<div class="user">
								<div class="avatar avatar-offline float-right ml-2">
									<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
								</div>
								<span class="name">Chad</span>
								<span class="last-active">Active 2h ago</span>
							</div>
							<button class="return">
								<i class="flaticon-left-arrow-3"></i>
							</button>
						</div>
						<div class="messages-body messages-scroll scrollbar-outer">
							<div class="message-content-wrapper">
								<div class="message message-in">
									<div class="avatar avatar-sm">
										<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
									</div>
									<div class="message-body">
										<div class="message-content">
											<div class="name">Chad</div>
											<div class="content">Hello, Rian</div>
										</div>
										<div class="date">12.31</div>
									</div>
								</div>
							</div>
							<div class="message-content-wrapper">
								<div class="message message-out">
									<div class="message-body">
										<div class="message-content">
											<div class="content">
												Hello, Chad
											</div>
										</div>
										<div class="message-content">
											<div class="content">
												What's up?
											</div>
										</div>
										<div class="date">12.35</div>
									</div>
								</div>
							</div>
							<div class="message-content-wrapper">
								<div class="message message-in">
									<div class="avatar avatar-sm">
										<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
									</div>
									<div class="message-body">
										<div class="message-content">
											<div class="name">Chad</div>
											<div class="content">
												Thanks
											</div>
										</div>
										<div class="message-content">
											<div class="content">
												When is the deadline of the project we are working on ?
											</div>
										</div>
										<div class="date">13.00</div>
									</div>
								</div>
							</div>
							<div class="message-content-wrapper">
								<div class="message message-out">
									<div class="message-body">
										<div class="message-content">
											<div class="content">
												The deadline is about 2 months away
											</div>
										</div>
										<div class="date">13.10</div>
									</div>
								</div>
							</div>
							<div class="message-content-wrapper">
								<div class="message message-in">
									<div class="avatar avatar-sm">
										<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
									</div>
									<div class="message-body">
										<div class="message-content">
											<div class="name">Chad</div>
											<div class="content">
												Ok, Thanks !
											</div>
										</div>
										<div class="date">13.15</div>
									</div>
								</div>
							</div>
						</div>
						<div class="messages-form">
							<div class="messages-form-control">
								<input type="text" placeholder="Type here" class="form-control input-pill input-solid message-input">
							</div>
							<div class="messages-form-tool">
								<a href="#" class="attachment">
									<i class="flaticon-file"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="tasks" role="tabpanel">
					<div class="quick-wrapper tasks-wrapper">
						<div class="tasks-scroll scrollbar-outer">
							<div class="tasks-content">
								<span class="category-title mt-0">Today</span>
								<ul class="tasks-list">
									<li>
										<label class="custom-checkbox custom-control checkbox-secondary">
											<input type="checkbox" checked="" class="custom-control-input"><span class="custom-control-label">Planning new project structure</span>
											<span class="task-action">
												<a href="#" class="link text-danger">
													<i class="flaticon-interface-5"></i>
												</a>
											</span>
										</label>
									</li>
									<li>
										<label class="custom-checkbox custom-control checkbox-secondary">
											<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Create the main structure							</span>
											<span class="task-action">
												<a href="#" class="link text-danger">
													<i class="flaticon-interface-5"></i>
												</a>
											</span>
										</label>
									</li>
									<li>
										<label class="custom-checkbox custom-control checkbox-secondary">
											<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Add new Post</span>
											<span class="task-action">
												<a href="#" class="link text-danger">
													<i class="flaticon-interface-5"></i>
												</a>
											</span>
										</label>
									</li>
									<li>
										<label class="custom-checkbox custom-control checkbox-secondary">
											<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Finalise the design proposal</span>
											<span class="task-action">
												<a href="#" class="link text-danger">
													<i class="flaticon-interface-5"></i>
												</a>
											</span>
										</label>
									</li>
								</ul>

								<span class="category-title">Tomorrow</span>
								<ul class="tasks-list">
									<li>
										<label class="custom-checkbox custom-control checkbox-secondary">
											<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Initialize the project							</span>
											<span class="task-action">
												<a href="#" class="link text-danger">
													<i class="flaticon-interface-5"></i>
												</a>
											</span>
										</label>
									</li>
									<li>
										<label class="custom-checkbox custom-control checkbox-secondary">
											<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Create the main structure							</span>
											<span class="task-action">
												<a href="#" class="link text-danger">
													<i class="flaticon-interface-5"></i>
												</a>
											</span>
										</label>
									</li>
									<li>
										<label class="custom-checkbox custom-control checkbox-secondary">
											<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Updates changes to GitHub							</span>
											<span class="task-action">
												<a href="#" class="link text-danger">
													<i class="flaticon-interface-5"></i>
												</a>
											</span>
										</label>
									</li>
									<li>
										<label class="custom-checkbox custom-control checkbox-secondary">
											<input type="checkbox" class="custom-control-input"><span title="This task is too long to be displayed in a normal space!" class="custom-control-label">This task is too long to be displayed in a normal space!				</span>
											<span class="task-action">
												<a href="#" class="link text-danger">
													<i class="flaticon-interface-5"></i>
												</a>
											</span>
										</label>
									</li>
								</ul>

								<div class="mt-3">
									<div class="btn btn-primary btn-rounded btn-sm">
										<span class="btn-label">
											<i class="fa fa-plus"></i>
										</span>
										Add Task
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="settings" role="tabpanel">
					<div class="quick-wrapper settings-wrapper">
						<div class="quick-scroll scrollbar-outer">
							<div class="quick-content settings-content">

								<span class="category-title mt-0">General Settings</span>
								<ul class="settings-list">
									<li>
										<span class="item-label">Enable Notifications</span>
										<div class="item-control">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
										</div>
									</li>
									<li>
										<span class="item-label">Signin with social media</span>
										<div class="item-control">
											<input type="checkbox" data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
										</div>
									</li>
									<li>
										<span class="item-label">Backup storage</span>
										<div class="item-control">
											<input type="checkbox" data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
										</div>
									</li>
									<li>
										<span class="item-label">SMS Alert</span>
										<div class="item-control">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
										</div>
									</li>
								</ul>

								<span class="category-title mt-0">Notifications</span>
								<ul class="settings-list">
									<li>
										<span class="item-label">Email Notifications</span>
										<div class="item-control">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
										</div>
									</li>
									<li>
										<span class="item-label">New Comments</span>
										<div class="item-control">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
										</div>
									</li>
									<li>
										<span class="item-label">Chat Messages</span>
										<div class="item-control">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
										</div>
									</li>
									<li>
										<span class="item-label">Project Updates</span>
										<div class="item-control">
											<input type="checkbox" data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
										</div>
									</li>
									<li>
										<span class="item-label">New Tasks</span>
										<div class="item-control">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- Moment JS -->
	<script src="../assets/js/plugin/moment/moment.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- DateTimePicker -->
	<script src="../assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
	<!-- Select2 -->
	<script src="../assets/js/plugin/select2/select2.full.min.js"></script>
	<!-- jQuery Validation -->
	<script src="../assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo2.js"></script>
	<script>
		$('#birth').datetimepicker({
			format: 'MM/DD/YYYY'
		});

		$('#state').select2({
			theme: "bootstrap"
		});

		/* validate */

		// validation when select change
		$("#state").change(function(){
			$(this).valid();
		})

		// validation when inputfile change
		$("#uploadImg").on("change", function(){
			$(this).parent('form').validate();
		})

		$("#exampleValidation").validate({
			validClass: "success",
			rules: {
				gender: {required: true},
				confirmpassword: {
					equalTo: "#password"
				},
				birth: {
					date: true
				},
				uploadImg: {
					required: true, 
				},
			},
			highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
			},
			success: function(element) {
				$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			},
		});
	</script>
</body>

<!-- Mirrored from themekita.com/demo-atlantis-bootstrap/livepreview/examples/demo2/forms/formvalidation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 13:09:45 GMT -->
</html>