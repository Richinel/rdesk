var main = function() {
    $('.add_ticket_btn').click(function() {
        $('.add_form').fadeToggle(300);
    }); 

    $('.cancel_btn').click(function() {
        $('.add_form').fadeToggle(300);
    }); 
};

$(document).ready(main);