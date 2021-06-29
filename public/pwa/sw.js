const cacheName = 'humm-1';
const filesToCache = [
  './../',
  './../index.php',
  './../lex_client/css/ac-project-f64262.webflow.css',
  './../lex_client/css/normalize.css',
  './../lex_client/css/webflow.css',
  './../lex_client/js/webflow.js'
];

/* Start the service worker and cache all of the app's content */
self.addEventListener('install', function(e) {
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.addAll(filesToCache);
    })
  );
});

/* Serve cached content when offline */
self.addEventListener('fetch', function(e) {
  e.respondWith(
    caches.match(e.request).then(function(response) {
      return response || fetch(e.request);
    })
  );
});
