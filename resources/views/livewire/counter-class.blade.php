<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2> {{$value}}</h2>
                <button type="button" class="btn btn-success" wire:click="increment">+1</button>
                <button type="button" class="btn btn-danger" wire:click="decrement">-1</button>
                <button type="button" class="btn btn-warning" wire:click="increment_by_number(5)">+5</button>
                <button type="button" class="btn btn-dark" wire:click="decrement_by_number(5)">-5</button>
            </div>
        </div>
    </div>
</main>
