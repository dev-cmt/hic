<x-app-layout :title="'Events Registrations List'">
    <div class="container mt-4">
        <h1 class="mb-4">Event Registrations</h1>
        
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Destination</th>
                    <th>Qualification</th>
                    <th>Score</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>{{ $row->location }}</td>
                    <td>{{ $row->destination }}</td>
                    <td>{{ $row->qualification }}</td>
                    <td>{{ $row->score }}</td>
                    <td>
                        <a href="{{ route('event-register.show', $row->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i> Details
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
