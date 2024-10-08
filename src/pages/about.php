<?php
    $title = "About us";
?>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v3.3.0/mapbox-gl.css" />
<script src="https://api.mapbox.com/mapbox-gl-js/v3.3.0/mapbox-gl.js"></script>
<style>
    #map {
        position: absolute;
        top: 0; bottom: 0;
        width: 100%;
    }

    .text{
        z-index: 1;
    }

    .overview{
        overflow: hidden;
    }

    .mapboxgl-ctrl-attrib{
        background-color: var(--bgt) !important;
        padding: 5px 20px !important;
        border-radius: 200px;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
    }

    .mapboxgl-ctrl-attrib-inner a{
        color: var(--colour) !important;
        text-decoration: none !important;
        padding: 2px !important;
    }

    #marker {
        background-image: url('/assets/img/logo.png');
        background-size: cover;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
        border: 2px solid var(--colour);
    }

    .mapboxgl-popup {
        max-width: 200px;
    }

    h1 span{
        background: -webkit-linear-gradient(170deg, var(--accent), var(--accenta));
        background-size: cover;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .mapboxgl-popup-content{
        background: var(--bgt) !important;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 10px;
    }

    .mapboxgl-popup-tip{
        border-top-color: var(--bgt) !important;
    }

    .mapboxgl-popup-close-button{
        color: var(--accenth);
        padding: 2px 5px;
        display: none;
    }

    .mapboxgl-ctrl-bottom-left{
        display: none;
    }
    
    .mapboxgl-ctrl-bottom-right{
        margin: 15px;
        transform: translate(50%, -50%);
        right: 50%;
    }

    .rocket.btn{
        background-color: transparent;
        color: var(--colour);
        rotate: 180deg;
        margin-top: 30px;
        transition: .15s ease-in-out transform;
    }

    .rocket.btn:hover{
        transform: translateY(-6px);
    }

    .rocket.btn svg{
        height: 30px;
    }

    .centered{
        z-index: 2;
    }

    .ptop{
        margin: 0;
        padding-top: 200px;
    }

    .centered .content {
        width: 1300px;
        max-width: calc(100vw - 40px);
    }

    .cards li{
        background: #10141a;
        padding: 15px;
        border-radius: 30px;
        width: 240px;
        display: inline-block;
        margin: 10px;
        transition: .2s ease-in-out;
    }

    .cards li:hover{
        transform: scale(1.1);
    }

    .cards li img{
        width: 100%;
        height: 100%;
        border-radius: 20px;
    }
</style>
<div class="middle overview">
    <div id="map"></div>
    <div class="text">
        <h1>Your data stays <span>safe</span> with us.</h1>
        <h2>Relax and enjoy the flight.</h2>
        <a href="#fly" class="rocket btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M96 256H128V512H0V352H32V320H64V288H96V256zM512 352V512H384V256H416V288H448V320H480V352H512zM320 64H352V448H320V416H192V448H160V64H192V32H224V0H288V32H320V64zM288 128H224V192H288V128z"/></svg>
        </a>
    </div>
</div>
<main>
    <div class="centered ptop" id="fly">
        <div>
            <div class="content">
                <div class="split">
                    <div class="middle img">
                        <img src="/assets/img/founders.jpg" alt="Founder Team" />
                    </div>
                    <div class="middle">
                        <div>
                            <h2>Founded in</h2>
                            <h1>April 2023</h1>
                            <a href="#leadership" class="btn icon">
                                <span>Learn more about our leadership</span>
                                <svg class="arrow-left" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4 11v2h12v2h2v-2h2v-2h-2V9h-2v2H4zm10-4h2v2h-2V7zm0 0h-2V5h2v2zm0 10h2v-2h-2v2zm0 0h-2v2h2v-2z" fill="currentColor"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="centered ptop">
        <div>
            <div class="content">
                <div class="split mr">
                    <div class="middle img rvimg">
                        <img src="/assets/img/3dprint.jpg" alt="3D Printer" />
                    </div>
                    <div class="middle">
                        <div>
                            <h2>First Prototypes in</h2>
                            <h1>May 2023</h1>
                        </div>
                    </div>
                    <div class="middle img rvshowimg">
                        <img src="/assets/img/3dprint.jpg" alt="3D Printer" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="centered ptop" id="fly">
        <div>
            <div class="content">
                <div class="split">
                    <div class="middle img">
                        <img src="/assets/img/products/r1.jpg" alt="Astro r1" />
                    </div>
                    <div class="middle">
                        <div>
                            <h2>Announced our first product</h2>
                            <h1>May 2024</h1>
                            <a href="/products/r1?m=default" class="btn icon">
                                <span>Find out more about the Astro r1</span>
                                <svg class="arrow-left" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4 11v2h12v2h2v-2h2v-2h-2V9h-2v2H4zm10-4h2v2h-2V7zm0 0h-2V5h2v2zm0 10h2v-2h-2v2zm0 0h-2v2h2v-2z" fill="currentColor"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top middle" id="leadership">
        <div>
            <h1>Leadership</h1>
            <ul class="cards">
                <li>
                    <img src="/assets/img/leadership/bdm.png" />
                    <h3>Batin Demir</h3>
                    <p>Co-founder, Chief Executive Officer</p>
                </li>
                <li>
                    <img src="/assets/img/leadership/aay.jpg" />
                    <h3>Ali Ayob</h3>
                    <p>Co-founder, Chief Security Officer</p>
                </li>
                <li>
                    <img src="/assets/img/leadership/jkl.jpg" />
                    <h3>Jonathan Kloft</h3>
                    <p>Co-founder, Chief Technology Officer</p>
                </li>
                <li>
                    <img src="/assets/img/leadership/mkl.jpg" />
                    <h3>Megge</h3>
                    <p>Customer<br>Engagement</p>
                </li>
            </ul>
        </div>
    </div>
</main>
<script>
    mapboxgl.accessToken = '<?php echo $_ENV['MAPBOX_KEY'] ?>';

    const usadatacenter = [-79.5171, 35.6408];
    const europacenter = [4.81807, 52.26542];
    const hqcenter = [11.4594, 48.1548];

    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/yobidev/clwe5fthc002c01qw90kx54ir',
        projection: 'globe',
        zoom: 2,
        center: [-90, 20]
    });

    map.scrollZoom.disable();

    const secondsPerRevolution = 120;
    const maxSpinZoom = 5;
    const slowSpinZoom = 3;

    let userInteracting = false;
    let spinEnabled = true;

    const usapopup = new mapboxgl.Popup({ offset: 25 }).setText(
        'Our datacenter in North Carolina'
    );

    const eupopup = new mapboxgl.Popup({ offset: 25 }).setText(
        'Our datacenter in the Netherlands'
    );

    const hqpop = new mapboxgl.Popup({ offset: 25 }).setText(
        'Our headquarter in Munich, Germany'
    );

    const usael = document.createElement('div');
    usael.id = 'marker';

    const euel = document.createElement('div');
    euel.id = 'marker';

    const hqel = document.createElement('div');
    hqel.id = 'marker';

    new mapboxgl.Marker(usael)
        .setLngLat(usadatacenter)
        .setPopup(usapopup)
        .addTo(map);
    
    new mapboxgl.Marker(euel)
        .setLngLat(europacenter)
        .setPopup(eupopup)
        .addTo(map);
    
    new mapboxgl.Marker(hqel)
        .setLngLat(hqcenter)
        .setPopup(hqpop)
        .addTo(map);

    function spinGlobe() {
        const zoom = map.getZoom();
        if (spinEnabled && !userInteracting && zoom < maxSpinZoom) {
            let distancePerSecond = 360 / secondsPerRevolution;
            if (zoom > slowSpinZoom) {
                const zoomDif =
                    (maxSpinZoom - zoom) / (maxSpinZoom - slowSpinZoom);
                distancePerSecond *= zoomDif;
            }
            const center = map.getCenter();
            center.lng -= distancePerSecond;
            map.easeTo({ center, duration: 1000, easing: (n) => n });
        }
    }

    map.on('mousedown', () => {
        userInteracting = true;
    });

    map.on('mouseup', () => {
        userInteracting = false;
        spinGlobe();
    });

    map.on('dragend', () => {
        userInteracting = false;
        spinGlobe();
    });

    map.on('pitchend', () => {
        userInteracting = false;
        spinGlobe();
    });

    map.on('rotateend', () => {
        userInteracting = false;
        spinGlobe();
    });

    map.on('moveend', () => {
        spinGlobe();
    });

    spinGlobe();
</script>