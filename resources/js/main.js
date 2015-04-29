(function($){
    $(function(){

        $('.button-collapse').sideNav();

        $(".dropdown-button").dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: true, // Does not change width of dropdown to that of the activator
            hover: false, // Activate on hover
            gutter: 1, // Spacing from edge
            belowOrigin: true // Displays dropdown below the button

        });


    }); // end of document ready
})(jQuery); // end of jQuery name space