<div>


<div class="market-pairs">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm"><i class="icon ion-md-search"></i></span>
            </div>


          <input type="search" wire:model="search" class="form-control" placeholder="Search" aria-describedby="inputGroup-sizing-sm">
          </div>

      
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#STAR" role="tab" aria-selected="true"><i
                  class="icon ion-md-star"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#BTC" role="tab" aria-selected="true">BTC</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="BTC" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($pairs as $pair)
                  <tr>
                    <td><i class="icon ion-md-star"></i> {{ $pair->id }}</td>
                    <td>{{ $pair->name }}</td>
                    <td>{{ $pair->name }}-</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
           <p>5CaAv6bF3n6WgbvdMwZA </p>
            

          </div>
</div>
