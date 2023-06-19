<?= $this->extend('master') ?>

<?= $this->section('content') ?>
<main id="main">
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider _bannerHome">
      <!-- view_cell('App\Libraries\BannerHome::load'); -->
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts _recent">
    </section> <!-- End Post Grid Section -->

    <!-- ======= Culture Category Section ======= -->
    <section class="category-section _category_culture">
    </section><!-- End Culture Category Section -->

    <!-- ======= Business Category Section ======= -->
    <section class="category-section _category_business">
    </section><!-- End Business Category Section -->

    <!-- ======= Lifestyle Category Section ======= -->
    <section class="category-section _category_lifestyle">
    </section><!-- End Lifestyle Category Section -->
</main>
<?= $this->endSection() ?>

<?= $this->section('js') ?>

<script type="module">

import '/assets/js/loadHomeData.js';

// fetch('/banner/home',{
//   method: 'get'
// }).then(response => response.text().then(html => {
//   bannerHome.innerHTML = html;
//   swipe('.sliderFeaturedPosts');
// })).catch(error => console.log(error));

</script>

<?= $this->endSection() ?>