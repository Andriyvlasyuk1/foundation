<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24.02.17
 * Time: 11:10
 */


namespace Drupal\form_module\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Class RealNameFormatter
 * @FieldFormatter (
 *   id = "realname_one_line",
 *   label = @Translation("Real name (one line"),
 *   field_types = {
 *    "realname"
 *   }
 * )
 */

class RealNameFormatter extends FormatterBase {

  public function viewElements(FieldItemListInterface $items, $langcode) {
    // TODO: Implement viewElements() method.
    $element = [];

    foreach ($items as $delta => $item) {
      $element[$delta] = array(
        '#markup' => $this->t('@first @last' , array(
          '@first' => $item->first_name,
          '@last' => $item-> last_name,
          )
        ),
      );
    }
    return $element;
  }
}
