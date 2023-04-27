<x-app-layout>
    <x-slot name="submenu">
        <x-dash-navi></x-dash-navi>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200 flex items-center justify-between">
                    <h2>{{$post->title}}</h2>
                    <div class="flex gap-2">
                        <a href="{{route('posts.edit',$post->id)}}" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-green-200 hover:text-green-500 rounded-md"><span class="iconify" data-icon="ph:pencil-simple"></span></a>
                        <form action="{{route('posts.destroy', $post->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-red-200 hover:text-red-500 rounded-md"><span class="iconify" data-icon="ic:outline-delete-outline"></span></button>
                        </form>
                    </div>
                </div>


                <div class="p-3 bg-white border-b border-gray-200">
                    <p class="text-center underline underline-offset-8 mb-4">{{$post->category->name}}</p>
                    <h1 class="text-center font-bold text-4xl">{{$post->title}}</h1>
                    <p class="text-sm text-gray-500 text-center">Posted on {{date('M d,Y', strtotime($post->posted_at))}} by {{$post->author->name}}</p>
                    <p class="text-center mt-5">{{$post->shortdesc}}</p>
                    <img src="{{$post->getFirstMediaUrl('images')}}" alt="{{$post->title}}" srcset="">
                    <p class="text-center mt-5">{{$post->body}}</p>
                </div>
            </div>
        </div>
    </div>



    {{-- Script --}}
    <x-slot name="script">
        <script>
            $(document).ready(function() {
                $('#postTable').DataTable({
                    responsive: true,
                });
            });
        </script>
    </x-slot>


</x-app-layout>
