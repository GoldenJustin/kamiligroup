!function(t,e){const n=e.querySelector("#contact");n&&t.addEventListener("message",(function(t){"hsFormCallback"===t.data.type&&"onFormSubmit"===t.data.eventName&&(n.style.height=n.getBoundingClientRect().height+"px");if("hsFormCallback"===t.data.type&&"onFormSubmitted"===t.data.eventName){const t=e.querySelector("#contact .block__icon"),n=e.querySelector("#contact .block__title");t&&(t.style.display="none"),n&&(n.style.display="none")}}))}(window,document);