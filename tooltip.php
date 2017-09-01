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
                <div class="mdl-cell mdl-cell--6-col">
                  <!-- Simple Tooltip -->
                  <div id="tt1" class="icon material-icons">add</div>
                    <div class="mdl-tooltip" data-mdl-for="tt1">Follow</div>

                </div>
                <div class="mdl-cell mdl-cell--6-col">
                  <!-- Large Tooltip -->
                  <div id="tt2" class="icon material-icons">print</div>
                  <div class="mdl-tooltip mdl-tooltip--large" for="tt2">Print</div>
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