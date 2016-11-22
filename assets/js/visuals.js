var main = function() {
    $('.add_ticket_btn').click(function() {
        $('.add_form').fadeToggle(300);
    }); 

    $('.cancel_btn').click(function() {
        $('.add_form').fadeToggle(300);
    }); 

    $('.ticket').click(function() {
    	$(this).children('.ticket_content').slideToggle(150);
    });
};

$(document).ready(main);
