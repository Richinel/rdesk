var main = function() {
    $('.add_ticket_btn').click(function() {
        $('.add_form').fadeToggle(300);
    }); 

    $('.cancel_btn').click(function() {
        $('.add_form').fadeToggle(300);
    }); 

    $('.ticket').click(function() {
    	$('.ticket_content').slideToggle(300);
    });
};

$(document).ready(main);