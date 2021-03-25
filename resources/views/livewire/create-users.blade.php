<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">name:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter name" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">email:</label>
        <textarea type="email" class="form-control" id="exampleFormControlInput2" wire:model="email" placeholder="Enter email"></textarea>
        @error('email') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>