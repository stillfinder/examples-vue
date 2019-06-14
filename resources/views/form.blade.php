@extends('layouts.main', ['active' => 'ajax-form'])

@section('title', 'Home')

@section('content')
<div class="content">

    <h1>Ajax form using Vue JS</h1>

    <form method="POST" action="{{ route('ajax-form.store') }}" @submit.prevent="onSubmitAjaxForm" @keydown="ajaxform.errors.clear($event.target.name)">

        {{ csrf_field() }}

        <div class="mt-3">
            <label for="email" class="form-label">Email address *</label>

            <input class="form-input"
            v-bind:class="{ 'border-red-500': ajaxform.errors.has('email') }"
            id="email" placeholder="Email" name="email" type="text"
            value="" v-model="ajaxform.email">

            <small class="form-text block mt-1 text-red-500" v-if="ajaxform.errors.has('email')"
            v-text="ajaxform.errors.get('email')"></small>
        </div>

        <div>
            <label for="name" class="form-label">Name *</label>

            <input class="form-input"
            v-bind:class="{ 'border-red-500': ajaxform.errors.has('name') }"
            id="name" placeholder="Name" name="name" type="text" value=""
            v-model="ajaxform.name">

            <small class="form-text invalid-feedback block mt-1 text-red-500"
            v-if="ajaxform.errors.has('name')" v-text="ajaxform.errors.get('name')"></small>
        </div>

        <div>
            <label for="body" class="form-label">Message body *</label>

            <textarea
            class="form-input"
            v-bind:class="{ 'border-red-500': ajaxform.errors.has('body') }"
            id="body" name="body" cols="50" rows="10"
            v-model="ajaxform.body"></textarea>

            <small class="block mt-1 text-red-500" v-if="ajaxform.errors.has('body')"
            v-text="ajaxform.errors.get('body')"></small>
        </div>

        <div>
            <input class="btn btn-primary submit" type="submit" value="Submit"
            :disabled="ajaxform.errors.any() || submittingAjaxForm">

            <small class="align-baseline ml-4" v-if="submittingAjaxForm">We are submitting data</small>
        </div>

        <modal v-if="showSubmittedAjaxFormkModal" @close="showSubmittedAjaxFormkModal = false">
            <p class="my-8 text-lg">Thank you for your feedback!</p>
        </modal>

    </form>
</div>
@endsection