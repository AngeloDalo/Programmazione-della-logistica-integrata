@extends('layouts.admin')

@section('content')
    <div class="container border border-danger rounded-3 p-3 mb-4">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="row">
            <form action="{{ route('admin.underwears.store') }}" method="post" enctype="multipart/form-data" id="MyForm">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="name" class="form-label text-uppercase fw-bold">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <p id="demo1"></p>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="image" class="form-label text-uppercase fw-bold">Image</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
                @error('image')
                    <div class="alert alert-danger mt-3"> {{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="price" class="form-label text-uppercase fw-bold">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                </div>
                <p id="demo2"></p>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="quantity" class="form-label text-uppercase fw-bold">Quantity</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}">
                </div>
                <p id="demo3"></p>
                @error('quantity')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="size" class="form-label text-uppercase fw-bold">Size</label>
                    <input type="text" class="form-control" id="size" name="size" value="{{ old('size') }}">
                </div>
                <p id="demo4"></p>
                @error('size')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="visible" id="available" value="1" checked>
                    <label class="form-check-label" for="available">
                        Available
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="visible" id="notAvailable" value="0">
                    <label class="form-check-label" for="notAvailable">
                        Not Available
                    </label>
                </div>


                <button type="button" class="btn btn-danger text-dark" onclick="validationForm()" value="Submit form">Save</button>
            </form>
        </div>
    </div>

    <script>
        function validationForm() {
            let title = document.getElementById('name').value;
            let error1 = document.getElementById('demo1');
            let price = document.getElementById('price').value;
            let error2 = document.getElementById('demo2');
            let rooms = document.getElementById('quantity').value;
            let error3 = document.getElementById('demo3');
            let beds = document.getElementById('size').value;

            let message = "";
            let error = 0;

            if (!name || !name.trim()) {
                message = 'name not valid';
                error = 1;
                error1.innerHTML = message;
                error1.classList.add("alert");
                error1.classList.add("alert-danger");
            } else {
                error1.innerHTML = "";
                error1.classList.remove("alert");
                error1.classList.remove("alert-danger");
            }

            if (price < 0 || !price || isNaN(price)) {
                message = 'price not valid';
                error = 1;
                error2.innerHTML = message;
                error2.classList.add("alert");
                error2.classList.add("alert-danger");
            } else {
                error2.innerHTML = "";
                error2.classList.remove("alert");
                error2.classList.remove("alert-danger");
            }

            if (quantity < 0 || !quantity || isNaN(quantity)) {
                message = 'Quantity must be at least one';
                error = 1;
                error3.innerHTML = message;
                error3.classList.add("alert");
                error3.classList.add("alert-danger");
            } else {
                error3.innerHTML = "";
                error3.classList.remove("alert");
                error3.classList.remove("alert-danger");
            }

            if (size < 0 || !size || isNaN(size)) {
                message = 'size must be at least one';
                error = 1;
                error4.innerHTML = message;
                error4.classList.add("alert");
                error4.classList.add("alert-danger");
            } else {
                error4.innerHTML = "";
                error4.classList.remove("alert");
                error4.classList.remove("alert-danger");
            }

            if (error == 0) {
                message = "";
                document.getElementById('MyForm').submit();
                return true;
            } else {
                return false;
            }
        }
    </script>
@endsection
