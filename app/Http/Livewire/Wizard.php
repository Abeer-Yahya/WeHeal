<?php
  
namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;


  
class Wizard extends Component
{
    public $currentStep = 1;
    public $name, $email, $password, $membership, $image, $number, $date, $code;
    public $successMessage = '';
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.register');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'name' => 'required|string',
            'email'=>'required|email|unique:users',
            'password'=>['required','min:5','max:12',Rules\Password::defaults()],
        ]);
 
        $this->currentStep = 2;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'membership' => 'required',
        ]);
  
        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'number' => 'required|min:13|max:19|numeric',
            'date' => 'required|date|date_format:Y-m|after:today',
            'code' => 'required|numeric|min:3|max:4',
        ]);
  
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
       $user= User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'membership' => $this->membership,
            'image'=> $this->image,
            'number'=> $this->number,
            'date'=> $this->date,
            'code'=> Hash::make($this->code),

        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/');

        $this->clearForm();
  
        $this->currentStep = 1;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->membership = '';
        $this->number = '';
        $this->date = '';
        $this->code = '';

        // $this->status = 1;
    }
}
