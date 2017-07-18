$(document).ready(function() {
	$('#calendar').fullCalendar({
     	eventSources: [

        // your event source
        {
            events: [ // put the array in the `events` property
                {
                    title  : 'event1',
                    start  : '2010-01-01'
                },
                {
                    title  : 'event2',
                    start  : '2010-01-05',
                    end    : '2010-01-07'
                },
                {
                    title  : 'event3',
                    start  : '2010-01-09T12:30:00',
                }
            ],
            color: 'black',     // an option!
            textColor: 'yellow' // an option!
        }

        // any other event sources...

	    ],
	    navLinks: true,
	    navLinkDayClick: function(date, jsEvent) {
	        console.log('day', date.format()); // date is a moment
	        console.log('coords', jsEvent.pageX, jsEvent.pageY);
	    },
        navLinkWeekClick: function(weekStart, jsEvent) {
	        console.log('week start', weekStart.format()); // weekStart is a moment
	        console.log('coords', jsEvent.pageX, jsEvent.pageY);
    	},
	    dayClick: function(date, jsEvent, view) {
	        console.log('Clicked on: ' + date.format());
	        console.log('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
	        console.log('Current view: ' + view.name);
        // change the day's background color just for fun
        	$(this).css('background-color', 'red');
    	},
    	eventClick: function(calEvent, jsEvent, view) {
	        console.log('Event: ' + calEvent.title);
	        console.log('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
	        console.log('View: ' + view.name);

	        // change the border color just for fun
	        $(this).css('border-color', 'red');
    	},

    });    
});

