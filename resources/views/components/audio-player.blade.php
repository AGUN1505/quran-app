@props(['audio'])

<div class="audio-section">
    <div class="audio-card">
        <div class="audio-label">🎵 Murottal Surat</div>
        <audio controls>
            <source src="{{ $audio }}" type="audio/mpeg">
        </audio>
    </div>
</div>
