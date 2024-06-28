
<div class="card m-2" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$assurance->name}}</h5>
        <p><strong>frais : </strong>{{  implode(" ",array_reverse(str_split(strrev(strval($assurance->frais_assurance)),3))) }} €</p>

        <form wire:submit="save">

            <input type="hidden" wire:model="bank"  >

            <button type="submit" class="btn btn-primary text-center">Save</button>
        </form>
    </div>
</div>

