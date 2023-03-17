<h2><?= esc($title) ?></h2>

<?php if (!empty($guest) && is_array($guest)) : ?>

  <?php foreach ($guest as $guest_item) : ?>

    <div class="main">
    <h2><?= esc($guest_item['name']) ?></h2>
    <p><?= esc($guest_item['email']) ?></p>
    <p><?= esc($guest_item['comment']) ?></p>
    </div>
  
    <?php endforeach ?>

<?php else : ?>
  <h2>No Guest</h2>
  <p>Nobody has registered yet.</p>

<?php endif ?>