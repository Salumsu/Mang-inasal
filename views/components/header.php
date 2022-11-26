<div class="nav">
      <div class="nav-body">
        <div class="nav-left">
          <div class="menu-bar">
            <svg
              width="102"
              height="74"
              viewBox="0 0 102 74"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <rect width="102" height="14" rx="7" fill="#D9D9D9" />
              <rect y="30" width="102" height="14" rx="7" fill="#D9D9D9" />
              <rect y="60" width="102" height="14" rx="7" fill="#D9D9D9" />
            </svg>
          </div>
          <i class="fa-solid fa-bars"></i>
          <img
            class="icon"
            src="https://lh3.googleusercontent.com/U-rMUiA0G4sFs3z1ZYGtL5mN2tSQ-FWwDZkETvKBHvLDAjL0_hRMH7KrevrjiXb2XLZuAukgS-bJwrJKo5oFAw8leS_e3xog1OAMlYaEVg=w500-rw"
          />
          <h1>Mang Inasal</h1>
        </div>
        <div class="nav-right">
          <div class="login">
            <div class="text">Login / Register</div>
            <div class="icon">
              <svg
                width="71"
                height="91"
                viewBox="0 0 71 91"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M63.6285 44H7.18518C2.20714 44 -0.605727 49.7126 2.42944 53.6583L27.1712 85.8225C31.144 90.9871 38.9158 91.0336 42.9501 85.9169L68.3402 53.7149C71.4429 49.7797 68.6398 44 63.6285 44Z"
                  stroke="black"
                />
                <path
                  d="M17 18.5C17 28.165 24.835 36 34.5 36C44.165 36 52 28.165 52 18.5C52 8.83502 44.165 1 34.5 1C24.835 1 17 8.83502 17 18.5Z"
                  stroke="black"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>

      <div class="nav-pop-up">
        <div class="pop-up-body">
          <div class="close">
            <div class="close-icon">
              <svg
                width="44"
                height="44"
                viewBox="0 0 44 44"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M2 2L42 42M42 2L2 42"
                  stroke="white"
                  stroke-width="5"
                />
              </svg>
            </div>
          </div>
          <div class="picture">
            <img
              class="icon"
              src="https://lh3.googleusercontent.com/U-rMUiA0G4sFs3z1ZYGtL5mN2tSQ-FWwDZkETvKBHvLDAjL0_hRMH7KrevrjiXb2XLZuAukgS-bJwrJKo5oFAw8leS_e3xog1OAMlYaEVg=w500-rw"
            />
          </div>
          <div class="extra-nav">
            <ul>
              <li><a href="#">Login or Signup</a></li>
              <li><a href="#">Home</a></li>
              <li><a href="#">Order Now</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Order History</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <script>
      let popUp = document.querySelector(".nav-pop-up");
      let popUpBody = document.querySelector('.pop-up-body');
      let openButton = document.querySelector(".menu-bar");
      let closeButton = document.querySelector(".close");

      popUp.addEventListener('click', () => {
        popUp.classList.remove('active');
      })

      popUpBody.addEventListener('click', (e) => {
        e.stopPropagation();
      })

      openButton.addEventListener("click", () => {
        popUp.classList.add("active");
      });

      closeButton.addEventListener("click", () => {
        popUp.classList.remove("active");
      });
    </script>
