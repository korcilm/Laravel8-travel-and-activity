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
                    <div class="rating">
                        <input type="radio" wire:model="rate"  value="5" id="5"><label style="font-size: 50pt;" for="5">☆</label>
                        <input type="radio" wire:model="rate" value="4" id="4"><label style="font-size: 50pt;"  for="4">☆</label>
                        <input type="radio" wire:model="rate" value="3" id="3"><label style="font-size: 50pt;" for="3">☆</label>
                        <input type="radio" wire:model="rate" value="2" id="2"><label style="font-size: 50pt;" for="2">☆</label>
                        <input type="radio" wire:model="rate"  value="1" id="1"><label style="font-size: 50pt;" for="1">☆</label>
                    </div>


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
