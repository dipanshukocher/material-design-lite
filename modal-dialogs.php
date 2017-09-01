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
                  <!-- Colored FAB button -->
                  <p></p>
                    <button id="show-dialog" type="button" class="mdl-button">Show Dialog</button>
                      <dialog class="mdl-dialog">
                        <h4 class="mdl-dialog__title">Allow data collection?</h4>
                        <div class="mdl-dialog__content">
                          <p>
                            Allowing us to collect data will let us get you the information you want faster.
                          </p>
                        </div>
                        <div class="mdl-dialog__actions">
                          <button type="button" class="mdl-button">Agree</button>
                          <button type="button" class="mdl-button close">Disagree</button>
                        </div>
                      </dialog>
                      <script>
                        var dialog = document.querySelector('dialog');
                        var showDialogButton = document.querySelector('#show-dialog');
                        if (! dialog.showModal) {
                          dialogPolyfill.registerDialog(dialog);
                        }
                        showDialogButton.addEventListener('click', function() {
                          dialog.showModal();
                        });
                        dialog.querySelector('.close').addEventListener('click', function() {
                          dialog.close();
                        });
                      </script>
                  
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