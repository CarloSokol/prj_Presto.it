<style>
    .overlay-container {
      position: relative;
      overflow: hidden;
      display: inline-block;
    }

    .overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 50%; /* Rende l'overlay rotondo */
      height: 100%; /* Altezza dell'overlay uguale all'immagine */
      width: 100%; /* Larghezza dell'overlay uguale all'immagine */
      opacity: 0;
      transition: .5s ease;
      background-color: rgba(0, 0, 0, 0.5);
      text-align: center; /* Centra il testo */
    }

    .overlay-container:hover .overlay {
      opacity: 1;
    }

    .text {
      color: white;
      font-size: 20px;
      position: relative;
      top: 50%;
      transform: translateY(-50%);
    }
  </style>



<div class="container mb-4">
    <div class="title text-center mb-4 "> <!-- Aggiunta della classe text-center -->
        <h2>Founders</h2>
      </div>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-lg-between  justify-content-center">

    <div class="col-md-2 col-6  position-relative">

        

      <div class="overlay-container">
        <img src="https://picsum.photos/seed/picsum/500/500" class="rounded-circle img-fluid" alt="Immagine 1" width="150" height="150">
        <div class="overlay">
          <div class="text">
            <h5 class="mt-2">Titolo 1</h5>
            <p><a href="#">Linkedin</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-2 col-6  position-relative">
        <div class="overlay-container">
          <img src="https://picsum.photos/seed/picsum/500/500" class="rounded-circle img-fluid" alt="Immagine 1" width="150" height="150">
          <div class="overlay">
            <div class="text">
              <h5 class="mt-2">Titolo 1</h5>
              <p><a href="#">Linkedin</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-2 col-6  position-relative">
        <div class="overlay-container">
          <img src="https://picsum.photos/seed/picsum/500/500" class="rounded-circle img-fluid" alt="Immagine 1" width="150" height="150">
          <div class="overlay">
            <div class="text">
              <h5 class="mt-2">Titolo 1</h5>
              <p><a href="#">Linkedin</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-2 col-6  position-relative">
        <div class="overlay-container">
          <img src="https://picsum.photos/seed/picsum/500/500" class="rounded-circle img-fluid" alt="Immagine 1" width="150" height="150">
          <div class="overlay">
            <div class="text">
              <h5 class="mt-2">Titolo 1</h5>
              <p><a href="#">Linkedin</a></p>
            </div>
          </div>
        </div>
      </div>
    <!-- Ripeti per le altre immagini -->
  </div>
</div>