		   <!--Main Content Section Starts-->
		   <div class="main-content">
		        <div class="wrapper">
				   <h1>MANAGE ADMIN</h1>
				   <br/>
				   
				   <?php
				      if (isset($_SESSION['add']))
				      {
						  echo $_SESSION['add'];
						  unset ($_SESSION['add']);//removing session message
					  }   
					  
					  if (isset($_SESSION['delete']))
					  {
						  echo $_SESSION['delete'];
						  unset ($_SESSION['delete']);//removing session message
					  }   
					  
					  if (isset($_SESSION['update']))
					  {
						  echo $_SESSION['update'];
						  unset ($_SESSION['update']);//removing session message
					  }   
					  
					  if (isset($_SESSION['login']))
			          {
						  echo $_SESSION['login'];
						  unset ($_SESSION['login']);//removing session message
			          }   
			       ?>
				   <br/><br/>
				   
				   <a href="add-admin.php" class="btn-primary">ADD ADMIN</a>
				   <br/><br/><br/>
				   
				   <table class="tbl-full">
				      <tr>
                        <th>S.N.</th>   				 
                        <th>Full Name</th>   
                        <th>Username</th>
						<th>Email</th>
                        <th>Actions</th>      	
                      </tr>		

				   <?php
				      $sql="SELECT *FROM tbl_admin";
					  $res= mysqli_query($conn, $sql);
					  
					    if ($res==TRUE)
	                      {
                             $count= mysqli_num_rows($res);//get rows from database
							 if ($count>0)
							 {
								 $sn=1;
								 
								 while($rows= mysqli_fetch_assoc($res))
								 {
									 $id=$rows['id'];
									 $full_name=$rows['full_name'];
									 $email=$rows['email'];
									 $username=$rows['username'];
									 
									 ?>
									 <tr>
                                         <th><?php echo $sn++ ?></th>   				 
                                         <th><?php echo $quantity ?></th>   
										 <th><?php echo $variety ?></th> 
                                         <th><?php echo $food_name ?></th>
										 <th><?php echo $drink_size ?></th>
                                         <th>
					                  	    <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
					                  	    <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
					                     </th>      	
                                     </tr>		
									 <?php
							     }
							 }
							 else
							 {
								 //no data
							 }
	                      }

					?>

				    </table>
			    </div>
		   </div>