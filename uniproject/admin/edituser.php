<?php 

include '../includes/db.php';
include 'include/head.php';
include 'include/topNav.php';

include 'include/leftsidebar.php';

?>

<div class="content-page">
	
    <!-- Start content -->
    <div class="content">
        
        <div class="container-fluid">

<!--breadcum -->
 	<div class="row">
								<div class="col-xl-12">
										<div class="breadcrumb-holder">
												<h1 class="main-title float-left">Edit User</h1>
												<ol class="breadcrumb float-right">
													<li class="breadcrumb-item">Home</li>
													<li class="breadcrumb-item active">Edit User</li>
												</ol>
												<div class="clearfix"></div>
										</div>
								</div>
						</div>



        <div class="row">
			
            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">						


             <div class="card mb-3">
          <div class="card-header">
            <h3><i class="fa fa-check-square-o"></i>Edit Users Registration</h3>
              Be sure to use an appropriate <i>type</i> attribute on all inputs (e.g., <i>email</i> for email address or <i>number</i> for numerical information) to take advantage of newer input controls like email verification, number selection, and more.
                 </div>
 
          <div class="card-body">
 
          <form class="form" role="form" autocomplete="" name="form1" method="post" action="user.php" onSubmit="return check();">

          	 <?php 
                      if (isset($_GET['edit'])){

                    $db_id = $_GET['edit'];
                  
                  
                       $query = "SELECT * FROM joinus WHERE id = {$db_id}";
                       $select_user_id = mysqli_query($connection, $query);
                       
                       while($row = mysqli_fetch_assoc($select_user_id)) {
                       $db_id = $row['id'];
                        $user_name = $row['username'];
                       $user_password = $row['password'];
                       $user_email = $row['email'];
                       $user_fname = $row['full_name'];
                       $user_address = $row['Address'];
                       $user_contactnum = $row['contact_num'];
                       $user_company = $row['company_name'];

                   }
               }

                       ?>
   
                           

                           <div class="form-group row">
                                    <label class="col-sm-3 col-form-label form-control-label">ID </label>
                                    <div class="col-sm-9">
                                        <input class="form-control"  name="id" type="text" value="<?php echo $db_id  ?>" >
                                    </div>
                                </div>
                     
                            
                            <div class="form-group row">
                                    <label class="col-sm-3 col-form-label form-control-label">User Name </label>
                                    <div class="col-sm-9">
                                        <input class="form-control"  name="username" type="text" value="<?php echo $user_name  ?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label form-control-label">Password </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="password" type="password" value="<?php echo $user_password  ?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label form-control-label">Email </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="email" type="mail" value="<?php echo $user_email  ?>" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label form-control-label">Full name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="fullname" type="text" value="<?php echo $user_fname  ?>">
                                    </div>
                                </div>
                                

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label form-control-label">Address</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="address" type="text" value="<?php echo $user_address  ?>">
                                    </div>
                                </div>
                                
                                

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label form-control-label">Contact No</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="phone" type="text" value="<?php echo $user_contactnum  ?>">
                                    </div>
                                </div>
                               

                                   <div class="form-group row">
                                    <label class="col-sm-3 col-form-label form-control-label">Company Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="company" type="text" value="<?php echo $user_company  ?>">
                                    </div>
                                </div>
                            

                                <div class="form-group row">
                                    <label class="col-sm-12 col-form-label form-control-label"></label> 
                                
                                   
                                        <input class="btn btn-success" name="Submit" type="submit" value="Submit">
                                    
                                </div>
                            </form>


                               <?php          
                   if (isset($_POST['update'])){

     $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];

    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $company = $_POST['company']; 


      $query = "UPDATE joinus SET ";
                        
                        
                        $query .="username = ' {$username}', ";
                        $query .="password = ' {$password}', ";
                        $query .="email = ' {$email}', ";
                        $query .="full_name = ' {$fullname}', ";
                        $query .="Address = ' {$address}', ";
                        $query .="contact_num = ' {$phone}', ";
                        $query .="company_name = ' {$company}', ";
                        
                        $query .="WHERE id = ' {$db_id}', ";

                        $update_admin = mysqli_query($connection,$query);

                        //confirmQuery($update_student);

                        if(!$update_admin){
                          die("QUERY FAILED" . mysqli_error($connection));
                        }
                      



}


?>

                 
      </div>														
   </div><!-- end card-->	

  </div> <!--end column --> 
  </div> 

                        </div>
								</div>
						</div>


                        
<?php

include 'include/footer.php'

?>
