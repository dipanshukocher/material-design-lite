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
        <div class="mdl-cell mdl-cell--2-col"></div>
        <div class="mdl-cell mdl-cell--8-col">
          <div class="demo-card-wide mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">

              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--12-col">
                    <h2 class="mdl-card__title-text">Welcome to MOBtexting, Login here</h2>
                  </div>
                  <div class="mdl-cell mdl-cell--1-col">
                    <a href="<?php echo $home ?>" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-js-ripple-effect login-submit-button">
                      <i class="material-icons">send</i>
                    </a>
                  </div>
              </div>
            </div>
            <div class="">
              <form action="#" class="" id="login-form" action="index.php" method="">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <label class="mdl-textfield__label" for="sample1">Name</label>
                  <input class="mdl-textfield__input" pattern="[a-zA-Z ]*" minlength="5" maxlength="16" type="text" id="sample1">
                  <span class="mdl-textfield__error">Characters only / Min 5 letters</span>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="email" id="sample4">
                  <label class="mdl-textfield__label" for="sample4">Email</label>
                  <span class="mdl-textfield__error">Input is not a valid email address!</span>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" minlength="10" maxlength="11" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">Mobile Number</label>
                  <span class="mdl-textfield__error">Input is not a number!</span>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" minlength="4" maxlength="16" type="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" id="passwrd1">
                  <label class="mdl-textfield__label" for="passwrd1">Password</label>
                  <span class="mdl-textfield__error">Password must contains uppercase, lowercase and number</span>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="password"  id="passwrd2">
                  <label class="mdl-textfield__label" for="passwrd2">Confirm Password</label>
                  <span class="mdl-textfield__error">Confirm password does not matched </span>
                </div>
                <br/>
                <h1></h1>
                <div class="mdl-card__actions mdl-card--border">
                  <a href="index.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="submit" > Submit </a>
                  <input type="reset" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" value="Reset / Cancel">
                </div>
                
              </form>
              <p></p>
              

            </div>
          </div>
        </div>
    </div>
    </div>
    <?php include('footer.php');?>
    
  </main>
  
</div>

<script>
  $('#submit').click(function(){
     if($('#login-form input').val() == ''){
        alert('Input can not be left blank');
        // $("#login-form .mdl-textfield").append(" <p class='form-error'>Input must not be blank</p>.");
     }else{

     }
  });
</script>

</body>
</html>		