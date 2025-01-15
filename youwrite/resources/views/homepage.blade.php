@extends('layouts.master')

@section('content')

@php
    $blogs = [
        "blog1" => ["Title for blog 1", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam, soluta? Non consectetur officiis, sed, illo autem mollitia est labore dicta itaque voluptas nisi rem veritatis possimus. Neque, earum? Nam, id."],
        "blog2" => ["Title for blog 2", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam, soluta? Non consectetur officiis, sed, illo autem mollitia est labore dicta itaque voluptas nisi rem veritatis possimus. Neque, earum? Nam, id."],
        "blog3" => ["Title for blog 3", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam, soluta? Non consectetur officiis, sed, illo autem mollitia est labore dicta itaque voluptas nisi rem veritatis possimus. Neque, earum? Nam, id."],
        "blog4" => ["Title for blog 4", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam, soluta? Non consectetur officiis, sed, illo autem mollitia est labore dicta itaque voluptas nisi rem veritatis possimus. Neque, earum? Nam, id."],
        "blog5" => ["Title for blog 5", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam, soluta? Non consectetur officiis, sed, illo autem mollitia est labore dicta itaque voluptas nisi rem veritatis possimus. Neque, earum? Nam, id."],
    ]
@endphp

<div class="wrapper  mx-auto w-1/2 my-16">
    @foreach ($blogs as $key => $blog)
        <x-blogpost-item :blog="$blog" />
    @endforeach
</div>

@endsection