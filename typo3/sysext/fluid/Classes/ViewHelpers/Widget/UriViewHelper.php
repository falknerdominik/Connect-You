<?php
namespace TYPO3\CMS\Fluid\ViewHelpers\Widget;

/*
 * This script is backported from the TYPO3 Flow package "TYPO3.Fluid".   *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 *  of the License, or (at your option) any later version.                *
 *                                                                        *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */
/**
 * A view helper for creating URIs to extbase actions within widgets.
 *
 * = Examples =
 *
 * <code title="URI to the show-action of the current controller">
 * <f:widget.uri action="show" />
 * </code>
 * <output>
 * index.php?id=123&tx_myextension_plugin[widgetIdentifier][action]=show&tx_myextension_plugin[widgetIdentifier][controller]=Standard&cHash=xyz
 * (depending on the current page, widget and your TS configuration)
 * </output>
 *
 * @api
 */
class UriViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * Render the Uri.
	 *
	 * @param string $action Target action
	 * @param array $arguments Arguments
	 * @param string $section The anchor to be added to the URI
	 * @param string $format The requested format, e.g. ".html
	 * @param boolean $ajax TRUE if the URI should be to an AJAX widget, FALSE otherwise.
	 * @return string The rendered link
	 * @api
	 */
	public function render($action = NULL, $arguments = array(), $section = '', $format = '', $ajax = FALSE) {
		if ($ajax === TRUE) {
			return $this->getAjaxUri();
		} else {
			return $this->getWidgetUri();
		}
	}

	/**
	 * Get the URI for an AJAX Request.
	 *
	 * @return string the AJAX URI
	 */
	protected function getAjaxUri() {
		$action = $this->arguments['action'];
		$arguments = $this->arguments['arguments'];
		if ($action === NULL) {
			$action = $this->controllerContext->getRequest()->getControllerActionName();
		}
		$arguments['id'] = $GLOBALS['TSFE']->id;
		// TODO page type should be configurable
		$arguments['type'] = 7076;
		$arguments['fluid-widget-id'] = $this->controllerContext->getRequest()->getWidgetContext()->getAjaxWidgetIdentifier();
		$arguments['action'] = $action;
		return '?' . http_build_query($arguments, NULL, '&');
	}

	/**
	 * Get the URI for a non-AJAX Request.
	 *
	 * @return string the Widget URI
	 */
	protected function getWidgetUri() {
		$uriBuilder = $this->controllerContext->getUriBuilder();
		$argumentPrefix = $this->controllerContext->getRequest()->getArgumentPrefix();
		$arguments = $this->hasArgument('arguments') ? $this->arguments['arguments'] : array();
		if ($this->hasArgument('action')) {
			$arguments['action'] = $this->arguments['action'];
		}
		if ($this->hasArgument('format') && $this->arguments['format'] !== '') {
			$arguments['format'] = $this->arguments['format'];
		}
		return $uriBuilder->reset()->setArguments(array($argumentPrefix => $arguments))->setSection($this->arguments['section'])->setAddQueryString(TRUE)->setArgumentsToBeExcludedFromQueryString(array($argumentPrefix, 'cHash'))->setFormat($this->arguments['format'])->build();
	}
}

?>