<menu id="menu">
  <ul>
    <li class="inline"><a href="http://create/">Home</a></li>
  </ul>
</menu>
<header id="header">
  <div class="header large"><?php echo $top; ?></div>
</header>

<main class="container">
  <section class="box_flex">
    <article class="box_flex-skeleton">
      <dl>
        <?php if (isset($topics)) : ?>
          <?php foreach ($topics as $list) : ?>
            <dt><?php echo nice_date($list->date, "F d Y"); ?> </dt>
            <dd><?php echo auto_typography($list->data); ?> </dd>
          <?php endforeach; ?>
        <?php else : ?>
          <h2>No Data</h2>
        <?php endif; ?>
      </dl>
    </article>
  </section>
</main>