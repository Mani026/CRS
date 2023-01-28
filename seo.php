<?php
require_once "header.php"; 
include 'conn.php';

?>

<!-- main starts here -->
<main id="main">
<div class="form" style="width:60%; margin:auto; padding:5px;">
          <form action="insert.php" name="contactform" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6" style="margin-top:10px;">
                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required>
              </div>
              <div class="form-group col-md-6" style="margin-top:10px;">
                  <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" required>
              </div>
              <div class="form-group col-md-6" style="margin-top:10px;">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group col-md-6" style="margin-top:10px;">
                <input type="text" class="form-control" name="mobile_no" id="Enter Mobile No" placeholder="Enter Mobile" required>
              </div>
            </div> 
            <div class="form-group" style="margin-top:10px;">
              <textarea class="form-control" name="purpose" rows="5" placeholder="Purpose" required></textarea>
            </div>
            
            <div class="text-center">
               <button type="submit" name="seo_form" class="btn btn-primary" style="margin-top:10px;">Send </button>            
           </div>
          </form>
        </div>

</main>
<!-- main ends here -->

<?php
require_once "footer.php"; 
?>