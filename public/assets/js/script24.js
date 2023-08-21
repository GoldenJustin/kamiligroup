
var tpj = jQuery;

var revapi5;

if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider51"] = {
  once: RS_MODULES.modules["revslider51"] !== undefined ? RS_MODULES.modules["revslider51"].once : undefined, init: function () {
    window.revapi5 = window.revapi5 === undefined || window.revapi5 === null || window.revapi5.length === 0 ? document.getElementById("rev_slider_5_1") : window.revapi5;
    if (window.revapi5 === null || window.revapi5 === undefined || window.revapi5.length == 0) { window.revapi5initTry = window.revapi5initTry === undefined ? 0 : window.revapi5initTry + 1; if (window.revapi5initTry < 20) requestAnimationFrame(function () { RS_MODULES.modules["revslider51"].init() }); return; }
    window.revapi5 = jQuery(window.revapi5);
    if (window.revapi5.revolution == undefined) { revslider_showDoubleJqueryError("rev_slider_5_1"); return; }
    revapi5.revolutionInit({
      revapi: "revapi5",
      sliderLayout: "fullwidth",
      visibilityLevels: "1240,1024,778,480",
      gridwidth: "1240,1027,778,480",
      gridheight: "620,513,460,420",
      lazyType: "smart",
      spinner: "spinner0",
      perspective: 600,
      perspectiveType: "local",
      editorheight: "620,513,460,420",
      responsiveLevels: "1240,1024,778,480",
      progressBar: { disableProgressBar: true },
      navigation: {
        onHoverStop: false
      },
      parallax: {
        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 30],
        type: "scroll",
        origo: "slidercenter",
        speed: 0
      },
      viewPort: {
        global: true,
        globalDist: "-200px",
        enable: false
      },
      fallbacks: {
        allowHTML5AutoPlayOnAndroid: true
      },
    });

  }
} // End of RevInitScript

if (window.RS_MODULES.checkMinimal !== undefined) { window.RS_MODULES.checkMinimal(); };
