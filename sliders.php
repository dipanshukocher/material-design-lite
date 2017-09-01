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
                   <p>Slider with starting value</p>
                  <!-- Slider with Starting Value -->
                  <input class="mdl-slider mdl-js-slider"  type="range" min="0" max="100" value="0" tabindex="0">
                </div>
                <div class="mdl-cell mdl-cell--6-col">
                  <!-- Colored FAB button -->
                  <p>Slider with default value</p>
                  
                  <!-- Slider with Starting Value -->
                  <input class="mdl-slider mdl-js-slider" id="slider2" type="range" min="100" max="1000" value="250" tabindex="0" oninput="showSliderValue(this.value)" onchange="showSliderValue(this.value)">
                  <span id="message">250</span>
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