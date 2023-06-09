@extends('admin.layout.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Create Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Product</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" method="POST" action="{{ route('admin.product.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Name">
                                    </div>
                                    <div>
                                        @error('name')
                                            <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control" id="slug" name="slug"
                                            placeholder="Slug">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control" id="price" name="price"
                                            placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="discount_price">Discount Price</label>
                                        <input type="number" class="form-control" id="discount_price" name="discount_price"
                                            placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control" id="description" name="description" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="short_description">Short Description</label>
                                        <input type="text" class="form-control" id="short_description"
                                            name="short_description" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="information">Information</label>
                                        <input type="text" class="form-control" id="information" name="information"
                                            placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Qty</label>
                                        <input type="number" class="form-control" id="qty" name="qty"
                                            placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="shipping">Shipping</label>
                                        <input type="text" class="form-control" id="shipping" name="shipping"
                                            placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="weight">Weight</label>
                                        <input type="number" class="form-control" id="weight" name="weight"
                                            name="weight" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-select form-control" id="status"
                                            name="status">
                                            <option value="">---Please Select---</option>
                                            <option value="1">Show</option>
                                            <option value="0">Hide</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_category_id">Product Category</label>
                                        <select name="product_category_id" class="form-select form-control"
                                            id="product_category_id">
                                            <option value="">---Please Select---</option>
                                            @foreach ($productCategories as $productCategory)
                                                <option value="{{ $productCategory->id }}">{{ $productCategory->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image_url"
                                                    name="image_url">
                                                <label class="custom-file-label" for="image_url">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js-custom')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
