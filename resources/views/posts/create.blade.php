<x-app-layout>
    <x-slot name="submenu">
        <x-dash-navi></x-dash-navi>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200">
                    Create New Post
                </div>
                <div class="p-3 bg-white border-b border-gray-200 grid sm:grid-cols-2 gap-4">
                    <div class="">

                        <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="overflow-hidden sm:rounded-md">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-6">
                                        <label for="name" class="block text-sm font-medium text-gray-700">Cover Image</label>
                                        <input class="block w-full text-sm text-gray-700 rounded-lg border border-gray-300 cursor-pointer focus:outline-none sm:text-sm" id="cover" name="cover" type="file">
                                        <div class="mt-1 text-xs text-gray-700">Image ratio must be <span class="text-red-400">16:9</span> and 1080*608 <span class="text-red-400">1080X608 </span></div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-6 gap-6 py-3">
                                    <div class="col-span-6 sm:col-span-6">
                                        <label for="title" class="block text-sm font-medium text-gray-700">Post Title</label>
                                        <input required type="text" name="title" id="title" autocomplete="given-name"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                                    <select id="category" name="category" autocomplete="category-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                      @forelse ($categories as $item)
                                      <option value="{{$item->id}}">{{$item->name}}</option>
                                      @empty
                                      <option>No Category Found</option>
                                      @endforelse
                                    </select>
                                </div>
                                <div class="grid grid-cols-6 gap-6 py-3">
                                    <div class="col-span-6 sm:col-span-6">
                                        <label for="postedat" class="block text-sm font-medium text-gray-700">Posted At</label>
                                        <input required type="date" name="postedat" id="postedat" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                                <div class="grid grid-cols-6 gap-6 py-3">
                                    <div class="col-span-6 sm:col-span-6">
                                        <label for="shortdesc" class="block text-sm font-medium text-gray-700">Short Description</label>
                                        <textarea name="shortdesc" id="shortdesc" rows="3"class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                                    </div>
                                </div>
                                <div class="grid grid-cols-6 gap-6 py-3">
                                    <div class="col-span-6 sm:col-span-6">
                                        <label for="bodytext" class="block text-sm font-medium text-gray-700">Post Body</label>
                                        <textarea name="body" id="bodytext" rows="6"class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                                    </div>
                                </div>
                                <div class="py-3 text-right">
                                    <button type="submit"
                                        class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save
                                        Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="bg-white drop-shadow-md rounded-md">
                        <img src="https://dummyimage.com/1080x608/e3e3e3/000000&text=Post+Cover" alt="" class="w-full" id="coverReview">
                        <div class="p-3">
                            <h2 id="titleReview" class="text-xl font-bold my-2">Post Title</h2>
                            <p>Publish Date: <span id="dateReview">{{ date('Y-M-d') }}</span></p>
                            <h3 id="shortReview" class="mt-3">Post Short Descriotion</h3>
                            <p id="bodyReview" class="mt-3">Post Body</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- Script --}}
    <x-slot name="script">
        <script>

            $(document).ready(function () {
                $("#titleReview").html($("#title").val());
                $("#shortReview").html($("#shortdesc").val());
                $("#bodyReview").html($("#bodytext").val());
            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#coverReview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#cover").change(function(){
                readURL(this);
            });

            $("#title").change(function(){
                $("#titleReview").html($("#title").val());
            });
            $("#shortdesc").change(function(){
                $("#shortReview").html($("#shortdesc").val());
            });
            $("#bodytext").change(function(){
                $("#bodyReview").html($("#bodytext").val());
            });
            $("#postedat").change(function(){
                $("#dateReview").html($("#postedat").val());
            });

        </script>
    </x-slot>


</x-app-layout>
