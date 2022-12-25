<div>
    
  <div class="text-center">
      <!-- progressbar -->
      <ul class="progressbar">
          <li class="{{ $currentStep != 1 ? '' : 'active' }}"><a href="#step-1" type="button"></a></li>
          <li class="{{ $currentStep != 2 ? '' : 'active' }}"><a href="#step-2" type="button"></a></li>
          <li class="{{ $currentStep != 3 ? '' : 'active' }}"><a href="#step-3" type="button" disabled="disabled"></a></li>
      </ul>
  </div>
      <div class="p-4 setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
          <div class="col-xs-12 mx-auto">
              <div class="col-md-12">
                  <h3 class="form-heading mb-4 text-center"> Sign Up</h3>
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" wire:model="name" class="form-control rounded" id="name">
                      @error('name') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" wire:model="email" class="form-control rounded" id="email"/>
                      @error('email') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" wire:model="password" class="form-control rounded" id="password"/>
                      @error('password') <span class="error">{{ $message }}</span> @enderror
                  </div>

                <!-- Submit button -->
                  <button class="btn btn-block mb-4 btn-form nextBtn " wire:click="firstStepSubmit" type="button" >Continue</button>

                 <!-- Login buttons -->
                  <div class="text-center">
                    <p>
                      Already a member?
                      <a class="button-link"  aria-current="page"
                      href="{{ asset('/login') }}">Login</a>
                    </p>
                  </div>
              </div>
          </div>
      </div>
      <div class=" setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
          <div class="col-xs-12">
              <div class="col-md-12">
                  <h3 class="form-heading mb-4 text-center"> Choose the plan that’s right for you</h3>
                  <div class="form-group table-responsive">

                      <table class="table registerTable table-borderless">
                          <thead>
                            <tr>
                              <th></th>
                              <th><label class="radio-inline"><input type="radio" wire:model="membership" value="0" {{{ $membership == '0' ? "checked" : "" }}}> Basic</label></th>
                              <th><label class="radio-inline"><input type="radio" wire:model="membership" value="1" {{{ $membership == '0' ? "checked" : "" }}}>Premium</label></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>Monthly Price</th>
                              <td>JD 0.00</td>
                              <td>JD 9.99</td>
                            </tr>
                            <tr>
                              <th >Q & A</th>
                              <td>Read ONLY</td>
                              <td>Read & Ask</td>
                           </tr>
                            <tr>
                              <th >Blogs</th>
                              <td>No</td>
                              <td>Yes</td>
                            </tr>
                            <tr>
                              <th >Therapy Offers</th>
                              <td>No</td>
                              <td>Yes</td>
                            </tr>
                          </tbody>
                        </table>

                  </div>

                  <button class="btn nextBtn btn-block btn-form mb-4" type="button" wire:click="secondStepSubmit">Continue</button>
                  {{-- <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button> --}}
              </div>
          </div>
      </div>
      <div class="setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
          <div class="col-xs-12">
              <div class="col-md-12">
                  @if ($membership == 1) 
                  <div class="col-xs-12 mx-auto">
                      <div class="col-md-12">
                          <h3 class="form-heading mb-4 text-center">Set up your credit or debit card</h3>
                          <div class="form-group">
                              <label for="number">Card number</label>
                              <input type="number" wire:model="number" class="form-control rounded" id="number">
                              @error('number') <span class="error">{{ $message }}</span> @enderror
                          </div>
                          <div class="form-group">
                              <label for="date">Expiration date</label>
                              <input type="date" wire:model="date" class="form-control rounded" id="date"/>
                              @error('date') <span class="error">{{ $message }}</span> @enderror
                          </div>
                          <div class="form-group">
                              <label for="code">Security code (CVV)</label>
                              <input type="password" wire:model="code" class="form-control rounded" id="code"/>
                              @error('code') <span class="error">{{ $message }}</span> @enderror
                          </div>

                        

                          <div class="planS rounded mb-2 d-flex justify-content-between" style="background-color: #fefdf6; color: #064635; font-weight:700">
                            <div>
                              <span class="ml-2">JD 9.99/ month</span><br/>
                              <span class="ml-2">Premium Plan</span>
                            </div>
                            <div>

                              <button style="font-weight:700; font-size:1.2rem; color:#064635" class="btn nextBtn" type="button" wire:click="back(2)">Change</button>
                            </div>
                          </div>
                          <div class="form-group">
                              <p>By checking the checkbox below, you agree to our Terms of Use, Privacy Statement, and that you are over 18. We Heal. will automatically continue your membership and charge the membership fee (currently JD 9.99/ month) to your payment method until you cancel. You may cancel at any time to avoid future charges.</p>
                              
            <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="form2Example31"
                  required
                />
                <label class="form-check-label ml-2" for="form2Example31">
                  I agree
                </label>
              </div>
                              
                          </div>

                          <button class="btn btn-block btn-form mb-4" wire:click="submitForm" type="button">Start Membership</button>
                      </div>
                  </div>
                  
                  @else 
                      <h3>Are you sure you wnat the basic plan?<br/>
                      You can change it now or anytime you want.</h3>
                      <button class="btn btn-block nextBtn btn-form mb-4 mt-5" type="button" wire:click="back(2)">Change your plan</button>
                      <button class="btn btn-block btn-form  btn-formPlan mb-4" wire:click="submitForm" type="button">Start Membership</button>


                  
                  @endif
              </div>
          </div>
      </div>
  </div>