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
                <div class="mdl-cell mdl-cell--1-col">1</div>
                <div class="mdl-cell mdl-cell--1-col">1</div>
                <div class="mdl-cell mdl-cell--1-col">1</div>
                <div class="mdl-cell mdl-cell--1-col">1</div>
                <div class="mdl-cell mdl-cell--1-col">1</div>
                <div class="mdl-cell mdl-cell--1-col">1</div>
                <div class="mdl-cell mdl-cell--1-col">1</div>
                <div class="mdl-cell mdl-cell--1-col">1</div>
                <div class="mdl-cell mdl-cell--1-col">1</div>
                <div class="mdl-cell mdl-cell--1-col">1</div>
                <div class="mdl-cell mdl-cell--1-col">1</div>
                <div class="mdl-cell mdl-cell--1-col">1</div>
              </div>
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col">4</div>
                <div class="mdl-cell mdl-cell--4-col">4</div>
                <div class="mdl-cell mdl-cell--4-col">4</div>
              </div>
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--6-col">6</div>
                <div class="mdl-cell mdl-cell--4-col">4</div>
                <div class="mdl-cell mdl-cell--2-col">2</div>
              </div>
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">6 (8 tablet)</div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">4 (6 tablet)</div>
                <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">2 (4 phone)</div>
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