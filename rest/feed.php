<?php
if( ! defined( 'WPINC' ) ) die;

add_action('rest_api_init',  'brs_instagram_feed');
/**
 * Add `property-results` endpoint to the REST API.
 *
 * Endpoint : wp-json/realtypress/brs1/property-results
 * 
 * @param ListingID required 
 * 
 * @link public/wp-content/plugins/realtypress-premium/includes/shortcodes/shortcode_rps-single-listing.php
 * @link public/wp-content/plugins/realtypress-premium/public/templates/default/property-single-view.php
 *
 * Example: `curl https://example.com/wp-json/realtypress/brs1/property-results`
 *a wp-content/plugins/realtypress-premium/includes/shortcodes/shortcode_rps-listing-carousel.php
 *
 * @since 0.1.0
 */
function brs_instagram_feed()
{
    \register_rest_route(
        'brs/v1',
        '/instagram_feed',
        [
            'methods' => 'GET',
            'callback' => function ($request) {

                $params = $request->get_params();
                return $params;

                

                
            },
        ]
    );
}
