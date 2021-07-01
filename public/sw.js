const staticCacheName = 'static-cache-v0';
const dynamicCacheName = 'dynamic-cache-v0';

const staticAssets = [
    '/offline',
    './images/icons/icon-192x192.png',
    './images/icons/logo.png',
    './images/icons/logo.svg',
    './images/no-image.jpg',
    './offline.html',
    './lex_client/css/ac-project-f6426e.webflow.css',
    './lex_client/css/normalize.css',
    './lex_client/css/webflow.css',
    './lex_client/js/webflow.js',
    './js/serviceWorker.js'
];

self.addEventListener('install', async event => {
    const cache = await caches.open(staticCacheName);
    await cache.addAll(staticAssets);
    console.log('Service worker has been installed');
});

self.addEventListener('activate', async event => {
    const cachesKeys = await caches.keys();
    const checkKeys = cachesKeys.map(async key => {
        if(staticCacheName !== key){
            await caches.delete(key);
        }
    });
    await Promise.all(checkKeys);
    console.log('Service worker has been activated');
});

self.addEventListener('fetch', async event => {
    console.log(`Trying to fetch ${event.request.url}`);
    event.respondWith(checkCache(event.request));
});

async function checkCache(req) {
    const cachedResponse = await caches.match(req);
    return cachedResponse || checkOnline(req);
}

async function checkOnline(req) {
    const cache = await caches.open(dynamicCacheName);
    try {
            const res = await fetch(req);
            await cache.put(req, res.clone());
            return res;
    }catch (error) {
        const cachedRes = await cache.match(req);
        if(cachedRes){
            return cachedRes;
        }
        // else if(req.url.indexOf('.php') !== -1){
        //     return caches.match('offline');
        // }
        else{
            return await cache.match('./images/no-image.jpg');
        }


    }
}
