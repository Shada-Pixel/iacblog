<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <p class="text-center underline underline-offset-[16px] decoration-sblue mb-4 font-bold text-4xl">{{$category->name}}</p>

            @forelse ($posts as $post)

            <div class="p-3">
                <h1 class="text-center font-bold text-5xl">{{$post->title}}</h1>
                <p class="text-sm text-gray-500 text-center mt-4">Posted on {{date('M d,Y', strtotime($post->posted_at))}} by {{$post->author->name}}</p>
                <p class="text-justify mt-8 text-lg">{{$post->shortdesc}}</p>
                <div class="flex justify-center items-center py-4">

                    <img src="{{$post->getFirstMediaUrl('images')}}" alt="{{$post->title}}" srcset="">
                </div>
                <p class="text-justify mt-5 text-lg">{!! \Illuminate\Support\Str::limit($post->body , 250, $end='<span class="text-sblue"> . . . </span>') !!} <br> <br><a href="{{route('readPost',$post->id)}}" class="text-sblue"> Continue reading →</a></p>

            </div>
            @empty

            @endforelse
        </div>
    </div>
</x-app-layout>
