<x-layout>
    <div class="container mt-1">
        <h4><i class="fas fa-scroll"></i> {{ $note->note_title }}</h4>
        <small class="lead"><b>Date</b>: {{ $note->getCreatedDate() }}</small>

        <p>{{ $note->note_body }}</p>
    </div>
</x-layout>