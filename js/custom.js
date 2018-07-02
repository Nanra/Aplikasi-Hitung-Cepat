$(document).ready(function () {

    //Jquery for SideNav
    $(".button-collapse").sideNav();

    //Slider
    $('.slider').slider({
        //        full_width: true,
        height: 650,
        indicators: false,
        interval: 5000,
        transition: 750
    });

    //Plugin Get Tanggal
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 55 // Creates a dropdown of 15 years to control year
    });

    //Jquery Masking Plugin
    $('#hp').inputmask("9999-9999-9999");
    $('#nim').inputmask("99999999");

    //Jquery Plugin untuk Dropdown
    $('.dropdown-button').dropdown({
        inDuration: 500,
        outDuration: 340,
        constrainWidth: false, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        gutter: 0, // Spacing from edge
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'left', // Displays dropdown with edge aligned to the left of button
        //        stopPropagation: false // Stops event propagation
    });


    $('.fixed-action-btn').openFAB();
    $('.fixed-action-btn').closeFAB();
    //    $('.materialboxed').materialbox();
    $('.parallax').parallax();
    $('.carousel').carousel();
});
