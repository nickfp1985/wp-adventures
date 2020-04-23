<?php

$placesCtaOne = get_field('places_cta_1');
$placesCtaTwo = get_field('places_cta_2');

$videoGallery = get_field('video-gallery');
// $video1img = get_sub_field('video_one_image');
// $video2img = get_sub_field('video_two_image');
// $video3img = get_sub_field('video_three_image');

// $galleryVid1 = get_sub_field('video_one');
// $galleryVid2 = get_sub_field('video_two');
// $galleryVid3 = get_sub_field('video_three');


get_header(); ?>

<main class="main-content">

  <?php if (have_rows('travelers')) : ?>

    <div class="people" id="people">
      <div class="people-title">
        <h2 class="background-soft-text">People</h2>
      </div>
      <h6>TRAVELERS</h6>
      <div class="people-section">
        <div class="cards-display">

          <?php
          $i = 0;
          while (have_rows('travelers')) : the_row();
            // if there is content selected, show content
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $link = get_sub_field('post_link');
            $bio = get_sub_field('bio');
            $i += 1;
          ?>

            <div class="card">
              <div>
                <img class="card-img" src="<?php echo $image['url']; ?>" alt="" />
              </div>
              <div class="card-info">
                <h4 class="card-title"><?php echo $title; ?></h4>
                <!-- MODAL BUTTON -->
                <button class="card-btn" onclick="openModal('modal-<?php echo $i; ?>')">View Bio</button>

              </div>
            </div>
            <!-- THE MODAL -->
            <div id="modal-<?php echo $i; ?>" class="modal">

              <div class="modal-content">
                <div class="modal-picture">
                  <img class="modal-img" src="<?php echo $image['url']; ?>" alt="" />
                </div>
                <div class="modal-info">
                  <h4 class="card-title"><?php echo $title; ?></h4>
                  <p><?php echo $bio; ?></p>
                  <span class="close" onclick="closeModal('modal-<?php echo $i; ?>')">Close Bio</span>
                </div>
              </div>

            </div>
          <?php endwhile; ?>
        </div>

      </div>

    </div>

  <?php endif; ?>


  <div class="places" id="places">
    <h2 class="background-soft-text places-title">
      Places
    </h2>

    <div class="location-section">
      <div class="location-info">
        <h3><?php echo $placesCtaOne['places_cta_1_title']; ?>
        </h3>
        <p><?php echo $placesCtaOne['places_cta_1_text']; ?></p>
      </div>
      <div class='image-container-right'>
        <img class="location-img" src="<?php echo $placesCtaOne['places_cta_1_image']; ?>" />
      </div>
    </div>

    <div class="location-section">
      <div class='image-container-left'>
        <img class="location-img" src="<?php echo $placesCtaTwo['places_cta_2_image']; ?>" />
      </div>
      <div class="location-info-right">
        <h3><?php echo $placesCtaTwo['places_cta_2_title']; ?></h3>
        <p><?php echo $placesCtaTwo['places_cta_2_text']; ?></p>
      </div>
      </section>
    </div>


    <div class="gallery" id="gallery">
      <h2 class="background-soft-text">Gallery</h2>

      <div class="video-gallery">
        <video id="slider" autoplay muted loop>
          <!-- default video gallery video, not editable by users, so there always is at least one -->
          <source src="http://adventures.local/wp-content/uploads/2020/02/amalfi-coast.mp4" type="video/mp4">
        </video>

        <ul class="video-navigation">

          <!-- <li onClick="videoUrl('http://power-digital.test/wp-content/uploads/2020/02/amalfi-coast.mp4')"> -->
          <li onClick="videoUrl('<?php echo $videoGallery['video_one']; ?>')">
            <img src="<?php echo $videoGallery['video_one_image']; ?>">
          </li>

          <!-- <li onClick="videoUrl('http://power-digital.test/wp-content/uploads/2020/02/Desert-Crater.mp4')"> -->
          <li onClick="videoUrl('<?php echo $videoGallery['video_two']; ?>')">
            <img src="<?php echo $videoGallery['video_two_image']; ?>">
          </li>

          <!-- <li onClick="videoUrl('http://power-digital.test/wp-content/uploads/2020/02/coverr-yachts-near-coast-1578680739741.mp4')"> -->
          <li onClick="videoUrl('<?php echo $videoGallery['video_three']; ?>')">
            <img src="<?php echo $videoGallery['video_three_image']; ?>">
          </li>
        </ul>
      </div>

    </div>


    <div class="contact-section" id="contact">
      <div class="contact-left">
        <h2>Need some travel inspiration?</h2>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex nesciunt sunt sed ab autem cum culpa, dolorem saepe mollitia nihil officia aliquid molestias, laudantium optio dolores velit quo magni ullam similique odio. Nisi laudantium cupiditate, laborum distinctio, soluta architecto sequi sint tempora cum itaque.
        </p>
      </div>
      <div class="contact-right">
        <form class="contact-form" action="">
          <label>Where to?</label>
          <select>
            <option value="">Choose a destination</option>
            <option value="ac">Antelope Canyon</option>
            <option value="tdp">Torres Del Paine</option>
          </select>
          <label>First Name</label>
          <input type="text" placeholder="">
          <label>Last Name</label>
          <input type="text" placeholder="">
        </form>
        <button class="card-btn">Submit</button>
      </div>
    </div>


    <script type="text/javascript">
      /* video gallery click on a video box to play video */
      function videoUrl(thisVideo) {
        document.getElementById("slider").src = thisVideo;
      }

      var activeModal = null;

      function openModal(modalId) {
        if (activeModal !== null) {
          closeModal(activeModal);
        }
        var modal = document.getElementById(modalId);
        modal.style.display = "block";
        activeModal = modalId;
      }

      function closeModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.style.display = "none";
        activeModal = null;
      }
    </script>
</main>

<?php get_footer(); ?>