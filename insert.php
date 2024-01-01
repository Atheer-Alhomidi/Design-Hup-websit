<?php
$con = mysqli_connect("localhost","root","","design_network");
?>

<?php    
                $_SESSION['user_email']="";  
                    $user = $_SESSION['user_email'];
                    $get_user = "SELECT * FROM users WHERE user_email='$user'";
                    $run_user = mysqli_query($con, $get_user);
                    $row = mysqli_fetch_array($run_user);
                    $user_id = $row['user_id'];
                    $user_name = $row['user_name'];
                    $first_name = $row['f_name'];
                    $last_name = $row['l_name'];
                    $describe_user = $row['describe_user'];
                    $Relationship_status = $row['Relationship'];
                    $user_pass = $row['user_pass'];
                    $user_email =  $row['user_email'];
                    $user_country = $row['user_country'];
                    $user_gender = $row['user_gender'];
                    $user_birthday = $row['user_birthday'];
                    $user_image = $row['user_image'];
                    $user_cover = $row['user_cover'];
                    $recovery_account = $row['recovery_account'];
                    $register_date = $row['user_reg_date'];
                    $user_posts = "select * from posts where user_id='$user_id'";
                    $run_posts = mysqli_query($con, $user_posts);
                    $posts = mysqli_num_rows($run_posts);


                    $insert = "insert into users (f_name,l_name,user_name,describe_user,Relationship,user_pass,user_email,user_country,user_gender
                    ,user_birthday,user_image,user_cover,user_reg_date,status,posts,recovery_account)
                    values('$first_name','$last_name','$username','Hello Design Hup. This is  my default status!','...','$pass','$email','$country',
                    '$gender','$birthday','$profile_pic','default_cover.jpg',NOW(),'$status','$posts','Iwanttoputadingintheuniverse.')"; 
                        
                    $query = mysqli_query($con, $insert);
            
                    if($query){
                        echo "<script>alert('Well Done $first_name, you are good to go.')</script>";
                        echo "<script>window.open('signin.php', '_self')</script>";
                    }
                    else{
                        echo "<script>alert('Registration failed, please try again!')</script>";
                        echo "<script>window.open('signup.php', '_self')</script>";
                    }
                exit();
            
                ?>