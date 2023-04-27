<x-app-layout>
    <x-slot name="submenu">
        <x-dash-navi></x-dash-navi>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200 flex justify-between items-center">
                    <h1>{{$category->name}}</h1>
                    <div class="flex gap-4 p-3">
                        <a href="{{ URL::previous() }}" class="text-base p-2 bg-gray-100 text-gray-500 hover:bg-red-200 hover:text-red-500 rounded-md"><span class="iconify" data-icon="material-symbols:arrow-back-rounded"></span></a>
                    </div>
                </div>
                <div class="p-3 bg-white border-b border-gray-200">
                    <form action="{{route('categories.update', $category->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="overflow-hidden sm:rounded-md">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Category
                                        Name</label>
                                    <input required type="text" name="name" id="name" autocomplete="given-name" value="{{$category->name}}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>
                            <div class="py-3 text-right">
                                <button type="submit"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Update
                                    Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
