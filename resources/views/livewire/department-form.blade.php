<div>
    <input type="text" wire:model="name">

    <button type="submit" wire:click="submit">Submit</button>

    @if ($success)
        <div>Saved</div>
    @endif
</div>
