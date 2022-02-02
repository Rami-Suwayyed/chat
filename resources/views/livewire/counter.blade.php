<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div>
        <button wire:click="increment"> + </button>
        <h1>{{ $count }}</h1>
        <button wire:click="decrement"> - </button>
        <br>
        <br>
        <input wire:keydown.enter="decrement">
        <br >
        <h1>message : {{ $message }}</h1>
        <br >
        <div> isActive: {{ $isActive }} </div>
        <br >
        <button wire:click ="toggle"> toggle </button>
        <button  wire:click="resetIsActive"> reset </button>
        <br >
        <br >
        <h1>search : {{ $search }}</h1>
        <br >
        <input wire:model="search" type="text" placeholder="enter search value here">
        <br >
        <br >
        <h1>child : {{ $parent["child"] }}</h1>
        <br >
        <br >
        <input type="text" wire:model="parent.child"  placeholder="enter child value here">
        <br >
        <br >
        <input type="text" wire:model.debounce.500ms="parent.child" placeholder="debounce 500ms">
        <br >
        <br >
        <input wire:model.lazy="search" type="text" placeholder="enter search value here">
        <br >
        <br >
        <p>Original message: "{{ $message }}"</p>
        <p>Reversed message: "{{ $this->reversed }}"</p>

        <br><br>
        <form wire:submit.prevent="save">
            <input type="text">

            <button>Save</button>
        </form>
    </div>
</div>

<div>

</div>


