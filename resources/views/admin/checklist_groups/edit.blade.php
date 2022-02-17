@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-warning alert-dismissible fade show mb-3" role="alert">
                    <div class="fw-semibold">{{$error}}</div>
                    <button class="btn-close" type="button" data-coreui-dismiss="alert" aria-label="Close"></button>
                </div>
                @endforeach
            @endif
            <form method="post" action="{{route('admin.checklist_groups.update', $checklistGroup)}}">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">{{ __('Edit Groups') }}</div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="name">{{__('Name')}}</label>
                        <input class="form-control" id="name" name="name" type="text" value="{{$checklistGroup->name}}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{__('Update')}}</button>
                </div>
            </div>
            </form>
        </div>
        <form method="post" action="{{route('admin.checklist_groups.destroy', $checklistGroup)}}">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('{{__('Are you sure?')}}')" class="btn btn-danger">{{__('Delete')}}</button>
        </form>
    </div>
</div>
@endsection
