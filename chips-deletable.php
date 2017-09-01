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
                  <p>Deletable Chip</p>
                  <!-- Deletable Chip -->
                  <span class="mdl-chip mdl-chip--deletable">
                      <span class="mdl-chip__text">Deletable Chip</span>
                      <button type="button" class="mdl-chip__action"><i class="material-icons">cancel</i></button>
                  </span>
                </div>
                <div class="mdl-cell mdl-cell--6-col">
                  <!-- Colored FAB button with ripple -->
                  <p>Create Deletable Chip from Form Field</p>

                  <form action="#" class="" id="chip-create-form" action="" method="">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <label class="mdl-textfield__label" for="sample1">Type and hit enter</label>
                      <input class="mdl-textfield__input" pattern="[a-zA-Z ]*" minlength="5" maxlength="26" type="text" id="sample1">
                      <span class="mdl-textfield__error">Characters only / Min 5 letters</span>
                    </div>

                    <div class="mdl-card__actions mdl-card--border">
                      <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="button" id="createBtn" value="Create"> 
                    </div>

                  </form>

                  <div id="createdChip"></div>
                  
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
  
  function deletechip(ref){
    $(ref).parent().remove();
  }
  
  $('#sample1').keypress(function(event){
    if(event.keyCode == 13){
      $('#createBtn').click();
    }
  });

  $('#createBtn').click(function(){
     var text = $('#chip-create-form').find('#sample1').val();
     // alert('button was "clicked"');
     $('#createdChip').append('<span class="mdl-chip mdl-chip--deletable"><span class="mdl-chip__text">' +  text  +' </span><button type="button" id="delete_chip" class="mdl-chip__action delete_chip" onclick="deletechip(this)"><i class="material-icons">cancel</i></button></span>'); 
  });

 


</script>

</body>
</html>		