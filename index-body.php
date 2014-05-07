<script src="https://code.jquery.com/jquery.js"></script>
<script src="http://199.195.192.136:3000/assets/fq.js"></script>

<div class="box box-solid">

  <div style="background-image: url(img/fitqik/homepage-bg-image.jpg); color: #FFFFFF; height: 500px; padding-top: 125px; align-content:center" class="jumbotron text-center">
    <h2 style="text-shadow: 0px 0px 5px #666666"><strong>Affordable Fitness. Anytime. Anywhere.</strong></h2>
    <div align="center">
      <span class="alert alert-danger-error" id="login_fail_msg" style="display: none">Something may have gone wrong</span> <!-- Added by LS -->
      <div class="form-group">
	<input class="form-control input-lg" id="login_name" type="text" placeholder="Name" style="width:300px; margin-bottom:10px; margin-top:20px">
	<span class="alert alert-error" id="login_name_msg" style="display: none">Something may have gone wrong</span> <!-- Added by LS -->
      </div>
      <div class="form-group">
	<input class="form-control input-lg" id="login_email" type="text" placeholder="Email Address" style="width:300px;">
	<span class="alert alert-danger-error float-right" id="login_email_msg" style="display: none">Something may have gone wrong</span> <!-- Added by LS -->
      </div>
      <div class="form-group">
	<input class="form-control input-lg" id="login_pw" type="password" placeholder="Password" style="width:300px;">
	<span class="alert alert-danger-error float-right" id="login_pw_msg" style="display: none">Something may have gone wrong</span> <!-- Added by LS -->
      </div>
      <div class="form-group">
	<button class="btn-lg bg-olive btn-flat margin" id="login_button" style="width:300px">Register Now</button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="box-body" style="padding:40px">
      <h4>Welcome to FitQik</h4>
      <h3>FitQik effortlessly connects you to fitness trainers and experts so you can get fit and stay motivated wherever you are in the world.</h3>

      <h4>How it works</h4>
      <h3>It's simple...</h3>
    </div>
  </div>

</div>

<!-- All below added by LS -->
<script>
  after_signup = function (data) {
    //will return on success: {"id":11,"created_at":"2014-02-02T03:57:55.826Z","updated_at":"2014-02-02T03:57:55.842Z","creator_id":null,"updater_id":null,"email":"test18@leonsimmonds.com"}, typeof: object
    //will return on failure: {"readyState":4,"responseText":"{\"errors\":{\"email\":[\"has already been taken\"]}}","responseJSON":{"errors":{"email":["has already been taken"]}},"status":422,"statusText":"Unprocessable Entity "}, typeof: object
    console.log("after_signup: "+JSON.stringify(data)+", typeof: "+typeof data);
    if ( !data.status || (data.status >= 200 && data.status < 300 || data.status === 304 )) {
      $( "#login_name_msg" ).toggle(false);
      $( "#login_pw_msg" ).toggle(false);
      $( "#login_email_msg" ).toggle(false);
      var user_data = { "email": $( "#login_email" ).val(), "password": $( "#login_pw" ).val() };
      fq_login(user_data);
    }
    else {
      console.log("resp status: "+JSON.stringify(data.status));
      console.log("resp status msg: "+JSON.stringify(data.statusText));
      console.log("resp text: "+JSON.stringify(data.responseText));
      console.log("resp JSON: "+JSON.stringify(data.responseJSON));
      if(data.responseJSON["errors"]) { 
	console.log("got errors: "+ JSON.stringify(data.responseJSON["errors"]))
	if(data.responseJSON["errors"]["name"]) {
	  $( "#login_name_msg" ).text(data.responseJSON["errors"]["name"][0]).toggle(true);
	}
	else {$( "#login_pw_msg" ).toggle(false);}
	if(data.responseJSON["errors"]["email"]) {
	  if(data.responseJSON["errors"]["email"][0] == "has already been taken" ) {
	    var user_data = { "email": $( "#login_email" ).val(), "password": $( "#login_pw" ).val() };
	    fq_login(user_data);
	  }
	  else {
	    $( "#login_email_msg" ).text(data.responseJSON["errors"]["email"][0]).toggle(true);
	  }
	}
	else {$( "#login_email_msg" ).toggle(false);}
	if(data.responseJSON["errors"]["password"]) {
	  $( "#login_pw_msg" ).text(data.responseJSON["errors"]["password"][0]).toggle(true);
	}
	else {$( "#login_pw_msg" ).toggle(false);}
      }
    }
  }

  after_login = function (data) {
    console.log("after_login: "+JSON.stringify(data)+", typeof: "+typeof data);
    if ( !data.status || (data.status >= 200 && data.status < 300 || data.status === 304 )) {
      console.log("success: "+JSON.stringify(data));
      sessionStorage.token=data.token;
      sessionStorage.email=data.email;
      sessionStorage.name=data.name;
      window.location.href = "index-logged-in.php";

    }
    else {
      console.log("resp status: "+JSON.stringify(data.status));
      console.log("resp status msg: "+JSON.stringify(data.statusText));
      $( "#login_fail_msg" ).text("Login failed!").toggle(true);
    }
  }

  fq_login = function(user_data) {
    login_data = { "api_user": { "email": user_data["email"], "password": user_data["password"] } };
    console.log("fq_login: login_data - "+JSON.stringify(login_data));
    api_results = myFQ.post("http://199.195.192.136:3000/api/users/sign_in", login_data, after_login);
    console.log("fq_login: api_results - "+JSON.stringify(api_results));
  }

  myFQ = new FQ();
  var api_results;

  $( "#login_button" ).on("click",function(event) {
    var data = {"api_user": {}};
    data["api_user"]["name"]                  = $("#login_name").val();
    data["api_user"]["email"]                 = $("#login_email").val();
    data["api_user"]["password"]              = $("#login_pw").val();
    data["api_user"]["password_confirmation"] = $("#login_pw").val();
    api_results = myFQ.post("http://199.195.192.136:3000/api/users", data, after_signup);
  })
  .error(function() { alert( "Handler for .error() called." ); });

</script>

