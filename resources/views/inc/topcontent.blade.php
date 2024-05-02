<section class="container mx-auto bg-white">
    <div class="grid grid-cols-12 gap-8 p-4">

        <div class="col-span-12 lg:col-span-8">
            <div><a href="single.html"
                    class="text-lg lg:text-2xl">{{ $lastnews->title }}</a>
            </div>
            <a href="/single.html" class="float-left pr-4">
                <img src="{{ asset('storage/' . $lastnews->thumbnail) }}"
                    class="p-1 my-2 border w-[250px] h-[140px] lg:w-[540px] lg:h-[320px]" alt="">
            </a>
            {{-- <p class="text-sm text-justify lg:text-xl">ভারতের অন্যতম রাজনৈতিক দল জাতীয় কংগ্রেসের সভাপতি পদে রাহুল
                গান্ধীকে বসানোর প্রস্তাব পাস করেছে দলটির ওয়ার্কিং কমিটি। সোমবার (২০ নভেম্বর) নয়াদিল্লিতে কংগ্রেস
                সভানেত্রী সোনিয়া গান্ধীর ১০ জনপথের বাড়িতে বৈঠক বসে কংগ্রেস ওয়ার্কিং কমিটির। ওই বৈঠকেই রাহুল গান্ধীকে
                সভাপতি পদে বসাতে প্রস্তাব পাস হয়। কংগ্রেসের বর্তমান সভানেত্রী সোনিয়া গান্ধী বলেন, ‘রাহুল </p> --}}
            <div class="prose text-sm text-justify lg:text-xl">

                {!! $lastnews->description !!}<a href="{{route('single.post',$lastnews->id)}}" class="text-sm text-blue-600 lg:text-xl">বিস্তারিত...</a>
            </div>
        </div>

@include('layout.latestpost')

    </div>
</section>
