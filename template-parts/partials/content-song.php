<li class="song-entry">
  <span class="song-entry__title">

    <?php the_title(); ?> <?php if ( get_field('song_artist') ) : echo '- ' . get_field('song_artist'); endif; ?>

    <?php if ( get_field('song_listen') ) : ?>
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/speaker.png" alt="Listen" class="song-entry__icon">
    <?php endif; ?>
    <?php if ( get_field('song_lyrics') ) : ?>
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/file.png" alt="Lyrics" class="song-entry__icon">
    <?php endif; ?>
    <?php if ( get_field('song_chords') ) : ?>
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/music.png" alt="Chords" class="song-entry__icon">
    <?php endif; ?>

  </span>

  <ul class="song-entry__links">
    <?php if ( get_field('song_listen') ) : ?>
      <li><a href="<?php echo get_field('song_listen'); ?>" target="_blank">Listen</a></li>
    <?php endif; ?>
    <?php if ( get_field('song_lyrics') ) : ?>
      <li><a href="<?php echo get_field('song_lyrics'); ?>" target="_blank">Lyrics</a></li>
    <?php endif; ?>
    <?php if ( get_field('song_chords') ) : ?>
      <li><a href="<?php echo get_field('song_chords'); ?>" target="_blank">Chords</a></li>
    <?php endif; ?>
    <?php if ( !get_field('song_listen') && !get_field('song_lyrics') && !get_field('song_chords') ) :
       ?>
      <li>No files found.</li>
     <?php endif; ?>
  </ul>
</li> <!-- /.song-entry -->
