 $(document).ready(function() {
            'use strict';
           var arrayOfTransitionImages = ["mountain-view.jpg", "travel.jpg","light.jpg"];
            var imageShowtimeinms = 1000;
            var innerCounter = 0;
                setInterval(function () {
                    $('#top-img').attr('src', arrayOfTransitionImages[innerCounter]);
                    innerCounter += 1;
                    if (innerCounter === 3) {
                        innerCounter = 0;
                    }
                }, imageShowtimeinms);
				
				$('input').focus(function() {
        $('input').css('outline-color', '#FF0000');    
    });
        });