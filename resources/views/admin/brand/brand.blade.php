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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">Add Brand</button>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">DataTable Import</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Sl no</th>
                            <th>Brand Name</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1?>
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $brand->brand_name }}</td>
                                <td>{{$brand->status==1 ? 'Published': 'Unpublished' }}</td>
                                <td>
                                    @if($brand->status==1)
                                        <a href="{{ route('brand-status',['id'=>$brand->id]) }}" class="btn btn-primary px-5">Unpublished</a>
                                    @else
                                        <a href="{{ route('brand-status',['id'=>$brand->id]) }}" class="btn btn-primary px-5">Published</a>
                                    @endif
                                    <a href="{{ route('delete',['id'=>$brand->id]) }}" class="btn btn-primary px-5" onclick=" return confirm('Are you Sure DELETE this !!')">Delete</a>
                                    <a href="{{ route('edit',['id'=>$brand->id]) }}" class="btn btn-primary px-5">edit</a>
                                </td>
                            </tr>
                            <?php $i++?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <!-- Button trigger modal -->
                <!-- Modal -->
                <div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Brand Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-xl-12 mx-auto">
                                        <div class="card">
                                            <div class="card-body">
                                                {{--                                            <div class="border p-4 rounded">--}}
                                                <form action="{{ route('new-brand') }}" method="post">
                                                    @csrf
                                                    <div class="row mb-3">
                                                        <label for="CategoryName" class="col-sm-3 col-form-label">Brand Name:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="brand_name" class="form-control" id="CategoryName" placeholder="Category Name">
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
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
