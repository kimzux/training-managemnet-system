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
                            <input type="text" name="email" class="form-control" id="recipient-name1" value="{{$trainer->email}}" required>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" id="recipient-name1" value="{{$trainer->title}}" required>
                        </div>
                        <div class="form-group">
                            <label>Organization</label>
                            <input type="text" name="organization" class="form-control" id="recipient-name1" value="{{$trainer->organization}}" required>
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