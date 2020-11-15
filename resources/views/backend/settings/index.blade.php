@extends('backend.Layouts.app')
@section('title') Settings @stop
@section('main')
    <div class="mb-10">
        <div class="row">
            <div class="col-12 px-4 -mt-5">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-18 ml-10 card flex-row align-items-center py-2 px-5">
                        <i class="fa fa-cogs fa-2x"></i>
                        <span class="ml-3">General Settings</span>
                    </h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">App</a></li>
                            <li class="breadcrumb-item active">Settings</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="row">
                @include('backend.settings.sidebar')
                @include('backend.settings.partials.applications')
            </div>
        </div>
    </div>
@endsection
