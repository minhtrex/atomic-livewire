<div>
    <!-- <h1>{{ $message }}</h1> -->
    @livewire('Molecules.StandardInput', ['labelContent' => 'Email:', 'txtType' => 'text', 'errId' => 'email'])
    @livewire('Atoms.Button', ['btnName' => 'Test button'])
</div>
