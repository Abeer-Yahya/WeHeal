<?php
  
namespace App\Http\Livewire;
  
use App\Models\Story;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
  
class Wizard2 extends Component

{

    use WithFileUploads;

    public $currentStep = 1;
    public $title, $desc, $image, $category, $filter;
    public $successMessage = '';
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.story');
      
        
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
     
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
            'category' => 'required',
        ]);
  
        $this->currentStep = 3;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function thirdStepSubmitS()
    {
          $validatedData = $this->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

        $this->currentStep = 4;
    }

    public function thirdStepSubmitA() 
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $this->currentStep = 4;
    }

     /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        // $imageName = time() . "." . $this->image->extension();
        // $this->image->move(public_path('images'), $imageName);



        $getFiltersReq = $this->filter;
        $filterss = implode(",", $getFiltersReq);

        $userID = Auth::user()->id; 




        $story = Story::create([
            'title' => $this->title,
            'desc' => $this->desc,
            'image' =>$this->image,
            'category' => $this->category,
            'filter' => $filterss,
            'user_id' => $userID,
        ]);
       

  
        $this->successMessage = 'Story Added Successfully.';
  
        $this->clearForm();
  
        $this->currentStep = 1;

        return view('dashboard');
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
        $this->title = '';
        $this->desc = '';
        $this->image = '';
        $this->category = '';
        $this->filters = '';
    }
}