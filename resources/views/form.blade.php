@extends('layouts.main', ['active' => 'privacy-policy'])

@section('title', 'Home')

@section('content')
<div class="content">

    <h1>Ajax form using Vue JS</h1>

    <form method="POST" action="/ajax-form" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">

        {{ csrf_field() }}

        <div class="mt-3">
            <label for="email" class="form-label">Email address *</label>

            <input class="form-input"
            v-bind:class="{ 'border-red-500': form.errors.has('email') }"
            id="email" placeholder="Email" name="email" type="text"
            value="" v-model="form.email">

            <small class="form-text block mt-1 text-red-500" v-if="form.errors.has('email')"
            v-text="form.errors.get('email')"></small>
        </div>

        <div>
            <label for="name" class="form-label">Name *</label>

            <input class="form-input"
            v-bind:class="{ 'border-red-500': form.errors.has('name') }"
            id="name" placeholder="Name" name="name" type="text" value=""
            v-model="form.name">

            <small class="form-text invalid-feedback block mt-1 text-red-500"
            v-if="form.errors.has('name')" v-text="form.errors.get('name')"></small>
        </div>

        <div>
            <label for="body" class="form-label">Message body *</label>

            <textarea
            class="form-input"
            v-bind:class="{ 'border-red-500': form.errors.has('body') }"
            id="body" name="body" cols="50" rows="10"
            v-model="form.body"></textarea>

            <small class="block mt-1 text-red-500" v-if="form.errors.has('body')"
            v-text="form.errors.get('body')"></small>
        </div>

        <div>
            <input class="btn btn-primary submit" type="submit" value="Submit"
            :disabled="form.errors.any() || submittingFeedback">

            <small class="align-baseline ml-4" v-if="submittingFeedback">We are submitting data</small>
        </div>

        <modal v-if="showFeedbackModal" @close="showFeedbackModal = false">
            <p class="my-8 text-lg">Thank you for your feedback!</p>
        </modal>

    </form>
</div>
@endsection