<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PERFUMEWORLD </title>
    <meta charset = " utf - 8 ">
    <meta name = " viewport " content = " width = device - width , initial - scale = 1 ">
    <link rel="stylesheet" href="style.css">
    <link rel = " stylesheet " href = " http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </head>


<body class="body">

   <?php
        if(isset($_POST['btnLogin']))
        {
            $us = $_POST['txtUsername'];
            $us=pg_real_escape_string($conn,$us);
            $pa = $_POST['txtPass'];
            $err="";
            if($us == "")
            {
                $err.="Enter user name please <br/>";
            }
            if($pa == "")
            {
                $err.="Enter password please <br/>";
            }
            if($err != "")
            {
                echo $err;
            }
            else
            {
                /*echo "You are logged in with $us and password $pa";*/
                include_once("connection.php");
                $pass = md5($pa);
                $res1 = pg_query($conn,"SELECT Username, Password,state FROM Customer WHERE Username='$us' AND Password='$pass'") or 
                die(pg_error($conn));
                $row1=pgsql_fetch_array($res1,PGSQL_ASSOC);
                if(pg_num_rows($res1)==1)
                {
                    $_SESSION['us']=$us;
                    $_SESSION['admin']=$row1["state"];
                    echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
                }            
                else
                {
                    echo "You are logged in fail";
                }
            }
        }
    ?> 

<h1>Login</h1>
    <form id="form1" name="form1" method="POST" >
    <div class="row">
        <div class="form-group">				    
            <label for="txtUsername" class="col-sm-2 control-label">Username(*):  </label>
            <div class="col-sm-10">
                <input type="text" name="txtUsername" id="txtUsername" class="form-control" placeholder="Username" value=""/>
            </div>
        </div>  
      
        <div class="form-group">
            <label for="txtPass" class="col-sm-2 control-label">Password(*):  </label>			
            <div class="col-sm-10">
                    <input type="password" name="txtPass" id="txtPass" class="form-control" placeholder="Password" value=""/>
            </div>
	    </div> 
        <div class="form-group" align = "center"> 
            <div class="col-sm-12">
                <input type="submit" name="btnLogin"  class="btn btn-primary" id="btnLogin" value="Login"/>
                <input type="reset" name="btnCancel"  class="btn btn-primary" id="btnCancel" value="Cancel"/>
            </div>  
        </div>
    </div>
    </form>
</body>
</html>