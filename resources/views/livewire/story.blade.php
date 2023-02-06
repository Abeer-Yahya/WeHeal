<div>
   
  @if(!empty($successMessage))
  <div class="alert alert-success">
     {{ $successMessage }}
  </div>
  @endif

    
      <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
          <div class="col-xs-12">
              <div class="col-md-12">      
                 <h1 class="story-heading mb-4" style="margin-top: 9.6rem">Welcome to We Heal.</h1>
                 <p class="story-desc mx-auto mb-5">We'd want to hear your story. Not sure where to begin? Although many of us are still in the process of healing, stories frequently have a beginning, middle, and end. Stories might be focused on situations, experiences, or feelings. Some people use stories to express the pain and suffering they have endured. Stories might help some people see the growth they are experiencing or wish to see. You can tell this story whatever you choose since it is yours.<br/> We're here to hear you. We can heal together.</p>

    
                  <button class="btn nextBtn pull-right Sbtn" wire:click="firstStepSubmit" type="button" >CONTINUE</button>
              </div>
          </div>
      </div>
      <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
          <div class="col-xs-12">
              <div class="col-md-12">
                  <h1 class="story-heading mb-4">Express your feelings</h1>
                  <p class="story-desc mx-auto">Each of us expresses ourselves in a different way; some of us write, while others create art. Please indicate the method you like to use to express yourself.</p>
                  <div class="form-group">
                      <label>
                          <input  type="radio" wire:model="category" value="0" {{{ $category == '0' ? "checked" : "" }}}>
                          <img id="art" src="assets/img/art-bnw.png" alt="art" height="350rem" width="300rem"  onclick="changeArt()" />
                          <script>
                              var art = document.querySelector('#art');

                              function changeArt() {
                                  art.src = "assets/img/art-colored.png";
                              }
                          
                            </script>
                      </label>

                      <label>
                          <input type="radio" wire:model="category" value="1" {{{ $category == '1' ? "checked" : "" }}}>
                          <img id="write" src="assets/img/write-bnw.png" alt="art" height="350rem" width="300rem"  onclick="changeWrite()" />
                          <script>
                              var write = document.querySelector('#write');

                              function changeWrite() {
                                  write.src = "assets/img/write-colored.png";
                              }
                          
                            </script>
                      </label>
                  </div>
                  @error('category') <span class="error mb-2">{{ $message }}</span> @enderror <br/>

                  <button class="btn nextBtn Sbtn mb-2" type="button" wire:click="secondStepSubmit">CONTINUE</button>
                  <p><a class="BSbtn" href="/">Back to home</a>
                  </p>
              </div>
          </div>
      </div>
      <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
          <div class="col-xs-12">
              @if ($category == "1")
              <div class="col-md-12">
                  <h3 class="story-heading mb-4">We are with you.</h3>
                  <p class="story-desc mx-auto mb-5">We believe stories are powerful. If you feel comfortable, share your story and be a part of the change.
                  </p>
                  <div class="Sforms mx-auto">
                  <div class="form-group">
                      <input type="text" wire:model="title" class="form-control" id="title" placeholder="If you are comfortable, you can add your title here..">
                      @error('title') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="form-group">
                      <textarea type="text" wire:model="desc" class="form-control" id="story" placeholder="If you are comfortable, you can write your story, your healing journey, or your message to other people here.."></textarea>
                      @error('story') <span class="error">{{ $message }}</span> @enderror
                  </div>
                </div>
    
                  <button class="btn nextBtn Sbtn mb-2" wire:click="thirdStepSubmitS" type="button">CONTINUE</button>
                  <p>
                      <a wire:click="back(2)" class="BSbtn">Back</a>
                  </p>
              </div>
              @elseif ($category=="0")
              <div class="col-md-12">
                  <h3 class="story-heading mb-4">We are with you.</h3>
                  <p class="story-desc mx-auto mb-5">We believe stories are powerful. If you feel comfortable, share your story and be a part of the change.
                  </p>
                  <form class="Sforms mx-auto" enctype="multipart/form-data">
                  <div class="form-group">
                      <input type="text" wire:model="title" class="form-control" id="title" placeholder="If you are comfortable, you can add your title here..">
                      @error('title') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="form-group">
                      <textarea type="text" wire:model="desc" class="form-control" id="story" placeholder="If you are comfortable, you can add some description or context here.."></textarea>
                      @error('story') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="form-group">
                      <input type="file" wire:model="image" class="form-control" id="image" accept="image/*"/>
                      @error('image') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  </form>
                  <button class="btn nextBtn Sbtn mb-2" wire:click="thirdStepSubmitS" type="button">CONTINUE</button>
                  <p>
                      <a wire:click="back(2)" class="BSbtn">Back</a>
                  </p>
              </div>
              @endif
          </div>
      </div>
      <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
          <div class="col-lg-12">
                          <div class="col-xs-12">
                            <div class="col-md-12">
                                <h1 class="story-heading mb-4">Thank you.</h1>
                                <p class="story-desc mx-auto">We sort stories into different categories to help people reach their desired category faster.</p>
                                <div class="form-group">
                                    <select name="filters[]" multiple="" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" wire:model="filter" style="width: 400px; height:150px">
                                        <option value="0">Anxiety</option>
                                        <option value="1">Family issues</option>
                                        <option value="2">Childhood</option>
                                        <option value="3">Healing</option>
                                        <option value="4">Stress</option>
                                        <option value="5">Breaking the cycle</option>
                                        <option value="6">Eating Disorders</option>
                                        <option value="7">Depression</option>
                                        <option value="8">Panic Attacks</option>
                                        <option value="9">Anger</option>
                                        <option value="10">Self esteem</option>
                                        <option value="11">Other</option>
                                    </select>
                          
                                </div>
                                
              
                                <button class="btn nextBtn Sbtn mb-2" type="button" wire:click="submitForm">CONTINUE</button>
                                <p><a class="BSbtn" wire:click="back(3)">Back</a>
                                </p>
                            </div>
                        </div>
          </div>
      </div>
  </div>
