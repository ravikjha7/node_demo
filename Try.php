<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./images/wluglogoIcon.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <style>
/*    *,*/
/**:before,*/
/**:after {*/
/*    box-sizing: border-box;*/
/*}*/
              body {
      background: #67B26F;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #4ca2cd, #67B26F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        height: 100vh;
        font-family: 'Montserrat', sans-serif;
        background-size: cover;
        /*width:100%;*/
      }
 
      .container {
          max-width:38em;
          margin: 0em auto;
        position: absolute;
        transform: translate(-50%,-50%);
        top: 50%;
        left: 50%;
      }
 
      form {
        margin-top:790px;
        /*background: white;*/
        background-color: rgba(255, 255, 255, .15);  
        backdrop-filter: blur(55px);
        margin-bottom:100px;
        padding: 3em;
        height: 1000px;
        width: 500px;
        border-radius: 20px;
        border-left: 1px solid white;
        border-top: 1px solid white;
        /*backdrop-filter: blur(6px);*/
        box-shadow: 20px 20px 40px -6px rgba(0,0,0,0.2);
        text-align: center;
        // position: relative;
        transition: all 0.2s ease-in-out;
 
        p {
          font-weight: 500;
          color: #fff;
          opacity: 0.7;
          font-size: 1.4rem;
          margin-top: 0;
          margin-bottom: 60px;
          text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }
 
        a {
          text-decoration: none;
          color: #ddd;
          font-size: 12px;
 
 
        }
 
        .centimg {
    display: flex;
    flex-direction: column;
    justify-items: center;
    align-items: center;
  }
 
        input {
          background: transparent;
          width: 200px;
          padding: 1em;
          margin-bottom: 2em;
          border: 1px solid transparent;
          border-left: 1px solid $white;
          border-top: 1px solid $white;
          border-radius: 5000px;
          backdrop-filter: blur(5px);
          box-shadow: 4px 4px 60px rgba(0,0,0,0.2);
          color: #fff;
          font-family: Montserrat, sans-serif;
          font-weight: 500;
          transition: all 0.2s ease-in-out;
          text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
 
         rgba(0,0,0,0.2);
          &:hover{
             border:1px solid black;
          }
          }
 
          &[type="email"],
          &[type="password"] {
 
            &:focus {
              background: rgba(255,255,255,0.1);
              box-shadow: 4px 4px 60px 8px rgba(0,0,0,0.2);
            }
          }
 
          &[type="button"] {
            margin-top: 10px;
            width: 150px;
            font-size: 1rem;
 
 
          }
        }
 
      }
 
      ::placeholder {
        font-family: Montserrat, sans-serif;
        font-weight: 400;
        color: #fff;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.4);
      }
 
      .drop {
        background: $white;
        backdrop-filter: blur(10px);
        border-radius: 10px;
        border-left: 1px solid $white;
        border-top: 1px solid $white;
        box-shadow: 10px 10px 60px -8px rgba(0,0,0,0.2);
        position: absolute;
        transition: all 0.2s ease;
 
        &-1 {
          height: 80px;
          width: 80px;
          top: -20px;
          left: -40px;
          z-index: -1;
        }
 
        &-2 {
          height: 80px;
          width: 80px;
          bottom: -30px;
          right: -10px;
        }
 
        &-3 {
          height: 100px;
          width: 100px;
          bottom: 120px;
          right: -50px;
          z-index: -1;
        }
 
        &-4 {
          height: 120px;
          width: 120px;
          top: -60px;
          right: -60px;
        }
 
        &-5 {
          height: 60px;
          width: 60px;
          bottom: 170px;
          left: 90px;
          z-index: -1;
        }
      }
 
      .require {
    color: red;
    text-align : left;
    margin-left: 2%;
}
 
      a,
      input:focus,
      select:focus,
      textarea:focus,
      button:focus {
          outline: none;
      }
 
      h2{
        color : black;
        text-align : left;
        margin-left : 2%;
      }
 
     
 
input{
    width: 80%;
    padding: 1em;
    line-height: 1.4;
    background-color: #f9f9f9;
    border: 1px solid #e5e5e5;
    border-radius : 25px;
    
}
 
input:focus {
    outline: 0;
    border-color: #2f00ff;
}
 
input:focus+.input-icon i {
    color: #2f00ff;
}
 
input:focus+.input-icon:after {
    border-right-color: #2f00ff;
}
 
 
 
.input-group {
    margin-bottom: 1em;
    zoom: 1;
}
 
.input-group:before,
.input-group:after {
    content: "";
    display: table;
}
 
.input-group:after {
    clear: both;
}
 
.input-group-icon {
    position: relative;
}
 
.input-group-icon input {
    padding-left: 4.4em;
}
 
.input-group-icon .input-icon {
    position: absolute;
    top: 1em;
    left: 2%;
    width: 3.4em;
    height: 3.4em;
}
 .selectt {
            width: 95%;
            padding: 1em;
            line-height: 1.4;
            background-color: #f9f9f9;
            border: 1px solid #e5e5e5;
            border-radius: 25px;
            -webkit-transition: 0.35s ease-in-out;
            -moz-transition: 0.35s ease-in-out;
            -o-transition: 0.35s ease-in-out;
            transition: 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
            margin-left: 1px;
            text-align: left;
 
        }
        .btnn:focus {
    color: #2f00ff;
}

.btn {
    background: #3498db;
    background-image: -webkit-linear-gradient(top, #3498db, #3cb0fd);
    background-image: -moz-linear-gradient(top, #3498db, #3cb0fd);
    background-image: -ms-linear-gradient(top, #3498db, #3cb0fd);
    background-image: -o-linear-gradient(top, #3498db, #3cb0fd);
    background-image: linear-gradient(to bottom, #3498db, #3cb0fd);
    -webkit-border-radius: 28;
    -moz-border-radius: 28;
    border-radius: 28px;
    font-family: Arial;
    color: #ffffff;
    font-size: 20px;
    /* background: #3498db; */
    width: 25%;
    /*margin-left: 38%;*/
    padding: 10px 20px 10px 20px;
    text-decoration: none;
  }
  
  .btn:hover {
    background: #3cb0fd;
    background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
    background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
    text-decoration: none;
  }


        @media only screen and (max-width: 540px) {
    body {
        /*overflow: hidden;*/
      /*height: 100%;*/
      /*width: 100%;*/
    text-align:center;
    align-items : center;
    align-self : center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    margin-left:0px;
    }
    .btn {
        font-size : 100%;
        text-align : center;
        align-items : center;
        align-self : center;
        padding: 10px 20px 10px 20px;
        width: 35%;
        /*height: 100vh;*/
    }
    form {
        position: relative;
        height : 80%;
        width: 70%;
        margin-top: 270%;
        /*margin-right :20%;*/
        /*margin:left:00%;*/
        
    }
    .container {
        /*width: 85%;*/
        /*margin:left:10%;*/
    }
    .selectt {
            width: 110%;
            padding: 1em;
            line-height: 1.4;
            background-color: #f9f9f9;
            border: 1px solid #e5e5e5;
            border-radius:25px;
            -webkit-transition: 0.35s ease-in-out;
            -moz-transition: 0.35s ease-in-out;
            -o-transition: 0.35s ease-in-out;
            transition: 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
            margin-left: 0px;
            justify-content: right;
            text-align: right;
 
    }
   
    
}
    </style>
    <title>Alumni Form</title>
  </head>
  <body>
    <div class="container">
      <form method="POST" action="Alumni_form.php" enctype="multipart/form-data">
      <div class="centimg">
                <img src="./images/wlug_black_logo.png" alt="" style="width: 250px;">
                <h1 class="formtitle">WLUG Alumni Form</h1>
                <hr style="color: black; width: 100%;height: 1px;">
                <p class="info">We are collecting the data of the Alumni Members of WLUG inorder to update the Alumni Info on the club's website</p>
            </div>
          <div class="row">
          <p class="require">* fields are mandatory</p>
          <h2>Contact Information</h2>
                <div class="input-group input-group-icon">
                    <input type="text" name="name" placeholder="FirstName   LastName &#x2a;" required  />
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="numeric" name="contact" required  placeholder="Mobile Number &#x2a;" />
                    <div class="input-icon"><i class="fas fa-phone-alt"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="email"  name="email" placeholder="Email Address &#x2a;" required />
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="number" name="passout_year"  placeholder="passout year e.g 2019 &#x2a;" required />
                    <div class="input-icon"><i class="fas fa-graduation-cap"></i></div>
                </div>
          <h2>Personal Information</h2>
                <div class="input-group input-group-icon">
                    <input type="text" name="insta" placeholder="https://www.instagram.com/palak_shravagi" />
                    <div class="input-icon"><i class="fab fa-instagram"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="text" name="linkedin" placeholder="https://www.linkedin.com/in/palak-shravagi-66a284194/ &#x2a;" required />
                    <div class="input-icon"><i class="fab fa-linkedin-in"></i></div>
                </div>
<div class="input-group input-group-icon">
  
                    <select name="post" required class="selectt">
   <option >&nbsp &nbsp &nbsp &nbsp &nbsp &nbspSelect The Post you shouldered during Main Board&#x2a</option>
                        
                        
 
                        <option value="President">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPresident</option>
                        <option value="Vice President">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspVice President</option>
                        <option value="Secretary">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSecretary</option>
                        <option value="Program Director">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspProgram Director</option>
                        <option value="Club Service Director">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspClub Service Director</option>
                        <option value="Aptitude Head">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAptitude Head</option>
                        <option value="Public Relational Officer">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPublic Relational Officer</option>
                        <option value="Design Head">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDesign Head</option>
                        <option value="Developer">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDeveloper</option>
                        <option value="Revenue Manager">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRevenue Manager</option>
                        <option value="Editor">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEditor</option>
                        <option value="Technical Advisor">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTechnical Advisor</option>
                        <option value="Member">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMember</option>
                        
                    </select>
                    <div class="input-icon"><i class="fas fa-id-badge"></i></div>
                </div>
                <div class="input-group input-group-icon">
                <input type="file" name="pic" id="img" onchange="validateImageAndSize()" accept="image/png,image/jpeg,image/bmp,image/gif">
                <br>
                <label>Image size should be less than 512 KB and 560 * 560 as a dimensions. (Image name should be first&lastname.)</label>
                <div class="input-icon"><i class="far fa-image"></i></div>
                <br>
            </div>  

            <div class="input-group btnn">
                <center>
                    <input type="submit" class="btn" name="register" value="Submit" />
                </center>
            </div>
 
          </div>
      </form>
    </div>
  </body>
    <script type="text/javascript">
function validateImageAndSize() {
    // var formData = new FormData(); 
    var file = document.getElementById("img").files[0]; 
    // formData.append("Filedata", file);
    
    var t = file.type.split('/').pop().toLowerCase(); 
    if (t != "jpeg" && t != "jpg" && t != "png") {
        alert('Please select a valid image file');
        document.getElementById("img").value = ''; 
        return false; 
    } 
    
    var fsize = (file.size / 1024 / 1024).toFixed(2); 
    if (fsize > 0.512 ) {
        alert('Max Upload size is 512 KB only'); 
        document.getElementById("img").value = '';
        return false; 
    } 
    return true;
}
</script>
</html>
<?php


include 'databaseconnect.php';
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $post = $_POST['post'];
    $passoutyr = $_POST['passout_year'];
    $contact = $_POST['contact'];
    
    // Name Validation
    if(preg_match("/^([a-zA-Z' ]+)$/",$name)){  
      
    } 
    else {
        echo "<script> alert('Please Enter Your Name Only!!!'); </script>";
        return;
    }
    //contact validation
    $contact = preg_match("/^.{10}$/", $contact);
    if (!$contact) {
        echo "<script> alert('Please enter valid phone number.'); </script>";
        return;
    }
    // Email Validation
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script> alert('Please enter valid Email.'); </script>";
        return;
    }
    
    $insta = $_POST['insta'];
    $linkedin = $_POST['linkedin'];
    $pic = $_FILES['pic']['name'];
    $image_tmp = $_FILES['pic']['tmp_name'];

    require_once 'linkedinURLValidator.php';


$validator = new linkedinURLValidator($linkedin);

$result = $validator->validate();


if(!$result['valid']){
    echo "<script> alert('Please Enter Valid LinkedIn URL !!!'); </script>";
    return;
}
    $iparr = explode(" ", $name);
    $new_name = $iparr[0]."_".$iparr[1].".jpg";
    
   $target_original = "./images/members/".basename($new_name);

    $to = 'palak03shravagi@gmail.com';
    $subject = "form has been submitted by " . $name;
    $message = '' . extract($_POST);
    $from = $email;
    $headers = "From:" . $from;
    $rfrom = "palak03shravagi@gmail.com";
    $rto = $email;

    $rsubject = "Successfully Submission of Profile Update Form";
    $rmessage = "hello " . $name . ",
Thank You for Submitting this Form, Your response has been recorded successfully. If you have any issues with form feel free to contact us.

    Regards,
    
    WLUG Developers,
    WCE Sangli";

    $rheaders = "From:" . $rfrom;


    if (move_uploaded_file($_FILES['pic']['tmp_name'], $target_original)) {
      $msg = "Image uploaded successfully";
    //   echo "<script> alert('Done!!!'); </script>";
      
        }
    else {
        echo "<script> alert('Please Upload Your Pic!!!'); </script>";
        return;
    }

    if ($post == "President") {
        $priority = 1;
    } elseif ($post == "Vice President") {
        $priority = 2;
    } elseif ($post == "Secretary") {
        $priority = 3;
    } elseif ($post == "Program Director") {
        $priority = 4;
    } elseif ($post == "Club Service Director") {
        $priority = 5;
    } elseif ($post == "Aptitude Head") {
        $priority = 6;
    } elseif ($post == "Public Relational Officer") {
        $priority = 7;
    } elseif ($post == "Design Head") {
        $priority = 8;
    } elseif ($post == "Developer") {
        $priority = 9;
    } elseif ($post == "Revenue Manager") {
        $priority = 10;
    } elseif ($post == "Editor") {
        $priority = 11;
    } elseif ($post == "Technical Advisor") {
        $priority = 12;
    } elseif ($post == "Member") {
        $priority = 13;
    } else {
        $priority = 0;
    }

    //$con = mysqli_connect("localhost","root","","wlug");
    $id = rand(2000, 20000);
    $str = explode(" ", $name);
    $username = $str[0] . rand(1000, 4000);
    
    
    
    $sql="select * from  Alumni_data where (email='$email');";
    $result = mysqli_query($db,$sql);
        if(mysqli_num_rows($result)) {
            echo "<script> alert('You Have Already Submitted The Form!!!'); </script>";
            return;
        }
    
    $query = "insert into Alumni_data(id,name,post,passout_year,contact_no,email,instagram,linkedin,img,priority)  values ('$id','$name','$post','$passoutyr','$contact','$email','$insta','$linkedin','$pic','$priority')";

    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    //        $res = "select";
    //echo "";
    if ($result === TRUE) {
        echo "<script> alert('Form Submitted SuccessFully!!!'); </script>";
    } else {
        echo "<script>alert('Sorry, There is Some Problem in Uploading The File!!!');</script>";
    }
    mail($to, $subject, $message, $headers);
    mail($rto, $rsubject, $rmessage, $rheaders);
}
// compression of images 

/* $valid_ext = array('png','jpeg','jpg');
                
                			
                	   $photoExt1 = @end(explode('.', $image_tmp)); // explode the image name to get the extension
                	   $phototest1 = strtolower($photoExt1);
                			
                	   $new_profle_pic = time().'.'.$phototest1;
                        $location = "images/".$new_profle_pic;
                
                     function compress_image($source_url, $destination_url, $quality) {
                
                		$info = getimagesize($source_url);
                
                    		if ($info['mime'] == 'image/jpeg')
                        			$image = imagecreatefromjpeg($source_url);
                
                    		elseif ($info['mime'] == 'image/gif')
                        			$image = imagecreatefromgif($source_url);
                
                   		elseif ($info['mime'] == 'image/png')
                        			$image = imagecreatefrompng($source_url);
                
                    		imagejpeg($image, $destination_url, $quality);
                		return $destination_url;
                	}
                     compress_image($image_tmp, $location, 60);
                	
                	
                	
                	*/
?>