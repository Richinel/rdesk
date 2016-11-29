var main = function() {
    $('.add_ticket_btn').click(function() {
        $('#addTicket').fadeToggle(300);
    }); 

    $('#addTicketCancel').click(function() {
        $('#addTicket').fadeToggle(300);
    }); 

    $('.respond').click(function() {
        $('#respond_form').fadeToggle(300);
    }); 

    $('#cancelRespond').click(function() {
        $('#respond_form').fadeToggle(300);
    }); 

    $('.ticket').click(function() {
    	$(this).children('.ticket_content').slideToggle(150);
    });

    // $('.ticket').click(function() {
    // 	$('.ticket_modal').fadeToggle(300);
    // });
};

$(document).ready(main);
