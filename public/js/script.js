let $filterCheckboxes = $('.prd-filter input[type="checkbox"]');
let filterFunc = function() {
    let selectedFilters = {};

    $filterCheckboxes.filter(':checked').each(function() {
        if (!selectedFilters.hasOwnProperty(this.name)) {
            selectedFilters[this.name] = [];
        }

        selectedFilters[this.name].push(this.value);
    });


    var $filterResults = $('.checkshow');

    $.each(selectedFilters, function (name, filterValues) {
        $filterResults = $filterResults.filter(function() {
            var matched = false,
            currentFilterValues = $(this).data('category').split(' ');

            $.each(currentFilterValues, function(_, currentFilterValue){
                if ($.inArray(currentFilterValue, filterValues) != -1) {
                    matched = true;
                    return false;
                }
            });

            return matched;

        });
    });

    
$('.checkshow').fadeOut().filter($filterResults).fadeIn();

}

$filterCheckboxes.on('change',filterFunc);

$($filterCheckboxes).change(
    function(){
      let notThis =  $($filterCheckboxes).not(this);
      notThis.addClass('removechk');
    });


var pbSlides = $('.pb-slider');


pbSlides.owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    autoplayHoverPause: true,
    autoplay: true,
    smartSpeed: 550,
    mouseDrag: false,

    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 1,
        
        },
        1200: {
            items: 1,
        }
    }
});






