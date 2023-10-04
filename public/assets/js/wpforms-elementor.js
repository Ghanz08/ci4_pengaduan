"use strict";
var WPFormsElementorFrontend =
  window.WPFormsElementorFrontend ||
  (function (o, e, n) {
    var r = {
      init: function () {
        r.events();
      },
      events: function () {
        e.addEventListener("elementor/popup/show", function (e) {
          e = n("#elementor-popup-modal-" + e.detail.id).find(".wpforms-form");
          e.length && r.initFields(e);
        });
      },
      initFields: function (e) {
        wpforms.ready(),
          "undefined" != typeof wpformsModernFileUpload && wpformsModernFileUpload.init(),
          "undefined" != typeof wpformsRecaptchaLoad &&
            ("recaptcha" === wpformsElementorVars.captcha_provider && "v3" === wpformsElementorVars.recaptcha_type ? "undefined" != typeof grecaptcha && grecaptcha.ready(wpformsRecaptchaLoad) : wpformsRecaptchaLoad()),
          n(o).trigger("wpforms_elementor_form_fields_initialized", [e]);
      },
    };
    return r;
  })(document, window, jQuery);
WPFormsElementorFrontend.init();
