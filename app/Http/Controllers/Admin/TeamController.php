<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyTeamRequest;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TeamController extends Controller
{
    use MediaUploadingTrait, CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('team_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Team::query()->select(sprintf('%s.*', (new Team)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'team_show';
                $editGate      = 'team_edit';
                $deleteGate    = 'team_delete';
                $crudRoutePart = 'teams';

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
            $table->editColumn('position', function ($row) {
                return $row->position ? $row->position : '';
            });
            $table->editColumn('task', function ($row) {
                return $row->task ? $row->task : '';
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.teams.index');
    }

    public function create()
    {
        abort_if(Gate::denies('team_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.teams.create');
    }

    public function store(StoreTeamRequest $request)
    {
        $team = Team::create($request->all());

        if ($request->input('image', false)) {
            $team->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $team->id]);
        }

        return redirect()->route('admin.teams.index');
    }

    public function edit(Team $team)
    {
        abort_if(Gate::denies('team_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.teams.edit', compact('team'));
    }

    public function update(UpdateTeamRequest $request, Team $team)
    {
        $team->update($request->all());

        if ($request->input('image', false)) {
            if (! $team->image || $request->input('image') !== $team->image->file_name) {
                if ($team->image) {
                    $team->image->delete();
                }
                $team->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($team->image) {
            $team->image->delete();
        }

        return redirect()->route('admin.teams.index');
    }

    public function show(Team $team)
    {
        abort_if(Gate::denies('team_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.teams.show', compact('team'));
    }

    public function destroy(Team $team)
    {
        abort_if(Gate::denies('team_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $team->delete();

        return back();
    }

    public function massDestroy(MassDestroyTeamRequest $request)
    {
        $teams = Team::find(request('ids'));

        foreach ($teams as $team) {
            $team->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('team_create') && Gate::denies('team_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Team();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
