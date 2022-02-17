@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-warning alert-dismissible fade show mb-3" role="alert">
                    <div class="fw-semibold">{{$error}}</div>
                    <button class="btn-close" type="button" data-coreui-dismiss="alert" aria-label="Close"></button>
                </div>
                @endforeach
            @endif
            <form method="post" action="{{route('admin.checklist_groups.store')}}">
            @csrf
            <div class="card">
                <div class="card-header">{{ __('Checklist Groups') }}</div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="name">{{__('Name')}}</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="{{__('Checklist Group Name')}}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
