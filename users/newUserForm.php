<html>
<head>
  <!--script src="../node_modules/jquery/dist/jquery.js"></script-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
  <link href="uikit/dist/css/uikit.css" rel="stylesheet" type="text/css" />
  <script src="uikit/dist/js/uikit.js"></script>
  <script src="uikit/dist/js/uikit-icons.min.js"></script>
</head>
<body style="background-color:#f8f8f8">

<div style="height:70px">
</div>
<div uk-grid>
	<div class="uk-card uk-card-default uk-card-body" style="margin-left:25%;width:50%">
		<form name="userList" id="userForm" class="uk-margin-left">
		  <h3 class="uk-h3 uk-align-center">Insert User Details</h3>
		  
		  <div class="uk-form-label">
			<label for="name">Name:</label>
		  </div>
		  <div class="uk-inline">
			<span class="uk-form-icon" uk-icon="icon: user"></span>
			<input type="text" name="name" class="uk-input uk-form-width-large" pattern="^@[A-Za-z0-9_]{1,15}$" placeholder="User Name" autofocus required title="Your Name" />
		  </div>
		  <div class="form-group">
			<p class="text-danger">Name field is Empty!</p>
		  </div>
		  
		  <div class="uk-form-label">
			<label for="email">Email:</label>
		  </div>
		  <div class="uk-inline">
		    <span class="uk-form-icon" uk-icon="icon: mail"></span>
			<input type="email" name="email" class="uk-input uk-form-width-large" placeholder="User Email Address" autofocus required />
		  </div>
		  <div class="form-group">
			<p class="text-danger">Invalid Email!</p>
		  </div>
		  
		  <div class="uk-form-label">
			<label for="age">Age:</label>
		  </div>
		  <div class="uk-inline">
		    <span class="uk-form-icon" uk-icon="icon: info"></span>
			<input type="number" name="age" class="uk-input uk-form-width-large" placeholder="User Age" autofocus data-validate="required, number" />
		  </div>
		  <div class="form-group">
			<p class="text-danger">Age field is Empty!</p>
		  </div>
		  
		  <div class="uk-form-label">
			<label for="phone">Phone:</label>
		  </div>
		  <div class="uk-inline">
		    <span class="uk-form-icon" uk-icon="icon: phone"></span>
			<input type="tel" name="phone" class="uk-input uk-form-width-large" placeholder="User Phone (XX-9XXXX-XXXX)" autofocus required pattern="^\d{2}-\d{5}-\d{4}$" />
		  </div>
		  <div class="form-group">
			<p class="text-danger">Phone field is Empty!</p>
		  </div>
		  <div class="form-group">
			<input type="submit" class="uk-button uk-button-primary" value="Add New User" />
			<input type="button" class="uk-button uk-button-danger" formnovalidate onclick="cancelNewUser();" value="Cancel" />
		  </div>
		</form>
	</div>
	<div id="divSideBar" style="width:25%">
	</div>
</div>
</body>
</html>
<style>
	.text-danger{
		visibility:hidden;
	}
	.uk-input {
		border-radius:10px;
	}
	.uk-button{
		border-radius:4px;
		text-transform: none;
	}
	.uk-button-danger{
		background-color: #d32c46;
		background-image: linear-gradient(to bottom,#ee465a,#c11a39);
		border: 1px solid rgba(0,0,0,.2);
		border-bottom-color: rgba(0,0,0,.3);
	}
	.uk-button-primary {
		background-color: #009dd8;
		background-image: linear-gradient(to bottom,#00b4f5,#008dc5);
		border: 1px solid rgba(0,0,0,.2);
		border-bottom-color: rgba(0,0,0,.3);
		text-shadow: 0 -1px 0 rgba(0,0,0,.2);
	}
</style>