<?php
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
require '/xampp/htdocs/tichatool/php/Common_session.php';


	function porlogin()
	{
		require '/xampp/htdocs/tichatool/php/db.php';
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			
			$username =  clean( trim(escape($_POST['email'])));
			$password =  clean( trim(escape($_POST['password'])));
		
//validation
	
				 if (empty($username) || empty($password))
				 {
					echo '<div color:#fff; style="padding:10px; width: 100%; background-color:red; border-radius:10px;">
					<small> studentID and password are required</small>
				</div>';
					
				}else
				{
					/*
					$studentID = escape($_POST['studentID']);
					$password = escape($_POST['password']);
					*/

						// Prepare a select statement
						$sql = "SELECT id, username, password FROM users WHERE username = ?";
						
						if($stmt = mysqli_prepare($con, $sql)){
							// Bind variables to the prepared statement as parameters
							mysqli_stmt_bind_param($stmt, "s", $param_id);
							
							// Set parameters
							$param_id = $username;
							
							// Attempt to execute the prepared statement
							if(mysqli_stmt_execute($stmt)){
								// Store result
								mysqli_stmt_store_result($stmt);
								
								// Check if studentID exists, if yes then verify password
								if(mysqli_stmt_num_rows($stmt) == 1){                    
									// Bind result variables
									mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
									if(mysqli_stmt_fetch($stmt))
									{
										if(password_verify($password, $hashed_password))
										{
											
											
											//$vkey = $con->query("SELECT  varified FROM users WHERE varified = ? ");

											if(varified())
											//if varified
											{
												$_SESSION['id'] =$id;
												$_SESSION['username'] =$username;
												/*
												$_SESSION = [
													'user_id' => $row['id'],
													'username' => $row['username']
												];
												*/
												//check for roles
												if(is_Admin())
												{
												//header('location:adm/feeds.php');
													header('location: http://' .$_SERVER['HTTP_HOST'] . '/adm/feeds.php');
											
												}else{
												//header('location:por/portal.php');
												header('location: http://' .$_SERVER['HTTP_HOST'] . '/por/portal.php');
											
												}
											
											}else{
												
													header('location:auth/checkVarify.php');
												}
											
			
										} else{
											// Password is not valid, display a generic error message
											echo  "Invalid username or password.";
										}
									}
								} else{
									// studentID doesn't exist, display a generic error message
									echo "Invalid username or password.";
								}
							} else{
								echo "Oops! Something went wrong. Please try again later.";
							}
				
							// Close statement
							mysqli_stmt_close($stmt);
						}
					
					
					// Close connection
					mysqli_close($con);
				
				}
					
//login starts here	
/*
					$stmt = $con->query( 'SELECT * FROM users WHERE email = ? ');
					//$stmt->execute([$email]);
					// $stmt = fetch_data($result);
					
					
					
					if(mysqli_stmt_num_rows($stmt) == 1)
					{

									if($user['varified'])
									{
										$resultSet = $con->query("SELECT Role FROM users WHERE Role = 1 ");
					
										if($resultSet->num_rows == 1)
											{
												$_SESSION['loggedin'] = true;
											//$_SESSION['userID'] = $user['id'];
												header('location:feeds.php');
						
							
											}else{
												
											$_SESSION['loggedin'] = true;
											//$_SESSION['userID'] = $user['id'];
												header('location:por/portal.php'); 
						
										}

									}else{
											$_SESSION['loggedin'] = true;
											//$_SESSION['userID'] = $user['id'];
											header('location:auth/checkVarify.php');
										}

	
					

					
					}else{
						echo '<small>the email or password you entered is incorrect</small>';
					}
				}
				
				*/

		}
	}


 
?>