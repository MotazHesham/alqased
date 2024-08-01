<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class SettingsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Setting::query()->select(sprintf('%s.*', (new Setting)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'setting_show';
                $editGate      = 'setting_edit';
                $deleteGate    = 'setting_delete';
                $crudRoutePart = 'settings';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('site_name', function ($row) {
                return $row->site_name ? $row->site_name : '';
            });
            $table->editColumn('logo', function ($row) {
                if ($photo = $row->logo) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });
            $table->editColumn('behance', function ($row) {
                return $row->behance ? $row->behance : '';
            });
            $table->editColumn('clients_count', function ($row) {
                return $row->clients_count ? $row->clients_count : '';
            });
            $table->editColumn('projects_count', function ($row) {
                return $row->projects_count ? $row->projects_count : '';
            });
            $table->editColumn('products_count', function ($row) {
                return $row->products_count ? $row->products_count : '';
            });
            $table->editColumn('experience_count', function ($row) {
                return $row->experience_count ? $row->experience_count : '';
            });
            $table->editColumn('certificates', function ($row) {
                if (! $row->certificates) {
                    return '';
                }
                $links = [];
                foreach ($row->certificates as $media) {
                    $links[] = '<a href="' . $media->getUrl() . '" target="_blank"><img src="' . $media->getUrl('thumb') . '" width="50px" height="50px"></a>';
                }

                return implode(' ', $links);
            });
            $table->editColumn('work_locations', function ($row) {
                if ($photo = $row->work_locations) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });

            $table->rawColumns(['actions', 'placeholder', 'logo', 'certificates', 'work_locations']);

            return $table->make(true);
        }

        return view('admin.settings.index');
    }

    public function edit(Setting $setting)
    {
        abort_if(Gate::denies('setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.settings.edit', compact('setting'));
    }

    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $setting->update($request->all());

        if ($request->input('logo', false)) {
            if (! $setting->logo || $request->input('logo') !== $setting->logo->file_name) {
                if ($setting->logo) {
                    $setting->logo->delete();
                }
                $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
            }
        } elseif ($setting->logo) {
            $setting->logo->delete();
        }

        if (count($setting->certificates) > 0) {
            foreach ($setting->certificates as $media) {
                if (! in_array($media->file_name, $request->input('certificates', []))) {
                    $media->delete();
                }
            }
        }
        $media = $setting->certificates->pluck('file_name')->toArray();
        foreach ($request->input('certificates', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $setting->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('certificates');
            }
        }

        if ($request->input('work_locations', false)) {
            if (! $setting->work_locations || $request->input('work_locations') !== $setting->work_locations->file_name) {
                if ($setting->work_locations) {
                    $setting->work_locations->delete();
                }
                $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('work_locations'))))->toMediaCollection('work_locations');
            }
        } elseif ($setting->work_locations) {
            $setting->work_locations->delete();
        }

        return redirect()->route('admin.settings.index');
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('setting_create') && Gate::denies('setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Setting();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
