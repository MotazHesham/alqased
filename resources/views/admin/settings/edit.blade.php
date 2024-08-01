@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.setting.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.settings.update", [$setting->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="site_name">{{ trans('cruds.setting.fields.site_name') }}</label>
                <input class="form-control {{ $errors->has('site_name') ? 'is-invalid' : '' }}" type="text" name="site_name" id="site_name" value="{{ old('site_name', $setting->site_name) }}">
                @if($errors->has('site_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('site_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.site_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="logo">{{ trans('cruds.setting.fields.logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                </div>
                @if($errors->has('logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.setting.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $setting->phone) }}">
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.setting.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $setting->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.setting.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $setting->address) }}">
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="twitter">{{ trans('cruds.setting.fields.twitter') }}</label>
                <input class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}" type="text" name="twitter" id="twitter" value="{{ old('twitter', $setting->twitter) }}">
                @if($errors->has('twitter'))
                    <div class="invalid-feedback">
                        {{ $errors->first('twitter') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.twitter_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="facebook">{{ trans('cruds.setting.fields.facebook') }}</label>
                <input class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" type="text" name="facebook" id="facebook" value="{{ old('facebook', $setting->facebook) }}">
                @if($errors->has('facebook'))
                    <div class="invalid-feedback">
                        {{ $errors->first('facebook') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.facebook_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="instagram">{{ trans('cruds.setting.fields.instagram') }}</label>
                <input class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}" type="text" name="instagram" id="instagram" value="{{ old('instagram', $setting->instagram) }}">
                @if($errors->has('instagram'))
                    <div class="invalid-feedback">
                        {{ $errors->first('instagram') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.instagram_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="behance">{{ trans('cruds.setting.fields.behance') }}</label>
                <input class="form-control {{ $errors->has('behance') ? 'is-invalid' : '' }}" type="text" name="behance" id="behance" value="{{ old('behance', $setting->behance) }}">
                @if($errors->has('behance'))
                    <div class="invalid-feedback">
                        {{ $errors->first('behance') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.behance_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.setting.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $setting->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="keywords_seo">{{ trans('cruds.setting.fields.keywords_seo') }}</label>
                <textarea class="form-control {{ $errors->has('keywords_seo') ? 'is-invalid' : '' }}" name="keywords_seo" id="keywords_seo">{{ old('keywords_seo', $setting->keywords_seo) }}</textarea>
                @if($errors->has('keywords_seo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('keywords_seo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.keywords_seo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="author_seo">{{ trans('cruds.setting.fields.author_seo') }}</label>
                <input class="form-control {{ $errors->has('author_seo') ? 'is-invalid' : '' }}" type="text" name="author_seo" id="author_seo" value="{{ old('author_seo', $setting->author_seo) }}">
                @if($errors->has('author_seo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('author_seo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.author_seo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sitemap_link_seo">{{ trans('cruds.setting.fields.sitemap_link_seo') }}</label>
                <input class="form-control {{ $errors->has('sitemap_link_seo') ? 'is-invalid' : '' }}" type="text" name="sitemap_link_seo" id="sitemap_link_seo" value="{{ old('sitemap_link_seo', $setting->sitemap_link_seo) }}">
                @if($errors->has('sitemap_link_seo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sitemap_link_seo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.sitemap_link_seo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description_seo">{{ trans('cruds.setting.fields.description_seo') }}</label>
                <textarea class="form-control {{ $errors->has('description_seo') ? 'is-invalid' : '' }}" name="description_seo" id="description_seo">{{ old('description_seo', $setting->description_seo) }}</textarea>
                @if($errors->has('description_seo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description_seo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.description_seo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="clients_count">{{ trans('cruds.setting.fields.clients_count') }}</label>
                <input class="form-control {{ $errors->has('clients_count') ? 'is-invalid' : '' }}" type="text" name="clients_count" id="clients_count" value="{{ old('clients_count', $setting->clients_count) }}">
                @if($errors->has('clients_count'))
                    <div class="invalid-feedback">
                        {{ $errors->first('clients_count') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.clients_count_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="projects_count">{{ trans('cruds.setting.fields.projects_count') }}</label>
                <input class="form-control {{ $errors->has('projects_count') ? 'is-invalid' : '' }}" type="text" name="projects_count" id="projects_count" value="{{ old('projects_count', $setting->projects_count) }}">
                @if($errors->has('projects_count'))
                    <div class="invalid-feedback">
                        {{ $errors->first('projects_count') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.projects_count_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="products_count">{{ trans('cruds.setting.fields.products_count') }}</label>
                <input class="form-control {{ $errors->has('products_count') ? 'is-invalid' : '' }}" type="text" name="products_count" id="products_count" value="{{ old('products_count', $setting->products_count) }}">
                @if($errors->has('products_count'))
                    <div class="invalid-feedback">
                        {{ $errors->first('products_count') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.products_count_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="experience_count">{{ trans('cruds.setting.fields.experience_count') }}</label>
                <input class="form-control {{ $errors->has('experience_count') ? 'is-invalid' : '' }}" type="text" name="experience_count" id="experience_count" value="{{ old('experience_count', $setting->experience_count) }}">
                @if($errors->has('experience_count'))
                    <div class="invalid-feedback">
                        {{ $errors->first('experience_count') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.experience_count_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="certificates">{{ trans('cruds.setting.fields.certificates') }}</label>
                <div class="needsclick dropzone {{ $errors->has('certificates') ? 'is-invalid' : '' }}" id="certificates-dropzone">
                </div>
                @if($errors->has('certificates'))
                    <div class="invalid-feedback">
                        {{ $errors->first('certificates') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.certificates_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="who_we_are">{{ trans('cruds.setting.fields.who_we_are') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('who_we_are') ? 'is-invalid' : '' }}" name="who_we_are" id="who_we_are">{!! old('who_we_are', $setting->who_we_are) !!}</textarea>
                @if($errors->has('who_we_are'))
                    <div class="invalid-feedback">
                        {{ $errors->first('who_we_are') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.who_we_are_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="who_we_are_more">{{ trans('cruds.setting.fields.who_we_are_more') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('who_we_are_more') ? 'is-invalid' : '' }}" name="who_we_are_more" id="who_we_are_more">{!! old('who_we_are_more', $setting->who_we_are_more) !!}</textarea>
                @if($errors->has('who_we_are_more'))
                    <div class="invalid-feedback">
                        {{ $errors->first('who_we_are_more') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.who_we_are_more_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="work_locations">{{ trans('cruds.setting.fields.work_locations') }}</label>
                <div class="needsclick dropzone {{ $errors->has('work_locations') ? 'is-invalid' : '' }}" id="work_locations-dropzone">
                </div>
                @if($errors->has('work_locations'))
                    <div class="invalid-feedback">
                        {{ $errors->first('work_locations') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.work_locations_helper') }}</span>
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
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.settings.storeMedia') }}',
    maxFilesize: 5, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($setting) && $setting->logo)
      var file = {!! json_encode($setting->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
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
<script>
    var uploadedCertificatesMap = {}
Dropzone.options.certificatesDropzone = {
    url: '{{ route('admin.settings.storeMedia') }}',
    maxFilesize: 4, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
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
      $('form').append('<input type="hidden" name="certificates[]" value="' + response.name + '">')
      uploadedCertificatesMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedCertificatesMap[file.name]
      }
      $('form').find('input[name="certificates[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($setting) && $setting->certificates)
      var files = {!! json_encode($setting->certificates) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="certificates[]" value="' + file.file_name + '">')
        }
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
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.settings.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $setting->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.workLocationsDropzone = {
    url: '{{ route('admin.settings.storeMedia') }}',
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
      $('form').find('input[name="work_locations"]').remove()
      $('form').append('<input type="hidden" name="work_locations" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="work_locations"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($setting) && $setting->work_locations)
      var file = {!! json_encode($setting->work_locations) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="work_locations" value="' + file.file_name + '">')
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