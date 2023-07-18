<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS | Login</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<div class="container">
      <div class="text-center mt-5">
        <h2>Login</h2>
      </div>

    <div class="row justify-content-center my-5">
      <div class="col-lg-6">
        <form class="form-control shadow-sm">
          <label for="username" class="form-label">Username</label>
          <input type="text" id="username" placeholder="Enter your username" class="form-control mb-2">
          <label for="password" class="form-label">Password</label>
          <input type="password" id="password" placeholder="Enter your password" class="form-control mb-2">

          <div class="mb-2 text-center">
            <input type="submit" value="LOGIN" class="btn btn-primary mt-3 w-100 mb-2">
          </div>
          
          <div class="text-center">
            <p>Not registered? <a href="register." class="link-primary">Create an account</a></p>
          </div>
          
         </form> 
      </div>
    </div>
   
    </div>

    <script src="bootstrap.js"></script>
    <script src="code.jquery.com_jquery-3.6.0.js"></script>
</body>
</html>