<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.02.17
 * Time: 18:13
 */

namespace Drupal\form_module\Plugin\Block;

use Drupal\Core\Url;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Link;
use Drupal\image\Entity\ImageStyle;
//use Drupal\Core\Render\Element\Url;
/**
 * Provides a block to view a specific entity.
 *
 * @Block(
 *   id = "form_block",
 *   admin_label = @Translation("Custom Form Block"),
 *   category = @Translation("Custom form block")
 * )
 */

class Form_Block extends BlockBase {
  public function build() {
    $form = \Drupal::formBuilder()->getForm('\Drupal\form_module\Form\Form_About');
    // TODO: Implement build() method.


    $form['city']['#value'] = $this->configuration['city'];

// Image

    $image = [
      '#theme' => 'image_style',
      '#style_name' => 'small_40_40_',
      '#uri' => 'public://2016-12/Education.png',
    ];

// Links
    $link = Url::fromUri('https://test02.yawave.com/wave/bike-travel', $options = [
      'query' => [
        'active-page' => '87376',
      ],
      'fragment' => 'tab-action-page',
    ]);


    $url = Link::fromTextAndUrl(t('Link to Yawave'), $link)->toString();

// Comments
    $string1 = $this->formatPlural(1, '1 comment ', '@count comments ');
    $string2 = $this->formatPlural(41, '1 comment ', '@count comments ');

    $element = [
      'form' => [
        '#markup' => render($form),
      ],

      'tag_div' => [
        '#type' => 'html_tag',
        '#tag' => 'div',
        '#value' => $url,
        '#attributes' => [
          'class' => 'yawave',
        ]
      ],

      'string1' => [
        '#markup' => $string1,
      ],

      'string2' => [
        '#markup' => $string2,
      ],

      'image' => [
        '#markup' => render($image),
      ],

    ];

    return $element;
  }

  public function blockForm($form, FormStateInterface $form_state) {
    $form['city'] = [
      '#type' => 'textfield',
      '#title' => t('City'),
      '#default_value' => $this->configuration['city'],
    ];
    return $form;
  }

  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['city'] = $form_state->getValue('city');
  }

}

