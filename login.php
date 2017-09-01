<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test Template</title>
  <?php include('links.php'); ?>
</head>
<body>

<div class="demo-layout-transparent mdl-layout mdl-js-layout">

  <main class="mdl-layout__content">

    

    <div class="mdl-grid mdl-grid--no-spacing">
        <div class="mdl-cell mdl-cell--3-col">
          
        </div>
        <div class="mdl-cell mdl-cell--6-col">
          <div class="demo-card-wide mdl-card mdl-shadow--2dp">
            <?php include('page-loader.php'); ?>
            <div class="mdl-card__title">

              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--12-col">
                    <h2 class="mdl-card__title-text">Welcome to Material Design Lite, Signup here</h2>
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
                  <input class="mdl-textfield__input" minlength="10" maxlength="10" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">Mobile Number</label>
                  <span class="mdl-textfield__error">Input is not a number!</span>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" minlength="8" maxlength="16" type="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" id="passwrd1">
                  <label class="mdl-textfield__label" for="passwrd1">Password</label>
                  <span class="mdl-textfield__error">Password must contains uppercase, lowercase and number. Must contain 8 characters</span>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" id="passwrd2">
                  <label class="mdl-textfield__label" for="passwrd2">Confirm Password</label>
                  <span class="mdl-textfield__error">Confirm password does not matched </span>
                </div>
                <br/>
                <h1></h1>
                <div class="mdl-card__actions mdl-card--border">
                  <a href="<?php echo $home ?>" id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">Submit</a>
                  <input type="reset" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" value="Reset / Cancel">
                </div>
                
              </form>
              <p></p>
              

            </div>
          </div>
        </div>
        <div class="mdl-cell mdl-cell--3-col"></div>
    </div>

  </main>
  
</div>

<script>
  $('#submit').click(function(){
     if($('#login-form input').val() == ''){
        alert('Input can not be left blank');
        //$("#login-form .mdl-textfield").append(" <p class='form-error'>Input must not be blank</p>.");
     }else{
        window.location.replace("index.php");
     }
  });
</script>


</body>
</html>		