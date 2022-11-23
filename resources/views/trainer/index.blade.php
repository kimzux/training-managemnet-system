@extends('admin-layouts.app')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Trainers
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Trainers</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"> Add Trainer</button>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List of Trainers</h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>ID</th>
                    <th>Trainer name</th>
                    <th>Email</th>
                    <th>Title</th>
                    <th>organization</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th>ID</th>
                    <th>Trainer name</th>
                    <th>Email</th>
                    <th>Title</th>
                    <th>organization</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($trainer as $trainers)
                  <tr>
                    <td>{{ $trainers->id }}</td>
                    <td>{{ $trainers->name }}</td>
                    <td>{{ $trainers->email }}</td>
                    <td>{{ $trainers->title }}</td>
                    <td>{{ $trainers->organization}}</td>
                    <td>
                      <div class="d-flex">
                        <a href="{{ route('trainer.edit', $trainers->id) }}" class="btn btn-primary mr-3">Edit</a>
                        <form action="{{ route('trainer.destroy', $trainers->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="ml-4 btn btn-danger" type="submit" onclick="return confirm('Are you sure  you want to delete?')">Delete</button>
                          <?= csrf_field() ?>
                        </form>
                      </div>
                    </td>

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
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Trainer</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" method="post" action="{{route('trainer.store')}}" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label for="message-text" class="control-label">Trainer name</label>
              <input type="text" name="name" class="form-control" id="recipient-name1">
            </div>
            <div class="form-group">
              <label for="message-text" class="control-label">email</label>
              <input type="email" name="email" class="form-control" id="recipient-name1" required>
            </div>
            <div class="form-group">
            <label for="message-text" class="control-label">organization</label>
              <input type="text" name="organization" class="form-control" id="recipient-name1" required>
           </div>
           <div class="form-group">
            <label for="message-text" class="control-label">title</label>
              <input type="text" name="title" class="form-control" id="recipient-name1" required>
           </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          <?= csrf_field() ?>
        </form>
      </div>
    </div>
  </div>
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