@extends('public.master')

@section('main-section')
    <div class="col-md-6 border-right"></div>
    {{dd(Auth::user())}}
@endsection
