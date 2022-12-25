<footer class="footer">
  <div class="footer-left">
    <div class="subscribe">
      <div class="card p-3 py-4" style="background-color: #f4eea9">
        <div class="d-flex flex-row">
          <div class="d-flex flex-column ms-1">
            <h5 class="mb-0">FOR UPDATES & MORE</h5>
            <div class="text-left mb-2">
              <span
                >Updates, events, and ways to help out. Directly to your
                inbox.</span
              >
            </div>
          </div>
        </div>
        <div class="px-1 d-flex flex-row gap-2 align-items-center mt-2">
          <input
            class="form-control rounded"
            placeholder="example@gmail.com"
          />
          <button class="btn-news ml-2">
            SUBSCRIBE
            <span><ion-icon name="arrow-forward-outline"></ion-icon></span>
          </button>
        </div>
      </div>
    </div>
    <div class="links">
      <div class="column">
        <ul>
          <li><a aria-current="page"
            href="{{ asset('/what') }}">WHAT WE DO</a></li>
          <li><a aria-current="page"
            href="{{ asset('/careers') }}">CARRERS</a></li>
          <li><a aria-current="page"
            href="{{ asset('/q&a') }}">Q & A</a></li>
        </ul>
      </div>
      <div class="column">
        <ul>
          <li><a aria-current="page"
            href="{{ asset('/who') }}">WHO ARE WE</a></li>
          <li><a aria-current="page"
            href="{{ asset('/donate') }}">DONATE</a></li>
          <li><a aria-current="page"
            href="{{ asset('/blog') }}">BL0G</a></li>
        </ul>
      </div>
      <div class="column">
        <ul>
          <li><a aria-current="page"
            href="{{ asset('/membership') }}">MEMBERSHIP</a></li>
          <li><a aria-current="page"
            href="{{ asset('/resources') }}">RESOURCES</a></li>
          <li><a aria-current="page"
            href="{{ asset('/start') }}">START</a></li>
        </ul>
      </div>
    </div>
    <p class="rights-text">&#169; 2022 | We Heal. All rights reserved</p>
  </div>
  <div class="footer-right">
    <a href="/">
      <img
        alt="We Heal. logo"
        src="assets/img/WeHeal Logo.png"
        class="footer-logo"
      />
    </a>
  </div>
</footer>