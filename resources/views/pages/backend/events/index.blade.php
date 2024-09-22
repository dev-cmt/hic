<x-app-layout :title="'Events List'">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Events List</h4>
                        <a href="{{ route('events.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Create Event
                        </a>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Vacancies</th>
                                <th>Status</th>
                                <th style="text-align: end">Actions</th>
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
                                    <td style="text-align: end">
                                        <a href="{{ route('events.show', $event->id) }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i> List
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
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
