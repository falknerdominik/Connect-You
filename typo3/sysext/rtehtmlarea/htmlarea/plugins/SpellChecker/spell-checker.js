/***************************************************************
*  Copyright notice
*
*  (c) 2003 dynarch.com. Authored by Mihai Bazon, sponsored by www.americanbible.org.
*  (c) 2004-2011 Stanislas Rolland <typo3(arobas)sjbr.ca>
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
*  This script is a modified version of a script published under the htmlArea License.
*  A copy of the htmlArea License may be found in the textfile HTMLAREA_LICENSE.txt.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/*
 * Spell Checker Plugin for TYPO3 htmlArea RTE
 */
HTMLArea.SpellChecker = Ext.extend(HTMLArea.Plugin, {
	/*
	 * This function gets called by the class constructor
	 */
	configurePlugin: function(editor) {
		this.pageTSconfiguration = this.editorConfiguration.buttons.spellcheck;
		this.contentISOLanguage = this.pageTSconfiguration.contentISOLanguage;
		this.contentCharset = this.pageTSconfiguration.contentCharset;
		this.spellCheckerMode = this.pageTSconfiguration.spellCheckerMode;
		this.enablePersonalDicts = this.pageTSconfiguration.enablePersonalDicts;
		this.userUid = this.editorConfiguration.userUid;
		this.defaultDictionary = (this.pageTSconfiguration.dictionaries && this.pageTSconfiguration.dictionaries[this.contentISOLanguage] && this.pageTSconfiguration.dictionaries[this.contentISOLanguage].defaultValue) ? this.pageTSconfiguration.dictionaries[this.contentISOLanguage].defaultValue : '';
		this.restrictToDictionaries = (this.pageTSconfiguration.dictionaries && this.pageTSconfiguration.dictionaries.restrictToItems) ? this.pageTSconfiguration.dictionaries.restrictToItems : '';
		/*
		 * Registering plugin "About" information
		 */
		var pluginInformation = {
			version		: '3.2',
			developer	: 'Mihai Bazon & Stanislas Rolland',
			developerUrl	: 'http://www.sjbr.ca/',
			copyrightOwner	: 'Mihai Bazon & Stanislas Rolland',
			sponsor		: 'American Bible Society & SJBR',
			sponsorUrl	: 'http://www.sjbr.ca/',
			license		: 'GPL'
		};
		this.registerPluginInformation(pluginInformation);
		/*
		 * Registering the button
		 */
		var buttonId = 'SpellCheck';
		var buttonConfiguration = {
			id		: buttonId,
			tooltip		: this.localize('SC-spell-check'),
			iconCls		: 'htmlarea-action-spell-check',
			action		: 'onButtonPress',
			dialog		: true
		};
		this.registerButton(buttonConfiguration);
	},
	/*
	 * Sets of default configuration values for dialogue form fields
	 */
	configDefaults: {
		combo: {
			editable: true,
			selectOnFocus: true,
			typeAhead: true,
			triggerAction: 'all',
			forceSelection: true,
			mode: 'local',
			valueField: 'value',
			displayField: 'text',
			helpIcon: true,
			tpl: '<tpl for="."><div ext:qtip="{value}" style="text-align:left;font-size:11px;" class="x-combo-list-item">{text}</div></tpl>'
		}
	},
	/*
	 * This function gets called when the button was pressed.
	 *
	 * @param	object		editor: the editor instance
	 * @param	string		id: the button id or the key
	 *
	 * @return	boolean		false if action is completed
	 */
	onButtonPress: function (editor, id, target) {
			// Could be a button or its hotkey
		var buttonId = this.translateHotKey(id);
		buttonId = buttonId ? buttonId : id;
			// Open dialogue window
		this.openDialogue(
			buttonId,
			'Spell Checker',
			this.getWindowDimensions(
				{
					width: 740,
					height: 600
				},
				buttonId
			)
		);
		return false;
	},
	/*
	 * Open the dialogue window
	 *
	 * @param	string		buttonId: the button id
	 * @param	string		title: the window title
	 * @param	object		dimensions: the opening dimensions of the window
	 *
	 * @return	void
	 */
	openDialogue: function (buttonId, title, dimensions) {
		this.dialog = new Ext.Window({
			title: this.localize(title),
			cls: 'htmlarea-window',
			bodyCssClass: 'spell-check',
			border: false,
			width: dimensions.width,
			height: Ext.isIE ? dimensions.height - 50 : 'auto',
			iconCls: this.getButton(buttonId).iconCls,
			listeners: {
				afterrender: {
					fn: this.onWindowAfterRender,
					scope: this
				},
				resize: {
					fn: this.onWindowResize
				},
				close: {
					fn: this.onClose,
					scope: this
				}
			},
			items: [{
						// The hidden form
					xtype: 'form',
					method: 'POST',
					itemId: 'spell-check-form',
					url: this.pageTSconfiguration.path,
					hidden: true,
					standardSubmit: true,
					items: [{
							xtype: 'hidden',
							name: 'editorId',
							value: this.editor.editorId
						},{
							xtype: 'hidden',
							itemId: 'content',
							name: 'content',
							value: this.editor.getHTML()
						},{
							xtype: 'hidden',
							itemId: 'dictionary',
							name: 'dictionary',
							value: this.defaultDictionary ? this.defaultDictionary : this.contentISOLanguage
						},{
							xtype: 'hidden',
							name: 'pspell_charset',
							value: this.contentCharset
						},{
							xtype: 'hidden',
							name: 'pspell_mode',
							value: this.spellCheckerMode
						},{
							xtype: 'hidden',
							name: 'userUid',
							value: this.userUid
						},{
							xtype: 'hidden',
							name:'enablePersonalDicts',
							value: this.enablePersonalDicts
						},{
							xtype: 'hidden',
							name:'restrictToDictionaries',
							value: this.restrictToDictionaries
						}
					]
				},{
						// The iframe
					xtype: 'box',
					itemId: 'spell-check-iframe',
					width: dimensions.width - 225,
					autoEl: {
						name: 'contentframe',
						tag: 'iframe',
						cls: 'contentframe',
						src: Ext.isGecko ? 'javascript:void(0);' : HTMLArea.editorUrl + 'popups/blank.html'
					}
				},{
						// The original word
					xtype: 'fieldset',
					title: this.localize('Original word'),
					cls: 'controls',
					labelWidth: 0,
					defaults: {
						hideLabel: true,
						disabled: true,
						minWidth: 160
					},
					items: [{
							xtype: 'textfield',
							itemId: 'word',
							disabled: false
						},
						this.buildButtonConfig('Revert', this.onRevertClick)
					]
				},{
						// The replacement word and actions
					xtype: 'fieldset',
					title: this.localize('Replacement'),
					cls: 'controls',
					defaultType: 'button',
					labelWidth: 0,
					defaults: {
						hideLabel: true,
						disabled: true,
						minWidth: 160
					},
					items: [{
							xtype: 'textfield',
							disabled: false,
							width: 160,
							itemId: 'replacement'
						},{
							itemId: 'replace',
							text: this.localize('Replace'),
							listeners: {
								click: {
									fn: this.onReplaceClick,
									scope: this
								}
							}
						},{
							itemId: 'replaceAll',
							text: this.localize('Replace all'),
							listeners: {
								click: {
									fn: this.onReplaceAllClick,
									scope: this
								}
							}
						},{
							itemId: 'ignore',
							text: this.localize('Ignore'),
							listeners: {
								click: {
									fn: this.onIgnoreClick,
									scope: this
								}
							}
						},{
							itemId: 'ignoreAll',
							text: this.localize('Ignore all'),
							listeners: {
								click: {
									fn: this.onIgnoreAllClick,
									scope: this
								}
							}
						},{
							itemId: 'learn',
							text: this.localize('Learn'),
							hidden: !this.enablePersonalDicts,
							listeners: {
								click: {
									fn: this.onLearnClick,
									scope: this
								}
							}
						}
					]
				},{
						// The suggestions
					xtype: 'fieldset',
					title: this.localize('Suggestions'),
					cls: 'controls',
					labelWidth: 0,
					defaults: {
						hideLabel: true,
						minWidth: 160
					},
					items: [
						Ext.apply({
							xtype: 'combo',
							itemId: 'suggestions',
							store: new Ext.data.ArrayStore({
								autoDestroy:  true,
								fields: [{name: 'text'}, {name: 'value'}],
								data: []
							}),
							listeners: {
								select: {
									fn: this.onSuggestionSelect,
									scope: this
								}
							}
						}, this.configDefaults['combo'])
					]
				},{
						// The dictionaries
					xtype: 'fieldset',
					title: this.localize('Dictionary'),
					cls: 'controls',
					defaultType: 'button',
					labelWidth: 0,
					defaults: {
						hideLabel: true,
						disabled: true,
						minWidth: 160
					},
					items: [
						Ext.apply({
							xtype: 'combo',
							itemId: 'dictionaries',
							disabled: false,
							store: new Ext.data.ArrayStore({
								autoDestroy:  true,
								fields: [{name: 'text'}, {name: 'value'}],
								data: []
							}),
							listeners: {
								select: {
									fn: this.onDictionarySelect,
									scope: this
								}
							}
						}, this.configDefaults['combo']),
						{
							itemId: 'recheck',
							text: this.localize('Re-check'),
							listeners: {
								click: {
									fn: this.onRecheckClick,
									scope: this
								}
							}
						}
					]
				}
			],
			bbar: {
				defaults: {
					disabled: true
				},
				items: [
					{
						xtype: 'tbtext',
						itemId: 'spell-check-status',
						text: this.localize('Please wait. Calling spell checker.'),
						cls: 'status-wait',
						disabled: false
					},
					'->',
					this.buildButtonConfig('OK', this.onOK),
					this.buildButtonConfig('Info', this.onInfoClick),
					this.buildButtonConfig('Cancel', this.onCancel)
				]
			}
		});
		this.show();
	},
	/*
	 * Handler invoked after the window has been rendered
	 */
	onWindowAfterRender: function () {
			// True when some word has been modified
		this.modified = false;
			// Array of words to add to the personal dictionary
		this.addToPersonalDictionary = [];
			// List of word pairs to add to replacement list of the personal dictionary
		this.addToReplacementList = [];
			// Initial submit
		this.dialog.getComponent('spell-check-form').getForm().getEl().set({
			target: 'contentframe',
			'accept-charset': this.contentCharset.toUpperCase()
		});
		this.dialog.getComponent('spell-check-form').getForm().submit();
		this.status = this.dialog.getBottomToolbar().getComponent('spell-check-status');
		this.statusIconClass = 'status-wait';
	},
	/*
	 * Handler invoked after the window is resized
	 */
	onWindowResize: function (window, width, height) {
		var frame = window.getComponent('spell-check-iframe').getEl();
		if (frame) {
			frame.setSize(width - 225, height - 75);
		}
	},
	/*
	 * Handler invoked when the OK button is pressed
	 */
	onOK: function () {
		if (this.modified) {
			this.editor.setHTML(this.cleanDocument(false));
		}
			// Post additions to the Aspell personal dictionary
		if ((this.addToPersonalDictionary.length || this.addToReplacementList.length) && this.enablePersonalDicts) {
			var data = {
				cmd: 'learn',
				enablePersonalDicts: this.enablePersonalDicts,
				userUid: this.userUid,
				dictionary: this.dialog.find('itemId', 'dictionary')[0].getValue(),
				pspell_charset: this.contentCharset,
				pspell_mode: this.spellCheckerMode
			};
			Ext.each(this.addToPersonalDictionary, function (word, index) {
				data['to_p_dict[' + index + ']'] = word;
			});
			Ext.each(this.addToReplacementList, function (replacement, index) {
				data['to_r_list[' + index + '][0]'] = replacement[0];
				data['to_r_list[' + index + '][1]'] = replacement[1];
			});
			this.postData(this.pageTSconfiguration.path, data);
		}
		this.close();
		return false;
	},
	/*
	 * Handler invoked when the Cancel button is pressed
	 */
	onCancel: function () {
		if (this.modified) {
			TYPO3.Dialog.QuestionDialog({
				title: this.getButton('SpellCheck').tooltip.title,
				msg: this.localize('QUIT_CONFIRMATION'),
				fn: function (button) {
					if (button == 'yes') {
						this.close();
					}
				},
				scope: this
			});
			return false;
		} else {
			return HTMLArea.SpellChecker.superclass.onCancel.call(this);
		}
	},
	/*
	 * Set icon in statusbar
	 *
	 * @param	string		iconCls: class to be assigned to the statusbar text
	 *
	 * @return	void
	 */
	setStatusIconClass: function (iconCls) {
		this.status.removeClass(this.statusIconClass);
		this.statusIconClass = iconCls;
		this.status.addClass(this.statusIconClass);
	},
	/*
	 * Clean away span elements from the text before leaving or re-submitting
	 *
	 * @param	boolean		leaveFixed: if true, span elements of corrected words will be left in the text (re-submit case)
	 *
	 * @return	string		cleaned-up html
	 */
	cleanDocument: function (leaveFixed) {
		var iframeDocument = this.dialog.getComponent('spell-check-iframe').getEl().dom.contentWindow.document;
		Ext.each(this.misspelledWords.concat(this.correctedWords), function (element) {
			element.onclick = null;
			element.onmouseover = null;
			element.onmouseout = null;
			if (!leaveFixed || !HTMLArea.DOM.hasClass(element, 'htmlarea-spellcheck-fixed')) {
				element.parentNode.insertBefore(element.firstChild, element);
				element.parentNode.removeChild(element);
			} else {
				HTMLArea.DOM.removeClass(element, 'htmlarea-spellcheck-error');
				HTMLArea.DOM.removeClass(element, 'htmlarea-spellcheck-same');
				HTMLArea.DOM.removeClass(element, 'htmlarea-spellcheck-current');
			}
		}, this);
			// Cleanup event handlers on links
		Ext.each(iframeDocument.getElementsByTagName('a'), function (link) {
			link.onclick = null;
		}, this);
		return this.editor.iframe.htmlRenderer.render(iframeDocument.body, false);
	},
	/*
	 * Handler invoked when the response from the server has finished loading
	 */
	spellCheckComplete: function () {
		var contentWindow = this.dialog.getComponent('spell-check-iframe').getEl().dom.contentWindow;
		this.currentElement = null;
			// Array of misspelled words
		this.misspelledWords = [];
			// Array of corrected words
		this.correctedWords = [];
			// Object containing array of occurrences of each misspelled word
		this.allWords = {};
			// Suggested words
		this.suggestedWords = contentWindow.suggestedWords;
			// Set status
		this.status.setText(this.localize('statusBarReady'));
		this.setStatusIconClass('status-ready');
			// Process all misspelled words
		var id = 0;
		var self = this;
		Ext.each(contentWindow.document.getElementsByTagName('span'), function (span) {
			if (HTMLArea.DOM.hasClass(span, 'htmlarea-spellcheck-error')) {
				this.misspelledWords.push(span);
				span.onclick = function (event) { self.setCurrentWord(this, false); };
				span.onmouseover = function (event) { HTMLArea.DOM.addClass(this, 'htmlarea-spellcheck-hover'); };
				span.onmouseout = function (event) { HTMLArea.DOM.removeClass(this, 'htmlarea-spellcheck-hover'); };
				span.htmlareaId = id++;
				span.htmlareaOriginalWord = span.firstChild.data;
				span.htmlareaFixed = false;
				if (typeof(this.allWords[span.htmlareaOriginalWord]) == 'undefined') {
					this.allWords[span.htmlareaOriginalWord] = [];
				}
				this.allWords[span.htmlareaOriginalWord].push(span);
			} else if (HTMLArea.DOM.hasClass(span, 'htmlarea-spellcheck-fixed')) {
				this.correctedWords.push(span);
			}
		}, this);
			// Do not open links in the iframe
		Ext.each(contentWindow.document.getElementsByTagName('a'), function (link) {
			link.onclick = function (event) { return false; };
		}, this);
			// Enable buttons
		Ext.each(this.dialog.findByType('button'), function (button) {
			button.setDisabled(false);
		});
		Ext.each(this.dialog.getBottomToolbar().findByType('button'), function (button) {
			button.setDisabled(false);
		});
		if (this.misspelledWords.length) {
				// Set current element to first misspelled word
			this.currentElement = this.misspelledWords[0];
			this.setCurrentWord(this.currentElement, true);
				// Populate the dictionaries combo
			var dictionaries = contentWindow.dictionaries.split(/,/);
			if (dictionaries.length) {
				var select = this.dialog.find('itemId', 'dictionaries')[0];
				var store = select.getStore();
				store.removeAll();
				Ext.each(dictionaries, function (dictionary) {
					store.add(new store.recordType({
						text: dictionary,
						value: dictionary
					}));
				});
				select.setValue(contentWindow.selectedDictionary);
				var selectedIndex = store.find('value', contentWindow.selectedDictionary);
				select.fireEvent('select', select, store.getAt(selectedIndex), selectedIndex);
			}
		} else {
			if (!this.modified) {
				TYPO3.Dialog.InformationDialog({
					title: this.getButton('SpellCheck').tooltip.title,
					msg: this.localize('NO_ERRORS_CLOSING'),
					fn: this.onOK,
					scope: this
				});
			} else {
				TYPO3.Dialog.InformationDialog({
					title: this.getButton('SpellCheck').tooltip.title,
					msg: this.localize('NO_ERRORS')
				});
			}
			return false;
		}
	},
	/*
	 * Get absolute position of an element inside the iframe
	 */
	getAbsolutePosition: function (element) {
		var position = {
			x: element.offsetLeft,
			y: element.offsetTop
		};
		if (element.offsetParent) {
			var tmp = this.getAbsolutePosition(element.offsetParent);
			position.x += tmp.x;
			position.y += tmp.y;
		}
		return position;
	},
	/*
	 * Update current word
	 */
	setCurrentWord: function (element, scroll) {
			// Scroll element into view
		if (scroll) {
			var frame = this.dialog.getComponent('spell-check-iframe').getEl().dom;
			var position = this.getAbsolutePosition(element);
			var frameSize = {
				x: frame.offsetWidth - 4,
				y: frame.offsetHeight - 4
			};
			position.x -= Math.round(frameSize.x/2);
			if (position.x < 0) {
				position.x = 0;
			}
			position.y -= Math.round(frameSize.y/2);
			if (position.y < 0) {
				position.y = 0;
			}
			frame.contentWindow.scrollTo(position.x, position.y);
		}
			// De-highlight all occurrences of current word
		if (this.currentElement) {
			HTMLArea.DOM.removeClass(this.currentElement, 'htmlarea-spellcheck-current');
			Ext.each(this.allWords[this.currentElement.htmlareaOriginalWord], function (word) {
				HTMLArea.DOM.removeClass(word, 'htmlarea-spellcheck-same');
			});
		}
			// Highlight all occurrences of new current word
		this.currentElement = element;
		HTMLArea.DOM.addClass(this.currentElement, 'htmlarea-spellcheck-current');
		var occurrences = this.allWords[this.currentElement.htmlareaOriginalWord];
		Ext.each(occurrences, function (word) {
			if (word != this.currentElement) {
				HTMLArea.DOM.addClass(word, 'htmlarea-spellcheck-same');
			}
		}, this);
		this.dialog.find('itemId', 'replaceAll')[0].setDisabled(occurrences.length <= 1);
		this.dialog.find('itemId', 'ignoreAll')[0].setDisabled(occurrences.length <= 1);
			// Display status
		var txt;
		var txt2;
		if (occurrences.length == 1) {
			txt = this.localize('One occurrence');
			txt2 = this.localize('was found.');
		} else if (occurrences.length == 2) {
			txt = this.localize('Two occurrences');
			txt2 = this.localize('were found.');
		} else {
			txt = occurrences.length + ' ' + this.localize('occurrences');
			txt2 = this.localize('were found.');
		}
		this.status.setText(txt + ' ' + this.localize('of the word') + ' "<b>' + this.currentElement.htmlareaOriginalWord + '</b>" ' + txt2);
		this.setStatusIconClass('status-info');
			// Update suggestions
		var suggestions = this.suggestedWords[this.currentElement.htmlareaOriginalWord];
		if (suggestions) {
			suggestions = suggestions.split(/,/);
		} else {
			suggestions = [];
		}
		var select = this.dialog.find('itemId', 'suggestions')[0];
		var store = select.getStore();
		store.removeAll();
		Ext.each(suggestions, function (suggestion) {
			store.add(new store.recordType({
				text: suggestion,
				value: suggestion
			}));
		});
			// Update the current word
		this.dialog.find('itemId', 'word')[0].setValue(this.currentElement.htmlareaOriginalWord);
		if (suggestions.length > 0) {
			select.setValue(store.getAt(0).get('value'));
			select.fireEvent('select', select, store.getAt(0), 0);
		} else {
			this.dialog.find('itemId', 'replacement')[0].setValue(this.currentElement.innerHTML);
		}
		return false;
	},
	/*
	 * Handler invoked when the mouse moves over a misspelled word
	 */
	onWordMouseOver: function (event, element) {
		HTMLArea.DOM.addClass(element, 'htmlarea-spellcheck-hover');
	},
	/*
	 * Handler invoked when the mouse moves out of a misspelled word
	 */
	onWordMouseOut: function (event, element) {
		HTMLArea.DOM.removeClass(element, 'htmlarea-spellcheck-hover');
	},
	/*
	 * Handler invoked when a suggestion is selected
	 */
	onSuggestionSelect: function (select, record, index) {
		this.dialog.find('itemId', 'replacement')[0].setValue(record.get('value'));
	},
	/*
	 * Handler invoked when a dictionary is selected
	 */
	onDictionarySelect: function (select, record, index) {
		this.dialog.find('itemId', 'dictionary')[0].setValue(record.get('value'));
	},
	/*
	 * Handler invoked when the Revert button is clicked
	 */
	onRevertClick: function () {
		this.dialog.find('itemId', 'replacement')[0].setValue(this.currentElement.htmlareaOriginalWord);
		this.replaceWord(this.currentElement);
		HTMLArea.DOM.removeClass(this.currentElement, 'htmlarea-spellcheck-fixed');
		HTMLArea.DOM.addClass(this.currentElement, 'htmlarea-spellcheck-error');
		HTMLArea.DOM.addClass(this.currentElement, 'htmlarea-spellcheck-current');
		return false;
	},
	/*
	 * Replace the word contained in the element
	 */
	replaceWord: function (element) {
		HTMLArea.DOM.removeClass(element, 'htmlarea-spellcheck-hover');
		HTMLArea.DOM.addClass(element, 'htmlarea-spellcheck-fixed');
		element.htmlareaFixed = true;
		var replacement = this.dialog.find('itemId', 'replacement')[0].getValue();
		if (element.innerHTML != replacement) {
			this.addToReplacementList.push([element.innerHTML, replacement]);
			element.innerHTML = replacement;
			this.modified = true;
		}
	},
	/*
	 * Handler invoked when the Replace button is clicked
	 */
	onReplaceClick: function () {
		this.replaceWord(this.currentElement);
		var start = this.currentElement.htmlareaId;
		var index = start;
		do {
			++index;
			if (index == this.misspelledWords.length) {
				index = 0;
			}
		} while (index != start && this.misspelledWords[index].htmlareaFixed);
		if (index == start) {
			index = 0;
			TYPO3.Dialog.InformationDialog({
				title: this.getButton('SpellCheck').tooltip.title,
				msg: this.localize('Finished list of mispelled words')
			});
		}
		this.setCurrentWord(this.misspelledWords[index], true);
		return false;
	},
	/*
	 * Handler invoked when the Replace all button is clicked
	 */
	onReplaceAllClick: function () {
		Ext.each(this.allWords[this.currentElement.htmlareaOriginalWord], function (element) {
			if (element != this.currentElement) {
				this.replaceWord(element);
			}
		}, this);
			// Replace current element last, so that we jump to the next word
		return this.onReplaceClick();
	},
	/*
	 * Handler invoked when the Ignore button is clicked
	 */
	onIgnoreClick: function () {
		this.dialog.find('itemId', 'replacement')[0].setValue(this.currentElement.htmlareaOriginalWord);
		return this.onReplaceClick();
	},
	/*
	 * Handler invoked when the Ignore all button is clicked
	 */
	onIgnoreAllClick: function () {
		this.dialog.find('itemId', 'replacement')[0].setValue(this.currentElement.htmlareaOriginalWord);
		return this.onReplaceAllClick();
	},
	/*
	 * Handler invoked when the Learn button is clicked
	 */
	onLearnClick: function () {
		this.addToPersonalDictionary.push(this.currentElement.htmlareaOriginalWord);
		return this.onIgnoreAllClick();
	},
	/*
	 * Handler invoked when the Re-check button is clicked
	 */
	onRecheckClick: function () {
			// Disable buttons
		Ext.each(this.dialog.findByType('button'), function (button) {
			button.setDisabled(true);
		});
		Ext.each(this.dialog.getBottomToolbar().findByType('button'), function (button) {
			button.setDisabled(true);
		});
		this.status.setText(this.localize('Please wait: changing dictionary to') + ': "' + this.dialog.find('itemId', 'dictionary')[0].getValue() + '".');
		this.setStatusIconClass('status-wait');
		this.dialog.find('itemId', 'content')[0].setValue(this.cleanDocument(true));
		this.dialog.getComponent('spell-check-form').getForm().submit();
	},
	/*
	 * Handler invoked when the Info button is clicked
	 */
	onInfoClick: function () {
		var info = this.dialog.getComponent('spell-check-iframe').getEl().dom.contentWindow.spellcheckInfo;
		if (!info) {
			TYPO3.Dialog.InformationDialog({
				title: this.getButton('SpellCheck').tooltip.title,
				msg: this.localize('No information available')
			});
		} else {
			var txt = '';
			Ext.iterate(info, function (key, value) {
				txt += (txt ? '<br />' : '') + this.localize(key) + ': ' + value;
			}, this);
			txt += ' ' + this.localize('seconds');
			TYPO3.Dialog.InformationDialog({
				title: this.localize('Document information'),
				msg: txt
			});
		}
		return false;
	}
});
