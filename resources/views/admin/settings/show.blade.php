@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.setting.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.id') }}
                        </th>
                        <td>
                            {{ $setting->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.site_name') }}
                        </th>
                        <td>
                            {{ $setting->site_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.logo') }}
                        </th>
                        <td>
                            @if($setting->logo)
                                <a href="{{ $setting->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $setting->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.phone') }}
                        </th>
                        <td>
                            {{ $setting->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.email') }}
                        </th>
                        <td>
                            {{ $setting->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.address') }}
                        </th>
                        <td>
                            {{ $setting->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.twitter') }}
                        </th>
                        <td>
                            {{ $setting->twitter }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.facebook') }}
                        </th>
                        <td>
                            {{ $setting->facebook }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.instagram') }}
                        </th>
                        <td>
                            {{ $setting->instagram }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.behance') }}
                        </th>
                        <td>
                            {{ $setting->behance }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.description') }}
                        </th>
                        <td>
                            {{ $setting->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.keywords_seo') }}
                        </th>
                        <td>
                            {{ $setting->keywords_seo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.author_seo') }}
                        </th>
                        <td>
                            {{ $setting->author_seo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.sitemap_link_seo') }}
                        </th>
                        <td>
                            {{ $setting->sitemap_link_seo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.description_seo') }}
                        </th>
                        <td>
                            {{ $setting->description_seo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.clients_count') }}
                        </th>
                        <td>
                            {{ $setting->clients_count }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.projects_count') }}
                        </th>
                        <td>
                            {{ $setting->projects_count }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.products_count') }}
                        </th>
                        <td>
                            {{ $setting->products_count }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.experience_count') }}
                        </th>
                        <td>
                            {{ $setting->experience_count }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.certificates') }}
                        </th>
                        <td>
                            @foreach($setting->certificates as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.who_we_are') }}
                        </th>
                        <td>
                            {!! $setting->who_we_are !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.who_we_are_more') }}
                        </th>
                        <td>
                            {!! $setting->who_we_are_more !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.work_locations') }}
                        </th>
                        <td>
                            @if($setting->work_locations)
                                <a href="{{ $setting->work_locations->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $setting->work_locations->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection