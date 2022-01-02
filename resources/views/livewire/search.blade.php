<div class="input_field btn-block">
    <input wire:model="search" name="search" list="mylist" type="text" placeholder="Where to go?">

    @if(!empty($query))
    <datalist id="mylist">
        @foreach( $datalist as $rs)
            <option value="{{$rs->title}}">{{$rs->category->title}}</option>
        @endforeach
    </datalist>
    @endif
</div>
