@extends('layouts.main', ['active' => 'privacy-policy'])

@section('title', 'Home')

@section('content')
<div class="content">
    <h1>Home</h1>

    <h2>Data binding</h2>
    <input type="text" name="example_data_binding" v-model="message" class="border-grey-5 border py-1 px-2 w-full">
    <p>The value of the input is: @{{ message }}</p>
</div>
@endsection