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

        <div class="mdl-cell mdl-cell--6-col">
          <div class="mdl-grid">
            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
              <thead>
                <tr>
                  <th class="mdl-data-table__cell--non-numeric">Material</th>
                  <th>Unit price</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
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
                  <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                  <td>$2.90</td>
                  <td>
                    <button id="edit-menu-lower-17" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>
                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                        for="edit-menu-lower-17">
                      <li class="mdl-menu__item"><a href="<?php echo $report ; ?>"><i class="material-icons">insert_chart</i> View Report </a></li>
                      <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>
                      <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                  <td>$1.25</td>
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
                  <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                  <td>$2.90</td>
                  <td>
                    <button id="edit-menu-lower-20" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>
                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                        for="edit-menu-lower-20">
                      <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>
                      <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                  <td>$2.90</td>
                  <td>
                    <button id="edit-menu-lower-21" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>
                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                        for="edit-menu-lower-21">
                      <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>
                      <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                  <td>$1.25</td>
                  <td>
                    <button id="edit-menu-lower-22" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>
                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                        for="edit-menu-lower-22">
                      <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>
                      <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                  <td>$1.25</td>
                  <td>
                    <button id="edit-menu-lower-23" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>
                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                        for="edit-menu-lower-23">
                      <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>
                      <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>


        <div class="mdl-cell mdl-cell--6-col">
          <div class="mdl-grid">
            <div class="mdl-card" style="width: 100%;">
              <div class="mdl-cell mdl-cell--12-col">
                <canvas id="myChart" class="chartjs-chart"></canvas>
              </div>
            </div>
          </div>

          <div class="mdl-grid ">
            <div class="mdl-card" style="width: 100%;">
              <div class="mdl-cell mdl-cell--12-col">
                <canvas id="dounat1"></canvas>  
              </div>
            </div>
          </div>
        </div>

        <div class="mdl-cell mdl-cell--1-col">
          <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" style="    position: fixed;bottom: 3%;right: 2%;z-index: 99;">
            <i class="material-icons">add</i>
          </button>
        </div>

          <dialog class="mdl-dialog delete">
            <h5 class="mdl-dialog__title">Confirm Delete</h5>
            <div class="mdl-dialog__content">
              <p>Deleting the user may loose all its content</p>
            </div>
            <div class="mdl-dialog__actions">
              <button type="button" class="mdl-button" onclick="deleteUserAPI()">Delete</button>
              <button type="button" class="mdl-button close">Cancel</button>
            </div>
          </dialog>

          <div id="demo-snackbar-example" class="mdl-js-snackbar mdl-snackbar">
            <div class="mdl-snackbar__text"></div>
            <button class="mdl-snackbar__action" type="button"></button>
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


</script>

</body>
</html>		