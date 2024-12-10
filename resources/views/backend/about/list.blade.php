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
                    <h3 class="mb-0">About Page</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            About
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
                            <h3 class="card-title ">About Page</h3>
                        </div>


                        <form action="{{ url('admin/about/post')}}" method="post"
                        class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field()}}
                        <div class="card-body">

                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-2 col-form-lable">
                                    About Image
                                </label>
                                <div class="col-sm-10">
                                    <input type="file" name="about_image" class="form-control">
                                    @if(@$getrecord[0]->about_image)
                                    <img src="{{ url('public/img/'.@$getrecord[0]->about_image)}}"
                                    width="200" height="200" />
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-2 col-form-lable">
                                    Your Name
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="your_name"
                                    class="form-control" placeholder="Enter Your Name"
                                    value={{ @$getrecord[0]->your_name }} >
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-2 col-form-lable">
                                    Country
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="country"
                                    class="form-control" placeholder="Enter Country Name"
                                    value={{ @$getrecord[0]->country }}>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-2 col-form-lable">
                                    Description
                                </label>
                                <div class="col-sm-10">
                                    <textarea name="description"
                                    class="form-control"
                                    placeholder="Enter Description for Your Work Experience">{{ @$getrecord[0]->description }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-2 col-form-lable">
                                    Years of Experience
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="years_of_experience"
                                    class="form-control" placeholder="Enter Your Years of Experience"
                                    value={{ @$getrecord[0]->years_of_experience }}>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-2 col-form-lable">
                                    Completed Projects
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="completed_projects"
                                    class="form-control" placeholder="Enter No. of completed projects"
                                    value={{ @$getrecord[0]->completed_projects }}>
                                </div>

                                <input type="hidden" name="id" value={{ @$getrecord[0]->id }}>
                            </div>

                            <div class="card-footer">
                                <button type="submit" name="add_to_update"
                                id="add_to_update" class="btn btn-info"
                                value="@if(count($getrecord)>0) Edit @else Add @endif">
                                @if(count($getrecord)>0) Edit @else Add @endif
                                </button>
                                <a href="" class="btn btn-default float-right">
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
