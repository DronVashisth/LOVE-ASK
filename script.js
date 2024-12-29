 $(document).ready(function() {
        // Show popup when 'Yes' button is clicked
        $('#yesBtn').click(function() {
            $('#lovePopup').fadeIn();
        });
    
        // Make 'No' button move around when the user tries to click
        $('#noBtn').hover(function() {
            // Random position within the viewport
            var maxX = $(window).width() - $(this).width();
            var maxY = $(window).height() - $(this).height();
            var randomX = Math.floor(Math.random() * maxX);
            var randomY = Math.floor(Math.random() * maxY);
            
            $(this).css({
                'left': randomX + 'px',
                'top': randomY + 'px'
            });
        });
    });