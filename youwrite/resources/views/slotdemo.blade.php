<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('layouts.master')

@section('content')

<x-alert type="success" />
<x-alert type="danger"> Danger </x-alert>
<x-alert type="info"> Info </x-alert>
<x-alert type="primary"> Primary </x-alert>


@endsection