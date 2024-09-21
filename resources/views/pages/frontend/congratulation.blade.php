<x-frontend-layout :title="'Congratulation'">
    <div class="container text-center my-5">
        <h1 class="mb-4">
            <i class="fas fa-check-circle" style="color: green;"></i> 
            Congratulations!
        </h1>
        <p class="lead">Your registration was successful!</p>
        <p>
            Thank you for registering for our event. We look forward to seeing you!
        </p>
        <a href="{{ route('home') }}" class="btn btn-primary mt-3">
            <i class="fas fa-home"></i> Back to Home
        </a>
    </div>
</x-frontend-layout>
