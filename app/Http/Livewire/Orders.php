<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Order;
use App\User;
  
class Orders extends Component
{
    public $orders,$order_id,$order_type,$amount;
    public $updateMode = false;

   
   public function mount(){

   
   }

    public function render()
    {
        $this->orders = Order::all();
        return view('livewire.Orders');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // private function resetInputFields(){
    //     $this->buying_coin = '';
    //     $this->selling_coin = '';
    //     $this->amount = '';
    // }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'buying_coin' => 'required',
            'selling_coin' => 'required',
             'amount' => 'required'
        ]);
  
        Order::create($validatedDate);
  
        session()->flash('message', 'Order Created Successfully.');
  
        // $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $this->order_id = $id;
        $this->buying_coin = $order->buying_coin;
        $this->selling_coin = $order->selling_coin;
        $this->amount = $order->amount;
        $this->updateMode = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        // $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedDate = $this->validate([
            'buying_coin' => 'required',
            'selling_coin' => 'required',
            'amount' => 'required',
        ]);
  
        $Order = Order::find($this->Order_id);
        $Order->update([
            'buying_coin' => $this->buying_coin,
            'selling_coin' => $this->selling_coin,
            'amount' => $this->amount,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Order Updated Successfully.');
        // $this->resetInputFields();
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Order::find($id)->delete();
        session()->flash('message', 'Order Deleted Successfully.');
    }
}