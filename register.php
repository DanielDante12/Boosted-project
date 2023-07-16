<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="mb-3" >
        <label for=""><strong>TOPIC one</strong></label>
        <select class="form-select"  onchange="startfunc()" id="myselect">
          <option value="">please select complaint </option>
          <option value="1">complaint One</option>
          <option value="2">complaint Two</option>
          <option value="3">complaint Three</option>
        </select>
      </div>
      
    </div>
    <div class="row my-5 " style=" background-color: antiquewhite; border-radius: 17px;">
        <form style=" display: none;" id="myform" >
          <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">TOPIC</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="">
            </div>
          </div>
          <div class="row mb-3">
            <label for="text" class="col-sm-2 col-form-label" >customer</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="">
            </div>
          </div>
          <div class="mb-3">
            <label for="validationTextarea" class="form-label">Message</label>
            <textarea class="form-control" id="validationTextarea" placeholder="enter your complaint" required></textarea>
            <div class="invalid-feedback">
              this field can not be empty .
            </div>
          </div>
          <button type="submit" class="btn btn-outline-primary " style="margin-left: 400px;">Submit</button>
        </form>
      
    </div>
    <div class="row">
      <div class="mb-3" >
        <label for=""><strong>TOPIC two</strong></label>
        <select class="form-select"  onchange="startfunc()" id="myselect">
          <option value="">please select complaint </option>
          <option value="1">complaint One</option>
          <option value="2">complaint Two</option>
          <option value="3">complaint Three</option>
        </select>
      </div>
    </div>
  </div>
   <script>
    function startfunc(){
     if(document.querySelector('select').value !== ''){
      document.getElementById('myform').style.display ='block';
     }else{
      document.getElementsById('myform').style.display='none';
     }
    }
   </script>
</body>
</html>