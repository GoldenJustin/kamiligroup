<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog &#8211; Revus</title>
<meta name='robots' content='max-image-preview:large' />
<link rel='dns-prefetch' href='https://maps.googleapis.com/' />
<link rel='dns-prefetch' href='https://fonts.googleapis.com/' />
<link rel="alternate" type="application/rss+xml" title="Revus &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Revus &raquo; Comments Feed" href="../comments/feed/index.html" />
<script>
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"wpemoji":"https:\/\/revus.tm-colors.info\/dealer\/wp-includes\/js\/wp-emoji.js?ver=6.1.3","twemoji":"https:\/\/revus.tm-colors.info\/dealer\/wp-includes\/js\/twemoji.js?ver=6.1.3"}};
/**
 * @output wp-includes/js/wp-emoji-loader.js
 */

( function( window, document, settings ) {
	var src, ready, ii, tests;

	// Create a canvas element for testing native browser support of emoji.
	var canvas = document.createElement( 'canvas' );
	var context = canvas.getContext && canvas.getContext( '2d' );

	/**
	 * Checks if two sets of Emoji characters render the same visually.
	 *
	 * @since 4.9.0
	 *
	 * @private
	 *
	 * @param {number[]} set1 Set of Emoji character codes.
	 * @param {number[]} set2 Set of Emoji character codes.
	 *
	 * @return {boolean} True if the two sets render the same.
	 */
	function emojiSetsRenderIdentically( set1, set2 ) {
		var stringFromCharCode = String.fromCharCode;

		// Cleanup from previous test.
		context.clearRect( 0, 0, canvas.width, canvas.height );
		context.fillText( stringFromCharCode.apply( this, set1 ), 0, 0 );
		var rendered1 = canvas.toDataURL();

		// Cleanup from previous test.
		context.clearRect( 0, 0, canvas.width, canvas.height );
		context.fillText( stringFromCharCode.apply( this, set2 ), 0, 0 );
		var rendered2 = canvas.toDataURL();

		return rendered1 === rendered2;
	}

	/**
	 * Detects if the browser supports rendering emoji or flag emoji.
	 *
	 * Flag emoji are a single glyph made of two characters, so some browsers
	 * (notably, Firefox OS X) don't support them.
	 *
	 * @since 4.2.0
	 *
	 * @private
	 *
	 * @param {string} type Whether to test for support of "flag" or "emoji".
	 *
	 * @return {boolean} True if the browser can render emoji, false if it cannot.
	 */
	function browserSupportsEmoji( type ) {
		var isIdentical;

		if ( ! context || ! context.fillText ) {
			return false;
		}

		/*
		 * Chrome on OS X added native emoji rendering in M41. Unfortunately,
		 * it doesn't work when the font is bolder than 500 weight. So, we
		 * check for bold rendering support to avoid invisible emoji in Chrome.
		 */
		context.textBaseline = 'top';
		context.font = '600 32px Arial';

		switch ( type ) {
			case 'flag':
				/*
				 * Test for Transgender flag compatibility. This flag is shortlisted for the Emoji 13 spec,
				 * but has landed in Twemoji early, so we can add support for it, too.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly (white flag emoji + transgender symbol).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 0x1F3F3, 0xFE0F, 0x200D, 0x26A7, 0xFE0F ],
					[ 0x1F3F3, 0xFE0F, 0x200B, 0x26A7, 0xFE0F ]
				);

				if ( isIdentical ) {
					return false;
				}

				/*
				 * Test for UN flag compatibility. This is the least supported of the letter locale flags,
				 * so gives us an easy test for full support.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly ([U] + [N]).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 0xD83C, 0xDDFA, 0xD83C, 0xDDF3 ],
					[ 0xD83C, 0xDDFA, 0x200B, 0xD83C, 0xDDF3 ]
				);

				if ( isIdentical ) {
					return false;
				}

				/*
				 * Test for English flag compatibility. England is a country in the United Kingdom, it
				 * does not have a two letter locale code but rather an five letter sub-division code.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly (black flag emoji + [G] + [B] + [E] + [N] + [G]).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 0xD83C, 0xDFF4, 0xDB40, 0xDC67, 0xDB40, 0xDC62, 0xDB40, 0xDC65, 0xDB40, 0xDC6E, 0xDB40, 0xDC67, 0xDB40, 0xDC7F ],
					[ 0xD83C, 0xDFF4, 0x200B, 0xDB40, 0xDC67, 0x200B, 0xDB40, 0xDC62, 0x200B, 0xDB40, 0xDC65, 0x200B, 0xDB40, 0xDC6E, 0x200B, 0xDB40, 0xDC67, 0x200B, 0xDB40, 0xDC7F ]
				);

				return ! isIdentical;
			case 'emoji':
				/*
				 * Why can't we be friends? Everyone can now shake hands in emoji, regardless of skin tone!
				 *
				 * To test for Emoji 14.0 support, try to render a new emoji: Handshake: Light Skin Tone, Dark Skin Tone.
				 *
				 * The Handshake: Light Skin Tone, Dark Skin Tone emoji is a ZWJ sequence combining 🫱 Rightwards Hand,
				 * 🏻 Light Skin Tone, a Zero Width Joiner, 🫲 Leftwards Hand, and 🏿 Dark Skin Tone.
				 *
				 * 0x1FAF1 == Rightwards Hand
				 * 0x1F3FB == Light Skin Tone
				 * 0x200D == Zero-Width Joiner (ZWJ) that links the code points for the new emoji or
				 * 0x200B == Zero-Width Space (ZWS) that is rendered for clients not supporting the new emoji.
				 * 0x1FAF2 == Leftwards Hand
				 * 0x1F3FF == Dark Skin Tone.
				 *
				 * When updating this test for future Emoji releases, ensure that individual emoji that make up the
				 * sequence come from older emoji standards.
				 */
				isIdentical = emojiSetsRenderIdentically(
					[0x1FAF1, 0x1F3FB, 0x200D, 0x1FAF2, 0x1F3FF],
					[0x1FAF1, 0x1F3FB, 0x200B, 0x1FAF2, 0x1F3FF]
				);

				return ! isIdentical;
		}

		return false;
	}

	/**
	 * Adds a script to the head of the document.
	 *
	 * @ignore
	 *
	 * @since 4.2.0
	 *
	 * @param {Object} src The url where the script is located.
	 * @return {void}
	 */
	function addScript( src ) {
		var script = document.createElement( 'script' );

		script.src = src;
		script.defer = script.type = 'text/javascript';
		document.getElementsByTagName( 'head' )[0].appendChild( script );
	}

	tests = Array( 'flag', 'emoji' );

	settings.supports = {
		everything: true,
		everythingExceptFlag: true
	};

	/*
	 * Tests the browser support for flag emojis and other emojis, and adjusts the
	 * support settings accordingly.
	 */
	for( ii = 0; ii < tests.length; ii++ ) {
		settings.supports[ tests[ ii ] ] = browserSupportsEmoji( tests[ ii ] );

		settings.supports.everything = settings.supports.everything && settings.supports[ tests[ ii ] ];

		if ( 'flag' !== tests[ ii ] ) {
			settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && settings.supports[ tests[ ii ] ];
		}
	}

	settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && ! settings.supports.flag;

	// Sets DOMReady to false and assigns a ready function to settings.
	settings.DOMReady = false;
	settings.readyCallback = function() {
		settings.DOMReady = true;
	};

	// When the browser can not render everything we need to load a polyfill.
	if ( ! settings.supports.everything ) {
		ready = function() {
			settings.readyCallback();
		};

		/*
		 * Cross-browser version of adding a dom ready event.
		 */
		if ( document.addEventListener ) {
			document.addEventListener( 'DOMContentLoaded', ready, false );
			window.addEventListener( 'load', ready, false );
		} else {
			window.attachEvent( 'onload', ready );
			document.attachEvent( 'onreadystatechange', function() {
				if ( 'complete' === document.readyState ) {
					settings.readyCallback();
				}
			} );
		}

		src = settings.source || {};

		if ( src.concatemoji ) {
			addScript( src.concatemoji );
		} else if ( src.wpemoji && src.twemoji ) {
			addScript( src.twemoji );
			addScript( src.wpemoji );
		}
	}

} )( window, document, window._wpemojiSettings );
</script>
<style>
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css' href='../wp-includes/css/dist/block-library/style.css%3Fver=6.1.3.css' media='all' />
<link rel='stylesheet' id='bp-login-form-block-css' href='../wp-content/plugins/buddypress/bp-core/css/blocks/login-form.css%3Fver=10.6.0.css' media='all' />
<link rel='stylesheet' id='bp-member-block-css' href='../wp-content/plugins/buddypress/bp-members/css/blocks/member.css%3Fver=10.6.0.css' media='all' />
<link rel='stylesheet' id='bp-members-block-css' href='../wp-content/plugins/buddypress/bp-members/css/blocks/members.css%3Fver=10.6.0.css' media='all' />
<link rel='stylesheet' id='bp-dynamic-members-block-css' href='../wp-content/plugins/buddypress/bp-members/css/blocks/dynamic-members.css%3Fver=10.6.0.css' media='all' />
<link rel='stylesheet' id='bp-latest-activities-block-css' href='../wp-content/plugins/buddypress/bp-activity/css/blocks/latest-activities.css%3Fver=10.6.0.css' media='all' />
<link rel='stylesheet' id='nk-awb-css' href='../wp-content/plugins/advanced-backgrounds/assets/awb/awb.min.css%3Fver=1.9.4.css' media='all' />
<link rel='stylesheet' id='wc-blocks-vendors-style-css' href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css%3Fver=1670584143.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-css' href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css%3Fver=1670584143.css' media='all' />
<link rel='stylesheet' id='classic-theme-styles-css' href='../wp-includes/css/classic-themes.css%3Fver=1.css' media='all' />
<style id='global-styles-inline-css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('page/1/index.html');--wp--preset--duotone--grayscale: url('page/1/index.html');--wp--preset--duotone--purple-yellow: url('page/1/index.html');--wp--preset--duotone--blue-red: url('page/1/index.html');--wp--preset--duotone--midnight: url('page/1/index.html');--wp--preset--duotone--magenta-yellow: url('page/1/index.html');--wp--preset--duotone--purple-green: url('page/1/index.html');--wp--preset--duotone--blue-orange: url('page/1/index.html');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='compareaddcss-css' href='../wp-content/plugins/compare-cars/css/add-compare.css%3Fver=6.1.3.css' media='all' />
<link rel='stylesheet' id='contact-form-7-css' href='../wp-content/plugins/contact-form-7/includes/css/styles.css%3Fver=5.6.4.css' media='all' />
<link rel='stylesheet' id='pmpro_frontend-css' href='../wp-content/plugins/paid-memberships-pro/css/frontend.css%3Fver=2.9.7.css' media='screen' />
<link rel='stylesheet' id='pmpro_print-css' href='../wp-content/plugins/paid-memberships-pro/css/print.css%3Fver=2.9.7.css' media='print' />
<link rel='stylesheet' id='pixad-autos-css' href='../wp-content/plugins/pix-auto-deal/assets/css/pixad-autos.css%3Fver=6.1.3.css' media='all' />
<link rel='stylesheet' id='magnific-popup-css' href='../wp-content/plugins/pix-auto-deal/assets/css/magnific-popup.css%3Fver=1.0.0.css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css' href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css%3Fver=7.1.1.css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css' href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css%3Fver=7.1.1.css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css' href='../wp-content/plugins/woocommerce/assets/css/woocommerce.css%3Fver=7.1.1.css' media='all' />
<style id='woocommerce-inline-inline-css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='youzify-customStyle-css' href='../wp-content/plugins/youzify/includes/admin/assets/css/custom-script.css%3Fver=6.1.3.css' media='all' />
<style id='youzify-customStyle-inline-css'>

body .youzify div.item-list-tabs li.youzify-activity-show-search .youzify-activity-show-search-form i,
body #youzify-wall-nav .item-list-tabs li#activity-filter-select label,
body .youzify-media-filter .youzify-filter-item .youzify-current-filter,
body .youzify-community-hashtags .youzify-hashtag-item:hover,
body .youzify table tfoot tr,
body .youzify table thead tr,
body #youzify-group-body h1:before,
body .youzify-product-actions .youzify-addtocart,
body .youzify .checkout_coupon,
body .youzify .youzify-wc-box-title h3,
body .youzify .woocommerce-customer-details h2,
body .youzify .youzify-wc-main-content .track_order .form-row button,
body .youzify-view-order .youzify-wc-main-content > p mark.order-status,
body .youzify .youzify-wc-main-content button[type='submit'],
body .youzify .youzify-wc-main-content #payment #place_order,
body .youzify .youzify-wc-main-content h3,
body .youzify .wc-proceed-to-checkout a.checkout-button,
body .youzify .wc-proceed-to-checkout a.checkout-button:hover,
body .youzify .youzify-wc-main-content .woocommerce-checkout-review-order table.shop_table tfoot .order-total,
body .youzify .youzify-wc-main-content .woocommerce-checkout-review-order table.shop_table thead,
body .youzify .youzify-wc-main-content table.shop_table td a.woocommerce-MyAccount-downloads-file:before,
body .youzify .youzify-wc-main-content table.shop_table td a.view:before,
body .youzify table.shop_table.order_details tfoot tr:last-child,
body .youzify .youzify-wc-main-content table.shop_table td.actions .coupon button,
body .youzify .youzify-wc-main-content table.shop_table td.woocommerce-orders-table__cell-order-number a,
body .youzify .youzify-wc-main-content table.shop_table thead,
body .youzify-forums-topic-item .youzify-forums-topic-icon i,
body .youzify-forums-forum-item .youzify-forums-forum-icon i,
body div.bbp-submit-wrapper button,
body #bbpress-forums li.bbp-header,
body #bbpress-forums .bbp-search-form #bbp_search_submit,
body #bbpress-forums #bbp-search-form #bbp_search_submit,
body .widget_display_search #bbp_search_submit,
body .widget_display_forums li a:before,
body .widget_display_views li .bbp-view-title:before,
body .widget_display_topics li:before,
body #bbpress-forums li.bbp-footer,
body .bbp-pagination .page-numbers.current,
body .youzify-items-list-widget .youzify-list-item .youzify-item-action .youzify-add-button i,
body #youzify-members-list .youzify-user-actions .friendship-button .requested,
body .youzify-wall-embed .youzify-embed-action .friendship-button a.requested,
body .youzify-widget .youzify-user-tags .youzify-utag-values .youzify-utag-value-item,
body .item-list-tabs #search-message-form #messages_search_submit,
body #youzify-groups-list .action .group-button .membership-requested,
body #youzify-members-list .youzify-user-actions .friendship-button a,
body #youzify-groups-list .action .group-button .request-membership,
body .youzify-wall-embed .youzify-embed-action .friendship-button a,
body .youzify-group-manage-members-search #members_search_submit,
body #youzify-groups-list .action .group-button .accept-invite,
body .notifications-options-nav #notification-bulk-manage,
body .notifications .notification-actions .mark-read span,
body .sitewide-notices .thread-options .activate-notice,
body #youzify-groups-list .action .group-button .join-group,
body .youzify-social-buttons .friendship-button a.requested,
body #youzify-directory-search-box form input[type=submit],
body .youzify-user-actions .friendship-button a.requested,
body .youzify-wall-embed .youzify-embed-action .group-button a,
body #youzify-group-buttons .group-button a.join-group,
body .messages-notices .thread-options .read span,
body .youzify-social-buttons .friendship-button a,
body #search-members-form #members_search_submit,
body .messages-options-nav #messages-bulk-manage,
body .youzify-group-settings-tab input[type='submit'],
body .youzify-user-actions .friendship-button a.add,
body #group-settings-form input[type='submit'],
body .youzify-product-content .youzify-featured-product,
body .my-friends #friend-list .action a.accept,
body .youzify-wall-new-post .youzify-post-more-button,
body .group-request-list .action .accept a,
body #message-recipients .highlight-icon i,
body .youzify-pagination .page-numbers.current,
body .youzify-project-content .youzify-project-type,
body .youzify-author .youzify-account-settings,
body .youzify-product-actions .youzify-addtocart,
body .group-button.request-membership,
body #send_message_form .submit #send,
body #send-invite-form .submit input,
body #send-reply #send_reply_button,
body .youzify-wall-actions .youzify-wall-post,
body .youzify-post-content .youzify-post-type,
body .youzify-nav-effect .youzify-menu-border,
body #group-create-tabs li.current,
body .group-button.accept-invite,
body .youzify-tab-post .youzify-read-more,
body .group-button.join-group,
body .youzify-service-icon i:hover,
body .youzify-loading .youzify_msg,
body .youzify-scrolltotop i:hover,
body .youzify-post .youzify-read-more,
body .youzify-author .youzify-login,
body .pagination .current,
body .youzify-tab-title-box,
body #youzify button[type='submit'],
body .youzify-wall-file-post,
body .youzify-current-bg-color,
body .youzify-current-checked-bg-color:checked,
body .button.accept {
            background-color: #d01818 !important;
            color: #ffffff !important;
        }

@media screen and ( max-width: 768px ) {
body #youzify .youzify-group div.item-list-tabs li.last label,
body #youzify .youzify-profile div.item-list-tabs li.last label,
body #youzify .youzify-directory-filter .item-list-tabs li#groups-order-select label,
body #youzify .youzify-directory-filter .item-list-tabs li#members-order-select label {
    background-color: #d01818 !important;
    color: #fff;
}
}
        body .youzify-bbp-topic-head-meta .youzify-bbp-head-meta-last-updated a:not(.bbp-author-name),
        body .widget_display_topics li .topic-author a.bbp-author-name,
        body .activity-header .activity-head p a:not(:first-child),
        body #message-recipients .highlight .highlight-meta a,
        body .thread-sender .thread-from .from .thread-count,
        body .youzify-profile-navmenu .youzify-navbar-item a:hover i,
        body .widget_display_replies li a.bbp-author-name,
        body .youzify-profile-navmenu .youzify-navbar-item a:hover,
        body .youzify-link-main-content .youzify-link-url:hover,
        body .youzify-wall-new-post .youzify-post-title a:hover,
        body .youzify-recent-posts .youzify-post-title a:hover,
        body .youzify-post-content .youzify-post-title a:hover,
        body .youzify-group-settings-tab fieldset legend,
        body .youzify-wall-link-data .youzify-wall-link-url,
        body .youzify-tab-post .youzify-post-title a:hover,
        body .youzify-project-tags .youzify-tag-symbole,
        body .youzify-post-tags .youzify-tag-symbole,
        body .youzify-group-navmenu li a:hover {
            color: #d01818 !important;
        }

        body .youzify-bbp-topic-head,
        body .youzify .youzify-wc-main-content address .youzify-bullet,
        body .youzify-profile-navmenu .youzify-navbar-item.youzify-active-menu,
        body .youzify-group-navmenu li.current {
            border-color: #d01818 !important;
        }

        body .quote-with-img:before,
        body .youzify-link-content,
        body .youzify-no-thumbnail,
        body a.youzify-settings-widget {
            background: #d01818 url(../wp-content/plugins/youzify/includes/public/assets/images/dotted-bg.png) !important;
        }
    
</style>
<link rel='stylesheet' id='youzify-opensans-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C600&#038;ver=3.2.5' media='all' />
<link rel='stylesheet' id='youzify-css' href='../wp-content/plugins/youzify/includes/public/assets/css/youzify.min.css%3Fver=3.2.5.css' media='all' />
<link rel='stylesheet' id='youzify-headers-css' href='../wp-content/plugins/youzify/includes/public/assets/css/youzify-headers.min.css%3Fver=3.2.5.css' media='all' />
<link rel='stylesheet' id='dashicons-css' href='../wp-includes/css/dashicons.css%3Fver=6.1.3.css' media='all' />
<link rel='stylesheet' id='youzify-social-css' href='../wp-content/plugins/youzify/includes/public/assets/css/youzify-social.min.css%3Fver=3.2.5.css' media='all' />
<link rel='stylesheet' id='youzify-icons-css' href='../wp-content/plugins/youzify/includes/admin/assets/css/all.min.css%3Fver=3.2.5.css' media='all' />
<link rel='stylesheet' id='bootstrap-css' href='../wp-content/themes/revus/assets/css/libs/bootstrap.css%3Fver=4.0.css' media='all' />
<link rel='stylesheet' id='font-awesome-css' href='../wp-content/themes/revus/assets/css/libs/font-awesome.css%3Fver=4.7.css' media='all' />
<link rel='stylesheet' id='revus-custom-icon-font-css' href='../wp-content/themes/revus/assets/css/libs/fl-custom-font.css%3Fver=1.0.css' media='all' />
<link rel='stylesheet' id='simple-line-icons-css' href='../wp-content/themes/revus/assets/css/libs/simple-line-icons.css%3Fver=1.0.css' media='all' />
<link rel='stylesheet' id='modal-box-css' href='../wp-content/themes/revus/assets/css/libs/modal-box.css%3Fver=1.1.0.css' media='all' />
<link rel='stylesheet' id='venobox-css' href='../wp-content/themes/revus/assets/css/libs/venobox.css%3Fver=1.8.6.css' media='all' />
<link rel='stylesheet' id='fancybox-css' href='../wp-content/themes/revus/assets/css/libs/fancybox.css%3Fver=1.0.css' media='all' />
<link rel='stylesheet' id='master-css' href='../wp-content/themes/revus/assets/css/master.css%3Fver=1.8.6.css' media='all' />
<link rel='stylesheet' id='revus-general-css' href='../wp-content/themes/revus/assets/css/sass/general.css%3Fver=1.0.css' media='all' />
<style id='revus-general-inline-css'>
.fl-primary-color,.fl-primary-hv-color:hover{color:#d01818}.fl-primary-bg,.fl-primary-hv-bg:hover{background-color:#d01818;}.fl-secondary-color,.fl-secondary-hv-color:hover{color:#253241;}.fl-secondary-bg,.fl-secondary-hv-bg:hover{background-color:#253241;}.fl-light-color,.fl-light-hv-color:hover{color:#f1f5fa;}.fl-light-bg,.fl-light-hv-bg:hover{background-color:#f1f5fa;}.fl-dark-color,.fl-dark-hv-color:hover{color:#253241;}.fl-dark-bg,.fl-dark-hv-bg:hover{background-color:#253241;}.fl-theme-border-color,input,select,textarea,fieldset,table,th,td,.wp-block-table.is-style-stripes td, .wp-block-table.is-style-stripes th,pre, fieldset, input, textarea, table, table *, hr,.fl-default-pagination .page-numbers,.autos-pagination li,#pix-sorting .sorting__inner .sorting__item.view-by a{border-color:#dddddd!important;}.jelect-option:hover, .jelect-option_state_active{background-color:#d01818;}.fl-mega-menu ul li.current-menu-item >a{color:#d01818}.fl--header .nav-menu li a:hover{color:#d01818}.fl-top-header-content .info-container .left-top-header-content .header-sidebar a:hover{color:#d01818;}.fl-top-header-content .info-container .right-top-header-content .header-btn:before{background-color:#d01818;}.fl-top-header-content .info-container:after{border-color:#253241 #253241 transparent transparent;}.fl-top-header-content{background-color:#253241;}.fl-header--navigation .fl-bottom-header-content .fl-navigation-container .header-contact i{color:#d01818;}.fl-header--navigation .fl-bottom-header-content .fl-navigation-container .header-contact .header-contacts__inner .header-contacts__number:hover{color:#d01818;}.fl-top-header-content .info-container .right-top-header-content .header-btn:after{background-color:#121820}.fl-header--navigation .fl-bottom-header-content .fl-navigation-container .sell-car-wrap div a{color:#d01818;}.fl-header--navigation .fl-bottom-header-content .fl-navigation-container .sell-car-wrap div a:hover{color:#253241;}.fl-vc-counter-wrapper .fl-counter-wrapper-inner{background-color:#f1f5fa}.fl-vc-counter-wrapper .fl-counter-wrapper-inner:after{ border-color: transparent transparent #253241 #253241;}.post-archive-wrapper .fl-post-item .post-top-content .post-date{background-color:#d01818;}.post-archive-wrapper .fl-post-item .post-bottom-content .post-btn-read-more-info .post-link:before{background-color:#253241;}.post-archive-wrapper .fl-post-item .post-bottom-content .post-btn-read-more-info .post-link:after{background-color:#d01818;}.post-archive-wrapper .fl-post-item .post-top-content .post--holder .post-link-mask .post-format-link:hover .link-text{color:#d01818;}.sticky .post--title .title-link{color:#d01818;}blockquote{background-color:#f1f5fa;}.single-post-wrapper .post-tags-content{background-color:#f1f5fa}.single-post-wrapper .post-tags-content i{color:#d01818}.single-post-wrapper .post-tags-content a{color:#253241}.single-post-wrapper .post-tags-content a:hover{color:#d01818}.single-page-wrapper a:hover, .post-inner_content a:hover, .comment-moderation a:hover{color:#d01818;}.single-page-wrapper .wp-block-search button, .post-inner_content .wp-block-search button, .comment-moderation .wp-block-search button{background-color:#d01818;}.single-page-wrapper .wp-block-search button:hover, .post-inner_content .wp-block-search button:hover, .comment-moderation .wp-block-search button:hover{background-color:#253241;}.single-page-wrapper .wp-block-tag-cloud a, .post-inner_content .wp-block-tag-cloud a, .comment-moderation .wp-block-tag-cloud a{background-color:#f1f5fa}.single-page-wrapper .wp-block-tag-cloud a:hover, .post-inner_content .wp-block-tag-cloud a:hover, .comment-moderation .wp-block-tag-cloud a:hover{background-color:#d01818}.post-inner-pagination .post-page-numbers.current, .page-inner-pagination .post-page-numbers.current{background-color:#d01818;border-color:#d01818}.fl-page-heading{background-color:#121820;}.fl-default-pagination .page-numbers{color:#253241;}.fl-default-pagination .page-numbers.current, .fl-default-pagination .page-numbers:hover{background-color:#d01818!important;border-color:#d01818!important;}form.fl-comment-form .comment-form-cookies-consent input[type=checkbox]:checked:after{color:#d01818}.comments-container .comments-list .fl-comment .comment-container .comment-meta .comments--reply-wrapper .comment--reply a{background-color:#f1f5fa;}.comments-container .comments-list .fl-comment .comment-container .comment-meta .comments--reply-wrapper .comment--reply a{color:#253241;}.comments-container .comments-list .fl-comment .comment-container .comment-meta .comments--reply-wrapper .comment--reply a:hover{background-color:#d01818;}.comment-reply-title #cancel-comment-reply-link{color:#253241}.comment-reply-title #cancel-comment-reply-link:hover{color:#d01818}.comments-container .comments-list .fl-comment .comment-container .comment-meta .comments--reply-wrapper .comment-author-name{color:#253241}.fl-button.primary-button:before{background-color:#d01818}.fl-button.primary-button:after{background-color:#253241}.fl-button.primary-button.dark-hover-bg-button:after{background-color:#121820}.fl-button.secondary-button:before{background-color:#253241}.fl-button.secondary-button:after{background-color:#d01818}#pix-sorting .sorting__inner .sorting__item.view-by a:hover, #pix-sorting .sorting__inner .sorting__item.view-by a.active{background-color:#f1f5fa;color:#253241;}.card-auto-label{background-color:#d01818;}.pix-dynamic-content #pixad-listing.grid .post-auto-grid .entry-auto-grid-wrap .bottom-content-wrap .price-auto-wrap .slider-grid-price{color:#d01818}.pix-dynamic-content #pixad-listing.grid .post-auto-grid .entry-auto-grid-wrap .top-content-wrap .favorite-car-wrap a span.add-fvrt:hover{background-color:#d01818;}.pix-dynamic-content #pixad-listing.grid .post-auto-grid .entry-auto-grid-wrap .top-content-wrap .compare-car-wrap .add-to-compare .rem-cmpr{background-color:#d01818;}.pix-dynamic-content #pixad-listing.grid .post-auto-grid .entry-auto-grid-wrap .top-content-wrap .compare-car-wrap .add-to-compare .add-cmpr:hover{background-color:#d01818;}.pix-dynamic-content #pixad-listing.grid .post-auto-grid.dark-style .bottom-content-wrap{background-color:#253241;}.pix-dynamic-content #pixad-listing.grid .post-auto-grid .entry-auto-grid-wrap .top-content-wrap .compare-car-wrap .add-to-compare .add-cmpr,.pix-dynamic-content #pixad-listing.grid .post-auto-grid .entry-auto-grid-wrap .top-content-wrap .favorite-car-wrap a span.add-fvrt{color:#253241;}.pix-dynamic-content #pixad-listing.grid .post-auto-grid .entry-auto-grid-wrap .top-content-wrap .image-grid-mask{background-color:#253241;}.pix-dynamic-content #pixad-listing.list .post-auto-list .post-entry-content .left-car-content .car-label-list{background-color:#d01818}.pix-dynamic-content #pixad-listing.list .post-auto-list .post-entry-content .left-car-content .favorite-car-wrap a span.add-fvrt{color:#253241;}.pix-dynamic-content #pixad-listing.list .post-auto-list .post-entry-content .left-car-content .favorite-car-wrap a span.add-fvrt:hover{background-color:#d01818;}.pix-dynamic-content #pixad-listing.list .post-auto-list .post-entry-content .left-car-content .favorite-car-wrap a.active-add-favorite .rem-fvrt{background-color:#d01818}.pix-dynamic-content #pixad-listing.list .post-auto-list .post-entry-content .right-car-content .right-car-content-right-wrap .compare-car-wrap .add-to-compare .add-cmpr{background-color:#f1f5fa;}.pix-dynamic-content #pixad-listing.list .post-auto-list .post-entry-content .right-car-content .right-car-content-right-wrap .compare-car-wrap .add-to-compare .add-cmpr:hover,.pix-dynamic-content #pixad-listing.list .post-auto-list .post-entry-content .right-car-content .right-car-content-right-wrap .compare-car-wrap .add-to-compare .rem-cmpr{background-color:#d01818;}.pix-auto-wrapper-loader.ajax-loading .post-auto-grid .top-content-wrap:after{color:#d01818!important;}.pix-auto-wrapper-loader.ajax-loading .post-auto-list .left-car-content:after{color:#d01818!important;}.autos-pagination li.active, .autos-pagination li:hover{background-color:#d01818!important;border-color:#d01818!important;}.pix-dynamic-content #pixad-listing.grid .post-auto-grid .entry-auto-grid-wrap .top-content-wrap .favorite-car-wrap a.active-add-favorite .rem-fvrt{background-color:#d01818}.car-details .auto-carousel .slides li.slick-current:after{border-color:#d01818;}.car-details .wrap-nav-table-content ul li.active span:before, .car-details .wrap-nav-table-content ul li:hover span:before{background-color:#d01818;}.car-details .tabs-content .tab-content ul:not(.pixad-features-list) > li:before{color:#d01818;}.sidebar .dealer-info .social-info ul li a{color:#253241;}.b-submit__aside-step-inner-info h4{border-left-color:#d01818;}.b-submit__aside-step-inner.m-active{background:#d01818;}.sidebar:not(.cars-sidebar) .widget,.sidebar.cars-sidebar{background-color:#f1f5fa;}.sidebar .widget .widget-title{background-color:#253241;}.sidebar .widget .widget-title:after{border-left-color:#d01818;border-top-color:#d01818;}.sidebar .widget a{color:#253241;}.sidebar .widget a:hover{color:#d01818;}.sidebar .widget_tag_cloud .tagcloud a:hover{background-color:#d01818;border-color:#d01818;}.sidebar .widget_tag_cloud .tagcloud a{border-color:#dddddd;}.sidebar .widget_calendar .calendar_wrap .wp-calendar-nav .wp-calendar-nav-prev a:hover, .sidebar .widget_calendar .calendar_wrap .wp-calendar-nav .wp-calendar-nav-next a:hover,.sidebar .widget_calendar .calendar_wrap #wp-calendar tbody tr td a:hover:before{background-color:#d01818!important;}.sidebar.cars-sidebar .widget.pixad-filter .noUi-horizontal .noUi-handle:after{background-color:#d01818;}.sidebar.cars-sidebar .widget.pixad-filter .noUi-target{border-color:#d01818;}.sidebar-title-content:after{border-left-color: #d01818;border-top-color: #d01818;}.sidebar-title-content{background-color:#253241;}.sidebar.cars-sidebar .widget.pixad-filter .list-categories .list-categories__item input[type=checkbox]:checked+label{border-color: #d01818;}.sidebar .widget-content .list-categories li input[type=checkbox]:checked + label .auto_body_name{color:#d01818;}.sidebar .widget_calendar .calendar_wrap #wp-calendar tbody tr td a:before{background-color:#d01818;}.sidebar .widget_calendar .calendar_wrap #wp-calendar tbody tr td a:hover:before{background-color:#253241!important;}.calendar-wrap .fc-widget-header th{background-color:#253241!important;}.sidebar .dealer-info .dealer-bottom-info .phone-info .right .phone-text:hover{color:#d01818;}.sidebar .dealer-info .social-info ul li a:hover{color:#d01818}.sidebar .dealer-info .dealer-top-info{background-color:#253241}.sidebar .auto-price-info .bottom-info{background-color:#f1f5fa}footer{background-color:#121820;}footer .top-content-footer .footer-social a{background-color:#253241}footer .top-content-footer .footer-social a:hover{background-color:#d01818}.footer-widget-area .widget_nav_menu ul li a:hover:before{color:#d01818}.widget_fl_theme_helper_wmpl_mailchimp_footer .mailchimp-footer-form .form-btn button:before{background-color:#d01818}.widget_fl_theme_helper_wmpl_mailchimp_footer .mailchimp-footer-form .form-btn button:after{background-color:#253241}.vc_row.bg-dark-color{background-color:#253241;}.vc_row.bg-light-color{background-color:#f1f5fa;}.fl-vc-icon-box .icon-box-style-one{color:#253241}.fl-vc-icon-box .icon-box-style-two{color:#253241}.fl-vc-icon-box .icon-box-style-two:after{border-bottom-color:#d01818!important;border-left-color:#d01818!important;}.fl-vc-icon-box .icon-box-style-two.primary-icon-box-style{background-color:#253241}.fl-vc-contact-icon-box .contact-icon-box-container{background-color:#f1f5fa}.fl-vc-contact-icon-box .contact-icon-box-container.primary-icon-box-style .top-content{background-color:#d01818}.fl-vc-contact-icon-box .contact-icon-box-container.secondary-icon-box-style .top-content{background-color:#253241}.fl-vc-contact-icon-box .contact-icon-box-container .bottom-content .icon-bottom-content a:hover{color:#d01818}.fl-vc-contact-icon-box .contact-icon-box-container:after{border-color: transparent transparent #253241 #253241;}.fl-team-content-vc .fl-team-container .team-top-content .team-top-container-mask{background-color:#253241}.fl-team-content-vc .fl-team-container .team-bottom-content .bottom-inner-content{background-color:#253241}.fl-team-content-vc .fl-team-container:hover .team-bottom-content .bottom-inner-content{background-color:#d01818}.fl-team-content-vc .fl-team-container.team-style-one .team-top-content .team-social li a i,.fl-team-content-vc .fl-team-container.team-style-two .team-top-content .entry-top-content .team-social li a i{color:#253241}.fl-team-content-vc .fl-team-container .team-top-content .entry-top-content .team-social li a:hover i,.fl-team-content-vc .fl-team-container.team-style-one .team-top-content .team-social li a:hover i{color:#d01818}.fl-team-content-vc .fl-team-container.team-style-one .team-phone-number-container a:hover{color:#d01818}.fl-fancy-text-content-vc .fl-fancy-text-container{color:#253241}.fl-fancy-text-content-vc .fl-fancy-text-container .fancy-text-item-content .top-content .fancy-text-number:after{background-color:#d01818}.fl-fancy-text-content-vc .fl-fancy-text-container .fancy-text-item-content .top-content:before{background-image: linear-gradient(to right,#253241 40%,rgba(255,255,255,0) 0);}.fl-vc-testimonial-slider-wrapper .testimonial-slider.testimonial-style-one .slick-dots li.slick-active button, .fl-vc-testimonial-slider-wrapper .testimonial-slider.testimonial-style-one .slick-dots li:hover button{background-color:#d01818;border-color:#d01818;}.fl-vc-testimonial-slider-wrapper .testimonial-slider.testimonial-style-two .slick-dots li.slick-active button, .fl-vc-testimonial-slider-wrapper .testimonial-slider.testimonial-style-two .slick-dots li:hover button{background-color:#d01818;border-color:#d01818;}.fl-vc-testimonial-slider-wrapper .testimonial-slider.testimonial-style-two .slide-content .top-slider-content{background-color:#f1f5fa;}.fl-vc-testimonial-slider-wrapper .testimonial-slider.testimonial-style-two .slide-content .top-slider-content:after{    border-color: #f1f5fa #f1f5fa transparent transparent;}.fl-vc-tabs.tab-style-one .tabs-entry-content .nav-tabs li.active{background-color:#d01818;}.fl-vc-tabs.tab-style-one .tabs-entry-content .nav-tabs li{color:#253241}.fl-vc-tabs.tab-style-two .tabs-entry-content .nav-tabs li.active{background-color:#d01818;}.fl-vc-tabs.tab-style-two .tabs-entry-content .nav-tabs li{color:#253241}.fl-banner-content-vc .fl-banner-container.banner-style-one .banner-entry-content .banner-label{background-color:#d01818;}.fl-banner-content-vc .fl-banner-container.banner-style-one .banner-entry-content .subtitle-additional-text-container .additional-text-content{color:#d01818;}.fl-banner-content-vc .fl-banner-container.banner-style-two .banner-label{background-color:#d01818;}.fl-banner-content-vc .fl-banner-container.banner-style-three .title-label-container .banner-label{background-color:#d01818;}.fl-accordion .vc_tta-container .vc_tta-panels .vc_tta-panel.vc_active .fl-tta-panel-icon i,.fl-accordion .vc_tta-container .vc_tta-panels .vc_tta-panel:hover .fl-tta-panel-icon i{color:#d01818}.fl-accordion .vc_tta-container .vc_tta-panels .vc_tta-panel{border-color:#dddddd!important}.fl-resent-cars-vc .resent-cars-container .resent-car-item .entry-auto-grid-wrap .top-content-wrap .image-grid-mask{background-color:#253241;}.fl-resent-cars-vc .resent-cars-container .resent-car-item .entry-auto-grid-wrap .bottom-content-wrap{background-color:#253241;}.fl-resent-cars-vc .resent-cars-container .resent-car-item .entry-auto-grid-wrap .top-content-wrap .compare-car-wrap .add-to-compare .add-cmpr, .fl-resent-cars-vc .resent-cars-container .resent-car-item .entry-auto-grid-wrap .top-content-wrap .favorite-car-wrap a span.add-fvrt{color:#253241;}.fl-resent-cars-vc .resent-cars-container .resent-car-item .entry-auto-grid-wrap .top-content-wrap .favorite-car-wrap a.active-add-favorite .rem-fvrt{background-color:#d01818;}.fl-resent-cars-vc .resent-cars-container .resent-car-item .entry-auto-grid-wrap .top-content-wrap .favorite-car-wrap a span.add-fvrt:hover{background-color:#d01818;}.fl-resent-cars-vc .resent-cars-container .resent-car-item .entry-auto-grid-wrap .top-content-wrap .compare-car-wrap .add-to-compare .rem-cmpr{background-color:#d01818;}.fl-resent-cars-vc .resent-cars-container .resent-car-item .entry-auto-grid-wrap .top-content-wrap .compare-car-wrap .add-to-compare .add-cmpr:hover{background-color:#d01818;}.fl-resent-cars-vc .resent-cars-container .resent-car-item:hover .entry-auto-grid-wrap .bottom-content-wrap{background-color:#d01818;}.fl-resent-cars-vc .resent-cars-container .resent-car-item:hover .entry-auto-grid-wrap .bottom-content-wrap .title-content .card-auto-label{background-color:#253241;}.fl-phone-number-wrapper-vc .bottom-content i{color:#d01818;}.fl-phone-number-wrapper-vc .bottom-content .phone-number-link:hover{color:#d01818;}.fl-cars-slider-wrap-vc .cars-slider .slider-car-item .top-content-wrap .item-car-slider-price .slider-grid-price{background-color:#d01818;}.car-slider-arrow-style-two-wrap .slider-arrow-wrap .slider-arrow-left:hover, .car-slider-arrow-style-two-wrap .slider-arrow-wrap .slider-arrow-right:hover{background-color:#d01818;}.fl-cars-slider-wrap-vc.car-slider-style-two-wrap .cars-slider .slider-car-item:hover .bottom-content-wrap{background-color:#d01818;}.fl-cars-slider-wrap-vc .cars-slider .slider-car-item .top-content-wrap .image-grid-mask{background-color:#253241!important;}.fl-cars-slider-wrap-vc.car-slider-style-two-wrap .cars-slider .slider-car-item:hover .bottom-content-wrap .title-content .card-auto-label{background-color:#253241;}.fl-custom-banner-content-vc .fl-custom-banner-container.primary-custom-banner-style .custom-banner-entry-content{background-color:#d01818}.fl-custom-banner-content-vc .fl-custom-banner-container.secondary-custom-banner-style .custom-banner-entry-content{background-color:#253241}.slide-one-content .rev-slide-inner-content:after{background:#253241;}.slide-one-content .rev-slide-inner-content .slide-bottom-content .slide-button-wrap .slider-decor{background:#253241;}.slide-one-content .rev-slide-inner-content .slide-bottom-content .slide-button-wrap .button-slider-link:hover{color:#d01818;}.slide-two-content .rev-slide-inner-content .slide-button-wrap .button-slider-link:hover{color:#d01818}.slide-two-content .rev-slide-inner-content .slide-bottom-content .slide-button-wrap .slider-decor{background:#253241;}.fl-pricing-table .title-wrap .pricing-table-sub-title{color:#d01818;}.fl-pricing-table .pricing-table-price-wrap{color:#d01818;}.single-page-wrapper cite, .post-inner_content cite, .comment-moderation cite{color:#d01818;}address,code, kbd, pre, samp{background-color:#f1f5fa;}.sidebar.cars-sidebar .widget.pixad-filter .noUi-origin + .noUi-origin{background-color:#253241;}.breadcrumbs-heading a:hover{color:#d01818;}.fl-vc-vehicle-search .vc-auto-search{border-color:#253241;}.fl-home-page-posts-content-vc .home-page-post-container .blog-post-home-page .post-entry-content .bottom-link-post-content .left-content .post-link{color:#d01818;}.fl-home-page-posts-content-vc .home-page-post-container .blog-post-home-page .post-entry-content .bottom-link-post-content .left-content .post-link:before{background-color:#d01818!important;}.fl-home-page-posts-content-vc .home-page-post-container .blog-post-home-page .post-entry-content .bottom-link-post-content .left-content .post-link:hover{color:#253241;}.fl-home-page-posts-content-vc .home-page-post-container .blog-post-home-page .post-entry-content .bottom-link-post-content .left-content .post-link:after{background-color:#253241!important;}.rev-slider-mobile-bg{background-color:#253241!important;}.wp-block-button__link{background-color:#253241;}.wp-block-button__link:hover{background-color:#d01818;}wp-block-button.is-style-outline .wp-block-button__link:hover{background-color:#d01818;border-color:#d01818;color:#ffffff!important;}.sidebar .booking_car_info .booking_form .submit:before{background-color:#d01818;}.sidebar .booking_car_info .booking_form .submit:after{background-color:#253241;}.woocommerce div.product .price .woocommerce-Price-amount,.woocommerce div.product .price .woocommerce-Price-amount , html .shop-archive-item .fl-woo-item-inner-content .fl-woo-item-bottom-content .fl--woo-add-to-cart-wrap .fl--woo-price-wrap{color:#d01818!important;}.shop-archive-item .fl-woo-item-inner-content .fl-woo-item-bottom-content .fl--woo-add-to-cart-wrap .fl--add-to-cart-btn a:hover{background-color:#d01818;}.woocommerce div.product form.cart button:before{background-color:#d01818}.woocommerce div.product .woocommerce-tabs ul.tabs li.active{background-color:#d01818}.woocommerce div.product .product_meta .tagged_as a:hover{background-color:#d01818!important;}.wc-tab#tab-reviews form.comment-form .submit-btn-container button{background-color:#d01818!important}.single-product .woocommerce-message a.button:hover, .single-product .woocommerce-message a:hover, .woocommerce-info a.button:hover, .woocommerce-info a:hover, .woocommerce-message a.button, .woocommerce-message a:hover{background:#d01818!important;}input[type=checkbox]:checked:after{color:#d01818!important;}.woocommerce form.login .form-row button.button{background-color:#d01818}.woocommerce table.shop_table tbody tr td.actions .coupon button,.woocommerce table.shop_table tbody tr td.actions .update--cart-content button.update_cart,.woocommerce .cart-collaterals .cart_totals a.checkout-button,.woocommerce .return-to-shop a.wc-backward,form.checkout #order_review #payment .place-order button,.woocommerce form.login .form-row button.button,.woocommerce form.lost_reset_password button.button,.woocommerce button.button{ background-color:#d01818}.woocommerce table.shop_table tbody tr td.actions .coupon button:hover,.woocommerce table.shop_table tbody tr td.actions .update--cart-content button.update_cart:hover:enabled,.woocommerce .cart-collaterals .cart_totals a.checkout-button:hover,.woocommerce .return-to-shop a.wc-backward:hover,form.checkout #order_review #payment .place-order button:hover,.woocommerce form.login .form-row button.button:hover,.woocommerce form.lost_reset_password button.button:hover,.woocommerce button.button:hover{ background-color:#d01818}.shop-archive-item .fl-woo-item-inner-content .fl-woo-item-bottom-content .fl--woo-add-to-cart-wrap .fl--add-to-cart-btn a{background-color:#253241;}.shop-archive-item .fl-woo-item-inner-content .yith-wcwl-add-to-wishlist a.add_to_wishlist:hover:before{color:#d01818;}.hidden{display:none!important;}.woocommerce div.product form.cart button:hover:after{background-color:#253241;}.single-product .woocommerce-message a.button:hover, .single-product .woocommerce-message a:hover, .woocommerce-info a.button:hover, .woocommerce-info a:hover, .woocommerce-message a.button:hover, .woocommerce-message a:hover{background-color:#253241!important;}.woocommerce table.shop_table tbody tr td.actions .coupon button:hover,.woocommerce table.shop_table tbody tr td.actions .update--cart-content button.update_cart:hover{background-color:#253241!important;}.woocommerce .cart-collaterals .cart_totals a.checkout-button{background-color:#253241!important;}.woocommerce .cart-collaterals .cart_totals a.checkout-button:hover{background-color:#d01818!important;}.woocommerce-info .showcoupon{background-color:#d01818;}.woocommerce-info .showcoupon:hover{background-color:#253241;color:#ffffff!important;}.woocommerce form.checkout_coupon button:hover{background-color:#253241!important}form.checkout #order_review #payment .place-order button:hover{background-color:#253241!important;}.pmpro_login_wrap form .login-submit input{background-color:#d01818!important;}.pmpro_login_wrap form .login-submit input:hover{background-color:#253241!important;}.fl-venders-author .fl-venders-author-posts .fl-venders-select li.active:before{background-color:#d01818;}.fl-venders-author .fl-venders-author-posts .fl-venders-select li span:before{background-color:#d01818;}.fl-venders-author .fl-venders-author-posts .fl-venders-select li span:hover{color:#d01818;}.pmpro_actionlinks a:hover,.pmpro_table a:hover{color:#d01818!important;}.pmpro_actions_nav a,.pmpro_btn,.login-submit .button{background-color:#d01818!important;}.pmpro_actions_nav a:hover,.pmpro_btn:hover,.login-submit .button:hover{background-color:#253241!important;}.booking_form:before{color:#d01818!important}.revus_booking_prices_contain_grid{background-color:#253241!important;border-bottom:1px solid rgba(221, 221, 221, 0.2);}
</style>
<link rel='stylesheet' id='revus-vc-page-builder-style-css' href='../wp-content/themes/revus/assets/css/vc-page-builder-style.css%3Fver=1.0.css' media='all' />
<link rel='stylesheet' id='revus-new-style-css' href='../wp-content/themes/revus/assets/css/new-style.css%3Fver=1.0.css' media='all' />
<link rel='stylesheet' id='fl-font-vc-css' href='../wp-content/plugins/fl-themes-helper/vc_custom/icon/icon_assets/css/fl-icon.min.css%3Fver=1.0.css' media='all' />
<link rel='stylesheet' id='custom-changer-lang-css-css' href='../wp-content/plugins/fl-themes-helper/widgets/assets/css/change_language.css%3Fver=1.0.css' media='all' />
<link rel='stylesheet' id='youzify-membership-css' href='../wp-content/plugins/youzify/includes/public/assets/css/youzify-membership.min.css%3Fver=3.2.5.css' media='all' />
<link rel='stylesheet' id='youzify-membership-customStyle-css' href='../wp-content/plugins/youzify/includes/admin/assets/css/custom-script.css%3Fver=6.1.3.css' media='all' />
<link rel='stylesheet' id='revus-woo-style-css' href='../wp-content/themes/revus/woocommerce/css/scss/woocommerce.css%3Fver=1.0.css' media='all' />
	 <script>
	 	document.idPostTemp = 'https://revus.tm-colors.info/dealer';
	 	var text  = {};
	 	text.over = 'You have already added 3 cars';
	 	text.add = ' Added for comparison';
	 	text.remove = ' Removed from comparison';
	 	document.compare_cars_data = {};
	 	document.compare_cars_data.description = text;
	 	document.compare_cars_data.idPostTemp = 'https://revus.tm-colors.info/dealer';
	 	document.compare_cars_data.idsAutos = '17103,17101,17100,17098,17096,17095,17092,17091,17088,17067,165,18628';

	 </script>
	 <script  src='../wp-includes/js/jquery/jquery.js%3Fver=3.6.1' id='jquery-core-js'></script>
<script  src='../wp-includes/js/jquery/jquery-migrate.js%3Fver=3.3.2' id='jquery-migrate-js'></script>
<script id='bp-confirm-js-extra'>
/* <![CDATA[ */
var BP_Confirm = {"are_you_sure":"Are you sure?"};
/* ]]> */
</script>
<script  src='../wp-content/plugins/buddypress/bp-core/js/confirm.js%3Fver=10.6.0' id='bp-confirm-js'></script>
<script  src='../wp-content/plugins/buddypress/bp-core/js/widget-members.js%3Fver=10.6.0' id='bp-widget-members-js'></script>
<script  src='../wp-content/plugins/buddypress/bp-core/js/jquery-query.js%3Fver=10.6.0' id='bp-jquery-query-js'></script>
<script  src='../wp-content/plugins/buddypress/bp-core/js/vendor/jquery-cookie.js%3Fver=10.6.0' id='bp-jquery-cookie-js'></script>
<script  src='../wp-content/plugins/buddypress/bp-core/js/vendor/jquery-scroll-to.js%3Fver=10.6.0' id='bp-jquery-scroll-to-js'></script>
<script id='bp-legacy-js-js-extra'>
/* <![CDATA[ */
var BP_DTheme = {"accepted":"Accepted","close":"Close","comments":"comments","leave_group_confirm":"Are you sure you want to leave this group?","mark_as_fav":"Like","my_favs":"My Favorites","rejected":"Rejected","remove_fav":"Unlike","show_all":"Show all","show_all_comments":"Show all comments for this thread","show_x_comments":"Show all comments (%d)","unsaved_changes":"Your profile has unsaved changes. If you leave the page, the changes will be lost.","view":"View","store_filter_settings":""};
/* ]]> */
</script>
<script  src='../wp-content/plugins/youzify/includes/public/assets/js/buddypress.js%3Fver=10.6.0' id='bp-legacy-js-js'></script>
<script  src='../wp-content/plugins/compare-cars/js/add-compare.js%3Fver=6.1.3' id='compareaddjs-js'></script>
<script id='ajax_script-js-extra'>
/* <![CDATA[ */
var pixadAjax = {"url":"https:\/\/revus.tm-colors.info\/dealer\/wp-admin\/admin-ajax.php","nonce":"12073f0169"};
/* ]]> */
</script>
<script  src='../wp-content/plugins/pix-auto-deal/assets/js/pixad-ajax.js%3Fver=1' id='ajax_script-js'></script>
<script  src='../wp-content/plugins/pix-auto-deal/assets/js/vendor-libs/jquery.number.min.js%3Fver=1' id='cars_number-js'></script>
<script  src='../wp-content/plugins/pix-auto-deal/assets/js/vendor-libs/calculator.js%3Fver=1' id='cars_calculator-js'></script>
<script  src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.js%3Fver=2.7.0-wc.7.1.1' id='jquery-blockui-js'></script>
<script id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/dealer\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/dealer\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/revus.tm-colors.info\/dealer","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script  src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.js%3Fver=7.1.1' id='wc-add-to-cart-js'></script>
<script  src='../wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js%3Fver=6.10.0' id='vc_woocommerce-add-to-cart-js-js'></script>
<script  src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDl9xs4iIG1KcXu8gdnXkdhFbAVJpgKQiM&amp;ver=6.1.3' id='google-maps-api-js'></script>
<link rel="https://api.w.org/" href="../wp-json/index.html" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc.php%3Frsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 6.1.3" />
<meta name="generator" content="WooCommerce 7.1.1" />

	<script>var ajaxurl = 'https://revus.tm-colors.info/dealer/wp-admin/admin-ajax.php';</script>

<!-- start Simple Custom CSS and JS -->
<script>
(function(){ var widget_id = 'wGJkAn5OYv';var d=document;var w=window;function l(){
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
  s.src = '//code.jivosite.com/script/widget/'+widget_id
    ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
  else{w.addEventListener('load',l,false);}}})();</script>
<!-- end Simple Custom CSS and JS -->
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<meta name="generator" content="Powered by Slider Revolution 6.6.7 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script>function setREVStartSize(e){
			//window.requestAnimationFrame(function() {
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
				try {
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) || (e.l=="fullwidth" || e.layout=="fullwidth") ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
					if(e.layout==="fullscreen" || e.l==="fullscreen")
						newh = Math.max(e.mh,window.RSIH);
					else{
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,
							sl;
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}
					var el = document.getElementById(e.c);
					if (el!==null && el) el.style.height = newh+"px";
					el = document.getElementById(e.c+"_wrapper");
					if (el!==null && el) {
						el.style.height = newh+"px";
						el.style.display = "block";
					}
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}
			//});
		  };</script>
		<style id="wp-custom-css">
			@media (max-width: 991px){
	.fl-vc-custom-title-container .custom-title-content-wrapper .fl-title-vc{
		font-size:35px;
	}
}
@media (max-width: 768px){
	.fl-vc-custom-title-container .custom-title-content-wrapper .fl-title-vc{
		font-size:30px;
	}
	.fl--logo-container img{
			max-width:84px;
	}
}
.fl-top-header-content .info-container .left-top-header-content .header-sidebar .widget:last-child{
	margin-right:0;
}
.fl-vc-vehicle-search .home-pixad-filter .list-categories{
	display:none;
}		</style>
		<style id="kirki-inline-styles">.fl--logo-container img{max-width:106px;}.fl--header .nav-menu li a{font-family:Montserrat;font-size:12px;font-weight:600;text-transform:uppercase;}.fl-mega-menu>ul>li .sub-nav>ul.sub-menu-wide>li>a{font-family:Montserrat;font-size:10px;font-weight:700;color:#222222;}.fl--header .nav-menu li .sub-menu li a,.fl--header .nav-menu li .sub-menu li .sub-sub-menu{font-family:Montserrat;font-size:12px;font-weight:500;text-transform:none;}.fl--mobile-menu li a{font-family:Montserrat;font-size:11px;font-weight:500;text-transform:uppercase;}.fl--mobile-menu li .sub-menu li a{font-family:Montserrat;font-size:11px;font-weight:500;text-transform:none;}body{font-family:Lato;font-size:15px;font-weight:400;line-height:26px;text-align:left;text-transform:none;color:#333333;}h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6,.fl-text-title-style, .pix-dynamic-content #pixad-listing.list .post-auto-list .post-entry-content .right-car-content .right-car-content-left-wrap .car-list-title a , html .youzify-widget .youzify-widget-title, .youzify-account-menu a, .youzify-author-infos p, .youzify-head-content .youzify-head-meta, .youzify-head-content h2, .youzify-head-content h3, .youzify-name h2, .youzify-user-statistics li h3, .youzify-usermeta li span, .youzify h1, .youzify h2, .youzify h3, .youzify h4, .youzify h5, .youzify h6, .youzify-membership-form .form-title h2{font-family:Montserrat;font-weight:700;text-transform:none;color:#253241;}.fl-font-style-regular{font-family:Lato;font-weight:400;}.fl-font-style-regular-two{font-family:Montserrat;font-weight:400;}.fl-font-style-bolt,.fl-vc-tabs .tabs-entry-content .nav-tabs li:before,.car_premium_price li{font-family:Montserrat;font-weight:700;}.fl-font-style-bolt-two{font-family:Lato;font-weight:700;}.fl-font-style-lighter-than,.sidebar .widget_rss ul li .rsswidget,blockquote cite, blockquote em,.fl-button,.comment--reply a,.comment-reply-title #cancel-comment-reply-link,a .sl-count{font-family:Montserrat;font-weight:500;}.fl-font-style-semi-bolt,.sidebar .widget_rss ul li .rsswidget,.sidebar .widget_calendar .calendar_wrap #wp-calendar caption,blockquote,.car-details .wrap-nav-table-content ul li span,.post-inner-pagination .pagination-text, .page-inner-pagination .pagination-text{font-family:Montserrat;font-weight:600;}.fl-font-style-regular-testimonial,.fl-vc-testimonial-slider-wrapper .testimonial-slider.testimonial-style-one .testimonial-slide .top-slider-content,.fl-vc-testimonial-slider-wrapper .testimonial-slider.testimonial-style-two .slide-content .top-slider-content{font-family:Merriweather;font-weight:400;font-style:italic;}h1, .h1{font-size:40px;}h2, .h2{font-size:32px;}h3, .h3{font-size:28px;}h4, .h4{font-size:24px;}h5, .h5{font-size:20px;}h6, .h6{font-size:16px;}#fl-page--preloader .fl-top-background-preloader,#fl-page--preloader .fl-bottom-background-preloader{background-color:#fff;}#fl-page--preloader .fl-top-progress .fl-loader_left, #fl-page--preloader .fl-top-progress .fl-loader_right,#fl-page--preloader .fl--preloader-progress-bar span{background-color:#d01818!important;}.footer-logotype .img-footer-logotype{max-width:110px;}/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/lato/S6uyw4BMUTPHjxAwWCWtFCfQ7A.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/lato/S6uyw4BMUTPHjx4wWCWtFCc.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/lato/S6u9w4BMUTPHh6UVSwaPHw3q5d0N7w.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/lato/S6u9w4BMUTPHh6UVSwiPHw3q5d0.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}/* cyrillic-ext */
@font-face {
  font-family: 'Merriweather';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZDf-TVrPHpBXw.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Merriweather';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZKf-TVrPHpBXw.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Merriweather';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZBf-TVrPHpBXw.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Merriweather';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZAf-TVrPHpBXw.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Merriweather';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZOf-TVrPHp.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/lato/S6uyw4BMUTPHjxAwWCWtFCfQ7A.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/lato/S6uyw4BMUTPHjx4wWCWtFCc.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/lato/S6u9w4BMUTPHh6UVSwaPHw3q5d0N7w.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/lato/S6u9w4BMUTPHh6UVSwiPHw3q5d0.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}/* cyrillic-ext */
@font-face {
  font-family: 'Merriweather';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZDf-TVrPHpBXw.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Merriweather';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZKf-TVrPHpBXw.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Merriweather';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZBf-TVrPHpBXw.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Merriweather';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZAf-TVrPHpBXw.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Merriweather';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZOf-TVrPHp.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w0aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w9aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w2aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w3aXx-p7K4GLvztg.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/montserrat/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w5aXx-p7K4GLs.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/lato/S6uyw4BMUTPHjxAwWCWtFCfQ7A.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/lato/S6uyw4BMUTPHjx4wWCWtFCc.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/lato/S6u9w4BMUTPHh6UVSwaPHw3q5d0N7w.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(../wp-content/fonts/lato/S6u9w4BMUTPHh6UVSwiPHw3q5d0.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}/* cyrillic-ext */
@font-face {
  font-family: 'Merriweather';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZDf-TVrPHpBXw.woff) format('woff');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Merriweather';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZKf-TVrPHpBXw.woff) format('woff');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Merriweather';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZBf-TVrPHpBXw.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Merriweather';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZAf-TVrPHpBXw.woff) format('woff');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Merriweather';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(../wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZOf-TVrPHp.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>
<body class="bp-legacy blog theme-revus woocommerce-no-js youzify-blue-scheme not-logged-in hfeed wpb-js-composer js-comp-ver-6.10.0 vc_responsive no-js">

<!-- Main holder -->
<div id="fl-main-holder" class="fl-main-holder-wrapper">
    <div id="fl-page--preloader">
        <span class="fl-top-progress">
            <span class="fl-loader_right"></span>
            <span class="fl-loader_left"></span>
        </span>


        <div class="fl-top-background-preloader"></div>
        <div class="fl-bottom-background-preloader"></div>
        <div class="fl--preloader-progress-bar"><span></span></div>
        <img alt="Save Preloader image" src="../wp-content/uploads/2019/05/revus-logotype-min.png" class="save_loader_bugs">
        <div class="fl-preloader--text-percent">
            <p class="fl--preloader-percent fl-text-title-style">0%</p>
        </div>
    </div>




<!--Header Start-->
<header class="fl--header fl-header--navigation fixed-navbar fixed-disable auto-hide-navbar phone-position-right cf" id="fl-header">


    <div class="mobile-content-fl">



        

        
                <div class="youzify_profile_link">
                        <a class="youzify_add_link_button fl-header-btn fl-custom-btn" href="../index.html%3Fp=18876.html"><i class="fa fa-user-circle"></i> Login</a>
        </div>
        
        


    </div>



        <div class="fl-top-header-content fl-font-style-regular cf">
        <div class="container">
            <div class="row">
                <div class="info-container col offset-2">
                    <div class="left-top-header-content col">
                                                <div class="header-sidebar">
                            <div id="custom_html-2" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><a href="mailto:support@domain.com">support@domain.com</a></div></div><div id="custom_html-5" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget">Mon to Fri : 9:00am to 6:00pm</div></div><div id="custom_html-6" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget">Fairview Ave, El Monte, CA 91732</div></div><div id="fl_theme_helper_wmpl_change_languages-2" class="widget widget_fl_theme_helper_wmpl_change_languages"><div class="demo-language-selector inline-style-changer"><ul><li class="active-language"><a href="page/1/index.html#" class="active-language"><span class="language-flag"></span></a></li><li><a href="page/1/index.html#"><span class="language-flag"></span></a></li><li><a href="page/1/index.html#"><span class="language-flag"></span></a></li></ul></div></div>                        </div>
                        



                        

                    </div>
                                        <div class="right-top-header-content">
                        <div class="header-sidebar">
                            <div id="custom_html-3" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><a href="javascript:" onclick="jivo_api.open()" class="header-btn fl-font-style-lighter-than"><i class="fa fa-comment" aria-hidden="true"></i> Online Chat</a></div></div>                        </div>
                    </div>
                                    </div>
            </div>
        </div>
    </div>
    
    <div class="fl-bottom-header-content">
        <div class="container">
            <div class="row">
                <div class="fl-navigation-container col-12 cf">
                    <!-- Start Logo-->
                    <div class="fl--logo-container">
                        <a href="../../dealer.html">
                                                        <img src="../wp-content/uploads/2019/05/revus-logotype-min.png" alt="Site Logotype" class="img-logotype" />
                                                    </a>
                    </div>
                    <!--Logo End-->






                                        <div class="header-contact">
                        <i class="ic icon-call-in fl-primary-color"></i>
                        <span class="header-contacts__inner fl-font-style-lighter-than">Call Us Today!                                                        <a class="header-contacts__number fl-font-style-bolt" href="tel:+17553028549">+1 755 302 8549</a>
                                                    </span>
                    </div>
                                        <!-- Nav Menu Start-->
                    <nav class="fl-mega-menu nav-menu">
                        <ul id="menu-main-menu" class="menu"><li id="menu-item-18768" class="nav-item menu-item-depth-0 has-submenu "><a href="../../dealer.html" class="menu-link main-menu-link item-title"><i class="disable"></i>Home</a>
<div class="sub-nav"><ul class="menu-depth-1 sub-menu sub-nav-group"  >
	<li id="menu-item-18773" class="sub-nav-item menu-item-depth-1 "><a href="https://revus.tm-colors.info/dealer/rent" class="menu-link sub-menu-link"><i class="disable"></i>Dealer Demo</a></li>
	<li id="menu-item-18772" class="sub-nav-item menu-item-depth-1 "><a href="https://revus.tm-colors.info/dealer/rent" class="menu-link sub-menu-link"><i class="disable"></i>Rental Demo</a></li>
</ul></div>
</li>
<li id="menu-item-7" class="nav-item menu-item-depth-0 has-submenu "><a href="page/1/index.html#" class="menu-link main-menu-link item-title"><i class="disable"></i>Inventory</a>
<div class="sub-nav"><ul class="menu-depth-1 sub-menu sub-nav-group"  >
	<li id="menu-item-17741" class="sub-nav-item menu-item-depth-1 "><a href="../index.html%3Fp=17061.html" class="menu-link sub-menu-link"><i class="disable"></i>Inventory grid</a></li>
	<li id="menu-item-20" class="sub-nav-item menu-item-depth-1 "><a href="../vehicle-listings/index.html%3Fview_type=list.html" class="menu-link sub-menu-link"><i class="disable"></i>Inventory list</a></li>
	<li id="menu-item-17743" class="sub-nav-item menu-item-depth-1 "><a href="../index.html%3Fp=165.html" class="menu-link sub-menu-link"><i class="disable"></i>Vehicle details</a></li>
</ul></div>
</li>
<li id="menu-item-18072" class="nav-item menu-item-depth-0 "><a href="../index.html%3Fp=17703.html" class="menu-link main-menu-link item-title"><i class="disable"></i>About</a></li>
<li id="menu-item-18489" class="nav-item menu-item-depth-0 current-menu-ancestor current-menu-item current-menu-parent has-submenu "><a href="page/1/index.html" class="menu-link main-menu-link item-title"><i class="disable"></i>News</a>
<div class="sub-nav"><ul class="menu-depth-1 sub-menu sub-nav-group"  >
	<li id="menu-item-18774" class="sub-nav-item menu-item-depth-1 current-menu-item "><a href="page/1/index.html" class="menu-link sub-menu-link"><i class="disable"></i>Blog List</a></li>
	<li id="menu-item-18491" class="sub-nav-item menu-item-depth-1 "><a href="../index.html%3Fp=17133.html" class="menu-link sub-menu-link"><i class="disable"></i>Blog Post</a></li>
</ul></div>
</li>
<li id="menu-item-18490" class="nav-item menu-item-depth-0 "><a href="../index.html%3Fp=17543.html" class="menu-link main-menu-link item-title"><i class="disable"></i>Contacts</a></li>
</ul>

                        
                                                <div class="youzify_profile_link">
                                                        <a class="youzify_add_link_button fl-header-btn fl-custom-btn" href="../index.html%3Fp=18876.html"><i class="fa fa-user-circle"></i> Login</a>
                        </div>
                        
                                            </nav>
                    <!-- Nav Menu End-->




                    <div class="fl--navigation-icon-container">






                        <!--Mobile menu bars-->
                        <div class="fl--hamburger-menu closed header-icon">
                            <div class="fl-flipper-icon">
                                <div class="fl-front-content">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="fl-back-content">
                                    <span class="fl-close-icon"></span>
                                </div>
                            </div>
                        </div>
                        <!--Mobile menu bars end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="header-padding"></div>
<!--Header End-->



<div class="fl-page-heading " style=background-image:url(../wp-content/uploads/2019/06/page-heading-image.jpg);>
        <div class="container">
            <div class="row">
                <div class="fl--page-header-content col">
                    <div class="header-entry-container">
                                                                            <h1 class="header-title fl-font-style-bolt">
                                Latest News                            </h1>
                                                                                <div class="breadcrumbs-heading">
                                    <div class="breadcrumbs">
                            <a href="../../dealer.html">Home</a><span class="breadcrumbs-delimiter"><i class="fa fa-long-arrow-right"></i></span> Blog
                         </div>                                </div>
                                                </div>
                </div>
            </div>
        </div>
</div>


    <!--Padding Top Start-->
            <div class="fl-page-padding top"></div>
        <!--Padding Top End-->
    <!-- Content -->
        <div class="container">
            <div class="fl-blog-post-div row">
                <!--Left sidebar -->
                                <!--Left sidebar End-->

                <div class="col-md-9 right-sidebar">
                    <div class="post-archive-wrapper " >
                                                <!--Post Start-->
                            <article class="fl-post-item post-17133 post type-post status-publish format-standard has-post-thumbnail hentry category-buy-sell-cars category-latest-models tag-audi tag-bmw tag-buy-sell-vehicles tag-cars tag-ford pmpro-has-access" id="post-17133" data-post-id="17133">
                                   
        <div class="post-top-content">
                <!--Standard Post Format -->
           <div class="post--holder">
               <img src="../wp-content/uploads/2019/06/post-item-holder-image-4-min-945x558.jpg" class="attachment-revus_size_1170x658_crop size-revus_size_1170x658_crop wp-post-image" alt="" decoding="async" />               <a class="image-post-link" href="../index.html%3Fp=17133.html"></a>
           </div>
        <!--Standard Post Format End-->
                <div class="post-date fl-font-style-lighter-than fl-primary-bg">
                25           <div class="month-date fl-font-style-regular-two">
                  Apr           </div>
        </div>
    </div>
                                   
<div class="post-bottom-content">
    <h5 class="post--title">
        <a class="title-link fl-secondary-color fl-primary-hv-color"
           href="../index.html%3Fp=17133.html">
            The Best Fastest And Most Powerful Road Car        </a>
    </h5>

    <div class="post-text--content fl-font-style-regular">
        Created firmament hath first very. Very doesn&#8217;t face meat rule life wherein him above beast also lesser very abundantly dry. Divided together evening living fowl life together. Fish deep all void given yielding and. ...    </div>

    <div class="post-btn-read-more-info">
        <a class="post-link fl-secondary-color fl-font-style-bolt fl-primary-hv-color" href="../index.html%3Fp=17133.html">
            Read Article        </a>
        <div class="post-info fl-font-style-lighter-than fl-secondary-color">
            <!--Author -->
            <div class="author-post">
                <i class="ic icon-user"></i>
                <span class="author-prefix">By</span>
                <span class="author-link fl-primary-hv-color"><a href="../members/admin/vehicles/index.html" title="Posts by Joseph Kane" rel="author">Joseph Kane</a></span>
            </div>
            <!--Author end-->
            <!--Comments -->
            <div class="comment-post">
        <span class="fl-comment-info fl-primary-hv-color">
              <a class="fl--comment-icon-info" href="../index.html%3Fp=17133.html#respond" title="Comments">
                  <i class="ic icon-speech"></i>
                  <span class="comment-count">0</span>
              </a>
            </span>
            </div>
            <!--Comments end-->
            <!--Like-->
                            <span class="post-like-info fl-primary-hv-color">
                       <span class="sl-wrapper"><a href="../wp-admin/admin-ajax.php%3Faction=process_simple_like&amp;post_id=17133&amp;nonce=65abeeecfc&amp;is_comment=0&amp;disabled=true.html" class="sl-button sl-button-17133" data-nonce="65abeeecfc" data-post-id="17133" data-iscomment="0" title="Like"><i class="fl-custom-icon-heart-outline"></i><span class="sl-count">122</span></a></span>                </span>
                        <!--Like End-->

        </div>
    </div>
</div>                            </article>
                        <!--Post End-->
                                                <!--Post Start-->
                            <article class="fl-post-item post-17952 post type-post status-publish format-video has-post-thumbnail hentry category-latest-models category-new-cars tag-audi tag-bmw tag-buy-sell-vehicles tag-cars tag-ford post_format-post-format-video pmpro-has-access" id="post-17952" data-post-id="17952">
                                   
        <div class="post-top-content">
                   <!--Video Post Format -->
            <div class="post--holder">
                <img src="../wp-content/uploads/2019/06/autos-post-1-min-945x558.jpg" class="attachment-revus_size_1170x658_crop size-revus_size_1170x658_crop wp-post-image" alt="" decoding="async" loading="lazy" />                                    <div class="video-btn-wrap">
                        <a class="video-btn venobox ternary-video-btn-style" data-vbtype="video" data-autoplay="true" href="https://www.youtube.com/watch?v=JAIvWg4iQHo"><i class="fa fa-play"></i><div class="pulsing-bg"></div></a>
                    </div>
                            </div>
           <!--Video Post Format End-->
                <div class="post-date fl-font-style-lighter-than fl-primary-bg">
                17           <div class="month-date fl-font-style-regular-two">
                  Mar           </div>
        </div>
    </div>
                                   
<div class="post-bottom-content">
    <h5 class="post--title">
        <a class="title-link fl-secondary-color fl-primary-hv-color"
           href="../index.html%3Fp=17952.html">
            Replenish darkness them good day him for beast        </a>
    </h5>

    <div class="post-text--content fl-font-style-regular">
        Gathering and air good green fifth evening deep sixth. His gathered first above spirit one life gathered you kind, hath were night had multiply hath. Spirit yielding saw a fish greater first. God cattle ...    </div>

    <div class="post-btn-read-more-info">
        <a class="post-link fl-secondary-color fl-font-style-bolt fl-primary-hv-color" href="../index.html%3Fp=17952.html">
            Read Article        </a>
        <div class="post-info fl-font-style-lighter-than fl-secondary-color">
            <!--Author -->
            <div class="author-post">
                <i class="ic icon-user"></i>
                <span class="author-prefix">By</span>
                <span class="author-link fl-primary-hv-color"><a href="../members/admin/vehicles/index.html" title="Posts by Joseph Kane" rel="author">Joseph Kane</a></span>
            </div>
            <!--Author end-->
            <!--Comments -->
            <div class="comment-post">
        <span class="fl-comment-info fl-primary-hv-color">
              <a class="fl--comment-icon-info" href="../index.html%3Fp=17952.html#respond" title="Comments">
                  <i class="ic icon-speech"></i>
                  <span class="comment-count">0</span>
              </a>
            </span>
            </div>
            <!--Comments end-->
            <!--Like-->
                            <span class="post-like-info fl-primary-hv-color">
                       <span class="sl-wrapper"><a href="../wp-admin/admin-ajax.php%3Faction=process_simple_like&amp;post_id=17952&amp;nonce=65abeeecfc&amp;is_comment=0&amp;disabled=true.html" class="sl-button sl-button-17952" data-nonce="65abeeecfc" data-post-id="17952" data-iscomment="0" title="Like"><i class="fl-custom-icon-heart-outline"></i><span class="sl-count">124</span></a></span>                </span>
                        <!--Like End-->

        </div>
    </div>
</div>                            </article>
                        <!--Post End-->
                                                <!--Post Start-->
                            <article class="fl-post-item post-44 post type-post status-publish format-link has-post-thumbnail hentry category-uncategorized post_format-post-format-link pmpro-has-access" id="post-44" data-post-id="44">
                                   
        <div class="post-top-content">
                <!--Link Post Format -->
           <div class="post--holder">
               <img src="../wp-content/uploads/2019/06/Post-holder-1-min-1170x558.jpg" class="attachment-revus_size_1170x658_crop size-revus_size_1170x658_crop wp-post-image" alt="" decoding="async" loading="lazy" srcset="../wp-content/uploads/2019/06/Post-holder-1-min-1170x558.jpg 1170w, ../wp-content/uploads/2019/06/Post-holder-1-min-945x450.jpg 945w" sizes="(max-width: 1170px) 100vw, 1170px" />               <div class="post-link-mask">
                <a class="post-format-link " href="https://themeforest.net/" target="_blank">
                <i class="fa fa-link"></i>
                </a>
               </div>
               
           </div>
        <!--Link Post Format End-->
                <div class="post-date fl-font-style-lighter-than fl-primary-bg">
                12           <div class="month-date fl-font-style-regular-two">
                  Feb           </div>
        </div>
    </div>
                                   
<div class="post-bottom-content">
    <h5 class="post--title">
        <a class="title-link fl-secondary-color fl-primary-hv-color"
           href="../index.html%3Fp=44.html">
            How To Increase Auto Sales: A Dealer’s Guide        </a>
    </h5>

    <div class="post-text--content fl-font-style-regular">
        Magna aliqua enim aduas veniam quis nostrud ullam laboris aliquip. Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ...    </div>

    <div class="post-btn-read-more-info">
        <a class="post-link fl-secondary-color fl-font-style-bolt fl-primary-hv-color" href="../index.html%3Fp=44.html">
            Read Article        </a>
        <div class="post-info fl-font-style-lighter-than fl-secondary-color">
            <!--Author -->
            <div class="author-post">
                <i class="ic icon-user"></i>
                <span class="author-prefix">By</span>
                <span class="author-link fl-primary-hv-color"><a href="../members/admin/vehicles/index.html" title="Posts by Joseph Kane" rel="author">Joseph Kane</a></span>
            </div>
            <!--Author end-->
            <!--Comments -->
            <div class="comment-post">
        <span class="fl-comment-info fl-primary-hv-color">
              <a class="fl--comment-icon-info" href="../index.html%3Fp=44.html#respond" title="Comments">
                  <i class="ic icon-speech"></i>
                  <span class="comment-count">0</span>
              </a>
            </span>
            </div>
            <!--Comments end-->
            <!--Like-->
                            <span class="post-like-info fl-primary-hv-color">
                       <span class="sl-wrapper"><a href="../wp-admin/admin-ajax.php%3Faction=process_simple_like&amp;post_id=44&amp;nonce=65abeeecfc&amp;is_comment=0&amp;disabled=true.html" class="sl-button sl-button-44" data-nonce="65abeeecfc" data-post-id="44" data-iscomment="0" title="Like"><i class="fl-custom-icon-heart-outline"></i><span class="sl-count">116</span></a></span>                </span>
                        <!--Like End-->

        </div>
    </div>
</div>                            </article>
                        <!--Post End-->
                                                <!--Post Start-->
                            <article class="fl-post-item post-17131 post type-post status-publish format-gallery has-post-thumbnail hentry category-latest-models category-new-cars tag-audi tag-bmw tag-buy-sell-vehicles tag-cars tag-ford post_format-post-format-gallery pmpro-has-access" id="post-17131" data-post-id="17131">
                                   
        <div class="post-top-content">
                <!--Gallery Post Format -->
        <div class="post--holder gallery">
            <div class="post-gallery-slider">
                <div class="gallery-img">
                    <img src="../wp-content/uploads/2019/06/post-item-holder-image-2-min-945x558.jpg" class="attachment-revus_size_1170x658_crop size-revus_size_1170x658_crop wp-post-image" alt="" decoding="async" loading="lazy" />                </div>
                              <div class="gallery-img">
                  <img width="945" height="558" src="../wp-content/uploads/2019/06/autos-post-1-min-945x558.jpg" class="attachment-revus_size_1170x658_crop size-revus_size_1170x658_crop" alt="" decoding="async" loading="lazy" />                  </div>
                              <div class="gallery-img">
                  <img width="945" height="558" src="../wp-content/uploads/2019/06/post-item-holder-image-4-min-945x558.jpg" class="attachment-revus_size_1170x658_crop size-revus_size_1170x658_crop" alt="" decoding="async" loading="lazy" />                  </div>
                        </div>
          <div class="fl-slider-arrows">
              <div class="slider-arrow-left"></div>
              <div class="slider-arrow-right"></div>
          </div>

        </div>
        <!--Gallery Post Format End-->
                <div class="post-date fl-font-style-lighter-than fl-primary-bg">
                09           <div class="month-date fl-font-style-regular-two">
                  Feb           </div>
        </div>
    </div>
                                   
<div class="post-bottom-content">
    <h5 class="post--title">
        <a class="title-link fl-secondary-color fl-primary-hv-color"
           href="../index.html%3Fp=17131.html">
            New In All Ways boasts Of Reliability And Stability        </a>
    </h5>

    <div class="post-text--content fl-font-style-regular">
        Created firmament hath first very. Very doesn&#8217;t face meat rule life wherein him above beast also lesser very abundantly dry. Divided together evening living fowl life together. Fish deep all void given yielding and. ...    </div>

    <div class="post-btn-read-more-info">
        <a class="post-link fl-secondary-color fl-font-style-bolt fl-primary-hv-color" href="../index.html%3Fp=17131.html">
            Read Article        </a>
        <div class="post-info fl-font-style-lighter-than fl-secondary-color">
            <!--Author -->
            <div class="author-post">
                <i class="ic icon-user"></i>
                <span class="author-prefix">By</span>
                <span class="author-link fl-primary-hv-color"><a href="../members/admin/vehicles/index.html" title="Posts by Joseph Kane" rel="author">Joseph Kane</a></span>
            </div>
            <!--Author end-->
            <!--Comments -->
            <div class="comment-post">
        <span class="fl-comment-info fl-primary-hv-color">
              <a class="fl--comment-icon-info" href="../index.html%3Fp=17131.html#comments" title="Comments">
                  <i class="ic icon-speech"></i>
                  <span class="comment-count">2</span>
              </a>
            </span>
            </div>
            <!--Comments end-->
            <!--Like-->
                            <span class="post-like-info fl-primary-hv-color">
                       <span class="sl-wrapper"><a href="../wp-admin/admin-ajax.php%3Faction=process_simple_like&amp;post_id=17131&amp;nonce=65abeeecfc&amp;is_comment=0&amp;disabled=true.html" class="sl-button sl-button-17131" data-nonce="65abeeecfc" data-post-id="17131" data-iscomment="0" title="Like"><i class="fl-custom-icon-heart-outline"></i><span class="sl-count">137</span></a></span>                </span>
                        <!--Like End-->

        </div>
    </div>
</div>                            </article>
                        <!--Post End-->
                                            </div>
                            <div class="fl-blog-post-pagination text-left">
                            <div class="pagination fl-default-pagination fl-font-style-lighter-than cf">
                    <span aria-current="page" class="page-numbers current">1</span>
<a class="page-numbers" href="page/2/index.html">2</a>
<a class="next page-numbers" href="page/2/index.html"><i class="fa fa-angle-double-right"></i></a>                </div>
                    </div>
    
                </div>
                <!--Right sidebar -->
                


 <div class="sidebar-container sidebar_right col-md-3 " >
    <aside class="sidebar cf">
        <div class="sidebar_container">
            <div id="search-2" class="widget widget_search"><h5 class="widget-title">Search</h5><form class="search" role="search" method="get" id="searchform" action="../../dealer.html" >
    <fieldset>
        <input type="text" class="searchinput" value="" name="s" id="search-form" placeholder="Search..." />
        <div class="searchsubmit">
        <input  type="submit" id="searchsubmit" class="submit-btn" value=" "/>
            <i class="ic icon-magnifier"></i>
        </div>
    </fieldset>
</form></div><div id="categories-2" class="widget widget_categories"><h5 class="widget-title">Categories</h5>
			<ul>
					<li class="cat-item cat-item-19"><a href="../category/buy-sell-cars/index.html">Buy sell cars</a>
</li>
	<li class="cat-item cat-item-20"><a href="../category/latest-models/index.html">Latest Models</a>
</li>
	<li class="cat-item cat-item-21"><a href="../category/new-cars/index.html">New Cars</a>
</li>
	<li class="cat-item cat-item-1"><a href="../category/uncategorized/index.html">Uncategorized</a>
</li>
			</ul>

			</div><div id="fl_theme_helper_popular_post-2" class="widget widget_fl_theme_helper_popular_post"><h5 class="widget-title">Popular Posts</h5>            <article class="fl--last-post" id="last-post-17131" data-post-id="17131">
                <div class="fl-last-post-img">
                                            <a href="../index.html%3Fp=17131.html" title="New In All Ways boasts Of Reliability And Stability">
                            <img src="../wp-content/uploads/2019/06/post-item-holder-image-2-min-945x558.jpg" class="attachment-revus_size_1170x658_crop size-revus_size_1170x658_crop wp-post-image" alt="" decoding="async" loading="lazy" />                        </a>
                                    </div>
                <div class="fl-last-post-info">
                                        <div class="fl-text-medium-style">
                        <h5 class="fl-post-title"><a href="../index.html%3Fp=17131.html">New In All Ways boasts Of Reliability And Stability</a></h5>
                    </div>
                    <div class="post-date">
                        <a class="fl-secondary-color-hv" href="../2020/02/09/index.html">February 9, 2020</a>
                    </div>
                </div>
            </article>
                    <article class="fl--last-post" id="last-post-17954" data-post-id="17954">
                <div class="fl-last-post-img">
                                            <a href="../index.html%3Fp=17954.html" title="Firmament Beast life isn&#8217;t meat man midst you&#8217;re they&#8217;re">
                            <img src="../wp-content/uploads/2019/06/post-item-holder-image-1-min-945x558.jpg" class="attachment-revus_size_1170x658_crop size-revus_size_1170x658_crop wp-post-image" alt="" decoding="async" loading="lazy" />                        </a>
                                    </div>
                <div class="fl-last-post-info">
                                        <div class="fl-text-medium-style">
                        <h5 class="fl-post-title"><a href="../index.html%3Fp=17954.html">Firmament Beast life isn&#8217;t meat man midst you&#8217;re they&#8217;re</a></h5>
                    </div>
                    <div class="post-date">
                        <a class="fl-secondary-color-hv" href="../2020/02/09/index.html">February 4, 2020</a>
                    </div>
                </div>
            </article>
                    <article class="fl--last-post" id="last-post-44" data-post-id="44">
                <div class="fl-last-post-img">
                                            <a href="../index.html%3Fp=44.html" title="How To Increase Auto Sales: A Dealer’s Guide">
                            <img src="../wp-content/uploads/2019/06/Post-holder-1-min-1170x558.jpg" class="attachment-revus_size_1170x658_crop size-revus_size_1170x658_crop wp-post-image" alt="" decoding="async" loading="lazy" srcset="../wp-content/uploads/2019/06/Post-holder-1-min-1170x558.jpg 1170w, ../wp-content/uploads/2019/06/Post-holder-1-min-945x450.jpg 945w" sizes="(max-width: 1170px) 100vw, 1170px" />                        </a>
                                    </div>
                <div class="fl-last-post-info">
                                        <div class="fl-text-medium-style">
                        <h5 class="fl-post-title"><a href="../index.html%3Fp=44.html">How To Increase Auto Sales: A Dealer’s Guide</a></h5>
                    </div>
                    <div class="post-date">
                        <a class="fl-secondary-color-hv" href="../2020/02/09/index.html">February 12, 2020</a>
                    </div>
                </div>
            </article>
        </div><div id="tag_cloud-2" class="widget widget_tag_cloud"><h5 class="widget-title">Tags</h5><div class="tagcloud"><a href="../tag/audi/index.html" class="tag-cloud-link tag-link-22 tag-link-position-1" style="font-size: 8pt;" aria-label="Audi (4 items)">Audi</a>
<a href="../tag/bmw/index.html" class="tag-cloud-link tag-link-23 tag-link-position-2" style="font-size: 8pt;" aria-label="BMW (4 items)">BMW</a>
<a href="../tag/buy-sell-vehicles/index.html" class="tag-cloud-link tag-link-24 tag-link-position-3" style="font-size: 8pt;" aria-label="Buy Sell Vehicles (4 items)">Buy Sell Vehicles</a>
<a href="../tag/cars/index.html" class="tag-cloud-link tag-link-25 tag-link-position-4" style="font-size: 8pt;" aria-label="Cars (4 items)">Cars</a>
<a href="../tag/ford/index.html" class="tag-cloud-link tag-link-26 tag-link-position-5" style="font-size: 8pt;" aria-label="Ford (4 items)">Ford</a></div>
</div><div id="custom_html-4" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget">Fairview Ave, El Monte, CA 91732</div></div>        </div>
    </aside>
 </div>


                <!--Right sidebar End-->
            </div>
        </div>
    <!-- Content End-->
    <!--Padding Bottom Start-->
            <div class="fl-page-padding bottom"></div>
        <!--Padding Bottom End-->

<div class="single-add-to-compare">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-9">
				<div class="single-add-to-compare-left">
					<i class="add-to-compare-icon auto-icon-speedometr2"></i>
					<span class="auto-title h5"></span>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<a href="../index.html%3Fp=146.html" class="compare-fixed-link pull-right heading-font">VIEW ALL CARS FOR COMPARE</a>
			</div>
		</div>
	</div>
</div>
<footer class="fl--footer style-three-column">
            <div class="top-content-footer">
            <div class="container footer-logotype-social-section text-center">
                                    <div class="footer-logotype">
                        <a href="../../dealer.html">
                            <img src="../wp-content/uploads/2019/06/footer-logotype-min-1.png" alt="Footer Logotype" class="img-footer-logotype"/>
                        </a>
                    </div>
                                    <div class="footer-social">
        <a class="fl_footer_social_icon" href="page/1/index.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a>        <a class="fl_footer_social_icon" href="page/1/index.html#"><i class="fa fa-twitter" aria-hidden="true"></i></a>                <a class="fl_footer_social_icon" href="page/1/index.html#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>        <a class="fl_footer_social_icon" href="page/1/index.html#"><i class="fa fa-youtube" aria-hidden="true"></i></a>                <a class="fl_footer_social_icon" href="page/1/index.html#"><i class="fa fa-google" aria-hidden="true"></i></a>        <a class="fl_footer_social_icon" href="page/1/index.html#"><i class="fa fa-instagram" aria-hidden="true"></i></a>        <a class="fl_footer_social_icon" href="page/1/index.html#"><i class="fa fa-behance" aria-hidden="true"></i></a>    </div>
            </div>
                            <div class="container">
                    <div class="row footer-sidebar-wrapper">
                        <div class="footer-widget-area col-lg-4 col-md-6">
                            <div id="text-2" class="widget widget_text"><h5 class="widget--title">About Us</h5>			<div class="textwidget"><p>Ceipisicing elit sed do eiusmod tempor laboe dolore magna aliqa.</p>
</div>
		</div><div id="fl_theme_helper_contact_info-2" class="widget widget_fl_theme_helper_contact_info"><h5 class="widget--title">Contact Info </h5><div class="widget-address-wrap widget-info-wrap"><div class="left-content"><i class="ic icon-location-pin"></i></div><div class="right-content">3135  Oliver St, Fort Worth TX 76134</div></div><div class="widget-email-wrap widget-info-wrap"><div class="left-content"><i class="ic icon-envelope"></i></div><div class="right-content"><a href="mailto:support@domain.com">support@domain.com</a></div></div><div class="widget-phone-wrap widget-info-wrap"><div class="left-content"><i class="ic icon-earphones-alt"></i><span>Phone:</span></div><div class="right-content"><a class="fl-font-style-bolt" href="tel:+(123)45674700">+ (123) 456 74700</a></div></div></div>                        </div>
                        <div class="footer-widget-area col-lg-4 col-md-6">
                            <div id="nav_menu-2" class="widget widget_nav_menu"><h5 class="widget--title">Customer Links</h5><ul id="menu-footer-menu" class="menu"><li id="menu-item-18109" class="nav-item menu-item-depth-0 "><a href="../index.html%3Fp=17543.html" class="menu-link main-menu-link item-title"><i class="disable"></i>Latest Cars</a></li>
<li id="menu-item-18718" class="nav-item menu-item-depth-0 "><a href="../index.html%3Fp=17543.html" class="menu-link main-menu-link item-title"><i class="disable"></i>Services</a></li>
<li id="menu-item-18110" class="nav-item menu-item-depth-0 "><a href="../index.html%3Fp=17543.html" class="menu-link main-menu-link item-title"><i class="disable"></i>Featured Cars</a></li>
<li id="menu-item-18719" class="nav-item menu-item-depth-0 "><a href="../index.html%3Fp=17703.html" class="menu-link main-menu-link item-title"><i class="disable"></i>About Us</a></li>
<li id="menu-item-18111" class="nav-item menu-item-depth-0 "><a href="../index.html%3Fp=17543.html" class="menu-link main-menu-link item-title"><i class="disable"></i>Sell Your Car</a></li>
<li id="menu-item-18720" class="nav-item menu-item-depth-0 "><a href="../index.html%3Fp=17543.html" class="menu-link main-menu-link item-title"><i class="disable"></i>Inventory</a></li>
<li id="menu-item-18112" class="nav-item menu-item-depth-0 "><a href="../index.html%3Fp=17543.html" class="menu-link main-menu-link item-title"><i class="disable"></i>Buy a Car</a></li>
<li id="menu-item-18721" class="nav-item menu-item-depth-0 "><a href="../index.html%3Fp=17543.html" class="menu-link main-menu-link item-title"><i class="disable"></i>Parts Shop</a></li>
<li id="menu-item-18113" class="nav-item menu-item-depth-0 "><a href="../index.html%3Fp=17543.html" class="menu-link main-menu-link item-title"><i class="disable"></i>Reviews</a></li>
<li id="menu-item-18722" class="nav-item menu-item-depth-0 "><a href="../index.html%3Fp=17543.html" class="menu-link main-menu-link item-title"><i class="disable"></i>Contacts</a></li>
<li id="menu-item-18723" class="nav-item menu-item-depth-0 current-menu-item "><a href="page/1/index.html" class="menu-link main-menu-link item-title"><i class="disable"></i>Latest News</a></li>
</ul></div>                        </div>
                        <div class="footer-widget-area col-lg-4 col-md-6">
                            <div id="fl_theme_helper_wmpl_mailchimp_footer-2" class="widget widget_fl_theme_helper_wmpl_mailchimp_footer"><h5 class="widget--title">Subscribe Newsletter</h5><div class="mailchimp-content">Get our weekly newsletter for latest car news exclusive offers and deals and more.</div><div class="mailchimp-footer-form"><script>(function() {
	window.mc4wp = window.mc4wp || {
		listeners: [],
		forms: {
			on: function(evt, cb) {
				window.mc4wp.listeners.push(
					{
						event   : evt,
						callback: cb
					}
				);
			}
		}
	}
})();
</script><!-- Mailchimp for WordPress v4.8.12 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-18019" method="post" data-id="18019" data-name="autlines-mailchimp-form" ><div class="mc4wp-form-fields"><div class="revus-mailchimp-form">
	<input type="email" name="EMAIL" placeholder="YOUR EMAIL*" required />
	<div class="form-btn">
      <button type="submit" class="mailchimp-submit fl-font-style-lighter-than">Subscribe</button>
      <input class="hidden" type="hidden" value="Sign up" />
  	</div>
</div></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1692163888" /><input type="hidden" name="_mc4wp_form_id" value="18019" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div></form><!-- / Mailchimp for WordPress Plugin --></div></div>                        </div>
                    </div>
                </div>
                    </div>
        <div class="bottom-content-footer">
        <div class="container">
            <div class="row">
                <div class="fl-copyright--inner col-12 text-center">
                    Copyrights (c) 2023 Revus - Auto Dealer Theme. All rights reserved.                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Hamburger menu start -->
<!--Sidebar Mobile Menu Start-->
<div class="fl-mobile-menu-wrapper">
    <!--Sidebar Overlay Start-->
    <div class="fl-sidebar-overlay fl--mobile-menu-icon"></div>
    <!--Sidebar Overlay End-->
    <div class="fl-nav-container">
        <!--Mobile Nav menu Wrapper Start-->
        <div class="fl--mobile-menu-navigation-wrapper">
            <div class="fl-close-sidebar-icon fl--mobile-menu-icon closed"></div>
            <!--Mobile Lang Changer Sidebar Start-->
            




            <!--Mobile Lang Changer Sidebar End-->
            <!--Mobile Nav menu Start-->
            <nav class="fl--mobile-menu-navigation cf">
                <ul id="menu-mobile-menu" class="fl--mobile-menu"><li id="menu-item-17931" class="nav-item menu-item-depth-0 "><a href="../index.html%3Fp=17703.html" class="menu-link main-menu-link item-title"><i class="disable"></i>About</a></li>
<li id="menu-item-17932" class="nav-item menu-item-depth-0 has-submenu "><a href="page/1/index.html#" class="menu-link main-menu-link item-title"><i class="disable"></i>Inventory</a>
<div class="sub-nav"><ul class="menu-depth-1 sub-menu sub-nav-group"  >
	<li id="menu-item-17933" class="sub-nav-item menu-item-depth-1 "><a href="../index.html%3Fp=17061.html" class="menu-link sub-menu-link"><i class="disable"></i>Inventory grid</a></li>
	<li id="menu-item-17934" class="sub-nav-item menu-item-depth-1 "><a href="https://revus.tm-colors.info/vehicle-listings/?view_type=list" class="menu-link sub-menu-link"><i class="disable"></i>Inventory list</a></li>
	<li id="menu-item-17935" class="sub-nav-item menu-item-depth-1 "><a href="../index.html%3Fp=165.html" class="menu-link sub-menu-link"><i class="disable"></i>Vehicle details</a></li>
</ul></div>
</li>
<li id="menu-item-17944" class="nav-item menu-item-depth-0 "><a href="https://revus.tm-colors.info/404" class="menu-link main-menu-link item-title"><i class="disable"></i>404</a></li>
<li id="menu-item-17945" class="nav-item menu-item-depth-0 current-menu-ancestor current-menu-parent has-submenu "><a href="page/1/index.html#" class="menu-link main-menu-link item-title"><i class="disable"></i>News</a>
<div class="sub-nav"><ul class="menu-depth-1 sub-menu sub-nav-group"  >
	<li id="menu-item-17946" class="sub-nav-item menu-item-depth-1 current-menu-item "><a href="page/1/index.html" class="menu-link sub-menu-link"><i class="disable"></i>Blog</a></li>
</ul></div>
</li>
<li id="menu-item-17949" class="nav-item menu-item-depth-0 "><a href="../index.html%3Fp=17543.html" class="menu-link main-menu-link item-title"><i class="disable"></i>Contacts</a></li>
</ul>





            </nav>
            <!--Mobile Nav menu End-->
        </div>
        <!--Mobile Nav menu Wrapper End-->
    </div>
</div>
<!--Sidebar Mobile Menu End-->
<!-- Hamburger menu end -->


<!-- Mobile Menu -->
<!-- Mobile Menu end -->
</div>
<!-- Main holder End-->

		<script>
			window.RS_MODULES = window.RS_MODULES || {};
			window.RS_MODULES.modules = window.RS_MODULES.modules || {};
			window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
			window.RS_MODULES.defered = true;
			window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
			window.RS_MODULES.type = 'compiled';
		</script>
				<!-- Memberships powered by Paid Memberships Pro v2.9.7. -->
	<script>(function() {function maybePrefixUrlField() {
	if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
		this.value = "http://" + this.value;
	}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if (urlFields) {
	for (var j=0; j < urlFields.length; j++) {
		urlFields[j].addEventListener('blur', maybePrefixUrlField);
	}
}
})();</script>	<script>
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<style id='core-block-supports-inline-css'>
/**
 * Core styles: block-supports
 */

</style>
<link rel='stylesheet' id='rs-plugin-settings-css' href='../wp-content/plugins/revslider/public/assets/css/rs6.css%3Fver=6.6.7.css' media='all' />
<style id='rs-plugin-settings-inline-css'>
#rs-demo-id {}
</style>
<script  src='../wp-content/plugins/advanced-backgrounds/assets/vendor/jarallax/jarallax.min.js%3Fver=2.0.4' id='jarallax-js'></script>
<script  src='../wp-content/plugins/advanced-backgrounds/assets/vendor/jarallax/jarallax-video.min.js%3Fver=2.0.4' id='jarallax-video-js'></script>
<script id='nk-awb-js-extra'>
/* <![CDATA[ */
var AWBData = {"settings":{"disable_parallax":[],"disable_video":[],"full_width_fallback":true}};
/* ]]> */
</script>
<script  src='../wp-content/plugins/advanced-backgrounds/assets/awb/awb.min.js%3Fver=1.9.4' id='nk-awb-js'></script>
<script  src='../wp-content/plugins/contact-form-7/includes/swv/js/index.js%3Fver=5.6.4' id='swv-js'></script>
<script id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/revus.tm-colors.info\/dealer\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script  src='../wp-content/plugins/contact-form-7/includes/js/index.js%3Fver=5.6.4' id='contact-form-7-js'></script>
<script id='simple-likes-public-js-js-extra'>
/* <![CDATA[ */
var simpleLikes = {"ajaxurl":"https:\/\/revus.tm-colors.info\/dealer\/wp-admin\/admin-ajax.php","like":"Like","unlike":"Unlike"};
/* ]]> */
</script>
<script  src='../wp-content/plugins/fl-themes-helper/function/like/js/likes-public.js' id='simple-likes-public-js-js'></script>
<script  src='../wp-content/plugins/pix-auto-deal/assets/js/jquery.magnific-popup.min.js%3Fver=1.0.0' id='magnific-popup-js'></script>
<script  src='../wp-content/plugins/revslider/public/assets/js/rbtools.min.js%3Fver=6.6.7' defer async id='tp-tools-js'></script>
<script  src='../wp-content/plugins/revslider/public/assets/js/rs6.min.js%3Fver=6.6.7' defer async id='revmin-js'></script>
<script  src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.js%3Fver=2.1.4-wc.7.1.1' id='js-cookie-js'></script>
<script id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/dealer\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/dealer\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script  src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.js%3Fver=7.1.1' id='woocommerce-js'></script>
<script id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/dealer\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/dealer\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_77efbaf175051b3443529c983fae2f64","fragment_name":"wc_fragments_77efbaf175051b3443529c983fae2f64","request_timeout":"5000"};
/* ]]> */
</script>
<script  src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.js%3Fver=7.1.1' id='wc-cart-fragments-js'></script>
<script  src='../wp-includes/js/dist/vendor/regenerator-runtime.js%3Fver=0.13.9' id='regenerator-runtime-js'></script>
<script  src='../wp-includes/js/dist/vendor/wp-polyfill.js%3Fver=3.15.0' id='wp-polyfill-js'></script>
<script  src='../wp-includes/js/dist/hooks.js%3Fver=3ad9b2919ff3fc96ce63' id='wp-hooks-js'></script>
<script  src='../wp-includes/js/dist/i18n.js%3Fver=0343553cc8c879477a4a' id='wp-i18n-js'></script>
<script  id='wp-i18n-js-after'>
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script id='youzify-js-extra'>
/* <![CDATA[ */
var Youzify = {"unknown_error":"An unknown error occurred. Please try again later.","slideshow_auto":"1","slides_height_type":"fixed","activity_autoloader":"on","authenticating":"Authenticating...","security_nonce":"57ed81ec42","displayed_user_id":"0","ajax_url":"https:\/\/revus.tm-colors.info\/dealer\/wp-admin\/admin-ajax.php","save_changes":"Save Changes","thanks":"OK! Thanks","confirm":"Confirm","cancel":"Cancel","menu_title":"Menu","gotit":"Got it!","done":"Done!","ops":"Oops!","poll_option":"Option %d","poll_option_empty":"Sorry, you need to choose at least one option.","slideshow_speed":"5","assets":"https:\/\/revus.tm-colors.info\/dealer\/wp-content\/plugins\/youzify\/includes\/public\/assets\/","youzify_url":"https:\/\/revus.tm-colors.info\/dealer\/wp-content\/plugins\/youzify\/","live_notifications":"on","last_notification":"0","sound_file":"https:\/\/revus.tm-colors.info\/dealer\/wp-content\/plugins\/youzify\/includes\/public\/assets\/youzify-notification-sound","timeout":"10","notifications_interval":"30"};
/* ]]> */
</script>
<script  src='../wp-content/plugins/youzify/includes/public/assets/js/youzify.min.js%3Fver=3.2.5' id='youzify-js'></script>
<script  src='../wp-includes/js/imagesloaded.min.js%3Fver=4.1.4' id='imagesloaded-js'></script>
<script  src='../wp-includes/js/jquery/ui/core.js%3Fver=1.13.2' id='jquery-ui-core-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/bootstrap-bundle.js%3Fver=4.0' id='bootstrap-bundle-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/slick.js%3Fver=1.8.0' id='slick-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/jelect.js%3Fver=1.0' id='custom-select-js'></script>
<script  src='../wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js%3Fver=6.10.0' id='isotope-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/cookie.js%3Fver=1.4.1' id='cookie-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/count-to.js%3Fver=1.0' id='count-to-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/waypoints.js%3Fver=4.0.1' id='waypoints-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/mega-menu.js%3Fver=1.0' id='mega-menu-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/theia-sticky-sidebar.js%3Fver=1.7.0' id='theia-sticky-sidebar-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/TweenMax.js%3Fver=2.0.2' id='tween-max-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/velocity.js%3Fver=1.5.0' id='velocity-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/velocity-ui-pack.js%3Fver=5.0.4' id='velocity-pack-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/nouislider.js%3Fver=8.5.1' id='nouislider-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/w-numb.js%3Fver=1.0' id='w-numb-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/venobox.js%3Fver=1.0' id='venobox-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/fancybox.js%3Fver=3.5.7' id='fancybox-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/mega-menu/mega-menu-start.js%3Fver=1.0' id='mega-menu-start-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/revus-page-loader.js%3Fver=1.0' id='revus-page-loader-js'></script>
<script  src='../wp-content/themes/revus/assets/js/vendors-libs/hotspot.js%3Fver=1.0' id='hotspot-js'></script>
<script  src='../wp-content/themes/revus/assets/js/scripts.js%3Fver=1.0' id='revus-custom-scripts-js'></script>
<script  src='../wp-content/themes/revus/assets/js/woo-scripts.js%3Fver=1.0' id='revus-woo-custom-js'></script>
<script  src='../wp-content/plugins/fl-themes-helper/vc_custom/js/vc_custom.js' id='fl-vc-custom-js'></script>
<script  src='../wp-content/plugins/fl-themes-helper/widgets/assets/js/change_language.js' id='custom-changer-lang-js-js'></script>
<script id='heartbeat-js-extra'>
/* <![CDATA[ */
var heartbeatSettings = {"ajaxurl":"\/dealer\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script  src='../wp-includes/js/heartbeat.js%3Fver=6.1.3' id='heartbeat-js'></script>
<script id='flthemes_ajax-js-extra'>
/* <![CDATA[ */
var flthemes_ajax = {"url":"https:\/\/revus.tm-colors.info\/dealer\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script  src='../wp-content/plugins/fl-themes-helper/function/assets/js/flthemes-ajax.js%3Fver=6.1.3' id='flthemes_ajax-js'></script>
<script  defer src='../wp-content/plugins/mailchimp-for-wp/assets/js/forms.js%3Fver=4.8.12' id='mc4wp-forms-api-js'></script>
</body>
</html>

