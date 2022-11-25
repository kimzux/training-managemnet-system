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
        <div class="col-12">
                            <button type="button" class="btn btn-info"><i class="fe fe-plus"></i><a data-toggle="modal" data-target="#loanmodel" data-whatever="@getbootstrap" class="text-white"><i class="" aria-hidden="true"></i> Add Attendee </a></button>

                        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List of Attendees</h3>
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
             <div class="modal fade" id="loanmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel1">Add Participants</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form role="form" method="post"  action="{{route('training.attendee.store', $train_id)}}" id="btnSubmit" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="message-text" class="control-label col-md-3">Name</label>
                                    <input type="text" name="name" value="" class="form-control col-md-8 amount" id="recipient-name1" required>
                                </div>
                                <!--                            <div class="form-group row">
                                <label for="message-text" class="control-label col-md-3">Interest Percentage</label>
                                <input type="number" name="interest" value="" class="form-control col-md-8" id="recipient-name1" required>
                            </div>-->

                                <div class="form-group row">
                                    <label for="message-text" class="control-label col-md-3">Company</label>
                                    <input type="text" name="company" value="" class="form-control col-md-8 period" id="recipient-name1" required>
                                </div>
                                <div class="form-group row">
                                    <label for="message-text" class="control-label col-md-3">Email</label>
                                    <input type="email" name="email" value="" class="form-control col-md-8 period" id="recipient-name1" required>
                                </div>
                                <div class="form-group row">
                                    <label for="message-text" class="control-label col-md-3">Position</label>
                                    <input type="text" name="occupation" value="" class="form-control col-md-8 period" id="recipient-name1" required>
                                </div>
                                <div class="form-group row">
                                    <label for="message-text" class="control-label col-md-3">Age</label>
                                    <input type="text" name="age" value="" class="form-control col-md-8 period" id="recipient-name1" required>
                                </div>
                                <div class="form-group row">
                                    <label for="message-text" class="control-label col-md-3">Phone number</label>
                                    <input type="text" name="phone_number" value="" class="form-control col-md-8 period" id="recipient-name1" required>
                                </div>
                                <div class="form-group row">
                                    <label for="message-text" class="control-label col-md-3">Resume</label>
                                    <input type="file" name="resume" value="" class="form-control col-md-8 period" id="recipient-name1" required>
                                </div>
                                <div class="form-group row">
                                    <label for="inputGender" class="control-label col-md-3">Are you manage a Team</b></label>
                                    <div class="col-sm-8">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="team_status" id="inlineRadio1" value="male">
                                            <label class="form-check-label" for="inlineRadio1"> {{ (old('team') == 'yes') ? 'checked' : '' }} Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="team_status" id="inlineRadio2" value="female">
                                            <label class="form-check-label" for="inlineRadio2"> {{ (old('team') == 'no') ? 'checked' : '' }} No</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="message-text" class="control-label col-md-3">How did you find out about the training</label>
                                    <textarea class="form-control col-md-8 period" placeholder="Leave a comment here" name="info_before" id="floatingTextarea2" style="height: 100px"></textarea>
                                </div>
                                <div class="form-group row">
                                    <label for="message-text" class="control-label col-md-3">Describe your response</label>
                                    <textarea class="form-control col-md-8 period" name="response_description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                </div>
                                <div class="form-group row">
                                    <label for="message-text" class="control-label col-md-3">How will the training help you /what are you aspiring to achieve by attending this training </label>
                                    <textarea class="form-control col-md-8 period" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="info_after"></textarea>
                                </div>
                                <div class="form-group row">
                                    <label for="inputGender" class="control-label col-md-3">What time suits you for the class</b></label>
                                    <div class="col-sm-8">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="time" id="inlineRadio1" value="Saturday 9:00 - 12:00pm">
                                            <label class="form-check-label" for="inlineRadio1"> {{ (old('time') == 'Evening 5:00 - 8:00pm') ? 'checked' : '' }} Evening 5:00 - 8:00pm</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="time" id="inlineRadio2" value="Saturday 9:00 - 12:00pm">
                                            <label class="form-check-label" for="inlineRadio2"> {{ (old('time') == 'Saturday 9:00 - 12:00pm') ? 'checked' : '' }} Saturday 9:00 - 12:00pm</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputGender" class="control-label col-md-3">What  mode of learning do you prefer</b></label>
                                    <div class="col-sm-8">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="learn_mode" id="inlineRadio1" value=" Virtual">
                                            <label class="form-check-label" for="inlineRadio1"> {{ (old('learn_mode') == ' Virtual') ? 'checked' : '' }} Virtual</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="learn_mode" id="inlineRadio2" value="Physical">
                                            <label class="form-check-label" for="inlineRadio2"> {{ (old('learn_mode') == 'Physical') ? 'checked' : '' }} Physical</label>
                                        </div>

                                    </div>
                                    <input hidden="hidden" type="text" name="train_id" class="form-control form-control-line" value="{{$train_id}}" minlength="1" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="id" value="">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <?= csrf_field() ?>
                        </form>
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