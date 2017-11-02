<html>
<head>
  <!--script src="../node_modules/jquery/dist/jquery.js"></script-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
  <link href="uikit/dist/css/uikit.css" rel="stylesheet" type="text/css" />
  <script src="uikit/dist/js/uikit.js"></script>
  <script src="uikit/dist/js/uikit-icons.min.js"></script>
</head>
<body style="background-color:#f8f8f8">

  <div id="divHeader" style="height:70px"></div>

  <div uk-grid>
    <div id="divMain" style="margin-left:10%;width:80%" class="uk-card uk-card-default uk-card-body">
		<div class="uk-margin uk-margin-medium-top uk-margin-medium-left uk-margin-medium-bottom">
		  <input type="button" class="uk-button uk-button-primary uk-button-small" value="new" onclick="newUser();"/>
		  <input type="text" name="search" placeholder="Search.." class="uk-input uk-form-width-medium uk-form-small">
		  <table id="tableUsers" name="tableUsers" class="uk-table uk-table-hover uk-table-divider">
			<thead>
			  <tr>
				<th style="display:none">id</th>
				<th>name</th>
				<th>email</th>
				<th>age</th>
				<th>phone</th>
				<th></th>
			  </tr>
			</thead>
			<tbody>
			   <tr id="1" class="even">
				  <td id="1_1" style="display: none;">1</td>
				  <td id="1_2">danilo</td>
				  <td id="1_3">danilo@gmail.com</td>
				  <td id="1_4">37</td>
				  <td id="1_5">+55(11)9.8765-5432</td>
				  <td><input class="uk-button uk-button-warning uk-button-mini" type="button" id="btnEdit_1_6" name="btnEdit_1_6" value="edit"><span> </span><input class="uk-button uk-button-danger uk-button-mini" type="button" id="btnDelete_1_6" name="btnDelete_1_6" value="delete"></td>
			   </tr>
			   <tr id="2" class="odd">
				  <td id="2_1" style="display: none;">2</td>
				  <td id="2_2">batista</td>
				  <td id="2_3">batista@gmail.com</td>
				  <td id="2_4">17</td>
				  <td id="2_5">+55(11)9.1411-1485</td>
				  <td><input class="uk-button uk-button-warning uk-button-mini" type="button" id="btnEdit_2_6" name="btnEdit_2_6" value="edit"><span> </span><input class="uk-button uk-button-danger uk-button-mini" type="button" id="btnDelete_2_6" name="btnDelete_2_6" value="delete"></td>
			   </tr>
			   <tr id="3" class="even">
				  <td id="3_1" style="display: none;">3</td>
				  <td id="3_2">queiroz</td>
				  <td id="3_3">queiroz@gmail.com</td>
				  <td id="3_4">47</td>
				  <td id="3_5">+55(11)9.5451-5445</td>
				  <td><input class="uk-button uk-button-warning uk-button-mini" type="button" id="btnEdit_3_6" name="btnEdit_3_6" value="edit"><span> </span><input class="uk-button uk-button-danger uk-button-mini" type="button" id="btnDelete_3_6" name="btnDelete_3_6" value="delete"></td>
			   </tr>
			   <tr id="4" class="odd">
				  <td id="4_1" style="display: none;">4</td>
				  <td id="4_2">maria</td>
				  <td id="4_3">mariazinha@gmail.com</td>
				  <td id="4_4">47</td>
				  <td id="4_5">+55(11)9.1231-3435</td>
				  <td><input class="uk-button uk-button-warning uk-button-mini" type="button" id="btnEdit_4_6" name="btnEdit_4_6" value="edit"><span> </span><input class="uk-button uk-button-danger uk-button-mini" type="button" id="btnDelete_4_6" name="btnDelete_4_6" value="delete"></td>
			   </tr>
			   <tr id="5" class="even">
				  <td id="5_1" style="display: none;">5</td>
				  <td id="5_2">joaozinho</td>
				  <td id="5_3">joaozinho@gmail.com</td>
				  <td id="5_4">47</td>
				  <td id="5_5">+55(11)9.3331-4566</td>
				  <td><button class="uk-button uk-button-warning uk-button-mini" type="button" id="btnEdit_5_6" name="btnEdit_5_6" >edit</button><span> </span><button class="uk-button uk-button-danger uk-button-mini" type="button" id="btnDelete_5_6" name="btnDelete_5_6" >delete</button></td>
			   </tr>
			</tbody>
		  </table>
		</div>
	</div>
	<script>
UIkit.notification({
    message: 'my-message!',
    status: 'primary',
    pos: 'top-right',
    timeout: 5000
});
UIkit.notification("<span uk-icon='icon: check'></span> Message");
</script>
    <!-- Sidebar -->
    <style>
      .uk-card-default {
        background:#f8f8f8;
      }
      .fa-stack{
        margin-left:15px;
      }
    </style>
    <div id="divSideBar" style="width:10%">
    </div>
  </div>
</body>
</html>
<style>
.uk-notification-message {
  position: relative;
  margin-bottom: 10px;
  padding: 15px;
  background: #39f;
  color: #ffffff;
  font-size: 1.25rem;
  line-height: 1.4;
  cursor: pointer;
}
.uk-notification-close {
  display: none;
  position: absolute;
  color: #ffffff;
  top: 20px;
  right: 15px;
}

	.uk-table td {
		padding: 5px 12px;
		vertical-align: top;
	}
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
	.uk-button-warning{
		background-image: linear-gradient(to bottom,#fff,#eee);
		border: 1px solid rgba(0,0,0,.2);
		border-bottom-color: rgba(0,0,0,.3);
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
	.uk-button-mini {
		min-height: 20px;
		padding: 0 6px;
		line-height: 18px;
		font-size: 11px;
	}

.uk-button-warning:focus,
.uk-button-warning:hover {
    background-color: #fafafa;
    color: #666;
    outline: 0;
    text-decoration: none;
    background-image: none
}
.uk-button-warning.uk-active,
.uk-button-warning:active {
    background-color: #f5f5f5;
    color: #666;
    border-color: rgba(0, 0, 0, .2);
    border-top-color: rgba(0, 0, 0, .3);
    background-image: none;
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, .1)
}

.uk-button-primary:focus,
.uk-button-primary:hover {
    background-color: #00aff2;
    color: #fff;
    background-image: none
}
.uk-button-primary.uk-active,
.uk-button-primary:active {
    background-color: #008abf;
    color: #fff;
    background-image: none;
    border-color: rgba(0, 0, 0, .2);
    border-top-color: rgba(0, 0, 0, .4);
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, .2)
}

.uk-button-danger:focus,
.uk-button-danger:hover {
    background-color: #e33551;
    color: #fff;
    background-image: none
}
.uk-button-danger.uk-active,
.uk-button-danger:active {
    background-color: #c91c37;
    color: #fff;
    background-image: none;
    border-color: rgba(0, 0, 0, .2);
    border-top-color: rgba(0, 0, 0, .4);
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, .2)
}
</style>