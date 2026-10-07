<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Services\NotificationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function __construct(private NotificationService $notificationService) {}

    public function index(Request $request): JsonResponse
    {
        $filters = $request->validate([
            'is_read' => ['sometimes', 'boolean'],
            'type' => ['sometimes', 'string'],
        ]);

        $notifications = Notification::where('user_id', $request->user()->id)->filter($filters)->latest()->paginate();

        return response()->json(['message' => 'Notifications fetched successfully', 'notifications' => $notifications]);
    }

    public function read(Request $request, Notification $notification): JsonResponse
    {
        abort_unless($notification->user_id === $request->user()->id, 404);

        $notification->update(['read_at' => now()]);

        return response()->json([
            'message' => 'Notification marked as read successfully',
            'notification' => $notification->fresh(),
        ]);
    }

    public function unreadCount(Request $request): JsonResponse
    {
        $count = Notification::where('user_id', $request->user()->id)->whereNull('read_at')->count();

        return response()->json([
            'message' => 'Notification count fetched successfully',
            'count' => $count,
        ]);
    }

    public function test(Request $request)
    {
        $user = $request->user();
        $frontendUrl = config('services.frontend_url');
        $this->notificationService->send($user, 'booking.created', 'New booking for Test Booking', null, "{$frontendUrl}/app/bookings?booking_id=30", ['booking_id' => 30]);
    }

    public function readAll(Request $request): JsonResponse
    {
        $user = $request->user();

        Notification::where('user_id', $user->id)
            ->whereNull('read_at')
            ->update([
                'read_at' => now(),
            ]);

        return response()->json([
            'message' => 'All notifications marked as read successfully',
        ]);
    }
}
