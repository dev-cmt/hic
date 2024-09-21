<x-app-layout :title="'Edit Event'">
    <div class="container mt-5">
        <!-- Page Title -->
        <h2 class="mb-4 text-center">
            <i class="fas fa-edit"></i> Edit Event
        </h2>

        <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <!-- Event Title -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="title" class="form-label">
                        <i class="fas fa-heading"></i> Event Title
                    </label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $event->title) }}" required>
                </div>

                <!-- Event Date -->
                <div class="col-md-6">
                    <label for="event_date" class="form-label">
                        <i class="fas fa-calendar-alt"></i> Event Date
                    </label>
                    <input type="date" name="event_date" id="event_date" class="form-control" value="{{ old('event_date', $event->event_date) }}" required>
                </div>
            </div>

            <!-- Event Image -->
            <div class="mb-3">
                <label for="img_path" class="form-label">
                    <i class="fas fa-image"></i> Event Image
                </label>
                <input type="file" name="img_path" id="img_path" class="form-control">
                @if ($event->img_path)
                    <div class="mt-2">
                        <small class="text-muted">Current image:</small>
                        <img src="{{ asset('storage/' . $event->img_path) }}" alt="Event Image" width="100" class="img-thumbnail mt-1">
                    </div>
                @endif
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">
                    <i class="fas fa-align-left"></i> Description
                </label>
                <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description', $event->description) }}</textarea>
            </div>

            <!-- Vacancies -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="vacancies" class="form-label">
                        <i class="fas fa-users"></i> Vacancies
                    </label>
                    <input type="number" name="vacancies" id="vacancies" class="form-control" value="{{ old('vacancies', $event->vacancies) }}" required>
                </div>

                <!-- Status -->
                <div class="col-md-6">
                    <label for="status" class="form-label">
                        <i class="fas fa-toggle-on"></i> Status
                    </label>
                    <select name="status" id="status" class="form-select" required>
                        <option value="1" {{ $event->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $event->status == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update Event
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
