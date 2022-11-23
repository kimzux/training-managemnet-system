@extends('admin-layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        Attendees
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Attendees</li>
                    </ol>
                </div>
            </div>
        </div>

        @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        <br />
        @endif
        <div class="col-sm-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"> search Attendees according to Training</button>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List of Attendee</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Company Name</th>
                                        <th>Position</th>
                                        <th>time</th>
                                        <th>mode of learning</th>
                                        <th>Date Registered</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Company Name</th>
                                        <th>Position</th>
                                        <th>time</th>
                                        <th>mode of learning</th>
                                        <th>Date Registered</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($attendee as $attendees)
                                    <tr>
                                        <td>{{$attendees->name}}</td>
                                        <td>{{$attendees->email}}</td>
                                        <td>{{$attendees->company}}</td>
                                        <td>{{$attendees->occupation}}</td>
                                        <td>{{$attendees->time}}</td>
                                        <td>{{$attendees->learn_mode}}</td>
                                        <td>{{$attendees->created_at}}</td>
                                        <div class="d-flex">
                                            <td>
                                                <div class="d-flex">
                                                    <!-- <a href="{{ route('attendee.edit', $attendees->id)}}" class="btn btn-primary">Edit</a> -->
                                                    <a href="{{ route('attendee.show', $attendees->id)}}" class="ml-4 btn btn-success">Details</a>
                                                    <form action="{{ route('attendee.destroy', $attendees->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button hidden="hidden" class="ml-4 btn btn-danger" type="submit" onclick="return confirm('Are you sure  you want to delete?')">Delete</button>
                                                        <?= csrf_field() ?>
                                                    </form>
                                                </div>
                                            </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Search for a training attendees </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post" action="" enctype="multipart/form-data">
                                        <div class="modal-body">
                                        <label for="message-text" class="control-label">Training name</label>
                                        <select class="form-control select2bs4" style="width: 100%;" name=""  required>
                                          <option value="">Select Here</option>
                                          @foreach($training as $trainings)
                                         <option value="{{ $trainings->id}}">{{ $trainings->training_name}}</option>
                                                   @endforeach
                                                 </select>      
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">find</button>
                                        </div>
                                        <?= csrf_field() ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    @endsection