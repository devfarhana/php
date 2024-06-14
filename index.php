<?php
 include('layout/header.php');
?>

        <div class="section-title">
          <h2>Contact</h2>
         
        </div>

        <div class="row">
		<form action="saveform.php" method="post" role="form" enctype="multipart/form-data">
      <div class="row">
      <div class="form-group col-md-4">
                  <label for="name">Your Name</label>
                  <input type="text" name="fullName" class="form-control" id="name" >
                </div>
                <div class="form-group col-md-4">
                <label for="birthDate">Enter Birthdate</label>
                <input type="date" class="form-control" name="birthDate" id="birthDate" >
                </div>
                <div class="form-group col-md-4">
                <label for="web">Website</label>
              <input type="url" name="web" class="form-control" id="web" >
              
                </div>
               
      </div>
   
              <div class="row">
                <div class="form-group col-md-3">
                  <label for="email">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" >
                </div>
                <div class="form-group col-md-3">
                <label for="cell">Cell Number</label>
                <input type="tel" class="form-control" name="cell" id="cell">
              </div> 
              <div class="form-group col-md-3">
              
              <label for="gender">Gender</label><br>
                                <input type="radio" name="gender" value="male">Male
                                <input type="radio" name="gender" value="female">Female
                                <input type="radio" name="gender" value="other">Other<br>

              </div> 
              <div class="form-group col-md-3">
              <label for="courseFee">Course Fee</label><br>
                                <input type="number" name="courseFee"><br>
              </div>
             
              </div>


			  <div class="row">
                <div class="form-group col-md-3">
                <label for="locDate">Enter Local time</label>
                  <input type="datetime-local" class="form-control" name="locDate" id="locDate" >
                  
                </div>
                <div class="form-group col-md-3">
                <label for="courseChoice">Course Choice</label><br>
                                <input type="checkbox" name="courseChoice[]" value="HTML">HTML
                                <input type="checkbox" name="courseChoice[]" value="CSS">CSS
                                <input type="checkbox" name="courseChoice[]" value="JS">JS
                                <input type="checkbox" name="courseChoice[]" value="PHP">PHP 
                                <input type="checkbox" name="courseChoice[]" value="LARAVEL">LARAVEL <br>
                </div>
               
                <div class="form-group col-md-3"
                <label for="range">Enter Range</label></br>
                <input type="range" name="range" min="2000" max="5000" id="">
               
                
                </div>
                <div class="form-group col-md-3">
                <label for="classTime">Favourite Color </label></br>
                <input type="color" class="" name="color" id="" >
              
                </div>
              
              </div>
        
			  <div class="row">
               
               
                <div class="form-group col-md-3">
                <label for="image">Upload Photo</label><br>
                  <input type="file" name="image"><br>
                </div>
                <div class="form-group col-md-3 field_wrapper">
                <label for="certificate">Upload Certificate</label><br>
                                <a href="javascript:void(0);" class="btn btn-success add_button"><i class="fa-solid fa-plus"></i>Add More</a>
                                <input type="file" name="certificate[]"><br><br>
                </div>
                <div class="form-group col-md-3">
                <label for="courseName">Course Name</label><br>
                                <select name="courseName[]" multiple id="">
                                    <option value="" disabled> --Select Course-- </option>
                                    <option value="HTML"> HTML </option>
                                    <option value="CSS"> CSS </option>
                                    <option value="JS"> JS </option>
                                    <option value="PHP"> PHP </option>
                                </select><br>
               
                </div>
                
                <div class="form-group col-md-3">
                <label for="classTime">Class Time</label><br>
                                <input type="time" name="classTime"><br>
               </div>
              </div>
              <div class="row">
               
               
               <div class="form-group col-md-3">
               <label for="password">Password</label><br>
              <input type="password" name="password"><br>
                               
               </div>
               <div class="form-group col-md-3">
               <label for="confirmPassword">Confirm Password</label><br>
              <input type="password" name="confirmPassword"><br>
               </div>
               <div class="form-group col-md-3">
               <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_PORT'] ?>">
               
               </div>
               
              
             </div>



      
           

              <div class="form-group">
                <div class="col-md-12">
                <label for="description">Description</label><br>
              <textarea name="description" id="description" cols="10" rows="1"></textarea>
                </div>
             
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-outline-success" value="submit" >Submit</button>
                <button type="reset" class="btn btn-outline-danger" value="reset" >Reset</button>

              </div>
            </form>
           
       
        </div>

      </div>
<?php include('layout/footer.php');?>