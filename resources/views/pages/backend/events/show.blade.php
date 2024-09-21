<x-app-layout :title="'Event Details - ' . $event->title">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">
                    <i class="fas fa-calendar-alt"></i> {{ $event->title }}
                </h2>
            </div>
            <div class="card-body">
                {{-- Event Description --}}
                <p class="card-text">
                    <strong>Description:</strong> <br> 
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

            {{-- Event Image (Optional) --}}
            @if ($event->img_path)
                <div class="card-footer text-center">
                    <img src="{{ asset('storage/' . $event->img_path) }}" alt="Event Image" class="img-fluid rounded" style="max-width: 100%; height: auto;">
                </div>
            @endif
        </div>

        {{-- Back to Events Button --}}
        <div class="mt-4 text-center">
            <a href="{{ route('events.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Events
            </a>
        </div>
    </div>
</x-app-layout>
