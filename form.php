<!doctype html>
<html>
<head>
<title>Donation Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>
<body style="background-color: #555;">
<div class="container" style="padding-top: 150px;">
    <div class="col-xs-6 col-xs-offset-3" style="background-color: #ff5733;">
        <div class="panel panel-default" style="background-color: #ff5733;">
            <div class="panel-heading" class="single_input wow fadeInUp" data-wow-duration="1s" style="background-color: #ff5733" style="text-align: center;">
            
                <h1 class="text-center">Donation Form </h1>
            </div>
            <div class="panel-body">
            <form action="payment.php" method="post">
                <div class="form-group" >
                    <input type="text" class="form-control"  name="Name" size="20" maxlength="20" autocomplete="off" tabindex="1" placeholder="Your Name" required>
                </div>
                
                <div class="form-group">
                    <input type="Email" class="form-control"  name="Email" maxlength="25" size="12"  autocomplete="off" tabindex="3" placeholder="Email" required >
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="phone" autocomplete="off" tabindex="5"  placeholder="Phone Number" required>
                </div>
               
                <div class="form-group">
                    <input type="number" class="form-control" name="Amount" autocomplete="off" tabindex="5"  placeholder="Amount" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="CheckOut" class="btn btn-success btn-lg">
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
