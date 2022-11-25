@extends('admin-layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        <i class="nav-icon fas fa-users"></i> Attendees
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Participants</li>
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
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List of all participants in all cohorts</h3>
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
                                                    <a href="{{ route('training.attendee.show', [ $attendees->train_id , $attendees->id])}}" class="ml-4 btn btn-success">Details</a>

                                                </div>
                                            </td>
                                        </div>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </section>
</div>
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