<!-- Nút mở modal -->

<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>



@vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
    .collapse {
        visibility: visible;
    }

    img {
        vertical-align: middle;

    }

    .dropdown-toggle {
        white-space: nowrap;
    }

    .pr-4,
    .px-4 {

        margin-top: 7%;
    }
</style>
<!-- Nút mở modal -->
<x-danger-button style="margin-top: -2%" x-data="" class="add-product-button"
    x-on:click.prevent="$dispatch('open-modal', 'add-product')">
    <i class="bi bi-patch-plus"></i> Thêm tài khoản
</x-danger-button>

<x-modal name="add-product" :show="false" focusable>
    <form method="post" action="/admin/addsp" class="p-6 add-product-form">
        {{-- <form method="post" action="{{ route('add.product') }}" class="p-6 add-product-form"> --}}
        @csrf

        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            Thêm sản phẩm
        </h2>
        <div class="row">
            <div class="col">
                <div class="mt-6">
                    <x-input-label for="productName" value="Tên sản phẩm" class="sr-only" />

                    <x-text-input id="productName" name="ten_sp" type="text" class="mt-1 block w-100 form-input"
                        placeholder="Tên sản phẩm" required />
                </div>

                <div class="mt-6">
                    <x-input-label for="productPrice" value="Giá sản phẩm" class="sr-only" />

                    <x-text-input id="gia" name="gia" type="number" class="mt-1 block w-100 form-input"
                        placeholder="Giá sản phẩm" required />
                </div>
                <div class="mt-6">
                    <x-input-label for="productPrice" value="Giá khuyến mãi" class="sr-only" />

                    <x-text-input id="gia" name="gia_km" type="number" class="mt-1 block w-100 form-input"
                        placeholder="Giá khuyến mãi" required />
                </div>
            </div>
            <div class="col">
                <div class="mt-6">
                    <x-input-label for="productPrice" value="hinh" class="sr-only" />

                    <x-file-input id="gia" name="hinh" type="file" class="mt-1 block w-3/4 form-input"
                        placeholder="hình" required />
                </div>
                <div class="mt-6">
                    <x-input-label for="productPrice" value="loại" class="sr-only" />

                    {{-- <x-text-input id="id_loai" name="id_loai" type="text" class="mt-1 block w-3/4 form-input"
                        placeholder="loại sản phẩm" required /> --}}
                    <select name="id_loai" id="">
                        <option value="-1">Asus</option>
                        <option value="1">Acer</option>
                        <option value="2">Lenovo</option>
                        <option value="3">MSI</option>
                        <option value="3">HP</option>

                    </select>
                </div>
            </div>

        </div>
        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')" class="cancel-button">
                Hủy
            </x-secondary-button>

            <x-danger-button type="submit" id="success" class="ml-3 add-button">
                Thêm
            </x-danger-button>
        </div>
    </form>
</x-modal>
</section>
