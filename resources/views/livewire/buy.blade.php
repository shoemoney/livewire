<div>


        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
  
  <form wire:submit.prevent="submitForm" action="" method="post">
<div class="market-trade-buy">
                  <div class="input-group">
                    <input type="text" wire:model="amount" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">{{ $selling_coin }}</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="text" wire:model="result" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">{{ $buying_coin }}</span>
                       
                    </div>
                  </div>
                  
                  <p>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button type="submit" class="btn buy">Buy</button>
                </div>
                </form>
</div>