<?php

namespace App\Http\Controllers;

use App\AutomationAction;
use App\Http\Requests\AutomationRequest;
use App\Http\Resources\AutomationResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AutomationController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $automations = $request->user()->automations()->get();

        return response()->json(['message' => 'Automations fetched successfully', 'automations' => AutomationResource::collection($automations)]);
    }

    public function store(AutomationRequest $request): JsonResponse
    {
        $body = $request->validated();
        $user = $request->user();

        $automationExists = $user->automations()
            ->where('action', AutomationAction::AutoAcceptBooking->value)
            ->exists();

        if ($body['action'] == AutomationAction::AutoAcceptBooking->value && $automationExists) {
            return response()->json(['message' => 'This automation already exists']);
        }

        $automation = $user->automations()->create($body);

        return response()->json(['message' => 'Automation created successfully', 'automation' => new AutomationResource($automation)]);
    }

    public function templates()
    {
        return response()->json([
            'message' => 'Automation templates fetched successfully',
            'templates' => config('automation_templates'),
        ]);
    }

    public function variables(): JsonResponse
    {
        return response()->json([
            'message' => 'Automation variables fetched successfully',
            'templates' => config('automation_variables'),
        ]);
    }

    public function show(Request $request, int $id): JsonResponse
    {
        $automation = $request->user()
            ->automations()
            ->with('user')
            ->findOrFail($id);

        return response()->json(['message' => 'Automation fetched successfully', 'automation' => new AutomationResource($automation)]);
    }

    public function update(AutomationRequest $request, int $id): JsonResponse
    {
        $body = $request->validated();

        $automation = $request->user()->automations()->findOrFail($id);

        $automation->update($body);

        return response()->json(['message' => 'Automation updated successfully', 'automation' => new AutomationResource($automation)]);
    }

    public function destroy(Request $request, int $id): JsonResponse
    {
        $automation = $request->user()->automations()->findOrFail($id);

        $automation->delete();

        return response()->json(['message' => 'Automation deleted successfully']);
    }
}
