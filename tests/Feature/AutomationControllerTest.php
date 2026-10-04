<?php

use App\AutomationAction;
use App\AutomationTrigger;
use App\Models\Automation;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('returns automation IDs and payload objects to the owner', function () {
    $user = User::factory()->create();
    $automation = Automation::factory()->for($user)->create([
        'payload' => [
            'subject' => 'Thanks for meeting',
            'body' => 'See you next time.',
        ],
    ]);

    $response = $this->actingAs($user, 'sanctum')->getJson('/api/automations');

    $response
        ->assertOk()
        ->assertJsonPath('automations.0.id', $automation->id)
        ->assertJsonPath('automations.0.payload.subject', 'Thanks for meeting')
        ->assertJsonPath('automations.0.payload.body', 'See you next time.');
});

it('returns an owned automation with its user relationship', function () {
    $user = User::factory()->create();
    $automation = Automation::factory()->for($user)->create();

    $response = $this->actingAs($user, 'sanctum')->getJson("/api/automations/{$automation->id}");

    $response
        ->assertOk()
        ->assertJsonPath('automation.id', $automation->id)
        ->assertJsonPath('automation.user.email', $user->email);
});

it('returns 404 when showing another users automation', function () {
    $user = User::factory()->create();
    $automation = Automation::factory()->for(User::factory())->create();

    $response = $this->actingAs($user, 'sanctum')->getJson("/api/automations/{$automation->id}");

    $response->assertNotFound();
});

it('returns 404 and does not update another users automation', function () {
    $user = User::factory()->create();
    $automation = Automation::factory()->for(User::factory())->create([
        'name' => 'Original name',
    ]);

    $response = $this->actingAs($user, 'sanctum')->patchJson("/api/automations/{$automation->id}", [
        'name' => 'Changed name',
    ]);

    $response->assertNotFound();
    expect($automation->refresh()->name)->toBe('Original name');
});

it('returns 404 and does not delete another users automation', function () {
    $user = User::factory()->create();
    $automation = Automation::factory()->for(User::factory())->create();

    $response = $this->actingAs($user, 'sanctum')->deleteJson("/api/automations/{$automation->id}");

    $response->assertNotFound();
    $this->assertModelExists($automation);
});

it('updates an owned automation payload as an object', function () {
    $user = User::factory()->create();
    $automation = Automation::factory()->for($user)->create();

    $response = $this->actingAs($user, 'sanctum')->patchJson("/api/automations/{$automation->id}", [
        'trigger' => AutomationTrigger::BookingEnded->value,
        'action' => AutomationAction::SendEmail->value,
        'payload' => [
            'subject' => 'Updated subject',
            'body' => 'Updated body',
        ],
    ]);

    $response
        ->assertOk()
        ->assertJsonPath('automation.id', $automation->id)
        ->assertJsonPath('automation.payload.subject', 'Updated subject');
    expect($automation->refresh()->payload)->toBe([
        'subject' => 'Updated subject',
        'body' => 'Updated body',
    ]);
});

it('deactivates an owned automation when is active is false', function () {
    $user = User::factory()->create();
    $automation = Automation::factory()->for($user)->create([
        'is_active' => true,
    ]);

    $response = $this->actingAs($user, 'sanctum')->patchJson("/api/automations/{$automation->id}", [
        'is_active' => false,
    ]);

    $response
        ->assertOk()
        ->assertJsonPath('automation.is_active', false);
    expect($automation->refresh()->is_active)->toBeFalse();
});

it('returns 404 for an undefined automation ID without querying the database', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user, 'sanctum')->patchJson('/api/automations/undefined', [
        'name' => 'Changed name',
    ]);

    $response->assertNotFound();
});
