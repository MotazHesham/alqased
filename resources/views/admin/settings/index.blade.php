@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.setting.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Setting">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.setting.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.setting.fields.site_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.setting.fields.logo') }}
                    </th>
                    <th>
                        {{ trans('cruds.setting.fields.behance') }}
                    </th>
                    <th>
                        {{ trans('cruds.setting.fields.clients_count') }}
                    </th>
                    <th>
                        {{ trans('cruds.setting.fields.projects_count') }}
                    </th>
                    <th>
                        {{ trans('cruds.setting.fields.products_count') }}
                    </th>
                    <th>
                        {{ trans('cruds.setting.fields.experience_count') }}
                    </th>
                    <th>
                        {{ trans('cruds.setting.fields.certificates') }}
                    </th>
                    <th>
                        {{ trans('cruds.setting.fields.work_locations') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  
  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.settings.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'site_name', name: 'site_name' },
{ data: 'logo', name: 'logo', sortable: false, searchable: false },
{ data: 'behance', name: 'behance' },
{ data: 'clients_count', name: 'clients_count' },
{ data: 'projects_count', name: 'projects_count' },
{ data: 'products_count', name: 'products_count' },
{ data: 'experience_count', name: 'experience_count' },
{ data: 'certificates', name: 'certificates', sortable: false, searchable: false },
{ data: 'work_locations', name: 'work_locations', sortable: false, searchable: false },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  };
  let table = $('.datatable-Setting').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection