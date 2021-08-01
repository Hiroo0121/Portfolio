/*! jQuery v3.4.1 | (c) JS Foundation and other contributors | jquery.org/license */
history.pushState(null, null, location.href);
window.addEventListener('popstate', (e) => {
  history.go(1);
});