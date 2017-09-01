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
					 
          <div class="mdl-table-topbar">
            <div class="dummy-mdl-pagination">
                <h4>API Table</h4>
            </div>
            <div class="mdl-table-search-box">
              <form action="#">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                  <label class="mdl-button mdl-js-button mdl-button--icon" for="sample6">
                    <i class="material-icons">search</i>
                  </label>
                  <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" id="sample6">
                    <label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
                  </div>
                </div>
              </form>
            </div>
          </div>
					<table class="mdl-data-table mdl-data-table--selectable mdl-shadow--2dp">
            <thead>
              <tr>
                <th class="mdl-data-table__cell--non-numeric">User Name</th>
                <th class="mdl-data-table__cell--non-numeric">User Email</th>
                <th class="mdl-data-table__cell--non-numeric">Website</th>
                <th class="mdl-data-table__cell--non-numeric">Edit</th>
              </tr>
            </thead>
            <tbody id="apiTable"></tbody>
          </table>
          <div class="dummy-mdl-pagination">
              <ul class="demo-list-item mdl-list">
                <li class="mdl-list__item">
                  <span class="mdl-list__item-primary-content"><a href="javascript:void(0)" class="">1</a></span>
                </li>
                <li class="mdl-list__item">
                  <span class="mdl-list__item-primary-content"><a href="javascript:void(0)" class="">2</a></span>
                </li>
                <li class="mdl-list__item">
                  <span class="mdl-list__item-primary-content"><a href="javascript:void(0)" class="">3</a></span>
                </li>
                <li class="mdl-list__item">
                  <span class="mdl-list__item-primary-content"><a href="javascript:void(0)" class="">Next</a></span>
                </li>
              </ul>
          </div>

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


      <dialog class="mdl-dialog delete">
        <h5 class="mdl-dialog__title">Confirm Delete</h5>
        <div class="mdl-dialog__content">
          <p>Deleting the user may loose all its content</p>
        </div>
        <div class="mdl-dialog__actions">
          <button type="button" class="mdl-button deleteUser">Delete</button>
          <button type="button" class="mdl-button close">Cancel</button>
        </div>
      </dialog>

		</div>

	</div>

    <?php include('footer.php');?>

  </main>

</div>
<script>
    var root = 'http://jsonplaceholder.typicode.com';
    $.ajax({
        url: root + '/users',
        method: 'GET',
        dataType:'json',
        data: {limit:3, order:'desc'},
    }).then(function(data) {
        var html = "";
        $.each(data,function(index, values){
          var i = 1;
          i++;
          html += '\
          <tr>\
            <td class="mdl-data-table__cell--non-numeric">' + values.name + '</td>\
            <td class="mdl-data-table__cell--non-numeric">' + values.email + '</td>\
            <td class="mdl-data-table__cell--non-numeric">' + values.website + '</td>\
            <td class="mdl-data-table__cell--non-numeric">\
              <button id="edit-menu-lower-1'+ values.id +'" class="mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>\
              <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"\
                  for="edit-menu-lower-1'+ values.id +'">\
                <li class="mdl-menu__item"><a href="#"><i class="material-icons">insert_chart</i> View Report </a></li>\
                <li class="mdl-menu__item"><i class="material-icons">border_color</i> Edit</li>\
                <li onclick="deleteUser()" class="mdl-menu__item"><i class="material-icons">delete</i> Delete</li>\
              </ul>\
            </td>\
          </tr>';
            // console.log(index);
            console.log(values);
        });
        $('#apiTable').prepend(html);
    });
</script>

</body>
</html>		