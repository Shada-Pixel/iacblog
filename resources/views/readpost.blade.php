<x-app-layout>
    <x-slot name="pagemeta">
        <meta property="og:url"           content="{{env('APP_URL')}}" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="{{$post->title}}" />
        <meta property="og:description"   content="{{$post->shortdesc}}<" />
        <meta property="og:image"         content="{{$post->getFirstMediaUrl('images')}}" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <p class="text-center underline underline-offset-[16px] decoration-sblue mb-4 font-bold text-4xl">{{$post->category->name}}</p>

            <div class="p-3">
                <h1 class="text-center font-bold text-5xl">{{$post->title}}</h1>
                <p class="text-sm text-gray-500 text-center mt-4">Posted on {{date('M d,Y', strtotime($post->posted_at))}} by {{$post->author->name}}</p>
                <p class="text-justify mt-8 text-lg">{{$post->shortdesc}}</p>
                <div class="flex justify-center items-center py-4">

                    <img src="{{$post->getFirstMediaUrl('images')}}" alt="{{$post->title}}" srcset="">
                </div>
                <p class="text-justify mt-5 text-lg">{!! $post->body !!}</p>



            </div>
        </div>
    </div>




    <x-slot name="script">
        <script>
            $('#sideforest').removeClass('sm:flex');
        </script>
    </x-slot>
</x-app-layout>
