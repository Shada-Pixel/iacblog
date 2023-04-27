<x-app-layout>
    <x-slot name="submenu">
        <x-dash-navi></x-dash-navi>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200">
                    Categories
                </div>
                <div class="p-3 bg-white border-b border-gray-200">
                    <form action="{{route('categories.store')}}" method="POST">
                        @csrf
                        <div class="overflow-hidden sm:rounded-md">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Category
                                        Name</label>
                                    <input required type="text" name="name" id="name" autocomplete="given-name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>
                            <div class="py-3 text-right">
                                <button type="submit"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save
                                    Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200">
                    <table id="categoryTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $item)

                            <tr>
                                <td>{{$item->name}}</td>
                                <td class="flex gap-4">
                                    <a href="{{route('categories.show', $item->id)}}" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-blue-200 hover:text-blue-500 rounded-md"><span class="iconify" data-icon="bx:show"></span></a>
                                    <a href="{{route('categories.edit',$item->id)}}" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-green-200 hover:text-green-500 rounded-md"><span class="iconify" data-icon="ph:pencil-simple"></span></a>
                                    <form action="{{route('categories.destroy', $item->id)}}" method="post">
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
                $('#categoryTable').DataTable({
                    responsive: true
                });
            });
        </script>
    </x-slot>


</x-app-layout>
