<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap 3 Tutorial From BootstrapBay.com">
    <meta name="author" content="BootstrapBay.com">
    <title>applications</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" >Books Management</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>       
            <li><a href="#about">About</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header"></li>
                <li><a href="description.php">Text Books</a></li>
                <li><a href="workinprog.php">Refrence Materials</a></li>
				<li><a href="workinprog.php">Xerox</a></li>
              </ul>
            </li>            
            <li><a href="#contact" data-toggle="modal">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
	<div class="container">
		<div class="jumbotron text-center">
			<h1>Books And Management</h1>
			<p>Books and Management is your #1 source for used Books & Refrence materials</p>
			<a href="#" class="btn btn-primary">Buy Books</a>
			<a href="#" class="btn btn-success">Sell Books</a>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<a href="#" class="thumbnail home-thumb">
					<img src="img/slate.jpg" alt="Slate Bootstrap Admin Theme">
				</a>
				<h3>Refrence Books</h3>
				<p>The subject specific encyclopedias provide background information to a particular subject. They are usually edited by a respected scholar in the field of study and the articles are often written by experts, who give an in-depth overview to a topic.</p>
				<a href="workinprog.php" class="btn btn-danger">View</a>
			</div>
			<div class="col-sm-4">
				<a href="#" class="thumbnail home-thumb">
					<img src="img/appi.jpg" alt="Appi Landing Page Template">
				</a>
				<h3>Text Books</h3>
				<p>Collection of text books which are prescribed by the VTU. Mostly in a good condition.</p>
				<a href="description.php" class="btn btn-danger">View</a>
			</div>
			<div class="col-sm-4">
				<a href="#" class="thumbnail home-thumb">
					<img src="img/jiggy.jpg" alt="Jiggy Portfolio Theme">
				</a>
				<h3>Xerox</h3>
				<p>Set of printed notes which are handwritten. Teachers will be authors of such materials.</p>
				<a href="workinprog.php" class="btn btn-danger">View</a>
			</div>
		</div>
	</div>	
	
	
		    
    <!-- Fixed footer -->
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    	<div class="container">
    		<div class="navbar-text pull-left">
    			<p>© 2017 Books And Management.</p>
    		</div>
    		<div class="navbar-text pull-right">
    			<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
  
    			<a href="#"><i class="fa fa-github fa-2x"></i></a>
    		</div>
    	</div>
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <div class="modal fade" id="contact" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<form class="form-horizontal" role="form">
    				<div class="modal-header">
    					<h4>Contact<h4>
	    			</div>
	    			<div class="modal-body">
    					<div class="form-group">
    						<label for="contact-name" class="col-sm-2 control-label">Name</label>
    						<div class="col-sm-10">
    							<input type="text" class="form-control" id="contact-name" placeholder="First & Last Name">
    						</div>
    					</div>
    					<div class="form-group">
    						<label for="contact-email" class="col-sm-2 control-label">Email</label>
    						<div class="col-sm-10">
    							<input type="email" class="form-control" id="contact-email" placeholder="example@domain.com">
    						</div>
    					</div>
    					<div class="form-group">
    						<label for="contact-message" class="col-sm-2 control-label">Message</label>
    						<div class="col-sm-10">
    							<textarea class="form-control" rows="4"></textarea>
    						</div>
    					</div>
	    			</div>
	    			<div class="modal-footer">
    					<a class="btn btn-default" data-dismiss="modal">Close</a>
    					<button type="submit" class="btn btn-primary">Send</button>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>