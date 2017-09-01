  <header class="mdl-layout__header mdl-layout__header--transparent">

    <div class="mdl-layout-icon"></div>
    <div class="mdl-layout__header-row">

      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="">John Doe <div class="material-icons mdl-badge mdl-badge--overlap" data-badge="1">account_box</div></a>
        <div class="mdl-grid">
          <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2">
            <input type="checkbox" id="switch-2" class="mdl-switch__input" checked="true">
            <span class="mdl-switch__label">Activate Account</span>
          </label>
        </div>
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--1-col">
            </div>
            <div class="mdl-cell mdl-cell--1-col">
              <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">more_vert</i>
                <div class="mdl-tooltip" data-mdl-for="demo-menu-lower-right">
                Manage Profile
              </button>
              <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                  for="demo-menu-lower-right">
                <li class="mdl-menu__item"><a href="javascript:void()">Change Password</a></li>
                <li disabled class="mdl-menu__item mdl-menu__item--full-bleed-divider"><a href="javascript:void()">Forgot Password</a></li>
                <li class="mdl-menu__item"><a id="demo-show-toast" href="<?php echo $login ?>">Logout</a></li>
                <!-- <li class="mdl-menu__item">Yet Another Action</li> -->
              </ul>
            </div>
        </div>
      </nav>

    </div>

  </header>

<div id="demo-toast-example" class="mdl-js-snackbar mdl-snackbar">
  <div class="mdl-snackbar__text"></div>
  <button class="mdl-snackbar__action" type="button"></button>
</div>
<script>
(function() {
  'use strict';
  window['counter'] = 0;
  var snackbarContainer = document.querySelector('#demo-toast-example');
  var showToastButton = document.querySelector('#demo-show-toast');
  showToastButton.addEventListener('click', function() {
    'use strict';
    var data = {message: 'You are logged out '};
    snackbarContainer.MaterialSnackbar.showSnackbar(data);
  });
}());
</script>