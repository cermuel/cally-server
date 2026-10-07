<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactIndexRequest;
use App\Http\Requests\ContactRequest;
use App\Http\Resources\ContactResource;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(ContactIndexRequest $request): JsonResponse
    {
        $user = $request->user();
        $filters = $request->validated();

        $contacts = Contact::with('platformUser')->where('user_id', $user->id)
            ->filter($filters)
            ->sort($filters)
            ->paginate($filters['per_page'] ?? 15)
            ->withQueryString();

        return response()->json([
            'message' => 'Contacts fetched successfully',
            'contacts' => ContactResource::collection($contacts->items()),
            'pagination' => [
                'current_page' => $contacts->currentPage(),
                'per_page' => $contacts->perPage(),
                'total' => $contacts->total(),
                'last_page' => $contacts->lastPage(),
                'from' => $contacts->firstItem(),
                'to' => $contacts->lastItem(),
                'previous_page_url' => $contacts->previousPageUrl(),
                'next_page_url' => $contacts->nextPageUrl(),
            ],
        ]);
    }

    public function store(ContactRequest $request): JsonResponse
    {
        $body = $request->validated();
        $user = $request->user();

        $platformUser = User::where('email', $body['email'])->first();

        if ($platformUser) {
            $body['platform_user_id'] = $platformUser->id;
        }

        $contact = $user->contacts()->create($body);

        $contact->load(['platformUser', 'owner']);

        return response()->json([
            'message' => 'Contact created successfully',
            'contact' => new ContactResource($contact),
        ], 201);
    }

    public function show(Request $request, Contact $contact): JsonResponse
    {
        abort_unless($contact->user_id === $request->user()->id, 404);

        $contact->load(['platformUser', 'owner']);

        return response()->json([
            'message' => 'Contact fetched successfully',
            'contact' => new ContactResource($contact),
        ]);
    }

    public function update(ContactRequest $request, Contact $contact): JsonResponse
    {
        abort_unless($contact->user_id === $request->user()->id, 404);

        $body = $request->validated();
        $contact->load(['platformUser', 'owner']);

        if (
            $contact->platformUser
            && array_key_exists('email', $body)
            && $contact->platformUser->email !== $body['email']
        ) {
            return response()->json(['message' => 'Invalid email'], 400);
        }

        if (array_key_exists('email', $body)) {
            $body['platform_user_id'] = User::where('email', $body['email'])->value('id');
        }

        $contact->update($body);
        $contact->load(['platformUser', 'owner']);

        return response()->json([
            'message' => 'Contact updated successfully',
            'contact' => new ContactResource($contact),
        ]);
    }

    public function destroy(Request $request, Contact $contact): JsonResponse
    {
        abort_unless($contact->user_id === $request->user()->id, 404);

        $contact->delete();

        return response()->json(['message' => 'Contact deleted successfully']);
    }

    public function massDelete(Request $request): JsonResponse
    {
        $body = $request->validate([
            'ids' => ['required', 'array'],
            'ids.*' => [
                'integer',
                'required',
                'distinct',
            ],
        ]);

        $request->user()
            ->contacts()
            ->whereIn('id', $body['ids'])
            ->delete();

        return response()->json([
            'message' => 'Contacts deleted successfully',
        ]);
    }
}
