<?php

namespace Drupal\clean_filenames\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a list of 10 random files block.
 *
 * @Block(
 *   id = "clean_filename",
 *   admin_label = @Translation("File name block")
 * )
 */
class FileNameBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t("A list of random filenames"),
    ];
  }

  /**
  * {@inheritdoc}
  */
 protected function blockAccess(AccountInterface $account) {
   return AccessResult::allowedIfHasPermission($account, 'administer content');
 }

}
