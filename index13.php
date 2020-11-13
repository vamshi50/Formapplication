<!DOCTYPE html>
<html>
  <head>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="https://mxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script src="https://www.google.com/recaptcha/api.js" async.defer></script>
  </head>
<body>
    <div class="container" style="width: 600px">
     <br/>
     <h3 align="center"></a></h3><br/>
     <br/>
     <div class="panel panel-default">
       <div class="panel-heading">Register Form</div>
       <div class="panel-body">
            <form action="welcome.php" method="post">
              <div class="form-group"> 
                <div class="row">
                  <div class="col-md-6">
                     <label>Name:<span class="text-danger">*</span></label>
                         <input type="text" name="name" id="name" class="form-control"><br>
                         <span id="name_error" class="text-danger"></span>
                  </div>
                </div>
             </div>

             <div class="form-group">
                <label>E-mail Address: <span class="text-danger">*</span></label>
                     <input type="text" name="email" id="email" class="form-control"><br>
                    <span id="email_error" class="text-danger"></span>
             </div>

             <div class="form-group">
                 <label>Contact No: <span class="text-danger">*</span></label>
                        <input type="text" name="contact no" id="contact" class="form-control"><br>
                      <span id="contact_error" class="text-danger"></span>
              </div>

              <div class="form-group">
                 <div class="g-recaptcha" data-sitekey="6LcKPOIZAAAAAJQWQaoSxUI4MsTGCN2BHop05WM6"></div>
                  <span id="captcha_error" class="text-danger"></span>
              </div>

              <div class="form-group">
                 <input type="submit" name="register" id="register" class="btn btn-info" value="Register" />
              </div>
          </form> 
         </div>
        </div>
      </div>
</body>
</html>