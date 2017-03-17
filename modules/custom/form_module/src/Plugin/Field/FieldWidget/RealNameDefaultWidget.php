<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24.02.17
 * Time: 9:56
 */

namespace Drupal\form_module\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class RealNameWidgetDefault
 * @FieldWidget (
 *   id = "realname_default",
 *   label = @Translation("Real name"),
 *   field_types = {
 *    "realname"
 *    }
 *   )
 */

class RealNameDefaultWidget extends WidgetBase {
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    // TODO: Implement formElement() method.
    $element['first_name'] = array(
      '#type' => 'textfield',
      '#title' => t('First name'),
      '#default_value' => '',
      '#size' => 25,
      '#required' => $element['#required'],
    );
    $element['last_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Last name'),
      '#default_value' => '',
      '#size' => 25,
      '#required' => $element['#required'],
    );
    return $element;
  }
}
