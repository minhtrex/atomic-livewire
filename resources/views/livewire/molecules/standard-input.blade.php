<div>
    @livewire('Atoms.Label', ['labelContent' => $labelContent])
    @livewire('Atoms.TextBox', ['txtType' => $txtType, 'txtWireModel' => $txtWireModel])
    @error('{{ $errId }}') <span class="text-danger error">{{ $message }}</span>@enderror
</div>
