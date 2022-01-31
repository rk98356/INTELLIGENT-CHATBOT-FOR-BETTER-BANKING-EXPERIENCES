<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  <style>
    body{ 
        background-color:#1E6466;  /* For browsers that do not support gradients */
 //     background-image: linear-gradient(45deg,rgb(128, 128, 255) , rgb(0,0,128)); /* Standard syntax (must be last) */
	}

	p{
	   text-align:justify;
        color:#373737;
	}
	#ss{
		text-align: right;
	}
	h1{
	   text-align:center;
	   color:white;
	   font-family: 'Lobster', cursive;
	}
	input{
		text-align:left;
	}
	.p1{
	   text-align:justify;
	}

	#a{
		display:block;
	}
	#b{
		display:none;
	}
	#c{
		display:none;
	}

  h4{ text-align: center; 

   font-family: 'Bree Serif', serif;

  margin-top: 5px;

  background-color:#fff;  

  padding: 7px;

  font-size: 30px;

  position:absolute;

  top:-30px;

  border-radius:10px;

  border:2px solid rgb(0,0,102);

  padding-left: 20px;

  padding-right: 20px; 

  }
  </style>
<script type="text/javascript">
    function preventBack() { window.history.forward(); }
    setTimeout("preventBack()", 0);
    window.onunload = function () { null };
</script>
  
   </head>
   <body>
     <div class="container-fluid">
	    <div class="row" style="margin-top:50px;">
		   <div class="col-sm-2"></div>
		   <div class="col-md-8">
		      <div class="row">
			     <div class="col-sm-5" style="background:#1E6466; color:#fff; min-height: 470px; padding:20px; ">
					<div>
						<p style="text-align: center;"><img src="clo.gif" style="height:250px;width:280px; ;background: white;padding:2px; " class="img-circle" ></p>
					</div>
					  <p style="text-align:justify;font-family:sans-serif;color:white;font-size:17px;" > 
                      <b>RHS BANK</b> allows a user to conduct financial transactions via the Internet. Online banking is also known as Internet banking or web banking. Online banking offers customers almost every service traditionally available through a local branch including deposits, transfers, and online bill payments.
                      </p>
					  <u style="text-align:justify;font-family:sans-serif;color:white;font-size:17px;">Advantages of Online Banking System </u>
						<ul style="text-align:justify;font-family:sans-serif;color:white;font-size:17px;">	
							<li>Pay bills online</li>
							<li>Access your account from any where</li>
							<li>Transfer money</li>
							<li>Privacy and security concerns</li>
						</ul>
						<br/><br/>
					
				 </div>
				 <div class="col-md-1"></div>
			     <div class="col-sm-6" style="background:white; min-height: 470px; border:2px solid green; border-radius:0px 10px 10px 0">
			     	<form method="post" action="login_db.php" id="login" name="login">

                         <h4>Log-in</h4>
						 <a href="register.php">
						 <input type="button" class="btn pull-right" name="sup" value="Sign Up"  style="background:#4e83df; margin-top:5px;padding:2px; font-size:20px; color:white; width:25%;"/><br/>
						 </a>

                         <br/><br/>

                         <label style="margin-top:10px; margin-bottom:0px; font-size: 20px;" >UserName</label><br/>

                         <br/>

                        <div class="input-group">

                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                            <input type="email" name="username" id="username" class="form-control" placeholder="Username"  style="border:0px; border-bottom: 2px solid green;" >

                        </div><br/>

                        <label style="margin-top:10px; margin-bottom:0px; font-size: 20px;">Password</label><br/><br/>

                        <div class="input-group">

                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

                            <input type="password" name="password" id="password" class="form-control"  placeholder="******" style="border:0px; border-bottom: 2px solid green;">

                        </div><br/><br/>

                        <p style="float: left;"><input type="checkbox">&ensp; Keep me logged in</p><br/><br/>
						
						<tr><td colspan="2"><span id="errormsg" style="color:red;"></span></td></tr>
						
                        
						<input type="submit" name="submit" value="Login" class="btn" onclick="clk()" style="background:#4e83df; color:#fff; width:25%;"/>

                       <br/><br/>

                        <p id="ss">

                            <span><a href=""><u>Forgot Password?</u></a></span></p>

                    </form>
				 </div>
			  </div> 
		   </div>
		   <div class="col-sm-2"></div>
		</div>
	 </div>
	 <script>

        function clk()
        {
            //alert(1);
			var user = document.getElementById('username').value;
            var pass = document.getElementById('password').value;
            var mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
            if(user=="" || pass=="")
            {
                //alert(1);
                document.getElementById("errormsg").innerHTML = "*Please fill all the required fields";
            }
			
            else if(!user.match(mail))
            {
                alert(1);
                document.getElementById("errormsg").innerHTML = " Invalid Email-Id";
            }
			
			

			
        }
	</script>
    <script>
  window.watsonAssistantChatOptions = {
      integrationID: "f631b1f6-bb7a-45cd-8ffb-bec2f53cc29d", // The ID of this integration.
      region: "au-syd", // The region your integration is hosted in.
      serviceInstanceID: "a3b57741-d012-461f-a27e-45093497a82e", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
   </body>
</html>
