/*
 Author: Rajesh
 */
jQuery(document).ready(function ($) {

    $('#primary-nav .main-nav').slicknav({
        label: '',
        duration: 1000,
        prependTo:'#primary-nav'
    });

    $('#top-nav .common-nav').slicknav({
        label: 'Top Menu',
        duration: 1000,
        prependTo:'#top-nav'
    });


    $('.search-form').select2({
        minimumResultsForSearch: Infinity,
        width: '100%'
    });
    

  /*
     * Replace all SVG images with inline SVG
     */
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });


    $('.mean-container a.meanmenu-reveal').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });


    $("#testimonial-slider").owlCarousel({
        items:2
    });
    $("#home-banner").owlCarousel({
        animateOut: 'slideOutDown',
        animateIn: 'flipInX',
        items:1,
        smartSpeed:450
    });

});




$(window).ready(function(){
    var isotope = (function() {
        var $container = $('#isotopes-container');
        $select = $('#filters select');

        // initialize Isotope
        $container.imagesLoaded(function(){
            $container.isotope({
                // options...
                resizable: false, // disable normal resizing
                // set columnWidth to a percentage of container width
                masonry: { columnWidth: $container.width() / 12 }
            });
        });
        

        // update columnWidth on window resize
        $(window).smartresize(function(){
            $container.isotope({
                // update columnWidth to a percentage of container width
                masonry: { columnWidth: $container.width() / 12 }
            });
        });


        $container.isotope({
            itemSelector : '.isotope-item'
        });

        $select.change(function() {
            var filters = $(this).val();

            $container.isotope({
                filter: filters
            });
        });

        // isotope Filtering
        var $optionSets = $('#filters .option-lists'),
            $optionLinks = $optionSets.find('a');

        $optionLinks.click(function(){
            var $this = $(this);
            // don't proceed if already selected
            if ( $this.hasClass('selected') ) {
                return false;
            }
            var $optionSet = $this.parents('.option-lists');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');

            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
                key = $optionSet.attr('data-option-key'),
                value = $this.attr('data-option-value');
            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
            options[ key ] = value;
            if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
                // changes in layout modes need extra logic
                changeLayoutMode( $this, options )
            } else {
                // otherwise, apply new options
                $container.isotope( options );
            }
            return false;
        });

    });

    isotope();
});