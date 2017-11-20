<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
  
  <link rel='stylesheet prefetch' href='https://cdn.gitcdn.xyz/cdn/angular/bower-material/v1.0.0-rc3/angular-material.css'>


      <link rel="stylesheet" href="css/style.css">

  
</head>


<body>
  <div ng-controller="DemoCtrl" ng-cloak="" class="md-inline-form" ng-app="MyApp" layout="column" layout-sm="row" layout-align="center center" layout-align-sm="start start" layout-fill>
		<md-content id="SignupContent" class="md-whiteframe-10dp" flex-sm>
				<md-toolbar flex id="materialToolbar">
						<div class="md-toolbar-tools"> <span flex=""></span> <span class="md-headline" align="center">Register </span> <span flex=""></span> </div>
				</md-toolbar>
				<div layout-padding="">
						<div></div>
						<form name="userForm" method="POST" action="" ng-submit="user.submit(userForm.$valid)" enctype="multipart/form-data">
								<input type="hidden" name="action" value="signup" />
								<div layout="row" layout-sm="column">
										<md-input-container flex-gt-sm="">
												<label>First Name</label>
												<input ng-model="user.first_name" name="first_name" required type="text" ng-pattern="/^[a-zA-Z'. -]+$/" placeholder="Your First Name">
												<div ng-if="userForm.first_name.$dirty" ng-messages="userForm.first_name.$error" role="alert">
														<div ng-message="required" class="my-message">First Name is Required.</div>
														<div ng-message="pattern" class="my-message">Enter correct First Name.</div>
												</div>
										</md-input-container>
										<md-input-container flex-gt-sm="">
												<label>Last Name</label>
												<input ng-model="user.last_name" name="last_name" required type="text" ng-pattern="/^[a-zA-Z'. -]+$/" placeholder="Your Last Name">
												<div ng-if="userForm.last_name.$dirty" ng-messages="userForm.last_name.$error" role="alert">
														<div ng-message="required" class="my-message">Last Name is Required.</div>
														<div ng-message="pattern" class="my-message">Enter correct Last Name.</div>
												</div>
										</md-input-container>
								</div>
								
								
								<div layout="row" layout-sm="column">		
									<md-input-container flex-gt-sm="">
												<label>USN</label>
												<input ng-model="user.usn" name="usn" required type="text" ng-pattern="/^[a-zA-Z0-9'. -]+$/" placeholder="Eg: 1DT15CS075">
												<div ng-if="userForm.usn.$dirty" ng-messages="userForm.usn.$error" role="alert">
														<div ng-message="required" class="my-message">USN is Required.</div>
														<div ng-message="pattern" class="my-message">Enter correct USN.</div>
												</div>
										</md-input-container>	
										
										
										
										
										
                                        <md-input-container flex-gt-sm="">
												<label>Semester</label>
												<input required type="number" step="any" name="sem" ng-model="user.sem" min="3" max="8"  />
												<div ng-if="userForm.sem.$dirty" ng-messages="userForm.sem.$error" role="alert" multiple>
														<div ng-message="required">Semester is Required.</div>
														<div ng-message="min">Students Above 2 Semester is Allowed.</div>
														<div ng-message="max">Sorry {{userForm.age.$viewValue}} Semester Students are not Allowed.</div>
												</div>
										</md-input-container>
								</div>
								<div layout="row" layout-sm="column">
										<md-input-container flex-gt-sm="">
												<label>Email</label>
												<input required type="email" name="email" ng-model="user.email" ng-pattern="/^[_a-z0-9-+]+(\.[_a-z0-9-+]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/" placeholder="someone@example.com" />
												<div ng-if="userForm.email.$dirty" ng-messages="userForm.email.$error" role="alert">
														<div ng-message="required" class="my-message">Email Address is Required.</div>
														<div ng-message="pattern" class="my-message">Enter Correct Email Address. </div>
														<div ng-message="email" class="my-message">Enter Correct Email Address. </div>
												</div>
										</md-input-container>
								</div>
								<div layout="row" layout-sm="column">
										<md-input-container flex-gt-sm="">
												<label>New Password</label>
												<input name="password" ng-model="user.password" type="password" minlength="8" maxlength="100" ng-pattern="/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/" required placeholder="********">
												<div ng-if="userForm.password.$dirty" ng-messages="userForm.password.$error" role="alert" multiple>
														<div ng-message="required">Password is Required.</div>
														<div ng-message="pattern">Password should contain at least one number, one lowercase and one uppercase character.</div>
														<div ng-message="minlength">Password should be greater than 8 letters.</div>
														<div ng-message="maxlength">Password Can't be more than 100 letters.</div>
												</div>
										</md-input-container>
										<md-input-container flex-gt-sm="">
												<label>Confirm Password</label>
												<input name="confmPassword" ng-model="user.confmPassword" type="password" minlength="8" maxlength="100" ng-pattern="/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/" required compare-to="user.password" placeholder="********">
												<div ng-if="userForm.confmPassword.$dirty" ng-messages="userForm.confmPassword.$error" role="alert">
														<div ng-message="required">Confirm Password is Required.</div>
														<div ng-message="compareTo">Password Doesn't Match.</div>
												</div>
										</md-input-container>
								</div>
								<md-button class="md-raised md-primary" style="width:100%; margin: 0px 0px;" type="submit" ng-disabled="userForm.$invalid" name="submit">Submit</md-button>
								
						</form>
				</div>
		</md-content>
</div>
  <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-animate.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-route.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-aria.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-messages.min.js'></script>
<script src='https://cdn.gitcdn.xyz/cdn/angular/bower-material/v1.0.0-rc3/angular-material.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-114/assets-cache.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
