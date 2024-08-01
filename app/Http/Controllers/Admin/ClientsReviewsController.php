<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyClientsReviewRequest;
use App\Http\Requests\StoreClientsReviewRequest;
use App\Http\Requests\UpdateClientsReviewRequest;
use App\Models\ClientsReview;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ClientsReviewsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('clients_review_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ClientsReview::query()->select(sprintf('%s.*', (new ClientsReview)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'clients_review_show';
                $editGate      = 'clients_review_edit';
                $deleteGate    = 'clients_review_delete';
                $crudRoutePart = 'clients-reviews';

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
            $table->editColumn('image', function ($row) {
                if ($photo = $row->image) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('role', function ($row) {
                return $row->role ? $row->role : '';
            });
            $table->editColumn('rate', function ($row) {
                return $row->rate ? ClientsReview::RATE_RADIO[$row->rate] : '';
            });
            $table->editColumn('comment', function ($row) {
                return $row->comment ? $row->comment : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'image']);

            return $table->make(true);
        }

        return view('admin.clientsReviews.index');
    }

    public function create()
    {
        abort_if(Gate::denies('clients_review_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.clientsReviews.create');
    }

    public function store(StoreClientsReviewRequest $request)
    {
        $clientsReview = ClientsReview::create($request->all());

        if ($request->input('image', false)) {
            $clientsReview->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $clientsReview->id]);
        }

        return redirect()->route('admin.clients-reviews.index');
    }

    public function edit(ClientsReview $clientsReview)
    {
        abort_if(Gate::denies('clients_review_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.clientsReviews.edit', compact('clientsReview'));
    }

    public function update(UpdateClientsReviewRequest $request, ClientsReview $clientsReview)
    {
        $clientsReview->update($request->all());

        if ($request->input('image', false)) {
            if (! $clientsReview->image || $request->input('image') !== $clientsReview->image->file_name) {
                if ($clientsReview->image) {
                    $clientsReview->image->delete();
                }
                $clientsReview->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($clientsReview->image) {
            $clientsReview->image->delete();
        }

        return redirect()->route('admin.clients-reviews.index');
    }

    public function show(ClientsReview $clientsReview)
    {
        abort_if(Gate::denies('clients_review_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.clientsReviews.show', compact('clientsReview'));
    }

    public function destroy(ClientsReview $clientsReview)
    {
        abort_if(Gate::denies('clients_review_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clientsReview->delete();

        return back();
    }

    public function massDestroy(MassDestroyClientsReviewRequest $request)
    {
        $clientsReviews = ClientsReview::find(request('ids'));

        foreach ($clientsReviews as $clientsReview) {
            $clientsReview->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('clients_review_create') && Gate::denies('clients_review_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ClientsReview();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
