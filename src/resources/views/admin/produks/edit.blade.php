@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.produk.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.produks.update", [$produk->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="produkname">{{ trans('cruds.produk.fields.produkname') }}</label>
                <input class="form-control {{ $errors->has('produkname') ? 'is-invalid' : '' }}" type="text" name="produkname" id="produkname" value="{{ old('produkname', $produk->produkname) }}" required>
                @if($errors->has('produkname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('produkname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.produk.fields.produkname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="brand">{{ trans('cruds.produk.fields.brand') }}</label>
                <input class="form-control {{ $errors->has('brand') ? 'is-invalid' : '' }}" type="text" name="brand" id="brand" value="{{ old('brand', $produk->brand) }}" required>
                @if($errors->has('brand'))
                    <div class="invalid-feedback">
                        {{ $errors->first('brand') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.produk.fields.brand_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="kategori">{{ trans('cruds.produk.fields.kategori') }}</label>
                <input class="form-control {{ $errors->has('kategori') ? 'is-invalid' : '' }}" type="text" name="kategori" id="kategori" value="{{ old('kategori', $produk->kategori) }}" required>
                @if($errors->has('kategori'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kategori') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.produk.fields.kategori_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="kadaluarsa">{{ trans('cruds.produk.fields.kadaluarsa') }}</label>
                <input class="form-control {{ $errors->has('kadaluarsa') ? 'is-invalid' : '' }}" type="text" name="kadaluarsa" id="kadaluarsa" value="{{ old('kadaluarsa', $produk->kadaluarsa) }}" required>
                @if($errors->has('kadaluarsa'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kadaluarsa') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.produk.fields.kadaluarsa_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="harga">{{ trans('cruds.produk.fields.harga') }}</label>
                <input class="form-control {{ $errors->has('harga') ? 'is-invalid' : '' }}" type="text" name="harga" id="harga" value="{{ old('harga', $produk->harga) }}" required>
                @if($errors->has('harga'))
                    <div class="invalid-feedback">
                        {{ $errors->first('harga') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.produk.fields.harga_helper') }}</span>
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