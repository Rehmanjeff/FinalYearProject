<?php

	
        $file = rand(1000,100000)."-".$_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="dp/";
        
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
            
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
            
	$final_file=str_replace(' ','-',$new_file_name);
            
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
            $sql="SELECT * FROM profilephoto WHERE userId_FK = ".$FK;
            $result=  mysqli_query($link, $sql);
            $row=  mysqli_fetch_assoc($result);
            if(empty($row)){
                echo $sql="INSERT INTO profilephoto(dp_file,dp_type,dp_size,userId_FK) VALUES('$final_file','$file_type','$new_size','".$FK."')";
                mysqli_query($link,$sql);
            }else{
                echo $sql="UPDATE profilephoto SET dp_file = '$final_file', dp_type = '$file_type',dp_size = '$new_size'";
                mysqli_query($link,$sql);
            }
                
            echo '<script>alert("successfully uploaded");
            window.location.href="researcher.php?success";
            </script>';
	}
	else
	{
            echo '<script>
                alert("error while uploading file");
                window.location.href="researcher.php?fail";
            </script>';
        }
        
        if(isset($_GET['success']))
            echo 'File Uploaded Successfully...';
	else if(isset($_GET['fail']))
            echo 'Problem While File Uploading !';
        else
            echo 'Try to upload any files(PDF, DOC, EXE, ZIP,etc...)';

        