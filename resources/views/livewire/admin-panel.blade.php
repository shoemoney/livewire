<div>
  
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
  
    @if($updateMode)
        @include('livewire.update-users')
    @else
        @include('livewire.create-users')
    @endif
  
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Body</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email }}</td>
                <td>
                <button wire:click="edit({{ $user->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $user->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>