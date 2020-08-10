<section class="comments">
  <?php if(have_comments()) : ?>
  <h3 class="comments-title">
    <?php comments_number('Aucun commentaire', '1 commentaire',
    '% commentaires'); ?>
  </h3>
  <?php
  endif;

  wp_list_comments();

  echo '<div class="comments-pagination">';
  paginate_comments_links(
    array(
      'prev_text'          => '<i class="fas fa-arrow-left"></i> Anciens commentaires',
      'next_text'          => 'Commentaires récents <i class="fas fa-arrow-right"></i>'
    )
  );
  echo '</div>';

  comment_form(
    array(
      'title_reply'   => 'Laisser un commentaire',
      'label_submit'  => 'Publier mon commentaire'
    )
  );

   ?>
</section>
