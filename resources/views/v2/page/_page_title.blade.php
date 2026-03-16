<section class="page-title">
    <div class="auto-container">
        <!-- Icons Box -->
        <div class="icons-box parallax-scene-1" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
            <div class="icon-one" data-depth="0.10" style="transform: translate3d(11.2px, -3.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></div>
            <div class="icon-two" data-depth="0.30" style="transform: translate3d(33.5px, -10px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                <img src="{{ url('assets/v2/images/icons/vector-9.png') }}" alt="">
            </div>
            <div class="icon-three" data-depth="0.30" style="transform: translate3d(33.5px, -10px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                <img src="{{ url('assets/v2/images/icons/vector-34.png') }}" alt="">
            </div>
            <div class="icon-four" data-depth="0.10" style="transform: translate3d(11.2px, -3.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></div>
        </div>
        <h2>{{ !empty($page->description)?$page->title:'Page not found' }}</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ url('') }}">Home</a></li>
            <li>{{ !empty($page->description)?$page->title:'Page not found' }}</li>
        </ul>
    </div>
</section>