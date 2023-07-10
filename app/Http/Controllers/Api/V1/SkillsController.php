<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\V1\SkillResource;
use App\Http\Resources\V1\SkillCollection;
use App\Models\Skills;

class SkillsController extends Controller
{
    public function index()
    {
        return new SkillCollection(Skills::all());
    }

    public function show(Skills $skill)
    {
        return new SkillResource($skill);
    }

    public function store(StoreSkillRequest $request)
    {
        Skills::create($request->validated());
        return response()->json('Skill Store');
    }

    public function update(StoreSkillRequest $request, Skills $skill)
    {
        $skill->update($request->validated());
        return response()->json('Skill updated');
    }

    public function destroy(Skills $skill)
    {
        $skill->delete();
        return response()->json('Skill Deleted');
    }
}
