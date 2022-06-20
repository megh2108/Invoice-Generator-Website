<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <title>Welcome</title>

    <style>
        .container{
            width: auto;
            margin-top: 200px;
            margin-left: 600px;
            overflow: hidden;  
        }
        body{
            background: url("xyz.jpg") ;
            background-size: cover;
            background-repeat: no-repeat;

        }
        #btn{  
              
            margin-left: 150px;  
             
        }


    </style>

</head>
<body>
    <div class="container" >
        <div class="row">
          
            <div class="col-lg-5 bg-dark p-2 text-light">
            <h1><i class="fa fa-user-o"></i> Signin</h1>
            <hr>
            <form class="signin_form">
                <div class="form-group mb-3">
                    <label><i class="fa fa-user-circle-o"></i> Username</label>
                    <input type="text" name="username" class="form-control signin_user" id="Uname" value="TCPL0001">
                </div>

                <div class="form-group mb-3">
                    <label><i class="fa fa-key"></i> Password</label>
                    <input type="password" name="password" class="form-control signin_pass"  id="Pass" value="tcpl2003">
                </div>

                <button type="button" class="btn btn-danger signin-btn" id="btn" value="submit" >Sign in</button>
            </form>
            </div>
        </div>
    </div> 


    <script>
        $('#btn').click(function()
        {
            let uname=$('#Uname').val();
            let pwd=$('#Pass').val();
        $.ajax(
        {
            method: "POST",
            url:"http://localhost/Invoice/valid.php",
            
            data:
            {
                name: uname,
                password: pwd 
            }
        })
        .done(function(msg){
        //    window.location.assign("http://localhost/internship/invoice/bank registration form.html");
           //alert("data:"+msg);
           console.log(msg);
           if(msg=="true")
           {
            // alert("data  true:");
             window.location.assign("http://localhost/Invoice/dashboard.php");   
           }
           else{
            alert("data not true:");
           }
        });
        });
    </script>
</body>
</html>