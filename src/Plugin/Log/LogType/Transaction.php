<?php

namespace Drupal\farm_ledger\Plugin\Log\LogType;

use Drupal\farm_entity\Plugin\Log\LogType\FarmLogType;

/**
 * Provides the transaction log type.
 *
 * @LogType(
 *   id = "transaction",
 *   label = @Translation("Transaction"),
 * )
 */
class Transaction extends FarmLogType {

}
