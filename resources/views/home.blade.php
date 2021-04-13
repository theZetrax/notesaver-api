<x-layout>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Your <u><span class="text-muted">personalized</span></u> Note-Server.</h1>
            <p class="lead">You write in <span class="text-muted">markdown</span>, We deliver to your <span
                    class="text-danger">audience</span>.</p>
        </div>
    </div>

    <div class="container d-flex justify-content-center flex-row flex-wrap mb-5">
        {{-- Looping through notes. --}}
        @forelse ($notes as $note)
            <div class="card mx-1 mb-1" style="width: 18rem;">
                <div class="card-body">
                    {{-- Link heading --}}
                    <h5 class="card-title"><i class="fas fa-scroll"></i> {{ $note->note_title }}</h5>
                    {{-- Link body --}}
                    <p class="card-text">{{ $note->note_body }}</p>
                    <h6 class="card-subtitle mb-2 text-muted"><i><b>Date:</b> {{ $note->getCreatedDate() }}</i></h6>

                    {{-- Links to access the note --}}
                    <a href={{ url("/notes/{$note->id}") }} class="card-link">Read</a>
                    {{-- SweetAlert Here! --}}
                    <a href="#" class="card-link">Share</a>
                </div>
            </div>
        @empty
            <p><i class="fas fa-info-circle"></i> Notes Not Available Yet!</p>
        @endforelse
    </div>
</x-layout>