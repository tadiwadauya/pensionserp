@extends('layouts.app')
@section('content')
<div class="wrapper">
@include('includes.nav')

<!-- /.navbar -->

<!-- Main Sidebar Container -->
@include('includes.sidebar')
<div class="content-wrapper">
<section class="content">
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
    <h1>Edit Target</h1>
    </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('targets.index') }}"> Back</a>
        </div>
    </div>
</div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('targets.update', $target->id) }}" method="POST">
        @csrf
        @method('PUT') 
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
        <label for="target_name">Target Name:</label>
        <input type="text" name="target_name" class="form-control" id="target_name" value="{{ $target->target_name }}" required>
        </div>
        </div>   </div>
        <button type="submit"  class="btn btn-primary">Update</button>
    </form>
</div>
</section>
</div>
</div>
@endsection