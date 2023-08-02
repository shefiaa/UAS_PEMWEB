<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProdukRequest;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use App\Models\Produk;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('produk_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Produk::query()->select(sprintf('%s.*', (new Produk)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'produk_show';
                $editGate      = 'produk_edit';
                $deleteGate    = 'produk_delete';
                $crudRoutePart = 'produks';

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
            $table->editColumn('produkname', function ($row) {
                return $row->produkname ? $row->produkname : '';
            });
            $table->editColumn('brand', function ($row) {
                return $row->brand ? $row->brand : '';
            });
            $table->editColumn('kategori', function ($row) {
                return $row->kategori ? $row->kategori : '';
            });
            $table->editColumn('kadaluarsa', function ($row) {
                return $row->kadaluarsa ? $row->kadaluarsa : '';
            });
            $table->editColumn('harga', function ($row) {
                return $row->harga ? $row->harga : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.produks.index');
    }

    public function create()
    {
        abort_if(Gate::denies('produk_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.produks.create');
    }

    public function store(StoreProdukRequest $request)
    {
        $produk = Produk::create($request->all());

        return redirect()->route('admin.produks.index');
    }

    public function edit(Produk $produk)
    {
        abort_if(Gate::denies('produk_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.produks.edit', compact('produk'));
    }

    public function update(UpdateProdukRequest $request, Produk $produk)
    {
        $produk->update($request->all());

        return redirect()->route('admin.produks.index');
    }

    public function show(Produk $produk)
    {
        abort_if(Gate::denies('produk_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.produks.show', compact('produk'));
    }

    public function destroy(Produk $produk)
    {
        abort_if(Gate::denies('produk_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $produk->delete();

        return back();
    }

    public function massDestroy(MassDestroyProdukRequest $request)
    {
        $produks = Produk::find(request('ids'));

        foreach ($produks as $produk) {
            $produk->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
