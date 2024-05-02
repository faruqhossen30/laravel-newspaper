@php
    use App\Models\Admin\Setting\WebsiteSetting;
    $site = websitesetting::first();

    use App\Models\Admin\Ads\Ads;
    $ads = Ads::first();
@endphp

<section class="container mx-auto bg-white">
    <div class="grid grid-cols-12 gap-4 p-4 ">
        <div class="col-span-12 lg:col-span-4">
            <a href="                            /

index.html">
                <img src="{{ asset('storage/' . $site->logo) }}" alt="" class="w-full  h-28 lg:w-96">
                {{-- <img src="{{ asset('photo/') }}/image.png" alt="" class="w-full  h-28 lg:w-96"> --}}
            </a>
        </div>
        <div class="col-span-12 lg:col-span-8">
            <a href="#">
                <img src="{{ asset('storage/' . $ads->header_ads) }}" alt="" class="w-full h-24 lg:h-28">
            </a>
        </div>
    </div>
</section>
