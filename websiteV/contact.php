
<?php include 'headers.php';?>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $subErr = $msgErr = "";
$name = $email =  $subject = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["subject"])) {
    $subErr = "Subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
  }

  if (empty($_POST["message"])) {
    $msgErr = "Comment is required";
  } else {
    $comment = test_input($_POST["message"]);
  }

  
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!--Section: Contact v.2-->
<style>
    body{
        padding:20px;
        height:100vh!important;
    }
</style>
<section class="mb-4">
     <center><img class="mb-4" src="/websiteV/favicon.ico" alt="" width="72" height="57"></center>
    
    <h3 class="h1-responsive font-weight-bold text-center my-4">Contact us</h3>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">
        Do you have any questions? Please don't hesitate to contact us directly.
        Our team will come back to you within
        a matter of hours to help you.
    </p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form type="submit" id="contact-form" name="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
         
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control" >
                            <label for="name" class="">Your name</label>
                            <span class="error">* <?php echo $nameErr;?></span>
                        </div>
                    </div>
                   
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control" >
                            <label for="email" class="">Your email</label>
                            <span class="error">* <?php echo $emailErr;?></span>
                        </div>
                    </div>
                

                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control" >
                            <label for="subject" class="">Subject</label>
                            <span class="error">* <?php echo $subErr;?></span>
                        </div>
                    </div>
                </div>
        
                <div class="row">

                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" ></textarea>
                            <label for="message">Your message</label>
                            <span class="error">* <?php echo $msgErr;?></span>
                        </div>

                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-12">
                    <div class="text-center text-md-left">
                        <button class="btn btn-primary" onclick="document.getElementById('contact-form').submit();"> Send</button>
                        
                    </div>
                    <div class="status"></div>
                </div>
                </div>
            </form>

           
        </div>
     

    
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Panji, GA 94126, GOA</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+91 97 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@zerocoolArch.com</p>
                </li>
            </ul>
        </div>
       

    </div>

</section>
<!--Section: Contact v.2-->

<?php include 'footer.php';?>