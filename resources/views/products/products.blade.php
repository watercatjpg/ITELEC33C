<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/livewire@2.5.7/dist/livewire.min.js" defer></script>
    <style>
        .overlap {
            position: relative;
        }
        .overlap::before {
            content: "";
            position: absolute;
            top: -20px;
            left: -20px;
            width: calc(100% + 40px);
            height: calc(100% + 40px);
            background: rgba(255, 255, 255, 0.8);
            z-index: -1;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-100">

<section class="py-16">
    <div class="container mx-auto px-6">
        <!-- Add Product Form -->
        <div class="bg-white p-6 rounded-lg shadow-md overlap">
            <h2 class="text-lg font-semibold mb-4">Add New Product</h2>

            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf
                <!-- Product Name -->
                <div class="mb-4">
                    <x-label for="name" value="Product Name" />
                    <x-input id="name" type="text" name="name" required class="mt-1 block w-full" />
                    <x-input-error for="name" class="mt-2" />
                </div>

                <!-- Product Price -->
                <div class="mb-4">
                    <x-label for="price" value="Product Price" />
                    <x-input id="price" type="number" name="price" step="0.01" required class="mt-1 block w-full" />
                    <x-input-error for="price" class="mt-2" />
                </div>

                <!-- Product Photo -->
                <div x-data="{ photoName: null, photoPreview: null }" class="mb-4">
                    <x-label for="photo" value="Product Photo" />
                    <input type="file" id="photo" name="photo" class="hidden"
                           x-ref="photo"
                           x-on:change="
                               photoName = $refs.photo.files[0].name;
                               const reader = new FileReader();
                               reader.onload = (e) => {
                                   photoPreview = e.target.result;
                               };
                               reader.readAsDataURL($refs.photo.files[0]);
                           " />

                    <!-- Photo Preview -->
                    <div class="mt-2" x-show="!photoPreview">
                        <img src="" alt="No Photo Selected" class="rounded-md w-32 h-32 object-cover bg-gray-100 border border-gray-300">
                    </div>

                    <div class="mt-2" x-show="photoPreview" style="display: none;">
                        <span class="block rounded-md w-32 h-32 bg-cover bg-no-repeat bg-center"
                              x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>

                    <x-secondary-button class="mt-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        Select A Photo
                    </x-secondary-button>

                    <x-input-error for="photo" class="mt-2" />
                </div>

                <!-- Submit Button -->
                <div class="mt-4">
                    <x-button>
                        Add Product
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</section>

</body>
</html>
