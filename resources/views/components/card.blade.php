<div class="card">
    <img
        src="/img/{{ $image['src'] }}"
        alt="{{ $image['title'] }}"
        title="{{ $image['title'] }}"
        class="img-responsive card-img-top"
        data-fancybox="gallery"
        loading="lazy">
    <div class="card-body">
        <p class="card-text text-center">{{ $image['title'] }}</p>
    </div>
</div>
