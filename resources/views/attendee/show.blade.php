@extends('admin-layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Attendee Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="/custom/assets/images/avatar.png" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{$attendee->name}}</h3>

                            <p class="text-muted text-center">{{$attendee->occupation}}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Company</b> <a class="float-right">{{$attendee->company}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Age</b> <a class="float-right">{{$attendee->age}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Phone number</b> <a class="float-right">{{$attendee->phone_number}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">{{$attendee->email}}</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About {{$attendee->name}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i>Learning mode</strong>

                            <p class="text-muted">
                                {{$attendee->learn_mode}}
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                            <p class="text-muted">Dar-es-salaam, Tanzania</p>
                            <hr>
                            <strong><i class="fas fa-clock mr-1"></i>Prefer time</strong>

                            <p class="text-muted">{{$attendee->time}}</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">About training</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="/custom/assets/images/avatar.png" alt="user image">
                                            <span class="username">
                                                <a href="">{{$attendee->name}}.</a>
                                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                            </span>
                                            <span class="description">{{$attendee->occupation}} - {{$attendee->company}}</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>
                                            How will the training help you /what are you aspiring to achieve by attending this training ?<br>
                                            {{$attendee->info_after}}
                                        </p>
                                    </div>

                                    <div class="post clearfix">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="/custom/assets/images/avatar.png" alt="User Image">
                                            <span class="username">
                                                <a href="#">{{$attendee->name}}</a>
                                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                            </span>
                                            <span class="description">{{$attendee->occupation}} - {{$attendee->company}}</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>
                                            How did you find out about the training ?<br>
                                            {{$attendee->response_description }}
                                        </p>
                                    </div>
                                    <!-- /.post -->

                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="/custom/assets/images/avatar.png" alt="User Image">
                                            <span class="username">
                                                <a href="#">{{$attendee->name}}</a>
                                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                            </span>
                                            <span class="description">{{$attendee->occupation}} - {{$attendee->company}}</span>
                                        </div>
                                        <p>
                                            How did you find out about the training ?<br>
                                            {{$attendee->info_after }}
                                        </p>

                                    </div>
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="/custom/assets/images/avatar.png" alt="User Image">
                                            <span class="username">
                                                <a href="#">{{$attendee->name}}</a>
                                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                            </span>
                                            <span class="description">{{$attendee->occupation}} - {{$attendee->company}}</span>
                                        </div>
                                        <p>
                                        Are you managing a team ? <br>
                                            {{$attendee->team_status}}
                                        </p>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
</div>
@endsection