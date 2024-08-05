<div class="card">
    <div class="card-header">
        {{ trans('cruds.inventaire.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-referenceInventaires">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.inventaire.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventaire.fields.reference') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventaire.fields.in') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventaire.fields.out') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventaire.fields.balance') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inventaires as $key => $inventaire)
                        <tr data-entry-id="{{ $inventaire->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $inventaire->id ?? '' }}
                            </td>
                            <td>
                                {{ $inventaire->reference->serial_number ?? '' }}
                            </td>
                            <td>
                                {{ $inventaire->in ?? '' }}
                            </td>
                            <td>
                                {{ $inventaire->out ?? '' }}
                            </td>
                            <td>
                                {{ $inventaire->balance ?? '' }}
                            </td>
                            <td>
                                @can('inventaire_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.inventaires.show', $inventaire->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan



                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-referenceInventaires:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection