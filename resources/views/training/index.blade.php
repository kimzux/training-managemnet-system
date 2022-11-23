@extends('admin-layouts.app')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Trainings
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Trainings</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"> Add Training</button>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List of Trainings</h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Training Name</th>
                    <th>Timetable</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Training Name</th>
                    <th>Timetable</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($training as $trainings)
                  <tr>
                    <td>{{ $trainings->id }}</td>
                    <td>{{ $trainings->train_name }}</td>
                    <td><a href="{{ route('file.download', $trainings->id) }}" target="_blank">download</a></td>
                    <td>
                      <div class="d-flex">
                        <a href="{{ route('training.edit', $trainings->id) }}" class="btn btn-primary mr-3">Edit</a>
                        <form action="{{ route('training.destroy', $trainings->id) }}" method="post">
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
        <h4 class="modal-title">Add Training</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" method="post" action="" id="loanvalueform" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label for="message-text" class="control-label">Training name</label>
              <input type="text" name="train_name" class="form-control" id="recipient-name1">
            </div>
            <div class="form-group">
              <label for="message-text" class="control-label">Timetable</label>
              <input type="file" name="timetable" class="form-control" id="recipient-name1" required>
            </div>
            <div class="form-group">
              <label for="message-text" class="control-label">Title</label>
              <input type="text" name="title" class="form-control" id="recipient-name1" required>
           </div>
           <div class="form-group">
              <label for="message-text" class="control-label">starting date</label>
              <input type="date" name="date" class="form-control" id="recipient-name1" required>
           </div>
           <div class="form-group">
              <label for="message-text" class="control-label">description</label>
              <textarea  name="description" class="form-control" id="recipient-name1" required></textarea>
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