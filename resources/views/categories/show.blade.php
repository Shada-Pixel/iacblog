<x-app-layout>
    <x-slot name="submenu">
        <x-dash-navi></x-dash-navi>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex items-center justify-between">
                <div class="p-3 bg-white">
                    {{$category->name}}
                </div>
                <div class="flex gap-4 p-3">
                    <a href="{{route('categories.edit',$category->id)}}" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-green-200 hover:text-green-500 rounded-md"><span class="iconify" data-icon="ph:pencil-simple"></span></a>
                    <form action="{{route('categories.destroy', $category->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-red-200 hover:text-red-500 rounded-md"><span class="iconify" data-icon="ic:outline-delete-outline"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- All Post belongs to this category --}}
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200">
                    All Post Belong to this Category
                </div>
                <div class="p-3 bg-white border-b border-gray-200 grid grid-cols-2 sm:grid-cols-4 gap-4">
                    {{-- Post --}}
                    <div class="rounded-md bg-white shadow-md overflow-hidden">
                        <img src="https://picsum.photos/225/128" alt="" class="w-full">
                        <div class="p-2">
                            <h2 class="font-bold text-2xl my-4">Post Title</h2>
                            <div class="flex gap-2 mt-2">
                                <a href="" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-blue-200 hover:text-blue-500 rounded-md"><span class="iconify" data-icon="bx:show"></span></a>
                                <a href="" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-green-200 hover:text-green-500 rounded-md"><span class="iconify" data-icon="ph:pencil-simple"></span></a>
                                <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-red-200 hover:text-red-500 rounded-md"><span class="iconify" data-icon="ic:outline-delete-outline"></span></button>
                                </form>
                            </div>
                        </div>

                    </div>
                    {{-- Post --}}
                    <div class="rounded-md bg-white shadow-md overflow-hidden">
                        <img src="https://picsum.photos/225/128" alt="" class="w-full">
                        <div class="p-2">
                            <h2 class="font-bold text-2xl my-4">Post Title</h2>
                            <div class="flex gap-2 mt-2">
                                <a href="" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-blue-200 hover:text-blue-500 rounded-md"><span class="iconify" data-icon="bx:show"></span></a>
                                <a href="" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-green-200 hover:text-green-500 rounded-md"><span class="iconify" data-icon="ph:pencil-simple"></span></a>
                                <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-red-200 hover:text-red-500 rounded-md"><span class="iconify" data-icon="ic:outline-delete-outline"></span></button>
                                </form>
                            </div>
                        </div>

                    </div>
                    {{-- Post --}}
                    <div class="rounded-md bg-white shadow-md overflow-hidden">
                        <img src="https://picsum.photos/225/128" alt="" class="w-full">
                        <div class="p-2">
                            <h2 class="font-bold text-2xl my-4">Post Title</h2>
                            <div class="flex gap-2 mt-2">
                                <a href="" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-blue-200 hover:text-blue-500 rounded-md"><span class="iconify" data-icon="bx:show"></span></a>
                                <a href="" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-green-200 hover:text-green-500 rounded-md"><span class="iconify" data-icon="ph:pencil-simple"></span></a>
                                <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-red-200 hover:text-red-500 rounded-md"><span class="iconify" data-icon="ic:outline-delete-outline"></span></button>
                                </form>
                            </div>
                        </div>

                    </div>
                    {{-- Post --}}
                    <div class="rounded-md bg-white shadow-md overflow-hidden">
                        <img src="https://picsum.photos/225/128" alt="" class="w-full">
                        <div class="p-2">
                            <h2 class="font-bold text-2xl my-4">Post Title</h2>
                            <div class="flex gap-2 mt-2">
                                <a href="" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-blue-200 hover:text-blue-500 rounded-md"><span class="iconify" data-icon="bx:show"></span></a>
                                <a href="" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-green-200 hover:text-green-500 rounded-md"><span class="iconify" data-icon="ph:pencil-simple"></span></a>
                                <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-red-200 hover:text-red-500 rounded-md"><span class="iconify" data-icon="ic:outline-delete-outline"></span></button>
                                </form>
                            </div>
                        </div>

                    </div>
                    {{-- Post --}}
                    <div class="rounded-md bg-white shadow-md overflow-hidden">
                        <img src="https://picsum.photos/225/128" alt="" class="w-full">
                        <div class="p-2">
                            <h2 class="font-bold text-2xl my-4">Post Title</h2>
                            <div class="flex gap-2 mt-2">
                                <a href="" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-blue-200 hover:text-blue-500 rounded-md"><span class="iconify" data-icon="bx:show"></span></a>
                                <a href="" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-green-200 hover:text-green-500 rounded-md"><span class="iconify" data-icon="ph:pencil-simple"></span></a>
                                <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-red-200 hover:text-red-500 rounded-md"><span class="iconify" data-icon="ic:outline-delete-outline"></span></button>
                                </form>
                            </div>
                        </div>

                    </div>
                    {{-- Post --}}
                    <div class="rounded-md bg-white shadow-md overflow-hidden">
                        <img src="https://picsum.photos/225/128" alt="" class="w-full">
                        <div class="p-2">
                            <h2 class="font-bold text-2xl my-4">Post Title</h2>
                            <div class="flex gap-2 mt-2">
                                <a href="" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-blue-200 hover:text-blue-500 rounded-md"><span class="iconify" data-icon="bx:show"></span></a>
                                <a href="" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-green-200 hover:text-green-500 rounded-md"><span class="iconify" data-icon="ph:pencil-simple"></span></a>
                                <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-red-200 hover:text-red-500 rounded-md"><span class="iconify" data-icon="ic:outline-delete-outline"></span></button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Script --}}
    <x-slot name="script">
        <script>

        </script>
    </x-slot>


</x-app-layout>
