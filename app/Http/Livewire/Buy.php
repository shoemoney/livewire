<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Order;
use App\User;
use App\Balance;

class Buy extends Component
{
    public $buying_coin = 'BTC';
    public $selling_coin = 'ETH';
    public $rate = 10;
    public $amount;
    public $type = 'buy';
    public $result;
    public User $user;
    public $subtraction;
    public $sum;
    public Order $order;

    public $endpoint = 'convert';
 public $access_key = '21e1a91588dc9d1e4bd236f6d7d3bbc3';

    protected $listeners = ['refreshResult' => 'result'];

public function mount(User $user){
        $this->user = $user;
        $this->buying_coin = 'BTC';
        $this->selling_coin = 'ETH';
        $this->rate;
        $this->user= auth()->user();
        $this->amount = 10;
$this->endpoint = 'convert';
$this->access_key = '21e1a91588dc9d1e4bd236f6d7d3bbc3';

// initialize CURL:
$ch = curl_init('https://api.coinlayer.com/api/'.$this->endpoint.'?access_key='.$this->access_key.'&from='.$this->selling_coin.'&to='.$this->buying_coin.'&amount='.$this->amount.'');   
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// get the JSON data:
   $json = curl_exec($ch);
   curl_close($ch);

// Decode JSON response:
   $conversionResult = json_decode($json);

// access the conversion result
     $this->result = $conversionResult->result;
    }


    protected $rules = [
        'amount' => 'required',
        'result' => 'required',
    ];

public function result(){

   $this->validate();

        $this->amount = $this->amount;
        $this->endpoint = 'convert';
        $this->access_key = '21e1a91588dc9d1e4bd236f6d7d3bbc3';
        
        // initialize CURL:
        $ch = curl_init('https://api.coinlayer.com/api/'.$this->endpoint.'?access_key='.$this->access_key.'&from='.$this->selling_coin.'&to='.$this->buying_coin.'&amount='.$this->amount.'');   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        // get the JSON data:
           $json = curl_exec($ch);
           curl_close($ch);
        
        // Decode JSON response:
           $conversionResult = json_decode($json);
        
        // access the conversion result
             $this->result = $conversionResult->result;
    }


    public function submitForm(){
        
    $this->validate([
            'buying_coin' => 'required',
            'selling_coin' => 'required',
             'amount' => 'required',
        ]);

        
        Order::create([
            'buying_coin' => $this->buying_coin,
            'selling_coin' => $this->selling_coin,
            'amount' => $this->amount,
            'rate' => $this->rate,
            'pair' => $this->buying_coin.'/'.$this->selling_coin,
            'type' => $this->type
        ]);
        $this->sum = $this->user->balance->LTC - $this->amount;
        $this->subtraction = $this->user->balance->BTC + $this->amount;

        auth()->user()->balance->update([
         'LTC' => $this->sum,
         'BTC' => $this->subtraction,
        ]);
       

        
       

        session()->flash('message', 'Order Created Successfully.'.$this->sum);
  
    }


    public function updatingAmount(){
        $this->validate();
        $this->emit('refreshResult');
    }

   public function render()
    {
        return view('livewire.buy');
    }
}
