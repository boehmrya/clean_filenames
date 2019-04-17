<?php

namespace Drupal\block_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a list of 10 random files block.
 *
 * @Block(
 *   id = "example_uppercase",
 *   admin_label = @Translation("Example: uppercase this please")
 * )
 */
class FileNameBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t("This block's title is changed to uppercase. Any block title which contains 'uppercase' will also be changed to uppercase."),
    ];
  }

}
