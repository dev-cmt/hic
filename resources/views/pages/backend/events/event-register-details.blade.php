<x-app-layout :title="'Events Registration Details'">
    <div class="container mt-4">
        <h1 class="mb-4">Event Registration Details</h1>
        
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">{{ $data->name }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $data->email }}</p>
                <p><strong>Phone:</strong> {{ $data->phone }}</p>
                <p><strong>Location:</strong> {{ $data->location }}</p>
                <p><strong>Destination:</strong> {{ $data->destination }}</p>
                <p><strong>Qualification:</strong> {{ $data->qualification }}</p>
                <p><strong>Date:</strong> {{ $data->date }}</p>
                <p><strong>Score:</strong> {{ $data->score }}</p>
                <p><strong>Event ID:</strong> {{ $data->event_id }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('events.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</x-app-layout>
