<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">

        <form method="post" action="/employees" class="form-horizontal">
            @csrf
            <fieldset>

                <!-- Form Name -->
                <legend>Emplyee Data</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="firstName">First Name:</label>  
                    <div class="col-md-4">
                        <input id="firstName" name="firstName" type="text" placeholder="" class="form-control input-md">
                    
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="lastName">Last Name:</label>  
                    <div class="col-md-4">
                        <input id="lastName" name="lastName" type="text" placeholder="" class="form-control input-md">
                        
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">email:</label>  
                    <div class="col-md-4">
                        <input id="email" name="email" value="" type="email" placeholder="" class="form-control input-md">
                        
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="okOrCancel"></label>
                    <div class="col-md-8">
                        <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success">OK</button>
                        <a href="/employees" id="okOrCancel" name="okOrCancel" class="btn btn-danger">Cancel</a>                        
                    </div>
                </div>

            </fieldset>
        </form>
    </div>

</body>
</html>