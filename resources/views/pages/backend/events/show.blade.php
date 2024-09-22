<x-app-layout :title="'Event Details - ' . $event->title">

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header pt-4">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registation List</h4>
                    </div>
                </div>
                <div class="card-body pt-1">
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
                            @foreach($eventRegister as $row)
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
            </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header pt-4">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Event Details</h4>
                    </div>
                </div>
                <div class="card-body pt-1">
                    <div class="row mt-4">
                        <div class="col-md-4">
                            {{-- Event Title --}}
                            <p class="card-text">
                                <strong>Title:</strong>
                                {{ $event->title }}
                            </p>
                            {{-- Event Description --}}
                            <p class="card-text">
                                <strong>Description:</strong>
                                {{ $event->description }}
                            </p>

                            {{-- Event Date --}}
                            <p class="card-text">
                                <i class="fas fa-clock"></i> <strong>Date:</strong> 
                                {{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}
                            </p>

                            {{-- Vacancies --}}
                            <p class="card-text">
                                <i class="fas fa-users"></i> <strong>Vacancies:</strong> 
                                {{ $event->vacancies }}
                            </p>

                            {{-- Status --}}
                            <p class="card-text">
                                <i class="fas fa-toggle-on"></i> <strong>Status:</strong> 
                                <span class="badge {{ $event->status ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $event->status ? 'Active' : 'Inactive' }}
                                </span>
                            </p>
                        </div>
                        <div class="col-md-8">
                            {{-- Event Image (Optional) --}}
                            @if ($event->img_path)
                                <div class="card-footer text-center">
                                    <img src="{{ asset('public/' . $event->img_path) }}" alt="Event Image" class="img-fluid rounded" style="max-width: 100%; height: auto;">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    {{-- Back to Events Button --}}
    <div class="text-center">
        <a href="{{ route('events.index') }}" class="btn btn-info">
            <i class="fas fa-arrow-left"></i> Back to Events
        </a>
    </div>


</x-app-layout>
