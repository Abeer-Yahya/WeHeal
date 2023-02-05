<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Story;
  
class Wizard2 extends Component

{

    use WithFileUploads;

    public $currentStep = 1;
    public $title, $story, $image, $category, $filter;
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
            'story' => 'required',
        ]);

        $this->currentStep = 4;
    }

    public function thirdStepSubmitA() 
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'story' => 'required',
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
        $getFiltersReq = $this->filter;
        $filterss = implode(",", $getFiltersReq);


        Story::create([
            'title' => $this->title,
            'story' => $this->story,
            'image' => $this->image,
            'category' => $this->category,
            'filter' => $filterss,
        ]);
  
        $this->successMessage = 'Story Added Successfully.';
  
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
        $this->title = '';
        $this->story = '';
        $this->image = '';
        $this->category = '';
        $this->filters = '';
    }
}