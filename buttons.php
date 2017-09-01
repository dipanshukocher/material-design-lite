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
                  <!-- Colored FAB button -->
                  <p>Color Fab Button</p>
                  <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                    <i class="material-icons">add</i>
                  </button>
                </div>
                <div class="mdl-cell mdl-cell--6-col">
                  <!-- Colored FAB button with ripple -->
                  <p>Color Fab Button With Ripple</p>
                  <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                    <i class="material-icons">add</i>
                  </button>
                </div>
              </div>
            </div>

            <div class="show-grid">
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--6-col">
                  <!-- Raised button -->
                  <p>Raised Button</p>
                  <button class="mdl-button mdl-js-button mdl-button--raised">
                    Button
                  </button>
                </div>
                <div class="mdl-cell mdl-cell--6-col">
                  <!-- Raised button with ripple -->
                  <p>Raised Button With Ripple</p>
                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                    Button
                  </button>
                </div>
              </div>
            </div>

            <div class="show-grid">
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--6-col">
                  <!-- Raised button -->
                  <p>Raised Colored Button</p>
                  <!-- Colored raised button -->
                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                    Button
                  </button>
                </div>
                <div class="mdl-cell mdl-cell--6-col">
                  <!-- Raised button with ripple -->
                  <p>Raised Colored Button With Ripple</p>
                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect">
                    Button
                  </button>
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