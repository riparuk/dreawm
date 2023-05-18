<form method="POST" action="{{ route('dream.store') }}" enctype="multipart/form-data">
    @csrf
    <div id="createDream" class="bg-gray-50 dark:bg-gray-900 w-full shadow rounded-lg p-5">
        <textarea name="title"
        class="bg-gray-50 w-full rounded-lg shadow border p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        rows="1" placeholder="Your dream's title"></textarea>
        @error('title')
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
        role="alert">
        <span class="font-medium">{{ $message }}</span>
    </div>
    @enderror
    <textarea name="description"
        class="bg-gray-50 w-full rounded-lg shadow border p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        rows="5" placeholder="Draw your dream.."></textarea>
    @error('description')
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <span class="font-medium">{{ $message }}</span>
        </div>
    @enderror
        <div class="flex flex-row flex-wrap">
            <div class="w-full mt-2">
                <select id="categories" name="category_id" required
                    class="w-1/3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option disabled selected>Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-full mt-1">
                <select id="statuses" name="status_id"
                    class="w-1/3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option disabled selected>Status</option>
                    @foreach ($statuses as $status)
                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                    @endforeach
                </select>
            </div>


            <label class="block mt-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload
                Image (Optional)</label>
            <input name="image"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="file_input_help" id="image" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">JPEG,PNG,JPG (Max:2MB)</p>
            @error('image')
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert">
                    <span class="font-medium">{{ $message }}</span>
                </div>
            @enderror


            <div class="w-full mt-2">
                <label class="relative inline-flex items-center cursor-pointer">
                    <input name="is_public" value="1" type="checkbox" class="sr-only peer" checked disabled>
                    <div
                        class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                    </div>
                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-black-50">Public</span>
                </label>
            </div>
            <div class="w-2/3">
                <button type="submit"
                    class="bg-indigo-400 hover:bg-indigo-300 text-white p-2 rounded-lg mt-4">Submit</button>
            </div>
        </div>
    </div>
</form>

<script>
    // Mendapatkan referensi elemen input checkbox
    const checkbox = document.querySelector('input[type="checkbox"]');

    // Menambahkan event listener untuk perubahan status checkbox
    checkbox.addEventListener('change', function() {
        // Jika checkbox dicentang, set nilai input menjadi "true"
        // Jika checkbox tidak dicentang, set nilai input menjadi "false"
        if (checkbox.checked) {
            checkbox.value = "1";
        } else {
            checkbox.value = "2";
        }
    });
</script>
