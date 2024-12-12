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
                    <h3 class="mb-0">Education Journey Page</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Education
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid pb-4 px-4">

            @include('_message')

            <a href="{{ url('admin/education/add')}}" class="btn btn-primary">Add Education Journey</a>
            <!--begin::Row-->
            <div class="row">
                <section class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>INSTITUTION</th>
                                        <th>COURSE</th>
                                        <th>STARTED_AT</th>
                                        <th>ENDED_AT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $educationRecords as $value)
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->institution}}</td>
                                        <td>{{$value->course}}</td>
                                        <td>{{$value->started_date}}</td>
                                        <td>{{$value->end_date}}</td>
                                        <td>
                                            <a href="{{ url('admin/education/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                                            <a onclick="return confirm('Are You Sure you want to Delete?')" href="{{ url('admin/education/delete/'.$value->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

            </div> <!--end::Row-->
        </div> <!--end::Container-->

    </div> <!--end::App Content-->
</main> <!--end::App Main-->


@endsection
