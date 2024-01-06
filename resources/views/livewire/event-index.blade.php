<div>
    <div class="flex mb-10 justify-end">
        <x-button-link :href="route('events.create')">
            + New Event
        </x-button-link>
    </div>

    <div class="relative overflow-x-auto">
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Early Bird Price</th>
                <th>Early Bird Ends</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->price }}</td>
                    <td>{{ $event->start_date->toFormattedDayDateString() }}</td>
                    <td>{{ $event->end_date->toFormattedDayDateString() }}</td>
                    <td>{{ $event->price }}</td>
                    <td>{{ $event->early_bird_ended_at->toFormattedDayDateString() }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No events created.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
