<?php
require_once "header.php"; 
?>

<!-- main starts here -->
<main id="main">
<div class="form" style="width:60%; margin:auto; padding:5px;">
          <form action="insert.php" name="contactform" method="post" role="form" class="php-email-form">
            <div class="row">
             
              <div class="form-group col-md-6" style="margin-top:10px;">
                <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required>
              </div>

              <div class="form-group col-md-6" style="margin-top:10px;">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              
              <div class="form-group col-md-6" style="margin-top:10px;">
                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile" required>
              </div>
             
              <div class="form-group col-md-6" style="margin-top:10px;">
                  <input type="text" name="address" id="address" class="form-control" placeholder="Address" required>
              </div>
             
             
             
              <div class="form-group col-md-6" style="display:flex; margin-top:10px;  width:100%;">
                           <span style="margin:auto; width:40%;">Select Courses:</span>
                            <select name="courses" id="courses" class="form-control"  >
                            <option value="Java">Java</option>
                            <option value="Python">Python</option>
                            <option value="ReactJS">ReactJS</option>
                            <option value="PHP">PHP</option>


                            
                          </select>
              </div>

              <div class="form-group col-md-6" style="display:flex; margin-top:10px;  width:100%;">
                           <span style="margin:auto; width:40%;">Occupation:</span>
                            <select name="occupation" id="occupation" class="form-control"  >
                            <option value="student">Student</option>
                            <option value="working professional">Working Professional</option>


                            
                          </select>
              </div>
            </div> 

            <div class="form-group" style="margin-top:10px;">
              <textarea class="form-control" name="message" rows="5" placeholder="Enter your Message...." required></textarea>
            </div>
            
            <div class="text-center">
               <button type="submit" name="training_form" class="btn btn-primary" style="margin-top:10px;">Send </button>            
           </div>
          </form>
        </div>

</main>
<!-- main ends here -->

<?php
require_once "footer.php"; 
?>