<div class="container">
  <h1><?php the_title(); ?></h1>

  <ul>

    <?php foreach ( get_field('set_songs') as $key => $song ) : ?>

      <li class="song-entry">
        <span class="song-entry__title">

          <?php echo get_the_title($song->ID); ?> <?php if ( get_field('song_artist') ) : echo '- ' . get_field('song_artist', $song->ID); endif; ?>

          <?php if ( get_field('song_listen', $song->ID) ) : ?>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/speaker.png" alt="Listen" class="song-entry__icon">
          <?php endif; ?>
          <?php if ( get_field('song_lyrics', $song->ID) ) : ?>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/file.png" alt="Lyrics" class="song-entry__icon">
          <?php endif; ?>
          <?php if ( get_field('song_chords', $song->ID) ) : ?>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/music.png" alt="Chords" class="song-entry__icon">
          <?php endif; ?>

        </span>

        <ul class="song-entry__links">
          <?php if ( get_field('song_listen', $song->ID) ) : ?>
            <li><a href="<?php echo get_field('song_listen', $song->ID); ?>" target="_blank">Listen</a></li>
          <?php endif; ?>
          <?php if ( get_field('song_lyrics', $song->ID) ) : ?>
            <li><a href="<?php echo get_field('song_lyrics', $song->ID); ?>" target="_blank">Lyrics</a></li>
          <?php endif; ?>
          <?php if ( get_field('song_chords', $song->ID) ) : ?>
            <li><a href="<?php echo get_field('song_chords', $song->ID); ?>" target="_blank">Chords</a></li>
          <?php endif; ?>
          <?php if ( !get_field('song_listen', $song->ID) && !get_field('song_lyrics', $song->ID) && !get_field('song_chords', $song->ID) ) :
             ?>
            <li>No files found.</li>
           <?php endif; ?>
        </ul>
      </li> <!-- /.song-entry -->

    <?php endforeach; ?>

  </ul>



</div>
