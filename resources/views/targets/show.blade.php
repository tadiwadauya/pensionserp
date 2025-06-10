@extends('layouts.app')

@section('content')
    <h1>Target Details</h1>
    <p>Target Name: {{ $target->target_name }}</p>
    <a href="{{ route('targets.index') }}">Back to Targets</a>
@endsection