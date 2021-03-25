<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchPair extends Component
{
    public $ethereum_price;
    public $bitcoin_price;
    public $litecoin_price;
    public $from;
    public $to;
    public $amount;
     

    public function mount(){

    //    $this->ethereum_price;
    //    $this->bitcoin_price;
    //    $this->litecoin_price;
    //    $this->from;
    //    $this->to;
    //    $this->amount;
    }


    public function render()
    {

    //     $from = 'BTC';
    //     $to = 'ETH';

    // $endpoint = 'live';
    // $access_key = '21e1a91588dc9d1e4bd236f6d7d3bbc3';

      // Initialize CURL:
    //  $ch = curl_init('http://api.coinlayer.com/api/'.$endpoint.'?access_key='.$access_key.'');
     
    //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      

     
     // Store the data:
    //  $json = curl_exec($ch);
    //  curl_close($ch);

    // Decode JSON response:
    //  $exchangeRates = json_decode($json, true);

    // Access the exchange rate values, e.g. GBP:
    // $this->ethereum_price = $exchangeRates['rates']['ETH'];
    // $this->bitcoin_price = $exchangeRates['rates']['BTC'];
    // $this->litecoin_price = $exchangeRates['rates']['LTC'];


//starting conversion endpoint
// $endpoint = 'convert';
// $access_key = '21e1a91588dc9d1e4bd236f6d7d3bbc3';

// $this->from = 'ETH';
// $this->to = 'GBP';
// $this->amount = 10;

// initialize CURL:
// $ch = curl_init('https://api.coinlayer.com/api/'.$endpoint.'?access_key='.$access_key.'&from='.$this->from.'&to='.$this->to.'&amount='.$this->amount.'');   
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// get the JSON data:
// $json = curl_exec($ch);
// curl_close($ch);

// Decode JSON response:
// $conversionResult = json_decode($json, true);

// access the conversion result
// print_r($conversionResult);

return view('livewire.search-pair');

    }

    
}
