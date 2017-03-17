<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.02.17
 * Time: 16:17
 */

namespace Drupal\form_module\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Class RealName
 * @FieldType (
 *   id = "realname",
 *   label = @Translation("Real name"),
 *   description = @Translation("This field stores a first and last name"),
 *   category = @Translation("General"),
 *   default_widget = "realname_default",
 *   default_formatter = "realname_one_line"
 * )
 */

class RealName extends FieldItemBase {

  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    // TODO: Implement schema() method.
    return array(
      'columns' => array(
        'first name' => array(
          'description' => 'First name.',
          'type' => 'varchar',
          'length' => '255',
          'not null' => TRUE,
          'default' => '',
        ),
        'last_name' => array(
          'description' => 'Last name',
          'type' => 'varchar',
          'length' => '255',
          'not null' => TRUE,
          'default' => '',
        ),
      ),
      'indexes' => array(
        'first_name' => array('first_name'),
        'last_name' => array('last_name'),
      ),
    );
  }

  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    // TODO: Implement propertyDefinitions() method.
    $properties['first_name'] = \Drupal\Core\TypedData\DataDefinition::create('string')
      ->setLabel(t('First name'));
    $properties['last_name'] = \Drupal\Core\TypedData\DataDefinition::create('string')
      ->setLabel(t('Last name'));

    return $properties;
  }
}
