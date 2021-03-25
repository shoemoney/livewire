
  <div wire:poll="render">
  <ul class="d-flex justify-content-between market-order-item">
                <li>ID</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <!-- <li>Price</li> -->
                <li>Price</li>
                <li>Amount</li>
              </ul>

     @foreach($orders as $order)
              <ul class="d-flex justify-content-between market-order-item">
                <li>{{ $order->id }}</li>
                <li>{{ $order->pair }}</li>
                <!-- <li>{{ $order->buying_coin }}</li> -->
                <li>{{ $order->amount }}</li>
                <li>{{ $order->type }}</li>
                <li>{{ $order->amount }}</li>
                <li>{{ $order->rate }}</li>
                <!-- <li>{{ $order->amount }}</li> -->
               
              </ul>
 @endforeach
 </div>