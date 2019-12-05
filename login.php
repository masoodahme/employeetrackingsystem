<?php
			session_start();
		
			if(isset($_POST['submit']))
			{
				$row=array();
				$email=$_POST['email'];
				$password=$_POST['password'];
				 //$con=mysqli_connect("localhost","id10477503_root","12345","id10477503_eleaveform");
				$con=mysqli_connect("localhost","root","","employeetracker");
                if(!$con)
                {
                    echo"Database connection is not established";
                }
                $query="select * from employee_register where email_id='$email' and password='$password';";
                $result=mysqli_query($con,$query);
                //echo"could not insert data:". mysqli_error($con);
                if(mysqli_num_rows($result)==1)
                {
                    $row=mysqli_fetch_array($result);
					$_SESSION['NAME']=$row[0];
                    $_SESSION['EMAIL']=$row[1];
                    $name=$_SESSION['NAME'];
					$email=$_SESSION['EMAIL'];
                    // echo"could not insert data:". mysqli_error($con);
                     
                       echo"<script>
							//alert('password correct');
                            location.href='overview.php';
                       </script>";  
						
                }
                else
				{
                    echo"<script>
                        alert('wrong ID or Password');
						location.href='index.php';
                    </script>";
                }
				
			  }
		 
	
            		
     ?>