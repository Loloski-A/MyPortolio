@extends('backend.layouts.app')

@section('content')


<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Experience Add Page</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Experience
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            @include('_message')
            <!--begin::Row-->
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="cart-header mb-3 p-3 bg-info">
                            <h3 class="card-title ">Add Your Experiences</h3>
                        </div>

                        <form action="{{ url('admin/experience/post')}}" method="post"
                        class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field()}}
                        <div class="card-body">

                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-2 col-form-lable">
                                    Company Name <span style="color: red">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="company" required
                                    class="form-control" placeholder="Enter The Company You've Worked for.">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-2 col-form-lable">
                                    Role <span style="color: red">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="role" required
                                    class="form-control" placeholder="Enter The Role in The Company">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-2 col-form-lable">
                                    When Started <span style="color: red">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="started_date" required
                                    class="form-control" placeholder="Enter when you Started Your Course">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-2 col-form-lable">
                                    When Finished <span style="color: red">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="end_date" required
                                    class="form-control" placeholder="Enter When You Finished Your Course">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add
                                </button>
                                <a href="{{ url('admin/experience')}}" class="btn btn-default float-right">
                                    Cancel
                                </a>
                            </div>

                        </div>
                        </form>
                    </div>
                </div>

            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main> <!--end::App Main-->


@endsection
