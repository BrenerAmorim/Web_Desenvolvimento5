$(document).ready(function(){
	$(".button-collapse").sideNav(); /*Nav bar */
  	 // Initialize collapse button
  	$(".button-collapse").sideNav({
      menuWidth: 300, 
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el){}, 
      onClose: function(el){},
    });
  	// Initialize collapsible (uncomment the line below if you use the dropdown variation)
  	//$('.collapsible').collapsible();

     $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );

     $('#textarea1').val('');
     $('#textarea1').trigger('autoresize')
    


});
