
    <div class="card m-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$bank->name}}</h5>
            <p><strong>Frais de tenu de compte : </strong>{{$bank->frais_compte }}€</p>
            <p><strong>Taux d'emprunt : </strong>{{$bank->taux_emprunt *100 }}%</p>
            <p><strong>max emprunt : </strong>{{  implode(" ",array_reverse(str_split(strrev(strval($bank->max_emprunt)),3))) }} €</p>

            <form wire:submit="save">

                <input type="hidden" wire:model="bank"  >

                <button type="submit" class="btn btn-primary text-center">Save</button>
            </form>
        </div>
    </div>

