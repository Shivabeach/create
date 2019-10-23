<!-- controller pages/index -->
<menu id="menu">
  <ul>
    <li class="inline"><a href="pages">Home</a></li>
    <li class="inline"><a href="http:pages/prime2">Page 2</a></li>
    <li class="inline"><a href="http://#">Near</a></li>
    <li class="inline"><a href="http://#">Far</a></li>
    <li class="inline"><a href="http://#">Close</a></li>
  </ul>
</menu>
<header id="header">
  <div class="header large"><?php echo $top; ?></div>
</header>

<main class="container">
  <section class="box">
    <article class="box-skeleton">
      <?php
      echo heading('Ideas', 3, 'class="title"');
      ?>
      <ul>
        <li>Healthcare recap</li>
        <li>Weight</li>
        <li>Doctor Visits</li>
        <li>Fermentation Notes</li>
        <li>Diary</li>
      </ul>
    </article>
  </section>
  <section class="box bg-brown-10 font-brown-3">
    <article class="box-skeleton">

      <p><?php $key = bin2hex($this->encryption->create_key(16));
          echo $key; ?></p>
      <p>
        <?php $rand = random_int(100, 2000);
        echo $rand; ?>
      </p>
      <p>
        <?php
        $bytes = random_bytes(10);
        echo bin2hex($bytes);
        ?>
      </p>
    </article>
  </section>
  <section class="box">
    <article class="box-skeleton">
      <?php echo heading('Pepper Plan', 3, 'class="title"'); ?>
      <ul>
        <li>Mucho Jalapeno
        <li>Regular Jalapeno
        <li>Thai peppers
        <li>Tabasco
        <li>Slim Cayenne
      </ul>
    </article>
  </section>
  <section class="box">
    <article class="box-skeleton">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, quas repudiandae. Iste iure ut cumque maxime nihil, aliquid corporis rerum.</p>
    </article>
  </section>
  <section class="box">
    <article class="box-skeleton">
      <?php echo heading('Pepper Plan', 3, 'class="title"'); ?>
      <ul>
        <li>Repair beds
        <li>Replace Dirt
        <li>Add water holding material
        <li>Price greenhouse

      </ul>
    </article>
  </section>
</main>
<main class="container">
  <section class="card-container">
    <article class="card-container--skeleton border-brown-7">
      <h3 class="skeleton--head">Trial & Error</h3>
      <p class="skeleton--content">This is not to the paint scheme for this page</p>
      <p class="skeleton--content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sed, ex beatae quo dolorum minus ratione eligendi officiis molestias tempora!</p>
      <p class="skeleton--content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, natus.</p>
    </article>
  </section>
</main>