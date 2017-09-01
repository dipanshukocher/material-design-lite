

  
/*********************index page delete user popup function******************************/


  function deleteUser(){
    var dialog = document.querySelector('dialog.delete');
    var showDialogButton = document.querySelector('#show-dialog');
    dialog.showModal();
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
  }



/******************** delete current user **********************/

  function deleteUserAPI(){
      var dialog = document.querySelector('dialog.delete');
      var snackbarContainer = document.querySelector('#demo-snackbar-example');
      // var showSnackbarButton = document.querySelector('#demo-show-snackbar');
      var handler = function(event) {
        showSnackbarButton.style.backgroundColor = '';
      };
      var data = {
        message: 'User Deleted Successfully.',
        timeout: 4000,
        actionHandler: handler,
        actionText: 'Undo'
      };
      snackbarContainer.MaterialSnackbar.showSnackbar(data);
      dialog.close();
  }




/******************* slider dynamic value show **********************/


  function showSliderValue(value){
     document.getElementById("message").innerHTML = value;
  }

  /************************** Sidebar dropdown toggle ******************/

  $(document).ready(function(){
    $(".toggleButton").next().hide();

    $(".toggleButton").click(function(){
        $(this).next().slideToggle(500);
        $(this).toggleClass('active-link');
    });
  });





         