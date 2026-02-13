<?php

namespace App\Http\Controllers\Admin\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\SiteRequest;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('admin.site.site', [
            'sites' => Site::query()->with([
                'userCreated',
                'userUpdated'
            ])->get(),
        ]);
    }

    public function store(SiteRequest $request)
    {
        $data = $request->validated();

        $data['active'] = $request->boolean('active');

        Site::create($data);

        return to_route('site.index')
            ->with('success', "Le site a été créé avec succès.");
    }

    public function update(SiteRequest $request, Site $site)
    {
        $data = $request->validated();

        $data['active'] = $request->boolean('active');

        $site->update($data);

        return to_route('site.index')
            ->with('success', "Les informations du site ont été mises à jour avec succès.");
    }

    public function destroy(Site $site)
    {
        $site->delete();

        return to_route('site.index')
            ->with('success', "Le site a été supprimé avec succès.");
    }
}
