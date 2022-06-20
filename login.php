<!DOCTYPE html>    
<html>    
<head>    
    <title>Login page</title>    
    <link rel="stylesheet" type="text/css" href="login.css">   
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>    
<body>    
    <h2>Admin Log-in</h2><br>
    <div class="main">    
    <div class="login">   

    <form name="login">    
        <label>
            <b>User Name:</b>    
        </label>    
        <input type="text" name="Uname" id="Uname" value="TCPL0001" placeholder="Username">    
        <br><br>    
        
        <label>
            <b>Password:</b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" value="tcpl2003" placeholder="Password">    
        <br><br>    
        
        
        <!-- <input type="button" name="btn" id="btn" value="Log In Here"> -->
        <input type="button" name="btn" id="btn" value="submit">
        <br><br>    
        
    </form>
    

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
             window.location.assign("http://localhost/Invoice/dashboard.php");   
           }
           else{
            alert("data not true:");
           }
        });
        });
    </script>
    
</div>  
</div>  
</body>    
</html> 