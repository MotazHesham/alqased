@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.clientsReview.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.clients-reviews.update", [$clientsReview->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="image">{{ trans('cruds.clientsReview.fields.image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                </div>
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.clientsReview.fields.image_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.clientsReview.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $clientsReview->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.clientsReview.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="role">{{ trans('cruds.clientsReview.fields.role') }}</label>
                <input class="form-control {{ $errors->has('role') ? 'is-invalid' : '' }}" type="text" name="role" id="role" value="{{ old('role', $clientsReview->role) }}">
                @if($errors->has('role'))
                    <div class="invalid-feedback">
                        {{ $errors->first('role') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.clientsReview.fields.role_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.clientsReview.fields.rate') }}</label>
                @foreach(App\Models\ClientsReview::RATE_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('rate') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="rate_{{ $key }}" name="rate" value="{{ $key }}" {{ old('rate', $clientsReview->rate) === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="rate_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.clientsReview.fields.rate_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="comment">{{ trans('cruds.clientsReview.fields.comment') }}</label>
                <textarea class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}" name="comment" id="comment">{{ old('comment', $clientsReview->comment) }}</textarea>
                @if($errors->has('comment'))
                    <div class="invalid-feedback">
                        {{ $errors->first('comment') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.clientsReview.fields.comment_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.imageDropzone = {
    url: '{{ route('admin.clients-reviews.storeMedia') }}',
    maxFilesize: 4, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 4,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="image"]').remove()
      $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($clientsReview) && $clientsReview->image)
      var file = {!! json_encode($clientsReview->image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
@endsection