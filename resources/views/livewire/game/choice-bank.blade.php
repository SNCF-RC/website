<div>
    <h1 class="text-center">{{__('Choice your bank !')}}</h1>
    <div class="row">
        @foreach ($banks as $bank)
            <livewire:game.component.bank-startgame-choice :bank="$bank"/>
        @endforeach
    </div>
</div>
