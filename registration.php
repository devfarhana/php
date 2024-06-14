<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
</head>
<body>
<form id="myform">
<label for="username">Name: </label>
<input type="text"  id="username" name="username">
<br/>
<label for="email"> email: </label>
<input  id="email" name="email">
<br/>
<label for="coursefee"> coursefee: </label>
<input  id="number" name="coursefee">
<br/>
<label for="password">Password</label>
<input id="password" name="password" />
<br/>
<input type="submit" value="registration">
</form>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#myform" ).validate({
  rules: {
    username: {
      required: true,
      minlength: 8
        },
        email: {
        required: true,
      email: true
    },
    coursefee:{
        required:true,
        min:100

    },
    password: "required",
    password_again: {
      equalTo: "#password"
      
    }
    
  },
  messages:{
        email:"sad"

    }
    
});
</script>
</body>
</html>