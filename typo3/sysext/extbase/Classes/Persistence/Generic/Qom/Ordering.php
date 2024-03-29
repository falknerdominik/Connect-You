<?php
namespace TYPO3\CMS\Extbase\Persistence\Generic\Qom;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010-2013 Extbase Team (http://forge.typo3.org/projects/typo3v4-mvc)
 *  Extbase is a backport of TYPO3 Flow. All credits go to the TYPO3 Flow team.
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * Determines the relative order of two rows in the result set by evaluating operand for
 * each.
 */
class Ordering implements \TYPO3\CMS\Extbase\Persistence\Generic\Qom\OrderingInterface {

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\Generic\Qom\DynamicOperandInterface
	 */
	protected $operand;

	/**
	 * @var string One of \TYPO3\CMS\Extbase\Persistence\Generic\Qom\QueryObjectModelConstantsInterface::JCR_ORDER_*
	 */
	protected $order;

	/**
	 * Constructs the Ordering instance
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\Generic\Qom\DynamicOperandInterface $operand The operand; non-null
	 * @param string $order either \TYPO3\CMS\Extbase\Persistence\Generic\Qom\QueryObjectModelConstantsInterface::JCR_ORDER_ASCENDING or \TYPO3\CMS\Extbase\Persistence\Generic\Qom\QueryObjectModelConstantsInterface::JCR_ORDER_DESCENDING
	 */
	public function __construct(\TYPO3\CMS\Extbase\Persistence\Generic\Qom\DynamicOperandInterface $operand, $order = \TYPO3\CMS\Extbase\Persistence\Generic\Qom\QueryObjectModelConstantsInterface::JCR_ORDER_ASCENDING) {
		$this->operand = $operand;
		$this->order = $order;
	}

	/**
	 * The operand by which to order.
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\Generic\Qom\DynamicOperandInterface the operand; non-null
	 */
	public function getOperand() {
		return $this->operand;
	}

	/**
	 * Gets the order.
	 *
	 * @return string either \TYPO3\CMS\Extbase\Persistence\Generic\Qom\QueryObjectModelConstantsInterface::JCR_ORDER_ASCENDING or \TYPO3\CMS\Extbase\Persistence\Generic\Qom\QueryObjectModelConstantsInterface::JCR_ORDER_DESCENDING
	 */
	public function getOrder() {
		return $this->order;
	}
}

?>