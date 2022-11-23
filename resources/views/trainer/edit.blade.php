@extends('admin-layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h1>
                        Edit Trainer
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
        <div class="tab-pane " id="bank" role="tabpanel" style="width:50%">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('trainer.update', $trainer->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Trainer name</label>
                            <input type="text" name="name" value="{{$trainer->name}}" class="form-control form-control-line" placeholder="Training name" minlength="5" required>

                        </div>
                        <div class="form-group">
                            <label>proffesionality</label>
                            <input type="text" name="proffesionality" class="form-control" id="recipient-name1" value="{{$trainer->proffesionality}}" required>
                        </div>
                        <div class="form-group">
                            <label>Training name</label>
                            <select class="form-control select2" style="width: 100%;" name="train_id" required>
                                <option value="">Select Here</option>
                                @foreach($training as $training)
                                <option value="{{ $training->id}}">{{ $training->train_name}}</option>
                                @endforeach

                            </select>
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