<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Forms</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" type="text/css" href="loginStyle.css">
</head>
<body>
<h1 align="center">Information Application</h1>
<h1 style="margin: 3.25% 0 3.25% 0">Forms Page</h1>

<hr> <!-- line -->

<nav class="navbar navbar-default navbar-static-top">
    <div class="conainer-fluid">
        <div>
            <ul class="nav navbar-nav">
                <li><a href="firstContent.php">Home</a></li>
                <li class="active"><a href="forms.php">Forms</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div id=col1 class="col-md-3" style="background-color: white">On this page you can edit your personal information.</div>
        <div id=fill class="col-md-1"></div>
        <div id=col2 class="col-md-8" style="background-color: white;padding-bottom: 20px;">


            <form action ="updateInfo.php" method="post">
                <br>
                <p style="text-align:center; color:black"> New phone number: <input type="text" name="phonenum"/></p>

                <p style="text-align:center;"> New Address: </p>
                <p style="text-align:center"><textarea rows="2" cols="50" name="address"/></textarea></p>

                <p style="text-align:center;"> Bio: </p>
                <p style="text-align:center"><textarea rows="5" cols="50" name="bio"/></textarea></p>

                <p style="text-align:center"><input type="submit" name="submit" id="update" value="Submit"/></p>
            </form>


        </div>
        <div class="row">
            <div id=footer class="col-md-11" style="background-color: gainsboro; height: 50px">(C) Zeta 2016</div>
            <div class="col-md-1"></div>
        </div>

    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- <script src="js/bootstrap.min.js"></script> -->
</body>
</html>