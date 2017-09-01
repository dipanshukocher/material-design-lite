<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test Template</title>
  <?php include('links.php'); ?>
</head>
<body>
<div class="demo-layout-transparent mdl-layout mdl-js-layout mdl-layout--fixed-drawer">

  <?php include('page-loader.php'); ?>  

  <?php include('header.php'); ?>
  	
  <?php include('sidebar.php'); ?>
  
  <main class="mdl-layout__content">
    <div class="main-inner">

    	<div class="mdl-grid mdl-grid--no-spacing">
  			<div class="mdl-cell mdl-cell--12-col">
  				<div class="bg-light padding-20 margin-top-bottom-20">
  					
            <div class="show-grid">
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                  <button id="demo-snackbar" onclick="deleteUserAPI()" class="mdl-button mdl-js-button mdl-button--raised" type="button">Show Snackbar</button>
                  <div id="demo-snackbar-example" class="mdl-js-snackbar mdl-snackbar">
                    <div class="mdl-snackbar__text"></div>
                    <button class="mdl-snackbar__action" type="button"></button>
                  </div>
                </div> 
              </div>
            </div>         

  				</div>

			  </div>

		  </div>

	  </div>

    <?php include('footer.php');?>

  </main>

</div>



</body>
</html>		