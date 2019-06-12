@extends('layouts.main', ['active' => 'privacy-policy'])

@section('title', 'Home')

@section('content')
<div class="content">
    <h1>Home</h1>

    <h2>Data binding</h2>
    <input type="text" name="example_data_binding" v-model="message" class="textbox">
    <p>The value of the input is: @{{ message }}</p>

    <h2>Lists and Event Listeners</h2>
    <div class="flex">
        <div class="mr-12">
            <p>Using v-for and &#64;<span>&#123;&#123;</span> name &#125;&#125;</p>
            <ul>
                <li v-for="name in names">@{{ name }}</li>
            </ul>
        </div>
        <div class="mr-12">
            <p>Using v-for and v-text</p>
            <ul>
                <li v-for="name in names" v-text="name"></li>
            </ul>
        </div>
        <div class="flex flex-col">
            <input type="text" name="addname" class="textbox mb-4" v-model="newName">
            <button class="button  mb-4" v-on:click="addName">Add name 'v-on:click'</button>
            <button class="button" @click="addName">Add name '@click'</button>
        </div>
    </div>

</div>
@endsection