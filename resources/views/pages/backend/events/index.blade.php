<x-app-layout :title="'Events List'">
    <div class="container mt-5">
        <h2 class="mb-4">
            <i class="fas fa-calendar-alt"></i> Events List
        </h2>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('events.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Create Event
            </a>
        </div>

        @if ($events->isEmpty())
            <div class="alert alert-info">No events found.</div>
        @else
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Vacancies</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->event_date }}</td>
                            <td>{{ $event->vacancies }}</td>
                            <td>
                                <span class="badge {{ $event->status ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $event->status ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('events.show', $event->id) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i> Show
                                </a>
                                <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this event?');">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-app-layout>
