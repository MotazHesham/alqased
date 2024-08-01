@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.clientsReview.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.clients-reviews.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.clientsReview.fields.id') }}
                        </th>
                        <td>
                            {{ $clientsReview->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.clientsReview.fields.image') }}
                        </th>
                        <td>
                            @if($clientsReview->image)
                                <a href="{{ $clientsReview->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $clientsReview->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.clientsReview.fields.name') }}
                        </th>
                        <td>
                            {{ $clientsReview->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.clientsReview.fields.role') }}
                        </th>
                        <td>
                            {{ $clientsReview->role }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.clientsReview.fields.rate') }}
                        </th>
                        <td>
                            {{ App\Models\ClientsReview::RATE_RADIO[$clientsReview->rate] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.clientsReview.fields.comment') }}
                        </th>
                        <td>
                            {{ $clientsReview->comment }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.clients-reviews.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection