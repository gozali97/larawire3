<div>
    <x-flash-message/>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create Post</h5>
                <form wire:submit="save">
                    <div class="mb-2">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" id="title" wire:model="form.title" class="form-control">
                        @error('form.title')
                        <small class="text-danger d-lock mt-1">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="body" class="form-label">Body</label>
                        <textarea name="body" id="body" wire:model="form.body" class="form-control" rows="3"></textarea>
                        @error('form.body')
                        <small class="text-danger d-block mt-1">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
</div>

