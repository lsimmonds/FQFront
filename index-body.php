<script src="https://code.jquery.com/jquery.js"></script>
<script src="http://199.195.192.136:3000/assets/fq.js"></script>

<div class="box box-solid">

  <div style="background-image: url(img/fitqik/homepage-bg-image.jpg); color: #FFFFFF; height: 500px; padding-top: 125px; align-content:center" class="jumbotron text-center">
    <h2 style="text-shadow: 0px 0px 5px #666666"><strong>Affordable Fitness. Anytime. Anywhere.</strong></h2>
    <div align="center">
      <div class="form-group">
	<input class="form-control" id="login_name" type="text" placeholder="Name" style="width:300px; margin-bottom:10px; margin-top:20px">
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
  my_callback = function (data) {
    //will return on success: {"id":11,"created_at":"2014-02-02T03:57:55.826Z","updated_at":"2014-02-02T03:57:55.842Z","creator_id":null,"updater_id":null,"email":"test18@leonsimmonds.com"}, typeof: object
    //will return on failure: {"readyState":4,"responseText":"{\"errors\":{\"email\":[\"has already been taken\"]}}","responseJSON":{"errors":{"email":["has already been taken"]}},"status":422,"statusText":"Unprocessable Entity "}, typeof: object
    console.log("my_callback: "+JSON.stringify(data)+", typeof: "+typeof data);
    refuckingsults = data.responseText;
    if ( !data.status || (data.status >= 200 && data.status < 300 || data.status === 304 )) {
      $( "#login_pw_msg" ).toggle(false);
      $( "#login_email_msg" ).toggle(false);
    }
    else {
      console.log("resp status: "+JSON.stringify(data.status));
      console.log("resp status msg: "+JSON.stringify(data.statusText));
      console.log("resp text: "+JSON.stringify(data.responseText));
      console.log("resp JSON: "+JSON.stringify(data.responseJSON));
      if(data.responseJSON["errors"]) { 
	console.log("got errors: "+ JSON.stringify(data.responseJSON["errors"]))
	if(data.responseJSON["errors"]["email"]) {
	  $( "#login_email_msg" ).text(data.responseJSON["errors"]["email"][0]).toggle(true);
	}
        else {$( "#login_email_msg" ).toggle(false);}
	if(data.responseJSON["errors"]["password"]) {
	  $( "#login_pw_msg" ).text(data.responseJSON["errors"]["password"][0]).toggle(true);
	}
        else {$( "#login_pw_msg" ).toggle(false);}
      }
      /*
      if( data.status === 422 ) {
	alert("email address is alreday in use!");
      }
      else {
	alert("This is what I'll do upon failure: "+typeof(data.status)+", "+status);
      }
      */
    }
  }

  myFQ = new FQ();
  var api_results;

  $( "#login_button" ).on("click",function(event) {
    var foo = {};
    foo["email"]                    = $("#login_email").val();
    foo["password"]                 = $("#login_pw").val();
    foo["password_confirmation"]    = $("#login_pw").val();
    var data = {};
    data["api_user"] = foo;
    api_results = myFQ.post("http://199.195.192.136:3000/api/users", data, my_callback);
  })
  .error(function() { alert( "Handler for .error() called." ); });

</script>

