(function ($, Drupal){
    'use strict';

    Drupal.behaviors.workshop = {
      attach: function attach(context, settings) {
          $(context).find('.field--name-title').addClass('workshop2');
      }
    };
})(jQuery, Drupal);