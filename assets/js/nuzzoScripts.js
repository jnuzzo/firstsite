var $window = $(window);

function checkWidth() {
    if ($window.width() < 768) {
    	//Header Adjustments for Mobile
        $('.single-header').find('h1').toggleClass('display-1', 'display-3');
    };
    if ($window.width() >= 768) {
        $('.single-header').find('h1').toggleClass('display-3', 'display-1');   
    }
}
checkWidth();
$(window).resize(checkWidth);

