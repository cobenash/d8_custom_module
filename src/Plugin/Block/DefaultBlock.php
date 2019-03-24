<?php

namespace Drupal\d8_custom_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "custom_vue_block",
 *  admin_label = @Translation("Custom Vue Block"),
 * )
 */
class DefaultBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['custom_vue_block']['#theme'] = 'd8_custom_module';
    $build['custom_vue_block']['#markup'] = 'Implement DefaultBlock.';
    $build['custom_vue_block']['#attached']['library'] = ['d8_custom_module/custom-vue-js','d8_custom_module/vue'];
    return $build;
  }

}
