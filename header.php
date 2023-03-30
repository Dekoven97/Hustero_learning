  <style>
      .header {
          border: 1px dashed red;
      }

      .sub-header {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 0.2rem 1rem;
          background: #14254a;
          color: #fff;
      }

      .sub-header a {
          color: #fff;
          padding: 0 0 0 0.5rem;
          font-size: 1.2rem;
      }

      .sub-header a:hover {
          color: hsl(0, 0%, 50%);
      }

      .d-logo {
          height: 3rem;
      }

      .desktop-menu {
          display: flex;
          justify-content: space-between;
          align-items: center;
          margin: 1rem 4rem;
          /* border: 1px dashed red; */
      }

      .d-menu {
          display: flex;
          gap: 1rem;
      }

      .d-menu a,
      .login-area a {
          color: #14254a;
          font-weight: 600;
      }

      .d-menu a:hover,
      .signup:hover {
          color: hsl(221, 57%, 48%);
      }

      .login-area {
          display: flex;
          align-items: center;
          gap: 1rem;
      }

      .login {
          padding: 0.3rem 1rem;
          border: #14254a 1px solid;
          border-radius: 0.55rem;
      }

      .login:hover {
          background: #14254a;
          color: #fff;
          transition: all ease-in-out 0.3s;
      }
  </style>
  <div class="header">
      <div class="sub-header">
          <div class="moto">Learn Today - Lead Tomorrow</div>
          <div class="sub-social">
              <a href=""><i class="fab fa-linkedin"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fas fa-envelope"></i></a>
          </div>
      </div>

      <nav class="desktop-menu">
          <div class="d-brand-area">
              <a href=""><img src="Dlogo.png" alt="" class="d-logo" /></a>
          </div>
          <ul class="d-menu">
              <li><a href="">Online Course</a></li>
              <li><a href="">Course</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Contact</a></li>
          </ul>
          <div class="login-area">
              <a href="" class="signup">Sign-up</a>
              <a href="" class="login">Login</a>
          </div>
      </nav>
  </div>