importScripts('/cache-polyfill.js');

self.addEventListener('install', function(e) {
 e.waitUntil(
   caches.open('airhorner').then(function(cache) {
     return cache.addAll([
       '/',
       '/index.php',
       '/css/all.css',
       '/js/jquery-3.3.1.min.js',
       '/js/bootstrap.min.js',
       '/js/imagesloaded.pkgd.min.js',
       '/sw_tool.js',
       '/js/demo.js',
       '/img/i.jpg'
     ]);
   })
 );
});

self.addEventListener('fetch', function(event) {
    console.log(event.request.url);
   
    event.respondWith(
      caches.match(event.request).then(function(response) {
        return response || fetch(event.request);
      })
    );
   });


   self.addEventListener('install', () => self.skipWaiting());
   self.addEventListener('activate', () => self.clients.claim());