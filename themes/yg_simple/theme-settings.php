<?php

/**
 * @file
 * Provides an additional config form for theme settings.
 */

use Drupal\Core\Form\FormStateInterface;

function yg_simple_form_system_theme_settings_alter(array &$form, FormStateInterface $form_state) {
  $form['yg_simple_settings']= array(
    '#type' => 'details',
    '#title' => t('YG Simple Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#group' => 'bootstrap',
    '#weight' => 10,
  );

#social links    
  $form['yg_simple_settings']['social_links'] = array(
    '#type' => 'details',
    '#title' => t('Social Links'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['yg_simple_settings']['social_links']['social_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Social Links Title'),
    '#description' => t('Please enter footer social title'),
    '#default_value' => theme_get_setting('social_title'),
    '#required' => TRUE,
  ); 
  $form['yg_simple_settings']['social_links']['facebook_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook'),
    '#description' => t('Please enter your facebook url'),
    '#default_value' => theme_get_setting('facebook_url'),
  );
   $form['yg_simple_settings']['social_links']['twitter_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter'),
    '#description' => t('Please enter your twitter url'),
    '#default_value' => theme_get_setting('twitter_url'),
  );
  $form['yg_simple_settings']['social_links']['instagram_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Instagram'),
    '#description' => t('Please enter your instagram url'),
    '#default_value' => theme_get_setting('instagram_url'),
  );
  $form['yg_simple_settings']['social_links']['google_plus_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Plus'),
    '#description' => t('Please enter your google-plus url'),
    '#default_value' => theme_get_setting('google_plus_url'),
  );
#Footer-contact-details
  $form['yg_simple_settings']['footer'] = array(
    '#type' => 'details',
    '#title' => t('Footer About'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['yg_simple_settings']['footer']['footer_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Footer Title'),
    '#description' => t('Please enter footer about title'),
    '#default_value' => theme_get_setting('footer_title'),
    '#required' => TRUE,
  ); 
  $desc = theme_get_setting('desc');
  $form['yg_simple_settings']['footer']['desc'] = array(
    '#type' => 'text_format',
    '#title' => t('Address'),
    '#description' => t('Please enter address'),
    '#default_value' => $desc['value'],
    '#foramt'        => $desc['format'],
  );
//footer custom text
  $form['yg_simple_settings']['secondary_footer'] = array(
    '#type' => 'details',
    '#title' => t('Footer Section'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $sub_footer = theme_get_setting('sub_footer');
  $form['yg_simple_settings']['secondary_footer']['sub_footer'] = array(
    '#type' => 'text_format',
    '#title' => t('Footer Description'),
    '#description' => t('Please enter footer description...'),
    '#default_value' => $sub_footer['value'],
    '#foramt'        => $sub_footer['format'],
  );
    
}
 
