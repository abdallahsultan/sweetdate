/**
* Plugin Name: WooCommerce Fly to Cart and Floating Cart
* Plugin URI: http://codecanyon.net/user/smartcms
* Description: fly product to cart and floating cart for woocommerce
* Version: 1.0
* Author: SmartCms Team
* Author URI: http://codecanyon.net/user/smartcms
* License: GPLv2 or later
*/
img = "";
( function() {
	jQuery( document ).mouseup( function( e ) {
		var container = jQuery( '.scwftcafc-container' );
		if ( ! jQuery( '.button.add_to_cart_button' ).is( e.target ) && ! container.is( e.target ) && container.has( e.target ).length === 0 && container.hasClass( 'scwftcafc-container--visible' ) ) {
			container.removeClass( 'scwftcafc-container--visible' );
			jQuery( 'body' ).removeClass( 'scwftcafc-is-visible' );
		}
	});

	jQuery( document ).ready( function() {
		jQuery(".woocommerce-mini-cart .scwtb_content").remove();
		
		////////
		var flytocart_enable = jQuery(".flytocart_enable").val();
		var fly_duration = jQuery(".fly_duration").val() * 1000;
		var cat_element = jQuery(".cat_element").val();
		var cat_but_element = jQuery(".cat_but_element").val();
		
		jQuery( 'body' ).on( 'added_to_cart', function() {
			var windowWidth  = jQuery( window ).width();
			
			if(flytocart_enable == "yes"){
				var position = img.offset();
				var ptop = position.top;
				var pleft  = position.left ;
				
				var cartposition = jQuery(".scwftcafc").offset();
				var fimg = img.clone();
				fimg.css({
						top: ptop,
						left: pleft,
						position:'absolute',
						'height': '150px',
						'width': '150px'
					})
					.appendTo(jQuery('body'))
					.animate({
						top: cartposition.top,
						left: cartposition.left,
						'width': 50,
						'height': 50
					}, fly_duration, function(){
						//if( windowWidth > 768 ){
							if( jQuery( '.scwftcafc-container' ).hasClass( 'scwftcafc-container--visible' ))
								return;
							else
								jQuery( '.scwftcafc-container' ).addClass( 'scwftcafc-container--visible' );
							jQuery( 'body' ).toggleClass( 'scwftcafc-is-visible' );
						//}
					});
				
				fimg.animate({
					'width': 0,
						'height': 0
				}, function () {
					jQuery(this).detach()
				});
			}else{
				//if( windowWidth > 768 ){
					if( jQuery( '.scwftcafc-container' ).hasClass( 'scwftcafc-container--visible' ))
						return;
					else
						jQuery( '.scwftcafc-container' ).addClass( 'scwftcafc-container--visible' );
					jQuery( 'body' ).toggleClass( 'scwftcafc-is-visible' );
				//}
			}
		});
		jQuery(cat_but_element).on('click',function() {
			img = jQuery(this).parent(cat_element).find("img");
		});
		
		jQuery( 'body' ).on( 'removed_from_cart', function(){
			if ( Cookies.get( 'woocommerce_items_in_cart' ) == null ){
				//var windowWidth  = jQuery( window ).width();
				//if ( windowWidth > 768 ) {
					jQuery( '.scwftcafc-container' ).removeClass( 'scwftcafc-container--visible' );
				//}
				jQuery( 'body' ).toggleClass( 'scwftcafc-is-visible' );
			}
		});
	});
})();
