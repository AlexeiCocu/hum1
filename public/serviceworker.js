const staticCacheName = "pwa-v" + new Date().getTime();
const filesToCache = [
    '/offline',
    '/images/icons/icon-192x192.png',
    '/images/icons/logo.png',
    '/images/icons/logo.svg',
    '/images/no-image.jpg',
    '/lex_client/css/ac-project-f6426e.webflow.css',
    '/lex_client/css/normalize.css',
    '/lex_client/css/webflow.css',
];

self.addEventListener('install', event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
    )
})

// clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(cacheName => (cacheName.startsWith("pwa-")))
                    .filter(cacheName => (cacheName !== staticCacheName))
                    .map(cacheName => caches.delete(cacheName))
            )
        })
    )
})

// serve from cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
            .catch(()=>{
                return caches.match('offline')
            })
    )
})
