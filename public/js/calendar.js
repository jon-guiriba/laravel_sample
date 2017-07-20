$(document).ready(function() {

$( "#addEventModal" ).dialog({
      autoOpen: false,
      height: 400,
      width: 350,
      modal: true,
      show: 'fade', 
      hide: 'fade',
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( "ui-state-error" );
      },
    });
 
    form = $( "#addEventModal" ).find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
    });
 


	$('#calendar').fullCalendar({
		height: 'parent',
	    navLinks: true,
		customButtons: {
	        addEvent: {
	            text: '+',
                theme: false,
	            click: function() {
	                $( "#addEventModal" ).dialog( "open" );
	            }
	        },
    	},
	    header: {
	        left: 'prev,next today',
	        center: 'title',
	        right: 'addEvent month,agendaWeek,agendaDay'
    	},
     	eventSources: [
        {
            events: [ 
                {
                    title  : 'Sign contract with Mark Zuckerberg',
                    start  : '2017-07-19',
                    description : "<a class='calendar-desc' style='color:white;' href='http://localhost/laravel/public/img/influential-4.jpg' data-lightbox='test'>Mark</a>"
                },
                {
                    title  : 'Discuss next hit with Alica and John',
                    start  : '2017-07-20',
                    end    : '2017-07-22',
                    description : "<a class='calendar-desc' style='color:white;' href='http://localhost/laravel/public/img/influential-3.jpg' data-lightbox='test2'>Alica</a><a class='calendar-desc' style='color:white;' href='http://localhost/laravel/public/img/influential-1.jpg' data-lightbox='test2'>John</a>"
                },
                {
                    title  : 'Meet with Elica and team',
                    start  : '2017-07-22',
                    description : "<a class='calendar-desc' style='color:white;' href='http://localhost/laravel/public/img/influential-2.jpg' data-lightbox='test3'>Elica</a>"
                }
            ],
            editable: true,
            color: 'light-blue',     
            textColor: 'white' 
        }
	    ],

    });    
});

