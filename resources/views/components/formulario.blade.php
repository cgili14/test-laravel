<form wire:submit.prevent="{{ $submit }}">
    {{ $slot }}
    <button wire:loading.remove wire:target="{{ $submit }}" type="submit" class="btn btn-primary mt-4">Guardar</button>
    <button wire:loading wire:target="{{ $submit }}" class="btn btn-primary mt-4 disabled" disabled>Guardando</button>
</form>
