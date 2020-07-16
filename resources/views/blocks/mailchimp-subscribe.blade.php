{{--
  Title: Mailchimp Subscribe Form
  Description: 'Subscribe To Market Insights' subscription form

  Category: common
  Icon: admin-comments
  Keywords: callout
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: true
  SupportsMode: false
  SupportsMultiple: true
--}}

<section class="mailchimp-subscribe-block {{ get_field('block_orientation') }}">

  <div class="mailchimp__title-container">
    <h2 class="title">{{ get_field('block_title') }}</h2>
  </div>

<div class="mailchimp__subscribe-form">
  <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
  <div id="mc_embed_signup">
    <form action="https://arborfirm.us15.list-manage.com/subscribe/post?u=ae754ee5d8a26301c3da52e0a&amp;id=c28e66f0e5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
      <div id="mc_embed_signup_scroll" class="form-inner">
        <div class="input-and-response-container">
          <div class="mc-field-group email-field">
            <input type="email" placeholder="Enter your email address" value="" name="EMAIL" class="required email mailchimp-email-field" id="mce-EMAIL">
          </div>
          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>
        </div>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true">
          <input type="text" name="b_ae754ee5d8a26301c3da52e0a_c28e66f0e5" tabindex="-1" value="">
        </div>
        <div class="clear submit-button">
          <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn-hover--aqua">
        </div>
      </div>
    </form>
  </div>
  <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[4]='PHONEYUI_';ftypes[4]='phone';fnames[7]='TEXTYUI_3';ftypes[7]='text';fnames[3]='MMERGE3';ftypes[3]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
  <!--End mc_embed_signup-->
</div>

</section>