<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.02.17
 * Time: 10:27
 */

namespace Drupal\form_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class MyPageController extends ControllerBase {

  public function my_redirect() {
    //...
    $this->redirect('user.page');
  }

  public function customPage() {
//    return 'buu';
    $form = \Drupal::formBuilder()->getForm('Drupal\form_module\Form\Form_About');
//    return render($form);

      $element['welcome'] = array(
        '#markup' => 'Welcome to my custom page!'
      );
    $element['form'] = array(
      '#markup' => render($form),
    );
    return $element;
  }

}

