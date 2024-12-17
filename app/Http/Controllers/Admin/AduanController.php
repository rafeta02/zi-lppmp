<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyAduanRequest;
use App\Http\Requests\StoreAduanRequest;
use App\Http\Requests\UpdateAduanRequest;
use App\Models\Aduan;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AduanController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('aduan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Aduan::query()->select(sprintf('%s.*', (new Aduan)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'aduan_show';
                $editGate      = 'aduan_edit';
                $deleteGate    = 'aduan_delete';
                $crudRoutePart = 'aduans';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : '';
            });
            $table->editColumn('hal', function ($row) {
                return $row->hal ? Aduan::HAL_SELECT[$row->hal] : '';
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.aduans.index');
    }

    public function create()
    {
        abort_if(Gate::denies('aduan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aduans.create');
    }

    public function store(StoreAduanRequest $request)
    {
        $aduan = Aduan::create($request->all());

        return redirect()->route('admin.aduans.index');
    }

    public function edit(Aduan $aduan)
    {
        abort_if(Gate::denies('aduan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aduans.edit', compact('aduan'));
    }

    public function update(UpdateAduanRequest $request, Aduan $aduan)
    {
        $aduan->update($request->all());

        return redirect()->route('admin.aduans.index');
    }

    public function show(Aduan $aduan)
    {
        abort_if(Gate::denies('aduan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aduans.show', compact('aduan'));
    }

    public function destroy(Aduan $aduan)
    {
        abort_if(Gate::denies('aduan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aduan->delete();

        return back();
    }

    public function massDestroy(MassDestroyAduanRequest $request)
    {
        $aduans = Aduan::find(request('ids'));

        foreach ($aduans as $aduan) {
            $aduan->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
