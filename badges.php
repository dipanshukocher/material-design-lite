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
                  <!-- Number badge on icon -->
                  <div class="material-icons mdl-badge mdl-badge--overlap" data-badge="1">account_box</div>
                </div>
                <div class="mdl-cell mdl-cell--6-col">
                  <!-- Icon badge on icon -->
                  <div class="material-icons mdl-badge mdl-badge--overlap" data-badge="♥">account_box</div>
                </div>
              </div>
            </div>

            <div class="show-grid">
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--6-col">
                  <!-- Number badge -->
                  <span class="mdl-badge" data-badge="4">Inbox</span>
                </div>
                <div class="mdl-cell mdl-cell--6-col">
                  <!-- Icon badge -->
                  <span class="mdl-badge" data-badge="♥">Mood</span>
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