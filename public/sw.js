const staticCacheName = 'site-static-v2';
const dynamicCacheName = 'site-dynamic-v1';
const assets = [
    '/',
    '/index.php',
    './js/serviceWorker.js',
    '/lex_client/css/ac-project-f6426e.webflow.css',
    '/lex_client/css/normalize.css',
    '/lex_client/css/webflow.css',

    '/images/icons/icon-192x192.png',
    '/images/icons/logo.png',
    '/images/icons/logo.svg',
    '/images/icons/icon_status.svg',
    'images/icons/docsign.svg',
    'images/icons/law_icon.jpg',
    'images/icons/phone.svg',
    'images/icons/Zoom.svg',
    'images/icons/Profile.svg',

    'http://localhost:8000/',

    'https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js',
    'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js',
    'https://fonts.gstatic.com/s/materialicons/v47/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2',

    // '/pages/fallback.html'
];

// cache size limit function
const limitCacheSize = (name, size) => {
    caches.open(name).then(cache => {
        cache.keys().then(keys => {
            if(keys.length > size){
                cache.delete(keys[0]).then(limitCacheSize(name, size));
            }
        });
    });
};

// install event
self.addEventListener('install', evt => {
    //console.log('service worker installed');
    evt.waitUntil(
        caches.open(staticCacheName).then((cache) => {
            console.log('caching shell assets');
            cache.addAll(assets);
        })
    );
});

// activate event
self.addEventListener('activate', evt => {
    //console.log('service worker activated');
    evt.waitUntil(
        caches.keys().then(keys => {
            //console.log(keys);
            return Promise.all(keys
                .filter(key => key !== staticCacheName && key !== dynamicCacheName)
                .map(key => caches.delete(key))
            );
        })
    );
});

// fetch event
self.addEventListener('fetch', evt => {
    //console.log('fetch event', evt);
    evt.respondWith(
        caches.match(evt.request).then(cacheRes => {
            return cacheRes || fetch(evt.request).then(fetchRes => {
                return caches.open(dynamicCacheName).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    // check cached items size
                    limitCacheSize(dynamicCacheName, 15);
                    return fetchRes;
                })
            });
        }).catch(() => {
            if(evt.request.url.indexOf('.php') > -1){

                alert('You a currently offline');

                // return caches.match('/pages/fallback.html');
            }
        })
    );
});
