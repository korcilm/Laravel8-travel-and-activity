<div>


    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif


    <form class="form-contact comment_form" wire:submit.prevent="store" id="commentForm">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" wire:model="comment" id="comment" cols="30" rows="9"
                              placeholder="Write Comment"></textarea>
                    @error('comment')<span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    @error('rate')<span class="text-danger">{{$message}}</span>@enderror
                    <strong>Your Rating</strong>
                    <input class="form-control" wire:model="rate" id="star5" type="radio" value="5">
                    <input class="form-control" wire:model="rate" id="star4" type="radio" value="4">
                    <input class="form-control" wire:model="rate" id="star3" type="radio" value="3">
                    <input class="form-control" wire:model="rate" id="star2" type="radio" value="2">
                    <input class="form-control" wire:model="rate" id="star1" type="radio" value="1">

                </div>
            </div>

        </div>
        <div class="form-group">
            @auth
                <input type="submit" class="button button-contactForm btn_1 boxed-btn" value="Gönder">
            @else
                <a href="/login" class="button button-contactForm btn_1 boxed-btn">Mesaj atmank için giriş yapın</a>
            @endauth
        </div>
    </form>
</div>
