<?php
require_once "header.php"; 
?>





<!-- main starts here -->
<main id="main">
<div class="form"  style="width:60%; margin:auto; padding:5px;">
          <form action="insert.php" name="contactform" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6" style="margin-top:10px;">
                <input type="text" name="first_name" class="form-control" id="name" placeholder="First Name" required>
              </div>
              <div class="form-group col-md-6" style="margin-top:10px;">
                  <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" required>
              </div>
              <div class="form-group col-md-6" style="margin-top:10px;">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group col-md-6" style="margin-top:10px;">
                <input type="text" class="form-control" name="mobile" id="subject" placeholder="Enter Mobile" required>
              </div>
              <div class="form-group col-md-6" style="display:flex; margin-top:10px; margin-left: 10em; width:60%;">
                           <span style="margin:auto;">Development:</span>
                            <select name="development" id=""class="form-control"  >
                            <option value="Website Development">Website Development</option>
                            <option value="App Development">App Development</option>

                            
                          </select>
              </div>
            </div> 

            <div class="form-group" style="margin-top:10px;">
              <textarea class="form-control" name="message" rows="5" placeholder="Short Description" required></textarea>
            </div>
            
            <div class="text-center">
               <button type="submit" name="development_form" class="btn btn-primary" style="margin-top:10px;">Send </button>            
           </div>
          </form>
        </div>

</main>
<!-- main ends here -->

<?php
require_once "footer.php"; 
?>