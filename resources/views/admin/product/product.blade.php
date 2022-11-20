@extends('admin.master')
@section('content')
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Tables</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">Add Category</button>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                {{--                                            <div class="border p-4 rounded">--}}
                                <form action="{{ route('new-product') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="CategoryName" class="col-sm-3 col-form-label">Category Name:</label>
                                        <div class="col-sm-9">
                                            <select name="category_id" id="" class="form-control">
                                                <option value="">please Select A category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="CategoryName" class="col-sm-3 col-form-label">Sub Category Name:</label>
                                        <div class="col-sm-9">
                                            <select name="sub_category_id" id="" class="form-control">
                                                <option value="">please Select A Sub  category</option>
                                                @foreach($subCategories as $subCategory)
                                                    <option value="{{ $subCategory->id }}">{{ $subCategory->sub_category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="CategoryName" class="col-sm-3 col-form-label">Brand Name:</label>
                                        <div class="col-sm-9">
                                            <select name="brand_id" id="" class="form-control">
                                                <option value="">please Select A Brand</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="CategoryName" class="col-sm-3 col-form-label">Product Name:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="product_name" class="form-control" id="CategoryName" placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="CategoryName" class="col-sm-3 col-form-label">Product Code:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="product_code" class="form-control" id="CategoryName" placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="CategoryName" class="col-sm-3 col-form-label">Product price:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="product_price" class="form-control" id="price" placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="CategoryName" class="col-sm-3 col-form-label">discount Amount:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="discount_amount" class="form-control" onkeyup="discountPrice();" value="" id="amount" placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="CategoryName" class="col-sm-3 col-form-label">discount price:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="discount_price" class="form-control"  value="" id="disPrice" placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="CategoryName" class="col-sm-3 col-form-label">description:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="description" class="form-control" id="CategoryName" placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="CategoryName" class="col-sm-3 col-form-label">Made By:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="made_by" class="form-control" id="CategoryName" placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="CategoryName" class="col-sm-3 col-form-label">Stock amount:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="stock_amount" class="form-control" id="CategoryName" placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="CategoryName" class="col-sm-3 col-form-label">Cost:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="cost" class="form-control" id="CategoryName" placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="CategoryName" class="col-sm-3 col-form-label">Image:</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-primary px-5">Save Info</button>
                                        </div>
                                    </div>
                                </form>
{{--                            </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function discountPrice() {
            var price =document.getElementById('price').value;
            var amount =document.getElementById('amount').value;
            document.getElementById('disPrice').value =price-price*amount/100;
        }
    </script>
@endsection
