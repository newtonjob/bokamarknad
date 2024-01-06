<x-form-section submit="store">
    <x-slot name="title">
        New Event
    </x-slot>

    <x-slot name="description">
        Create a new event
    </x-slot>

    <x-slot name="form">
        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('Name') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="name" required />
            <x-input-error for="name" class="mt-2" />
        </div>

        <!-- Price -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="price" value="{{ __('Price') }}" />
            <x-input id="price" type="number" class="mt-1 block w-full" wire:model="price" required />
            <x-input-error for="price" class="mt-2" />
        </div>

        <!-- Starts -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="start_date" value="{{ __('Start Date') }}" />
            <x-input id="start_date" type="date" class="mt-1 block w-full" wire:model="start_date" required />
            <x-input-error for="start_date" class="mt-2" />
        </div>

        <!-- Ends -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="end_date" value="{{ __('End Date') }}" />
            <x-input id="end_date" type="date" class="mt-1 block w-full" wire:model="end_date" required />
            <x-input-error for="end_date" class="mt-2" />
        </div>

        <!-- Early Bird Price -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="early_bird_price" value="{{ __('Early Bird Price') }}" />
            <x-input id="early_bird_price" type="number" class="mt-1 block w-full" wire:model="early_bird_price" required />
            <x-input-error for="early_bird_price" class="mt-2" />
        </div>

        <!-- Early Bird Ends -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="early_bird_ended_at" value="{{ __('Early Bird Ends') }}" />
            <x-input id="early_bird_ended_at" type="date" class="mt-1 block w-full" wire:model="early_bird_ended_at" required />
            <x-input-error for="early_bird_ended_at" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-button>Create</x-button>
    </x-slot>
</x-form-section>
