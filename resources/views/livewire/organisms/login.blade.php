<div class="row">
    <div class="col-md-12">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
    @if($registerForm)
        <form>
            <div class="row">
                <div class="col-md-12">
                    @livewire('Molecules.StandardInput', ['labelContent' => 'Name:', 'txtType' => 'text', 'txtWireModel' => 'name','errId' => 'name'])
                </div>
                <div class="col-md-12">
                    @livewire('Molecules.StandardInput', ['labelContent' => 'Email:', 'txtType' => 'text', 'txtWireModel' => 'email','errId' => 'email'])
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn text-white btn-success" wire:click.prevent="registerStore">Register</button>
                </div>
                <div class="col-md-12">
                    <a class="text-primary" wire:click.prevent="register"><strong>Login</strong></a>
                </div>
            </div>
        </form>
    @else
        <form>
            <div class="row">
                <div class="col-md-12">
                    @livewire('Molecules.StandardInput', ['labelContent' => 'Email:', 'txtType' => 'text', 'txtWireModel' => 'email','errId' => 'mail'])
                </div>
                <div class="col-md-12">
                    @livewire('Molecules.StandardInput', ['labelContent' => 'Password:', 'txtType' => 'password', 'errId' => 'password'])
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn text-white btn-success" wire:click.prevent="login">Login</button>
                </div>
                <div class="col-md-12">
                    Don't have account? <a class="btn btn-primary text-white" wire:click.prevent="register"><strong>Register Here</strong></a>
                </div>
            </div>
        </form>
    @endif
</div>
