@php
    $socials = getSocials();
    if (!empty($socials) and count($socials)) {
        $socials = collect($socials)->sortBy('order')->toArray();
    }

    $footerColumns = getFooterColumns();
@endphp
<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <img src=" {{ asset('/frontend/assets/images/Name-LogoFooter.png')}} " alt="">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text has been text.</p>
        </div>
        <div class="col-lg-4">
          <h3>USEFUL LINKS</h3>
          <ul class="footer-1">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Subscribe</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h3>GET IN TOUCH</h3>
          <ul class="footer-2">
            <li>400 lorem ipsum 606 Dummy Text, 93330</li>
            <li>(626) 386-8064</li>
          </ul>
          <ul class="footer-3">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <section class="copyright-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <p>Copyright © 2021 An-Nabi Institute- All Rights Reserved.</p>
        </div>
        <div class="col-lg-4 float-right">
          <ul class="copyright-ul">
            <li><a href="#">Terms Of Service</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>

  </section>
