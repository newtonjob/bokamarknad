<div>
    <div class="flex mb-10 justify-end">
        <div>
            <select wire:model.live="event_id" class="rounded border-gray-300">
                <option value="">All Events</option>
                @foreach($events as $event)
                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="relative overflow-x-auto">
        <table>
            <thead>
            <tr>
                <th>Customer</th>
                <th>Event</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Price</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse ($bookings as $booking)
                <tr>
                    <td>{{ $booking->user->name }}</td>
                    <td>{{ $booking->event->name }}</td>
                    <td>{{ $booking->event->start_date->toFormattedDayDateString() }}</td>
                    <td>{{ $booking->event->end_date->toFormattedDayDateString() }}</td>
                    <td>{{ $booking->price }}</td>
                    <td></td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No bookings created.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
