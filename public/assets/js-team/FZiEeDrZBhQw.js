!function(e,t){const n=t.querySelector(".menu--mega"),a=t.querySelector(".menu__button"),i=t.querySelector(".menu__button--mega");if(!n||!a)return;const u=n.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'),r=u[0],d=u[u.length-1];function o(){a.setAttribute("aria-expanded",!0),i.setAttribute("aria-expanded",!0),n.setAttribute("aria-hidden",!1),r.focus()}function c({focusOnOpenButton:e=!1}={}){a.setAttribute("aria-expanded",!1),i.setAttribute("aria-expanded",!1),n.setAttribute("aria-hidden",!0),e&&a.focus()}e.addEventListener("load",(()=>{a.addEventListener("click",o),i.addEventListener("click",c)})),n.addEventListener("keydown",(e=>{"Tab"===e.key&&function(e){e.shiftKey&&t.activeElement===r?(e.preventDefault(),d.focus()):e.shiftKey||t.activeElement!==d||(e.preventDefault(),r.focus())}(e),"Escape"===e.key&&c({focusOnOpenButton:!0})}))}(window,document);