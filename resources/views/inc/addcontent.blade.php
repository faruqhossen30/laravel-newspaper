
@php
    use App\Models\Admin\Ads\Ads;
    $ads = Ads::first();
@endphp
<section class="container mx-auto bg-white">
    <div class="grid grid-cols-12 gap-8 p-4">
        <div class="col-span-12 lg:col-span-6"><a href="#"><img src="{{ asset('storage/' . $ads->post_ads) }}"
                    alt="" class="w-full"></a></div>
        <div class="col-span-12 lg:col-span-6"><a href="#"><img src="{{ asset('storage/' . $ads->post_ads) }}"
                    alt="" class="w-full"></a></div>
    </div>
</section>
