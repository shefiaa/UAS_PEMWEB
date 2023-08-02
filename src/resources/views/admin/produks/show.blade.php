@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.produk.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.produks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.produk.fields.id') }}
                        </th>
                        <td>
                            {{ $produk->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.produk.fields.produkname') }}
                        </th>
                        <td>
                            {{ $produk->produkname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.produk.fields.brand') }}
                        </th>
                        <td>
                            {{ $produk->brand }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.produk.fields.kategori') }}
                        </th>
                        <td>
                            {{ $produk->kategori }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.produk.fields.kadaluarsa') }}
                        </th>
                        <td>
                            {{ $produk->kadaluarsa }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.produk.fields.harga') }}
                        </th>
                        <td>
                            {{ $produk->harga }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.produks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection