@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.workLocation.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.work-locations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.workLocation.fields.id') }}
                        </th>
                        <td>
                            {{ $workLocation->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workLocation.fields.image') }}
                        </th>
                        <td>
                            @if($workLocation->image)
                                <a href="{{ $workLocation->image->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workLocation.fields.name') }}
                        </th>
                        <td>
                            {{ $workLocation->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workLocation.fields.address') }}
                        </th>
                        <td>
                            {{ $workLocation->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workLocation.fields.phone') }}
                        </th>
                        <td>
                            {{ $workLocation->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workLocation.fields.email') }}
                        </th>
                        <td>
                            {{ $workLocation->email }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.work-locations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection