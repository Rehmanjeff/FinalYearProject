
<?php include 'Related-Data/Researcher/verifyAccess.php'; ?>
<!--
<div class="dropdown">
    <a data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-chevron-down" style="float: right"></span></b></a>
    <ul class="dropdown-menu">
        <li><a data-toggle="modal" data-target="#myModal1">Edit</a></li>
    </ul>
</div>
!-->
<!DOCTYPE html>
    
<html lang="en">
    <head>
        <?php include('headerScript.php');?>
        <title>Personal Info | Researcher</title>
        
        <script type="text/javascript">
        $(document).ready(function(){
            $('INPUT[type="file"]').change(function () {
            var ext = this.value.match(/\.(.+)$/)[1];
            switch (ext) {
                case 'jpg':
                case 'jpeg':
                case 'png':
                case 'gif':
                    $('#btnUpload').attr('disabled', false);
                    break;
                default:
                    alert('Please choose jpg, jpeg, png or gif file extension.');
                    this.value = '';
            }
            });
            
            $('#rName').keyup(function(){
                   var data = $('#rName').val();
                    var  tmpRes=data.replace(/[^A-Za-z ]/g, '');
                    $('#rName').val(tmpRes);
                     if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                    {
                        $('#lblrName').text('Special characters are not allowed');
                    }
                    if (data.match(/([0-9])/))
                    {
                        $('#lblrName').text('User Name cannot be blank');
                    }
            });
            $('#rDesig').keyup(function(){
                   var data = $('#rDesig').val();
                    var  tmpRes=data.replace(/[^A-Za-z ]/g, '');
                    $('#rDesig').val(tmpRes);
                     if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                    {
                        $('#lblrDesig').text('Special characters are not allowed');
                    }
                    if (data.match(/([0-9])/))
                    {
                        $('#lblrDesig').text('User Name cannot be blank');
                    }
            });
             $('#txtAddress').keyup(function(){
                   var data = $('#txtAddress').val();
                    var  tmpRes=data.replace(/[^A-Za-z ]/g, '');
                    $('#txtAddress').val(tmpRes);
                     if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                    {
                        $('#lbladdress').text('Special characters are not allowed');
                    }
                    if (data.match(/([0-9])/))
                    {
                        $('#lbladdress').text('User Name cannot be blank');
                    }
            });
             $('#phone').keyup(function(){
                   var data = $('#phone').val();
                    var  tmpRes=data.replace(/[^0-9 ]/g, '');
                    $('#phone').val(tmpRes);
                     if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                    {
                        $('#lblphone').text('Special characters are not allowed');
                    }
                    if (data.match(/([A-Za-z])/))
                    {
                        $('#lblphone').text('Alphabets are not allowed');
                    }
            });
             $('#otherPhone').keyup(function(){
                   var data = $('#otherPhone').val();
                    var  tmpRes=data.replace(/[^0-9 ]/g, '');
                    $('#otherPhone').val(tmpRes);
                     if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                    {
                        $('#lblOtherPhone').text('Special characters are not allowed');
                    }
                    if (data.match(/([A-Za-z])/))
                    {
                        $('#lblOtherPhone').text('Alphabets are not allowed');
                        return false;
                    }
            });
             $('#comments').keyup(function(){
                   var data = $('#comments').val();
                   var  tmpRes=data.replace(/[^0-9A-Za-z ]/g, '');
                   $('#detailAnouncement').val(tmpRes);
                   var minLength =200;
                   var remaining = minLength - data.length;
                   $('#commentSpan').html(remaining + "  remaining characters");
                   $('#comments').val(tmpRes);
                 if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                {
                    $('#lblcomments').text('Special characters are not allowed');
                    return false;
                }
            });
        });
             // Email checking 
            $(document).ready(function (e) {
                $('#rEmail').keyup(function () {
                    $('#emailSpan').html(validateEmail($('#rEmail').val()));
                });
                $('#SubmitButton').click(function (e) {
                    
                    var email = $('#rEmail').val();
                    // Checking Empty Fields
                    if (validateEmail(email)) {
                        return true;
                    }
                    else {
                        $('#rEmail').text('Email is inValid');
                        e.preventDefault();
                    }
                });
                $('#btnSubmit').validateEmail();
            });
            // Function that validates email address through a regular expression.
            function validateEmail(pEmail) {
                var filterValue = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                if (filterValue.test(pEmail)) {
                    if (pEmail.indexOf('@uol.edu.pk', pEmail.length - '@uol.edu.pk'.length) != -1)
                    {
                        $('#emailSpan').removeClass();
                        $('#emailSpan').addClass('Perfect');
                        return 'Just Perfect!';
                        $('#emailSpan').css("color","green");
                    }
                    else {
                        //alert("Email Must be like(yourName@uol.edu.pk)");
                        $('#emailSpan').removeClass();
                        $('#emailSpan').addClass('Email Must be like(yourName@uol.edu.pk)');
                        return 'Email Must be like(yourName@uol.edu.pk)';
                    }
                }
                else
                {
                    return false;
                }
            }
/*            <!-- PUBLICATIONS OF RESEARCHER START*/
                $(document).ready(function(){
               $('#title').keyup(function()
               {
                   $('#title').html(isValid($('#title').val()))
               }); 
               $('#author').keyup(function()
               {
                   $('#author').html(nameValidation($('#author').val()))
               });
               $('#year').keyup(function()
               {
                  $('#year').html(YearValidation($('#year').val())) 
               });
               $('#month').keyup(function()
               {
                  $('#month').html(monthValidation($('#month').val())) 
               });
               $('#page').keyup(function()
               {
                  $('#page').html(pageValidation($('#page').val())) 
               });
               $('#conf').keyup(function()
               {
                  $('#conf').html(conferenceValidation($('#conf').val())) 
               });
               $('#city').keyup(function()
               {
                  $('#city').html(CityValidation($('#city').val())) 
               });
                $('#country').keyup(function()
               {
                  $('#country').html(CountryValidation($('#country').val())) 
               });
               $('#jounal').keyup(function()
               {
                  $('#jounal').html(journalValidation($('#jounal').val())) 
               });
               
            });
               function isValid(data)
               {
                        data = $('#title').val();
                        var  tmpRes=data.replace(/[^A-Za-z0-9 ]/g, '');
                        $('#title').val(tmpRes);
                        
                        if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                        { 
                            $('#lblTitle').text('Special characters are not allowed');  
                        }
              }
              function nameValidation(data)
               {
                        data = $('#author').val();
                        var  tmpRes=data.replace(/[^A-Za-z ]/g, '');
                        $('#author').val(tmpRes);
                        
                        if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                        { 
                            $('#lblAuthor').text('Special characters are not allowed');
                        }
     
                        if (data.match(/([0-9])/))
                        {
                        $('#lblAuthor').text('Numbers are not allowed');
                        }
               }
               function YearValidation(data)
               {
                       // data = $('#smester').val();
                        var  tmpRes=data.replace(/[^0-9 ]/g, '');
                        $('#year').val(tmpRes);
                        
                        if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                        { 
                            $('#lblYear').text('No Special character');
                        }
     
                        if (data.match(/([A-Za-z])/))
                        {
                        $('#lblYear').text('No Alphabets');
                        }
              }
              function monthValidation(data)
               {
                       // data = $('#smester').val();
                        var  tmpRes=data.replace(/[^0-9 ]/g, '');
                        $('#month').val(tmpRes);
                        
                        if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                        { 
                            $('#lblmonth').text('NO Special characters');
                        }
     
                        if (data.match(/([A-Za-z])/))
                        {
                        $('#lblmonth').text('No Alphabets');
                        }
              }
              function pageValidation(data)
               {
                       // data = $('#smester').val();
                        var  tmpRes=data.replace(/[^0-9- ]/g, '');
                        $('#page').val(tmpRes);
                        
                        if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                        { 
                            $('#lblPage').text('NO Special characters');
                        }
     
                        if (data.match(/([A-Za-z])/))
                        {
                        $('#lblPage').text('No Alphabets');
                        }
              }
              function conferenceValidation(data)
               {
                        data = $('#conf').val();
                        var  tmpRes=data.replace(/[^A-Za-z ]/g, '');
                        $('#conf').val(tmpRes);
                        
                        if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                        { 
                            $('#lblConf').text('Special characters are not allowed');
                        }
     
                        if (data.match(/([0-9])/))
                        {
                        $('#lblConf').text('Numbers are not allowed');
                        }
               }
               function CityValidation(data)
               {
                        data = $('#city').val();
                        var  tmpRes=data.replace(/[^A-Za-z ]/g, '');
                        $('#city').val(tmpRes);   
               }
                function CountryValidation(data)
               {
                        data = $('#country').val();
                        var  tmpRes=data.replace(/[^A-Za-z ]/g, '');
                        $('#country').val(tmpRes);
                }
               function journalValidation(data)
               {
                        data = $('#jounal').val();
                        var  tmpRes=data.replace(/[^A-Za-z ]/g, '');
                        $('#jounal').val(tmpRes);
                        
                        if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                        { 
                            $('#lbljounal').text('Special characters are not allowed');
                        }
     
                        if (data.match(/([0-9])/))
                        {
                        $('#lbljounal').text('Numbers are not allowed');
                        }
               }    
        /* Students Project start*/
             $(document).ready(function(){
            $('#ProjTitle').keyup(function()
            {
                $('#lbltitle').html(isValid($('#ProjTitle').val()));
            });
            $('#projdescription').keyup(function(){
               $('#lbldescription').html(projectDetail($('#projdescription').val())); 
            });
            $('#member').keyup(function(){
                $('lblmember').html(MembersValidation($('#member').val()));
            });
            $('#btnAdd').click(function(){
               $('#btnAdd').html(ValidateDate($('#startD').find(":selected").text())); 
            });
         });
          function isValid(data)
          {
                    data = $('#ProjTitle').val();
                    var  tmpRes=data.replace(/[^A-Za-z ]/g, '');
                    $('#ProjTitle').val(tmpRes);

                    if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                    { 
                        $('#lbltitle').text('Special characters are not allowed');  
                    }
                    if(data.match(/[0-9]/))
                    {
                        $('#lbltitle').text('Numbers are not allowed');
                    }
          }
           function projectDetail(data)
           {
                    data = $('#projdescription').val();
                    var  tmpRes=data.replace(/[^A-Za-z0-9 ]/g, '');
                    $('#projdescription').val(tmpRes);
                    var minLength =200;
                    var remaining = minLength - data.length;
                    $('#lbldescription').html(remaining + "  remaining characters");

                    if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                    { 
                        $('#projdescription').text('Special characters are not allowed');  
                    }
          }
           function MembersValidation(data)
           {
                    data = $('#member').val();
                    var  tmpRes=data.replace(/[^A-Za-z, ]/g, '');
                    $('#member').val(tmpRes);

                    if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                    { 
                        $('#lblmember').text('Special characters are not allowed');
                    }

                    if (data.match(/([0-9])/))
                    {
                    $('#lblmember').text('Numbers are not allowed');
                    }
           }
           function ValidateDate(selectedDate)
           {
               var dt = new Date();
               alert(dt);
               if(selectedDate > dt)
               {
                   alert("Date is not Valid. You are trying to select a date from future ");
               }
           }
        /* Announcements Stars here */
              $(document).ready(function()
             {
                 //add subject
                $('#course').keyup(function(){
                    $('#lblcourse').html(isValid($('#course').val()));
                });
                $('#Class').keyup(function(){
                    $('#lblClass').html(ClassValidation($('#Class').val()));
                });
                $('#smester').keyup(function(){
                    $('#lblSmester').html(smesterValidation($('#smester').val()));
                }); //add subject
                
                $('#commonAnouncement').keyup(function(){
                    $('#lblcommonAnoucement').html(commonAnnouncement($('#commonAnouncement').val()));
                });
                $('#commonDetailAnouncement').keyup(function(){
                     $('#lblcommonDetailAnounce').html(detailAnouncement($('#commonDetailAnouncement').val()));
                });
                
                

//                 $('#btnsubmit').click(function (){ 
//                     var startDate = $('#startDate').val();
//                     var endDate = $('#endDate').val();
//                     if(startDate > endDate)
//                     {
//                         alert("sorry start date is after end  date");
//                         return false;
//                     }
//                     else
//                     {
//                        return false;
//                     }
//                 });
             });
             
              /**************************************************
                               Add subject ended
               **************************************************/
            function isValid(data)
            {
                var courseData = $('#course').val();

                if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                { 
                    var  tmpRes=courseData.replace(/[^A-Za-z0-9 ]/g, '');
                    $('#course').val(tmpRes);
                    $('#lblcourse').text('Special characters are not allowed');  
                }
            }
               function ClassValidation(data)
               {
                    var Classdata = $('#Class').val();

                    if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                    { 
                        var  tmpRes=Classdata.replace(/[^A-Za-z ]/g, '');
                        $('#Class').val(tmpRes);
                        $('#lblClass').text('Special characters are not allowed');
                    }

                    if (data.match(/([0-9])/))
                    {
                         var  tmpRes=Classdata.replace(/[^A-Za-z ]/g, '');
                         $('#Class').val(tmpRes);
                         $('#lblClass').text('Numbers are not allowed');
                    }
               }
               function smesterValidation(data)
               {
                    var smesterdata = $('#smester').val();
                    var  tmpRes=smesterdata.replace(/[^0-9 ]/g, '');
                    $('#smester').val(tmpRes);

                    if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                    { 
                        $('#lblSmester').text('Special characters are not allowed');
                    }

                    if (data.match(/([A-Za-z])/))
                    {
                    $('#lblSmester').text('Alphabets are not allowed');
                    }
              }
              /**************************************************
                               Add subject ended
               **************************************************/
              
              
               /**************************************************
                               Add Anouncement started
               **************************************************/
              
               function commonAnnouncement(data)
               { 
                    var subjectAnnouncementdata = $('#commonAnouncement').val();

                    if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                    { 
                        var  tmpRes=subjectAnnouncementdata.replace(/[^A-Za-z ]/g, '');
                        $('#commonAnouncement').val(tmpRes);
                        $('#lblcommonAnoucement').text('Special characters are not allowed');
                    }

                    if (data.match(/([0-9])/))
                    {
                        var  tmpRes=subjectAnnouncementdata.replace(/[^A-Za-z ]/g, '');
                        $('#commonAnouncement').val(tmpRes);
                        $('#lblcommonAnoucement').text('Numbers are not allowed');
                    }
               }
               function detailAnouncement(data)
               {
                    var deatailData = $('#commonDetailAnouncement').val();
                    var minLength = 200;
                    var remaining = minLength - data.length;
                    $('#lblRemain').html(remaining + "  remaining characters");

                    if (data.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || data.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                    { 
                        var  tmpRes = deatailData.replace(/[^A-Za-z0-9 ]/g, '');
                        $('#commonDetailAnouncement').val(tmpRes);
                        $('#lblcommonDetailAnounce').text('Special characters are not allowed');  
                    }
               }
               /**************************************************
                               Add Anouncement ended
               ***************************************************/
           
        </script>
        <!-- Publications of Researcher START-->
        
    </head>
    <body>
        <?php include 'Related-Data/Researcher/research/editPersonalInfo.php'; ?>
        <?php include 'Related-Data/Researcher/research/queryUserInfo.php'; ?>
        <div class="container" style="
    margin-top: 30px;">
        <div class="row profile" id="admin_profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic" style="">
					<?php
                    	$sql="SELECT * FROM profilephoto WHERE userId_FK = ".$FK;
                        $result= mysqli_query($link,$sql);
                	$row1=mysqli_fetch_array($result);
                        echo '<div class="image-cropper">
                            <a href="" data-toggle="tooltip" title="Profile Photo"><img src="dp/'.$row1['dp_file'].'" class="rounded" /></a>
                                
                        </div>';
                        if(isset($_POST['btn-upload'])){
                            include 'Related-Data/Researcher/uploadDp.php';
                        }
                    ?>
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
                        <?php echo'<h3 style="text-transform: capitalize;">'.$row["profile_name"].'</h3>'?>
					</div>
					<div class="profile-usertitle-job">
						<?php echo'<h4>'.$row["profile_designation"].'</h4>'?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <span class="btn btn-primary btn-file" ><input type="file" class="filestyle" data-classButton="btn btn-primary" name="file"></span>
                        <button type="submit" name="btn-upload" class="btn btn-success btn-file"> Upload</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
                        
                        <li class="active">
                            <a href="#home" data-toggle="tab">
                            <i class="glyphicon glyphicon-home"></i>
                            MY Profile </a>
				        </li>	
							
						
                        <li>
                            <a href="#my_qualifications" data-toggle="tab">
                            <i class="glyphicon glyphicon-picture" data-toggle= "tab"></i>
                            My Qualifications </a>
                        </li>
                        
                        <li>
                            <a href="#my_publications" data-toggle="tab">
                            <i class="glyphicon glyphicon-user"></i>
							My Publications </a>
                        </li>
                        
                        <li>
                            <a href="#students_projects" data-toggle="tab">
                            <i class="glyphicon glyphicon-flag"></i>
							Students Projects </a>
                        </li>
                        
                        <li>
                            <a href="#academic_resources" data-toggle="tab">
                            <i class="glyphicon glyphicon-calendar"></i>
							Academic Resources</a>
                        </li>
                        <li>
                            <a href="#gallery" data-toggle="tab">
                            <i class="glyphicon glyphicon-user"></i>
							Log Out </a>
                        </li>
                    
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php include 'Related-Data/Researcher/researcher_home.php'; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="my_qualifications">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php include 'res_qualification.php'; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="my_publications">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php include 'res_publications.php'; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="students_projects">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php include 'res_studentProject.php'; ?>
                                </div>
                            </div>
                        </div>
                    
                        <div class="tab-pane fade" id="academic_resources">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php include 'res_academicresources.php'; ?>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
		</div>                  
    </div>
        </div>
    </div>
        
        
</div>
    
</body>
</html>