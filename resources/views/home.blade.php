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

    <h2>Attribute and Class Binding</h2>
    <button class="button" v-bind:title="bindedTitle">Bind title using v-bind:title</button>
    <button class="button" :title="bindedTitle">Bind title using :title</button>
    <button class="button" :class="{ 'text-red-500': isRed }" @click="toggleRed">Toggle red class</button> <- click

    <h2>Computed Properties</h2>
    <p>Original message: <strong>@{{ message }}</strong></p>
    <p>Computed reversed message: <strong>@{{ reversedMessage}}</strong></p>

    <div class="flex">
        <div class="mr-12">
            <p>All tasks</p>
            <ul>
                <li v-for="task in tasks" v-text="task.description"></li>
            </ul>
        </div>
        <div>
            <p>Filtered incompleted tasks</p>
            <ul>
                <li v-for="task in incompletedTasks" v-text="task.description"></li>
            </ul>
        </div>
    </div>

    <h2>Components</h2>

    <h3>Simple task component</h3>
    <ul>
        <task>Learn english</task>
        <task>Write a letter</task>
        <task>Brainstorm new ideas</task>
    </ul>

    <h3>Components Within Components</h3>
    <task-list></task-list>

    <h3>Message component</h3>
    <message title="I'm a title" body="I'm a body. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod"></message>

</div>
@endsection