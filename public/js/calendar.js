$(document).ready(function() {
	$('#calendar').fullCalendar({
     	eventSources: [

        // your event source
        {
            events: [ // put the array in the `events` property
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
            color: 'light-blue',     // an option!
            textColor: 'white' // an option!
        }

        // any other event sources...

	    ],
	    navLinks: true,
	    eventMouseover: function(calEvent, jsEvent, view) {
            $(this).append(calEvent.description);

	        console.log('Event: ' + calEvent.title);
	        console.log('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
	        console.log('View: ' + view.name);

	        // change the border color just for fun
	        $(this).css('border-color', 'red');
    	},
        eventMouseout: function(calEvent, jsEvent, view) {
            $('.calendar-desc').remove();
        },

    });    
});

