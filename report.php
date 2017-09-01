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
					      	<a href="#charts-data" class="mdl-tabs__tab is-active">Charts</a>
					      	<a href="#tables-data" class="mdl-tabs__tab ">Tables</a>
					  	</div>

  						<div class="mdl-tabs__panel is-active" id="charts-data">
  							
  							<div class="mdl-grid">
  								<div class="mdl-cell mdl-cell--6-col">
  									<canvas id="myChart" class="chartjs-chart"></canvas>
  								</div>
  			        	<div class="mdl-cell mdl-cell--6-col">
  									<canvas id="bar-chart"></canvas>
  								</div>
  							</div>

  							<div class="mdl-grid ">
  								<div class="mdl-cell mdl-cell--6-col">
  									<canvas id="dounat1"></canvas>	
  								</div>
  			        			<div class="mdl-cell mdl-cell--6-col">
  									<canvas id="dounat2"></canvas>
  								</div>
  							</div>
  							
  						</div>
						<div class="mdl-tabs__panel" id="tables-data">
							<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                            <thead>
                              <tr>
                                <th class="mdl-data-table__cell--non-numeric">Material</th>
                                <th>Quantity</th>
                                <th>Unit price</th>
                                <th>Manage</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                                <td>25</td>
                                <td>$2.90</td>
                                <td>
                                  <button id="edit-menu-lower-11" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>
                                  <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                                      for="edit-menu-lower-11">
                                    <li class="mdl-menu__item"><a href="<?php echo $report ; ?>"><i class="material-icons">insert_chart</i> View Report </a></li>
                                    <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>
                                    <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>
                                  </ul>
                                </td>
                              </tr>
                              <tr>
                                <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                                <td>50</td>
                                <td>$1.25</td>
                                <td>
                                  <button id="edit-menu-lower-12" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>
                                  <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                                      for="edit-menu-lower-12">
                                    <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>
                                    <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>
                                  </ul>
                                </td>
                              </tr>
                              <tr>
                                <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
                                <td>10</td>
                                <td>$2.35</td>
                                <td>
                                  <button id="edit-menu-lower-13" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>
                                  <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                                      for="edit-menu-lower-13">
                                    <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>
                                    <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>
                                  </ul>
                                </td>
                              </tr>
                              <tr>
                                <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                                <td>25</td>
                                <td>$2.90</td>
                                <td>
                                  <button id="edit-menu-lower-14" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>
                                  <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                                      for="edit-menu-lower-14">
                                    <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>
                                    <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>
                                  </ul>
                                </td>
                              </tr>
                              <tr>
                                <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                                <td>50</td>
                                <td>$1.25</td>
                                <td>
                                  <button id="edit-menu-lower-15" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>
                                  <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                                      for="edit-menu-lower-15">
                                    <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>
                                    <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>
                                  </ul>
                                </td>
                              </tr>
                              <tr>
                                <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
                                <td>10</td>
                                <td>$2.35</td>
                                <td>
                                  <button id="edit-menu-lower-16" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>
                                  <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                                      for="edit-menu-lower-16">
                                    <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>
                                    <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>
                                  </ul>
                                </td>
                              </tr>
                              <tr>
                                <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
                                <td>10</td>
                                <td>$2.35</td>
                                <td>
                                  <button id="edit-menu-lower-17" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>
                                  <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                                      for="edit-menu-lower-17">
                                    <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>
                                    <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>
                                  </ul>
                                </td>
                              </tr>
                              <tr>
                                <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
                                <td>10</td>
                                <td>$2.35</td>
                                <td>
                                  <button id="edit-menu-lower-18" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>
                                  <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                                      for="edit-menu-lower-18">
                                    <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>
                                    <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>
                                  </ul>
                                </td>
                              </tr>
                              <tr>
                                <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
                                <td>10</td>
                                <td>$2.35</td>
                                <td>
                                  <button id="edit-menu-lower-19" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>
                                  <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                                      for="edit-menu-lower-19">
                                    <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>
                                    <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>
                                  </ul>
                                </td>
                              </tr>
                              <tr>
                                <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
                                <td>10</td>
                                <td>$2.35</td>
                                <td>
                                  <button id="edit-menu-lower-20" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>
                                  <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                                      for="edit-menu-lower-20">
                                    <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>
                                    <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>
                                  </ul>
                                </td>
                              </tr>
                            </tbody>


                            

                          </table>
                            <div class="dummy-mdl-pagination">
                                <ul class="demo-list-item mdl-list">
                                  <li class="mdl-list__item">
                                    <span class="mdl-list__item-primary-content"><a href="" class="">1</a></span>
                                  </li>
                                  <li class="mdl-list__item">
                                    <span class="mdl-list__item-primary-content"><a href="" class="">2</a></span>
                                  </li>
                                  <li class="mdl-list__item">
                                    <span class="mdl-list__item-primary-content"><a href="" class="">3</a></span>
                                  </li>
                                  <li class="mdl-list__item">
                                    <span class="mdl-list__item-primary-content"><a href="" class="">Next</a></span>
                                  </li>
                                </ul>
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

<script>
	var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 255, 255)',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    },

    // Configuration options go here
    options: {}
});


var ctx = document.getElementById('dounat1').getContext('2d');
	var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'doughnut',

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: [
                'rgba(255, 99, 132, 0.86)',
                'rgba(54, 162, 235, 0.86)',
                'rgba(255, 206, 86, 0.86)',
                'rgba(75, 192, 192, 0.86)',
                'rgba(153, 102, 255, 0.86)',
                'rgba(255, 159, 64, 0.86)'
            ],
            borderColor: 'rgb(255, 255, 255)',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    },

    // Configuration options go here
    options: {}
});


var ctxs = document.getElementById('dounat2').getContext('2d');
	var chart = new Chart(ctxs, {
    // The type of chart we want to create
    type: 'scatter',

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            data: [{
                x: -10,
                y: 0
            }, {
                x: 0,
                y: 10
            }, {
                x: 10,
                y: 5
            }]
        }]
    },

    // Configuration options go here
    options: {
        scales: {
            xAxes: [{
                type: 'linear',
                position: 'bottom'
            }]
        }
    }
});



var ctx = document.getElementById("bar-chart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
</body>
</html>		