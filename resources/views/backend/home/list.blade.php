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
                    <h3 class="mb-0">Home Page</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Home
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
                            <h3 class="card-title ">Home Page</h3>
                        </div>

                        <form action="{{ url('admin/home/post')}}" method="post"
                        class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field()}}
                        <div class="card-body">

                            <div class="form-group row mb-3">
                                <label for="background_image" class="col-sm-2 col-form-label">Background Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="background_image" class="form-control">
                                    @if(@$homeRecords[0]->background_image)
                                        <img src="{{ url('public/img/'.@$homeRecords[0]->background_image) }}
                                        " width="200" height="100" />
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-2 col-form-lable">
                                    Profile Image
                                </label>
                                <div class="col-sm-10">
                                    <input type="file" name="profile" class="form-control">
                                    @if(@$homeRecords[0]->profile)
                                    <img src="{{ url('public/img/'.@$homeRecords[0]->profile)}}"
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
                                    value={{ @$homeRecords[0]->your_name }}>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-2 col-form-lable">
                                    Work Experience
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="work_experience"
                                    class="form-control" placeholder="Enter Your Work Experience"
                                    value={{ @$homeRecords[0]->work_experience }}>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-2 col-form-lable">
                                    Description
                                </label>
                                <div class="col-sm-10">
                                    <textarea name="description"
                                    class="form-control"
                                    placeholder="Enter Description for Your Work Experience">{{ @$homeRecords[0]->description }}</textarea>
                                </div>

                                <input type="hidden" name="id" value={{ @$homeRecords[0]->id }}>
                            </div>

                            <div class="card-footer">
                                <button type="submit" name="add_to_update"
                                id="add_to_update" value="@if(count($homeRecords)>0) Edit @else Add @endif"
                                class="btn btn-info" >
                                @if(count($homeRecords)>0) Edit @else Add @endif
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
