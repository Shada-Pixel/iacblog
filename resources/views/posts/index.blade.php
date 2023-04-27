<x-app-layout>
    <x-slot name="submenu">
        <x-dash-navi></x-dash-navi>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200 flex items-center justify-between">
                    <h1>Posts</h1>
                    <div class="flex">
                        <a href="{{route('posts.create')}}" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-green-200 hover:text-green-500 rounded-md"><span class="iconify" data-icon="material-symbols:add"></span></a>
                    </div>
                </div>


                <div class="p-3 bg-white border-b border-gray-200">
                    <table id="postTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $item)
                            <tr>
                                <td>{{$item->title}}</td>
                                <td class="flex gap-4">
                                    <a href="{{route('posts.show', $item->id)}}" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-blue-200 hover:text-blue-500 rounded-md"><span class="iconify" data-icon="bx:show"></span></a>
                                    <a href="{{route('posts.edit',$item->id)}}" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-green-200 hover:text-green-500 rounded-md"><span class="iconify" data-icon="ph:pencil-simple"></span></a>
                                    <form action="{{route('posts.destroy', $item->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-red-200 hover:text-red-500 rounded-md"><span class="iconify" data-icon="ic:outline-delete-outline"></span></button>
                                    </form>
                                </td>
                            </tr>
                            @empty

                            <tr>
                                <td colspan="2">No Item Found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
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
