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
                <!-- Button trigger modal -->
                <!-- Modal -->
                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                {{--                                            <div class="border p-4 rounded">--}}
                                <form action="{{ route('update-category') }}" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="CategoryName" class="col-sm-3 col-form-label">Category Name:</label>
                                        <div class="col-sm-9">
                                            <input type="hidden" name="id" value="{{ $category->id }}">
                                            <input type="text" name="category_name" value="{{ $category->category_name }}" class="form-control" id="CategoryName" placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="CategoryName" class="col-sm-3 col-form-label">Category Name:</label>
                                        <div class="col-sm-9">
                                            <input type="radio" name="status" value="1"> Published
                                            <input type="radio" name="status" value="0" > UnPublished
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-primary px-5">Save Info</button>
                                        </div>
                                    </div>
                                </form>
                                {{--                                            </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
