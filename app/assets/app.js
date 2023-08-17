/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';


// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.

$('.movie-hero').on('click', function() {
    // TODO: separate siteUrl for global configuration
    const siteUrl = "http://netflix.symfony:8080/";
    const currentUrl = window.location.href;

    let id = $(this).data('id');
    let modal = $('#movie-modal');
    let requestUrl = siteUrl + 'movie/modal/' + id;
    let response = $.ajax({
        type: 'GET',
        url: requestUrl,
        success: function(response) {
            modal.show();
            modal.css("z-index", 100);
            modal.html(response);
            $(document).on('click', (function(event)
            {
                let div = $(".modal-sizing");
                if (!div.is(event.target) && div.has(event.target).length === 0)
                {
                    let modal = $('#movie-modal');
                    modal.hide();
                }
            }));
        },
        error : function(xhr, textStatus, errorThrown) {
            alert('Ajax request failed.');
        }
    });
});

