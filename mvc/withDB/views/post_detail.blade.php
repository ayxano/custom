@extends('app')

@section('content')
    {{ $postInfo->getBody() }}
@endsection