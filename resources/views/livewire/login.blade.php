<div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Login</h5>
        <form wire:submit="login">
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" wire:model="email" id="email" class="form-control">
                @error('email')
                <small class="text-danger d-lock mt-1">{{$message}}</small>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" wire:model="password" id="password" class="form-control">
                @error('password')
                <small class="text-danger d-lock mt-1">{{$message}}</small>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit">Login</button>
        </form>
    </div>
</div>
</div>
