@extends('frontend/layout/app')

@section('title')

@endsection

@section('content')

home

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <!-- Search Bar -->
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-button">
                <button class="btn btn-primary" type="button" id="search-button">Search</button>
            </div>
        </div>
    </div>
</div>

@endsection