@php
    $posts   = App\Models\Admin\Post\Post::latest()->get();
@endphp

<section class="container mx-auto bg-white">
    <div class="grid grid-cols-12 p-4">
        <div class="col-span-4 p-2 text-lg text-white bg-red-900 lg:col-span-2">শিরোনাম :</div>
        <div class="col-span-8 p-1 border-b-4 border-red-900 lg:col-span-10 bg-violet-200">

            <marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="rtl" direction=""
                class="text-xl font-medium">
                @foreach ( $posts as $post )
                <span class="ticker"><a href="{{route('single.post',$post->id)}}">
                    {{$post->title}}
                </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                @endforeach
            </marquee>
        </div>
    </div>
</section>
