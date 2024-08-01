<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyWorkLocationRequest;
use App\Http\Requests\StoreWorkLocationRequest;
use App\Http\Requests\UpdateWorkLocationRequest;
use App\Models\WorkLocation;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class WorkLocationsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('work_location_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workLocations = WorkLocation::with(['media'])->get();

        return view('admin.workLocations.index', compact('workLocations'));
    }

    public function create()
    {
        abort_if(Gate::denies('work_location_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workLocations.create');
    }

    public function store(StoreWorkLocationRequest $request)
    {
        $workLocation = WorkLocation::create($request->all());

        if ($request->input('image', false)) {
            $workLocation->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $workLocation->id]);
        }

        return redirect()->route('admin.work-locations.index');
    }

    public function edit(WorkLocation $workLocation)
    {
        abort_if(Gate::denies('work_location_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workLocations.edit', compact('workLocation'));
    }

    public function update(UpdateWorkLocationRequest $request, WorkLocation $workLocation)
    {
        $workLocation->update($request->all());

        if ($request->input('image', false)) {
            if (! $workLocation->image || $request->input('image') !== $workLocation->image->file_name) {
                if ($workLocation->image) {
                    $workLocation->image->delete();
                }
                $workLocation->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($workLocation->image) {
            $workLocation->image->delete();
        }

        return redirect()->route('admin.work-locations.index');
    }

    public function show(WorkLocation $workLocation)
    {
        abort_if(Gate::denies('work_location_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workLocations.show', compact('workLocation'));
    }

    public function destroy(WorkLocation $workLocation)
    {
        abort_if(Gate::denies('work_location_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workLocation->delete();

        return back();
    }

    public function massDestroy(MassDestroyWorkLocationRequest $request)
    {
        $workLocations = WorkLocation::find(request('ids'));

        foreach ($workLocations as $workLocation) {
            $workLocation->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('work_location_create') && Gate::denies('work_location_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new WorkLocation();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
