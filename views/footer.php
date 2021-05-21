  <!--Footeri-->
  <footer>
    <div class="foteri">
      <!--Pjesa e par e footerit About us ,inkonat -->
      <div class="f">
        <h2>
          About us
        </h2>
        <div class="about">
          <p>
            Te gjitha te drejtat jane te autorizuara dhe nuk lejohet shperndarja e materialeve pa lejen tone.
          </p>
          <div class="social">
            <a href="https://www.instagram.com/" target="target"> <i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/?lang=en" target="blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/" target="blank"><i class="fab fa-youtube"></i></a>
            <a href="https://www.google.com/" target="blank"><i class="fab fa-google"></i></a>
          </div>
          </br>
          <p id="ditaf"></p>

          <script>
            if (typeof(Storage) !== "undefined") {
              localStorage.setItem("Data formimit", "Ky portal u formua me <b>© 2020-<?php echo date("Y");?></b>.");
              document.getElementById("ditaf").innerHTML = localStorage.getItem("Data formimit");
            } else {
              document.getElementById("ditaf").innerHTML = "Browseri juaj nuk e perkrah localStorage";
            }
          </script>
        </div>
      </div>
      <!--Pjesa ne mes e footerit -->
      <div class="center">
        <h2>
          Address
        </h2>
        <div class="about">
          <div class="pa">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text">Prishtinë</span>
          </div>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">+383 44 444 444</span>
          </div>
          <div class="email">

            <span class="social">
              <a href="indexemail.php">
                <span class="fas fa-envelope"></span></a>
          </span>

            <span class="text">Portal@example.com</span>
          </div>
        </div>
      </div>

      </form>
  </footer>