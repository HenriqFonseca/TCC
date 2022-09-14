self.addEventListener('install', event=> {

    console.log('sw ./ => installing...');
    event.waitUntil(
         caches.open( 'static-vl'). then( cache => cache.add('/cat.svg'))
    );
    
    console.log("sw ./ => install event detected e cat.svg cacheado!!!");
});

self.addEventListener('activate', event => {
    console.log('sw ./ => Evento activate ocorreu, agora pronto para interceptar fetches');
});

self.addEventListener('fetch', event => {
    console.log("sw ./ => detectei um evento fetch para o recurso abaixo:");
    console.log("sq ./ =>"+event.request.url);

    const url = new URL (event.request.url);

    // serve the cat SVG from the cache if the request is
    // same-origin and the path is '/dog.svg'
    if(url.origin == location.origin && url.pathname == '/dog.svg'){
        event. respondWith(caches.match('/cat.svg'));
    }
});