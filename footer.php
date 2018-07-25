<div class="request">
    <div class="request_wrapper">
        <div class="request_close"></div>
        <div class="request_title">Request a demo</div>
        <form class="request_form">
            <div class="request_row">
                <label class="request_item">
                    <input type="text" name="first_name" autocomplete="off">
                    <span class="request_label">First name</span>
                </label>
                <label class="request_item">
                    <input type="text" name="company_name" autocomplete="off">
                    <span class="request_label">Company name</span>
                </label>
            </div>
            <div class="request_row">
                <label class="request_item">
                    <input type="text" name="last_name" autocomplete="off">
                    <span class="request_label">Last name</span>
                </label>
                <label class="request_item">
                    <input type="text" name="industry_name" autocomplete="off">
                    <span class="request_label">Industry</span>
                </label>
            </div>
            <div class="request_row">
                <label class="request_item">
                    <input type="text" name="email" autocomplete="off">
                    <span class="request_label">Email</span>
                </label>
                <label class="request_item">
                    <input type="text" name="country" autocomplete="off">
                    <span class="request_label">Country</span>
                </label>
            </div>
            <div class="request_row">
                <label class="request_item">
                    <input type="text" name="plan" autocomplete="off">
                    <span class="request_label">What are your current pain points and goals in Facebook?</span>
                </label>
                <label class="request_item">
                    <input type="text" name="budget" autocomplete="off">
                    <span class="request_label">Monthly Budget USD</span>
                </label>
            </div>
            <label class="request_check">
                <input type="checkbox" name="accept">
                <span class="request_checkbox"></span>
                <span class="request_check_label">
                    I agree to the <a href="privacy.html" target="_blank">Privacy Policy and Cookie Policy</a> and to receive email content from Adset
                </span>
            </label>
            <button type="submit" class="btn btn-t">
                <span class="request_error">
                    Fill all of the fields of the form
                </span>
                Send request
            </button>
        </form>
    </div>
</div>
<div class="cookie <?= (isset($_COOKIE['agree_cookie']) ? '' : 'show') ?>">
    <p class="cookie_text">Cookies help us deliver our services. By using our services, you agree to our use of cookies.
        You can turn cookies off by changing your browser settings</p>
    <div class="cookie_buttons">
        <div class="btn btn-sm">Agree</div>
        <a href="/privacy-policy/" class="cookie_link">More</a>
    </div>
</div>
</main>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/index.js"></script>
<!— Yandex.Metrika counter —>
<script type="text/javascript">
  (function (d, w, c) {
    (w[c] = w[c] || []).push(function () {
      try {
        w.yaCounter49739467 = new Ya.Metrika2({
          id: 49739467,
          clickmap: true,
          trackLinks: true,
          accurateTrackBounce: true,
          webvisor: true
        });
      } catch (e) {
      }
    });

    var n = d.getElementsByTagName("script")[0],
      s = d.createElement("script"),
      f = function () {
        n.parentNode.insertBefore(s, n);
      };
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://mc.yandex.ru/metrika/tag.js";
    ;

    if (w.opera == "[object Opera]") {
      d.addEventListener("DOMContentLoaded", f, false);
    } else {
      f();
    }
  })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/49739467" ; style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!— /Yandex.Metrika counter —>
<? wp_footer(); ?>

</body>
</html>
