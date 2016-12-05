<?php

/**
 * @file Contains \Drupal\external_book\Entity\ExternalBookInterface
 */
namespace Drupal\external_book\Entity;

use Drupal\Core\Entity\ContentEntityInterface;

interface ExternalBookInterface extends ContentEntityInterface {

    /**
     * Gets the message value
     *
     * @return string
     */
    public function getMessage();
}