/*jshint unused: false */
/* globals replaceWikiVars */

var bannerBackgroundElementId = replaceWikiVars( '{{{banner-background-element}}}' ) || '#WMDE_Banner-facts';

function setBannerBackgroundColor( color ) {
	$( bannerBackgroundElementId ).css( 'background-color', color );
}
