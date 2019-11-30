<!-- controller pages/index -->
<menu>
  <ul id="menu">
    <li class="inline"><a href="pages">Home</a></li>
  </ul>
</menu>
<header id="header">
  <div class="header large"><?php echo $top; ?></div>
</header>

<main class="container">

  <section class="box ideas">
    <article class="box-skeleton">
      <?php
      $ideas = heading('Ideas', 3, 'class="title"');
      echo anchor("pages/category/ideas", $ideas);
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
  <section class="box health">
    <article class="box-skeleton">
    <?php
      $health =  heading('Health', 3, 'class="title"');
      echo anchor("pages/category/health", $health);
    ?>
    <img src="assets/images/herb.jpg">
    </article>
  </section>

  <section class="box">
    <article class="box-skeleton">

    <?php
      $car = heading('Car', 3, 'class="title"');
      echo anchor("pages/category/car", $car);
    ?>
    <img src="assets/images/car.jpg">
    </article>
  </section>
  <section class="box">
    <article class="box-skeleton">
    <?php
      $garden = heading('Garden', 3, 'class="title"');
      echo anchor("pages/category/garden", $garden);
      ?>

    <img src="assets/images/garden.jpg">
    </article>
  </section>

  <section class="box">
    <article class="box-skeleton">
      <?php
      $weight = heading('Weight', 3, 'class="title"');
      echo anchor("pages/category/weight", $weight);
      ?>

    </article>
  </section>
</main>
<main class="container">
  <section class="card-container">
    <article class="card-container--skeleton">
    <h3 class="skeleton--head">Record Inputs</h3>
    <div class="skeleton--content">
      <?php
      $arg = [
        'id' => 'ajax'
      ];
      echo form_open('forms/inputs', $arg);
      echo "<p>";
      $args = [
        'id'          => 'date',
        'name'        => 'date',
        'class'       => 'input-med-lg',
        'placeholder' => 'Date'
      ];
      echo form_input($args);
      echo "</p>";
      echo "<p>";
      $arg1 = [
        'name' => 'data',
        'placeholder' => "Data",
        'style' => "width: 100%"
      ];
      echo form_textarea($arg1);
      echo "</p>";
      $args2 = [
        '' => 'Pick One',
        'ideas'    => "Ideas",
        'health'   => 'Health',
        'car'      => 'Car',
        'garden'   => "Garden",
        'weight'   => "Weight"
      ];
      $js = [
        'class' => "input-med-lg"
      ];
      echo form_dropdown('topic', $args2, $js);
      echo "<br>";
      echo form_submit('submit',"Submit");

      echo form_reset('reset', "Reset");
      echo "</div>";

    ?>
    </article>
    <article class="card-container--skeleton">
      <h3 class="skeleton--head">Trial & Error</h3>
      <p class="skeleton--content" id="display"></p>
      <p class="skeleton--content"><?php echo validation_errors(); ?></p>
      <p class="skeleton--content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, natus.</p>

    </article>

  </section>

</main>