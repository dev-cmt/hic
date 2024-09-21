<x-app-layout :title="'Create Event'">
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Create Event</h1>
        
        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <!-- Title Field -->
                <div class="col-md-6 mb-3">
                    <label for="title" class="form-label">Event Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Title" required>
                </div>

                <!-- Event Date Field -->
                <div class="col-md-6 mb-3">
                    <label for="event_date" class="form-label">Event Date</label>
                    <input type="date" name="event_date" id="event_date" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <!-- Image Field -->
                <div class="col-md-6 mb-3">
                    <label for="img_path" class="form-label">Event Image</label>
                    <input type="file" name="img_path" id="img_path" class="form-control">
                </div>

                <!-- Vacancies Field -->
                <div class="col-md-6 mb-3">
                    <label for="vacancies" class="form-label">Vacancies</label>
                    <input type="number" name="vacancies" id="vacancies" class="form-control" placeholder="Vacancies" required>
                </div>
            </div>

            <div class="row">
                <!-- Description Field -->
                <div class="col-md-12 mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="Event description" required></textarea>
                </div>
            </div>

            <div class="row">
                <!-- Status Field -->
                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label">Event Status</label>
                    <select name="status" id="status" class="form-select" required>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Create Event
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
