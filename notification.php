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
				<div class="bg-light padding-20">
			    	<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
					  	<div class="mdl-tabs__tab-bar">
					      	<!-- <a href="#charts-data" class="mdl-tabs__tab is-active">Charts</a> -->
					      	<a href="" class="mdl-tabs__tab is-active">Notifications</a>
					  	</div>

  						<div class="mdl-tabs__panel is-active" id="tables-data ">
  							<div class="mdl-grid mdl-grid--no-spacing">
  								<div class="mdl-cell mdl-cell--12-col">
  									<ul class="demo-list-icon mdl-list">
                      <li class="mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">person</i>
                        Daily Alert
                        </span>
                        <span class="mdl-list__item-secondary-action">
                          <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="list-switch-1">
                            <input type="checkbox" id="list-switch-1" class="mdl-switch__input" checked />
                          </label>
                        </span>
                      </li>
                      <li class="mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">person</i>
                        Login Alert
                        </span>
                        <span class="mdl-list__item-secondary-action">
                          <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="list-switch-2">
                            <input type="checkbox" id="list-switch-2" class="mdl-switch__input"/>
                          </label>
                        </span>
                      </li>
                      <li class="mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-icon">person</i>
                        Bob Odenkirk
                        </span>
                        <span class="mdl-list__item-secondary-action">
                          <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="list-switch-3">
                            <input type="checkbox" id="list-switch-3" class="mdl-switch__input" checked />
                          </label>
                        </span>
                      </li>
                    </ul>
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