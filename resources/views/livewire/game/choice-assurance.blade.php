<div>
    <div class="row">

        @foreach ($assurances as $assurance)
            <livewire:game.component.assurance-startgame-choice :assurance="$assurance"/>
        @endforeach
    </div>
</div>
