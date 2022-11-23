@extends('admin-layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h1>
                        Edit Trainings
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
        <div class="tab-pane " id="bank" role="tabpanel" style="width:50%">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('training.update', $training->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Training name</label>
                            <input type="text" name="train_name" value="{{$training->training_name}}" class="form-control form-control-line" placeholder="Training name" minlength="5" required>

                        </div>
                        <div class="form-group">
                            <label>Timetable</label>
                            <input type="file" name="timetable" class="form-control" id="recipient-name1" required>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{$training->title}}" class="form-control form-control-line" placeholder="Training title" minlength="5" required>

                        </div>

                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="title" value="{{$training->date}}" class="form-control form-control-line" placeholder="Training starting date" minlength="5" required>

                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" value="{{$training->description}}" class="form-control form-control-line" placeholder="Training description" minlength="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-info"><i class="fa fa-check"></i>update </button>
                </div>

            </div>
            <?= csrf_field() ?>
            </form>
        </div>
</div>
</section>
</div>
@endsection