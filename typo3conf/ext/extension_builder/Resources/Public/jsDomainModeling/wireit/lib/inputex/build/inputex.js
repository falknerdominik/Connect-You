/* 
Distributed under the MIT License :
Visit http://javascript.neyric.com/inputex for more informations

Copyright (c) 2007-2008, Eric Abouaf <neyric at via.ecp.fr>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
/** 
 * @fileoverview Main inputEx file. Define inputEx namespace in YAHOO.inputEx
 */
(function() {
 
 var lang = YAHOO.lang;
 
/**
 * Build a field from an object like: { type: 'color' or fieldClass: inputEx.ColorField, inputParams: {} }<br />
 * The inputParams property is the object that will be passed as the <code>options</code> parameter to the field class constructor.<br />
 * If the neither type or fieldClass are found, it uses inputEx.StringField
 * @name inputEx
 * @namespace The inputEx global namespace object.
 * @static
 * @param {Object} fieldOptions
 * @return {inputEx.Field} Created field instance
 */
YAHOO.inputEx = function(fieldOptions) {
   var fieldClass = null;
	if(fieldOptions.type) {
	   fieldClass = YAHOO.inputEx.getFieldClass(fieldOptions.type);
	   if(fieldClass === null) fieldClass = YAHOO.inputEx.StringField;
	}
	else {
	   fieldClass = fieldOptions.fieldClass ? fieldOptions.fieldClass : inputEx.StringField;
	}

   // Instanciate the field
   var inputInstance = new fieldClass(fieldOptions.inputParams);

   // Add the flatten attribute if present in the params
   /*if(fieldOptions.flatten) {
      inputInstance._flatten = true;
   }*/
	  
   return inputInstance;
};

/**
 * Test de documentation inputEx
 */
var inputEx = YAHOO.inputEx;

lang.augmentObject(inputEx, 
/**
 * @scope inputEx
 */   
{
   
   VERSION: "0.2.1",
   
   /**
    * Url to the spacer image. This url schould be changed according to your project directories
    * @type String
    */
   spacerUrl: "images/space.gif", // 1x1 px
   
   /**
    * Field empty state constant
    * @type String
    */
   stateEmpty: 'empty',
   
   /**
    * Field required state constant
    * @type String
    */
   stateRequired: 'required',
   
   /**
    * Field valid state constant
    * @type String
    */
   stateValid: 'valid',
   
   /**
    * Field invalid state constant
    * @type String
    */
   stateInvalid: 'invalid',
   
   /**
    * Associative array containing field messages
    */
   messages: {
   	required: "This field is required",
   	invalid: "This field is invalid",
   	valid: "This field is valid",
   	defaultDateFormat: "m/d/Y",
   	months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
   },
   
   /**
    * @namespace inputEx widget namespace
    */
   widget: {},
   
   /**
    * Associative array containing common regular expressions
    */
   regexps: {
      email: /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
      url: /^(http|https):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(([0-9]{1,5})?\/.*)?$/i,
      password: /^[0-9a-zA-Z\x20-\x7E]*$/
   },
   
   /**
    * Hash between inputEx types and classes (ex: <code>inputEx.typeClasses.color = inputEx.ColorField</code>)<br />
    * Please register the types with the <code>registerType</code> method
    */
   typeClasses: {},
   
   /**
    * When you create a new inputEx Field Class, you can register it to give it a simple type.
    * ex:   inputEx.registerType("color", inputEx.ColorField);
    * @static
    */
   registerType: function(type, field) {
      if(!lang.isString(type)) {
         throw new Error("inputEx.registerType: first argument must be a string");
      }
      if(!lang.isFunction(field)) {
         throw new Error("inputEx.registerType: second argument must be a function");
      }
      this.typeClasses[type] = field;
   },
   
   /**
    * Returns the class for the given type
    * ex: inputEx.getFieldClass("color") returns inputEx.ColorField
    * @static
    * @param {String} type String type of the field
    */
   getFieldClass: function(type) {
      return lang.isFunction(this.typeClasses[type]) ? this.typeClasses[type] : null;
   },
   
   /**
    * Get the inputex type for the given class (ex: <code>inputEx.getType(inputEx.ColorField)</code> returns "color")
    * @static
    * @param {inputEx.Field} FieldClass An inputEx.Field or derivated class
    * @return {String} returns the inputEx type string or <code>null</code>
    */
   getType: function(FieldClass) {
      for(var type in this.typeClasses) {
         if(this.typeClasses.hasOwnProperty(type) ) {
            if(this.typeClasses[type] == FieldClass) {
               return type;
            }
         }
      }
      return null;
   },
   
   /**
    * Kept for backward compatibility
    * @alias inputEx
    * @param {Object} fieldOptions
    * @return {inputEx.Field} Created field instance
    */
   buildField: function(fieldOptions) {      
      return inputEx(fieldOptions);
   },
   
   /**
    * Helper function to set DOM node attributes and style attributes.
    * @static
    * @param {HTMLElement} el The element to set attributes to
    * @param {Object} domAttributes An object containing key/value pairs to set as node attributes (ex: {id: 'myElement', className: 'myCssClass', ...})
    * @param {Object} styleAttributes Same thing for style attributes. Please use camelCase for style attributes (ex: backgroundColor for 'background-color')
    */
   sn: function(el,domAttributes,styleAttributes){
      if(!el) { return; }

      if(domAttributes){
         for(var i in domAttributes){
            var domAttribute = domAttributes[i];
            if( lang.isFunction(domAttribute) ){
               continue;
            }
            if(i=="className"){
               i="class";
               el.className=domAttribute;
            }
            if(domAttribute!==el.getAttribute(i)){
               try{
                  if(domAttribute===false){
                     el.removeAttribute(i);
                  }else{
                     el.setAttribute(i,domAttribute);
                  }
               }
               catch(err){
                  //console.log("WARNING: WireIt.sn failed for "+el.tagName+", attr "+i+", val "+domAttribute);
               }
            }
         }
      }

      if(styleAttributes){
         for(var i in styleAttributes){
            if( lang.isFunction(styleAttributes[i]) ){
               continue;
            }
            if(el.style[i]!=styleAttributes[i]){
               el.style[i]=styleAttributes[i];
            }
         }
      }
   },


   /**
    * Helper function to create a DOM node. (wrapps the document.createElement tag and the inputEx.sn functions)
    * @static
    * @param {String} tag The tagName to create (ex: 'div', 'a', ...)
    * @param {Object} [domAttributes] see inputEx.sn
    * @param {Object} [styleAttributes] see inputEx.sn
    * @param {String} [innerHTML] The html string to append into the created element
    * @return {HTMLElement} The created node
    */
   cn: function(tag, domAttributes, styleAttributes, innerHTML) {
        if (tag == 'input' && YAHOO.env.ua.ie) { //only limit to input tag that has no tag body
            var strDom = '<' + tag;
            if (domAttributes!=='undefined'){
                for (var k in domAttributes){
                    strDom += ' ' + k + '="' + domAttributes[k] + '"';
                }
            }
            strDom += '/' + '>';
            return document.createElement(strDom);

        } else {
            var el = document.createElement(tag);
            this.sn(el, domAttributes, styleAttributes);
            if (innerHTML) {
                el.innerHTML = innerHTML;
            }
            return el;
        }
    },
   
   
   /**
    * Find the position of the given element. (This method is not available in IE 6)
    * @static
    * @param {Object} el Value to search
    * @param {Array} arr The array to search
    * @return {number} Element position, -1 if not found
    */
   indexOf: function(el,arr) {
      var l=arr.length,i;
      for(i = 0 ;i < l ; i++) {
         if(arr[i] == el) return i;
      }
      return -1;
   },

   
   /**
    * Create a new array without the null or undefined values
    * @static
    * @param {Array} arr The array to compact
    * @return {Array} The new array
    */
   compactArray: function(arr) {
      var n = [], l=arr.length,i;
      for(i = 0 ; i < l ; i++) {
         if( !lang.isNull(arr[i]) && !lang.isUndefined(arr[i]) ) {
            n.push(arr[i]);
         }
      }
      return n;
   }
   
});

})();


// The main inputEx namespace shortcut
var inputEx = YAHOO.inputEx;
(function() {
   
   var inputEx = YAHOO.inputEx, lang = YAHOO.lang;
/**
 * Contains the various visualization methods
 */
inputEx.visus = {
  
  /**
   * Use the trimpath-template engine
   * see http://code.google.com/p/trimpath/wiki/JavaScriptTemplates for syntax
   * options = {visuType: 'trimpath', template: "String template"}
   */
  trimpath: function(options, data) {
      if(!TrimPath) { alert('TrimPath is not on the page. Please load inputex/lib/trimpath-template.js'); return; }
      var tpl = TrimPath.parseTemplate(options.template);
     	var ret = tpl.process(data);
     	return ret;
  },
  
  /**
   * Use a rendering function
   * options = {visuType: 'func', func: function(data) { ...code here...} }
   */
  "func": function(options, data) {
     return options.func(data);
  },
  
  /**
   * Use YAHOO.lang.dump
   * options = {visuType: 'dump'}
   */
  dump: function(options, data) {
     return lang.dump(data);
  }
   
};

/**
 * Render 'data' using a visualization function described by 'visuOptions'
 * @static
 * @param {Object} visuOptions The visu parameters {visuType: 'myType', ...args...}
 * @param {Object} data The input data to send to the template
 * @param {HTMLElement || String} parentEl optional Set the result as content of parentEl
 * @return {HTMLElement || String} Either the inserted HTMLElement or the String set to parentEl.innerHTML
 */
inputEx.renderVisu = function(visuOptions,data, parentEl) {
   
   var opts = visuOptions || {};
   var visuType = opts.visuType || 'dump';
   
   if( !inputEx.visus.hasOwnProperty(visuType) ) {
      throw new Error("inputEx: no visu for visuType: "+visuType);
   }
   
   var f = inputEx.visus[visuType];
   if( !lang.isFunction(f) ) {
      throw new Error("inputEx: no visu for visuType: "+visuType);
   }
   
   var v = null;
   try {
      v = f(opts,data);
   }
   catch(ex) {
      throw new Error("inputEx: error while running visu "+visuType+" : "+ex.message);
      return;
   }
   
   // Get the node
   var node = null;
   if(parentEl) {
      if(lang.isString(parentEl)) {
         node = YAHOO.util.Dom.get(parentEl);
      }
      else {
         node = parentEl;
      }
   }
   
   // Insert it
   if(node) {
      if(YAHOO.lang.isObject(v) && v.tagName ) {
         node.innerHTML = "";
         node.appendChild(v);
      }
      else {
         node.innerHTML = v;
      }
   }
   
   return v;
};

})();(function() {
   var inputEx = YAHOO.inputEx, lang = YAHOO.lang;
 
/**
 * Namespace containing utility functions for conversion between inputEx JSON format and JSON Schema
 *
 * based on "Json Schema Proposal Working Draft":
 * http://groups.google.com/group/json-schema/web/json-schema-proposal-working-draft
 * The proposal is still under discussion and the implementation is very minimalist.
 *
 *
 * TODO:
 *    - we should provide a lot of json schema examples and instances that should/should not validate
 *    - use the $ref (async calls => provide callbacks to methods)
 *    - Inheritance
 *
 * Limitations:
 *    - ??? Please do not trust inputEx: the getValue may return a value which do NOT validate the schema (provide an example ?)
 *    - no tuple typing for arrays
 *    - no "Union type definition"
 *
 * @class JsonSchema
 * @static
 * @namespace inputEx
 */
inputEx.JsonSchema = {
   
   /**
    * Convert the inputEx JSON fields to a JSON schema
    */
   inputExToSchema: function(inputExJson) {
      // TODO :P
   }

};


/**
 * 
 * @class Builder
 * @namespace inputEx.JsonSchema
 */
inputEx.JsonSchema.Builder = function(options) {
	
	var options = options || {};
	this.options  = options; 
	
	/**
	 * specify how other schema properties are mapped to inputParam properties
	 */
	this.schemaToParamMap = options.schemaToParamMap || {
		'title':'label',
		'description':'description',
		'_inputex':null	// null value means copy child key/value pairs into inputParams directly
	};
	
	/**
	 * @property referenceResolver
	 */
	this.referenceResolver = options.referenceResolver || null;
	
	/**
	 * options to be applied to inputParams unless already specified
	 * @property defaultOptions
	 */
	this.defaultOptions = options.defaultOptions || {};	
	
	/**
	 * key is reference, value is schema
	 * @property schemaIdentifierMap
	 */
	this.schemaIdentifierMap = options.schemaIdentifierMap || {};
};

inputEx.JsonSchema.Builder.prototype = {
   
   /** 
 	 * return a schema based on the reference value
 	 * default is to look up in map
 	 * @method defaultReferenceResolver
    */
	defaultReferenceResolver:function(reference) {
		return this.schemaIdentifierMap[reference] || null;
	},
	
	/**
	 * Convert a JSON schema to inputEx JSON
	 * @method schemaToInputEx
	 * @param {JSONSchema} p
	 */
	schemaToInputEx:function(p, propertyName) {
	
	   var fieldDef = {inputParams: { label: propertyName, name: propertyName} };
	   var schemaMap = this.schemaToParamMap;
    	var referencedSchema = p["$ref"]; 
	    
	    if(referencedSchema){
	    	var new_schema = null;
	    	if(this.referenceResolver) {
		       new_schema = this.referenceResolver(referencedSchema);
		    }
	    	if(new_schema === null) {
	    		new_schema = this.defaultReferenceResolver(referencedSchema);
	    	}
	    	if(new_schema === null) {
	    		throw "Schema for property :"+propertyName+" $references "+referencedSchema+', not found';
	    	}
	    	// copy options into new schema, for example we can overide presentation
	    	// of a defined schema depending on where it is used
	    	new_schema = lang.merge(new_schema);	// copy new_schema
	    	
	    	for(var pk in p) {
	    		if(p.hasOwnProperty(pk) && lang.isUndefined(new_schema[pk]) && pk != '$ref') {
	    			new_schema[pk] = p[pk];
	    		}
	    	}
	    	p = new_schema;
	    }

	    if(!p.optional) {
	    	fieldDef.inputParams.required = true;
	    }

	    for(var key in schemaMap) {
	        if(schemaMap.hasOwnProperty(key)) {
	      	  var paramName = schemaMap[key]; 
	      	  var v = p[key];
	      	  if(!lang.isUndefined(v)) {
	      		  if(paramName === null) {
	      			  // copy / merge values from v directly into inputParams
	      			  if(lang.isObject(v)) {
	      				  // v must be an object, copy key/value pairs into inputParams
	      				  for(var vkey in v) {
	      					  if(v.hasOwnProperty(vkey)) {
	      						  fieldDef.inputParams[vkey] = v[vkey];
	      					  }
	      				  }
	      			  }
	      		  } else {
	      			  fieldDef.inputParams[paramName] = v;
	      		  }
	      	  }
	        }
	    }
	    if(p.type) {	       
	       var type = p.type;
	       
	       // If type is a "Union type definition", we'll use the first type for the field
	       // "array" <=>  [] <=> ["any"]
	       if(lang.isArray(type)) {
	          if(type.length === 0 || (type.length == 1 && type[0] == "any") ) {
	             type = "array";
	          }
	          else {
	             type = type[0];
	          }
	       }
	       else if(lang.isObject(type) ) {
	          // What do we do ??
	          //console.log("type is an object !!");
	       }
	       
	       fieldDef.type = type;
	       
	       // default value
	       if( !lang.isUndefined(p["default"]) ) {
	          fieldDef.inputParams.value = p["default"];
	       }
	    
	       if(type == "array" ) {
	          fieldDef.type = "list";
	          if(lang.isObject(p.items) && !lang.isArray(p.items)) {
	        	  // when items is an object, it's a schema that describes each item in the list
	        	  fieldDef.inputParams.elementType = this.schemaToInputEx(p.items, propertyName);
	          }
	       }
	       else if(type == "object" ) {
	          fieldDef.type = "group";
	          if(p.title && lang.isUndefined(fieldDef.inputParams.legend)) {
	        	  fieldDef.inputParams.legend = p.title; 
	          }
	          //fieldDef.inputParams = this.schemaToInputEx(p, propertyName);
	          //fieldDef.inputParams = this._parseSchemaProperty(p, propertyName);
	          var fields = [];
	          if(propertyName) {
	        	  fieldDef.inputParams.name = propertyName;
	          }
	
	          for(var key in p.properties) {
	             if(p.properties.hasOwnProperty(key)) {
	                fields.push( this.schemaToInputEx(p.properties[key], key) );
	             }
	          }
	
	          fieldDef.inputParams.fields = fields;
	          
	       }
	       else if(type == "string" && p["enum"] ) {
	          fieldDef.type = "select";
	          
	          if(p.options) {
  	             fieldDef.inputParams.selectOptions = [];
     	          fieldDef.inputParams.selectValues = [];
	             for(var i = 0 ; i < p.options.length ; i++) {
	                var o = p.options[i];
	                fieldDef.inputParams.selectOptions[i] = o.label;
	                fieldDef.inputParams.selectValues[i] = o.value;
	             }
             }
             else {
    	          fieldDef.inputParams.selectValues = p["enum"];
             }
	       }
	       else if(type == "string") {
	    	  if(!lang.isUndefined(p.pattern) && lang.isUndefined(fieldDef.inputParams.regexp)) {
	    		  if(lang.isString(p.pattern)) {
	    			  fieldDef.inputParams.regexp = new RegExp(p.pattern);
	    		  } else {
	    			  fieldDef.inputParams.regexp = p.pattern;
	    		  }
	    	  }
	    	  if(!lang.isUndefined(p.maxLength) && lang.isUndefined(fieldDef.inputParams.maxLength)) {
	    		  fieldDef.inputParams.maxLength = p.maxLength; 
	    	  }

	    	  if(!lang.isUndefined(p.minLength) && lang.isUndefined(fieldDef.inputParams.minLength)) {
	    		  fieldDef.inputParams.minLength = p.minLength; 
	    	  }

	    	  if(!lang.isUndefined(p.readonly) && lang.isUndefined(fieldDef.inputParams.readonly)) {
	    		  fieldDef.inputParams.readonly = p.readonly; 
	    	  }

           // According to http://groups.google.com/group/json-schema/web/json-schema-possible-formats
	          if( p.format ) {
	             if(p.format == "html") {
	                fieldDef.type = "html";
	             } else if(p.format == "date") {
	                fieldDef.type = "date";
	                fieldDef.inputParams.tooltipIcon = true;
	             } else if(p.format == 'url') {
	            	 fieldDef.type = 'url';
	             } else if(p.format == 'email') {
	            	 fieldDef.type = 'email';
	             } else if(p.format == 'text') {
	            	 fieldDef.type = 'text';
	             } else if(p.format == 'time') {
	                fieldDef.type = 'time';
	             } else if(p.format == 'ip-address') {
    	             fieldDef.type = 'IPv4';
    	          } else if(p.format == 'color') {
    	             fieldDef.type = 'color';
    	          }
	          }
	       }
	    }
	    
	    // Add the defaultOptions
	    for(var kk in this.defaultOptions) {
	        if(this.defaultOptions.hasOwnProperty(kk) && lang.isUndefined(fieldDef.inputParams[kk])) {
	        	fieldDef.inputParams[kk] = this.defaultOptions[kk]; 
	        }	    	
	    }
	    return fieldDef;
	},

   /**
    * Create an inputEx Json form definition from a json schema instance object
    * Respect the "Self-Defined Schema Convention"
    * @method formFromInstance
    */
   formFromInstance: function(instanceObject) {
      if(!instanceObject || !instanceObject["$schema"]) {
         throw new Error("Invalid json schema instance object. Object must have a '$schema' property.");
      }
      
      var formDef = this.schemaToInputEx(instanceObject["$schema"]);
      
      // Set the default value of each property to the instance value
      for(var i = 0 ; i < formDef.fields.length ; i++) {
         var fieldName = formDef.fields[i].inputParams.name;
         formDef.fields[i].inputParams.value = instanceObject[fieldName];
      }
      
      return formDef;
   }
   
};




})();(function() {
   var inputEx = YAHOO.inputEx, Dom = YAHOO.util.Dom, lang = YAHOO.lang, util = YAHOO.util;

/** 
 * @class An abstract class that contains the shared features for all fields
 * @constructor
 * @param {Object} options Configuration object
 * <ul>
 *	  <li>name: the name of the field</li>
 *	  <li>required: boolean, the field cannot be null if true</li>
 *   <li>className: CSS class name for the div wrapper (default 'inputEx-Field')</li>
 *   <li>value: initial value</li>
 *   <li>parentEl: HTMLElement or String id, append the field to this DOM element</li>
 * </ul>
 */
inputEx.Field = function(options) {
	
   if(!options) {var options = {}; }
	
	// Set the default values of the options
	this.setOptions(options);
	
	// Call the render of the dom
	this.render();
	
	/**
	 * @event
	 * @param {Any} value The new value of the field
	 * @desc YAHOO custom event fired when the field is "updated"<br /> subscribe with: this.updatedEvt.subscribe(function(e, params) { var value = params[0]; console.log("updated",value, this.updatedEvt); }, this, true);
	 */
	this.updatedEvt = new util.CustomEvent('updated', this);
	
	// initialize behaviour events
	this.initEvents();
	
	// Set the initial value
	//   -> no initial value = no style (setClassFromState called by setValue)
	if(!lang.isUndefined(this.options.value)) {
		this.setValue(this.options.value, false);
	}
	
	// append it immediatly to the parent DOM element
	if(options.parentEl) {
	   if( lang.isString(options.parentEl) ) {
	     Dom.get(options.parentEl).appendChild(this.getEl());  
	   }
	   else {
	      options.parentEl.appendChild(this.getEl());
      }
	}
};


inputEx.Field.prototype = {
  
   /**
    * Set the default values of the options
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
	setOptions: function(options) {

   	/**
   	 * Configuration object to set the options for this class and the parent classes. See constructor details for options added by this class.
   	 */
   	this.options = {};
   	
   	// Basic options
   	this.options.name = options.name;
   	this.options.value = options.value;
   	this.options.id = options.id || Dom.generateId();
   	this.options.label = options.label;
   	this.options.description = options.description;
   
      // Define default messages
	   this.options.messages = {};
	   this.options.messages.required = (options.messages && options.messages.required) ? options.messages.required : inputEx.messages.required;
	   this.options.messages.invalid = (options.messages && options.messages.invalid) ? options.messages.invalid : inputEx.messages.invalid;
	   //this.options.messages.valid = (options.messages && options.messages.valid) ? options.messages.valid : inputEx.messages.valid;
	
	   // Other options
	   this.options.className = options.className ? options.className : 'inputEx-Field';
	   this.options.required = lang.isUndefined(options.required) ? false : options.required;
	   this.options.showMsg = lang.isUndefined(options.showMsg) ? false : options.showMsg;
	},

   /**
    * Default render of the dom element. Create a divEl that wraps the field.
    */
	render: function() {
	
	   // Create a DIV element to wrap the editing el and the image
	   this.divEl = inputEx.cn('div', {className: 'inputEx-fieldWrapper'});
	   if(this.options.id) {
	      this.divEl.id = this.options.id;
	   }
	   if(this.options.required) {
	      Dom.addClass(this.divEl, "inputEx-required");
	   }
	   
	   // Label element
	   if(this.options.label) {
	      this.labelDiv = inputEx.cn('div', {id: this.divEl.id+'-label', className: 'inputEx-label', 'for': this.divEl.id+'-field'});
	      this.labelEl = inputEx.cn('label');
	      this.labelEl.appendChild( document.createTextNode(this.options.label) );
	      this.labelDiv.appendChild(this.labelEl);
	      this.divEl.appendChild(this.labelDiv);
      }
      
      this.fieldContainer = inputEx.cn('div', {className: this.options.className}); // for wrapping the field and description
	
      // Render the component directly
      this.renderComponent();
      
      // Description
      if(this.options.description) {
         this.fieldContainer.appendChild(inputEx.cn('div', {id: this.divEl.id+'-desc', className: 'inputEx-description'}, null, this.options.description));
      }
      
   	this.divEl.appendChild(this.fieldContainer);
      
	   // Insert a float breaker
	   this.divEl.appendChild( inputEx.cn('div',null, {clear: 'both'}," ") );
	
	},
	
	/**
	 * Fire the "updated" event (only if the field validated)
	 * Escape the stack using a setTimeout
	 */
	fireUpdatedEvt: function() {
      // Uses setTimeout to escape the stack (that originiated in an event)
      var that = this;
      setTimeout(function() {
         that.updatedEvt.fire(that.getValue(), that);
      },50);
	},

   /**
    * Render the interface component into this.divEl
    */
	renderComponent: function() {
 	   // override me
	},

   /**
    * The default render creates a div to put in the messages
    * @return {HTMLElement} divEl The main DIV wrapper
    */
	getEl: function() {
	   return this.divEl;
	},

   /**
    * Initialize events of the Input
    */
	initEvents: function() {
 	   // override me
	},

   /**
    * Return the value of the input
    * @return {Any} value of the field
    */
	getValue: function() { 
	   // override me
	},

   /**
    * Function to set the value
    * @param {Any} value The new value
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */
	setValue: function(value, sendUpdatedEvt) {
	   // to be inherited
	   
	   // set corresponding style
	   this.setClassFromState();
	   
	   if(sendUpdatedEvt !== false) {
	      // fire update event
         this.fireUpdatedEvt();
      }
	},

   /**
    * Set the styles for valid/invalide state
    */
	setClassFromState: function() {
	
	   // remove previous class
	   if( this.previousState ) {
	      // remove invalid className for both required and invalid fields
	      var className = 'inputEx-'+((this.previousState == inputEx.stateRequired) ? inputEx.stateInvalid : this.previousState);
		   Dom.removeClass(this.divEl, className);
	   }
	   
	   // add new class
	   var state = this.getState();
	   if( !(state == inputEx.stateEmpty && Dom.hasClass(this.divEl, 'inputEx-focused') ) ) {
	      // add invalid className for both required and invalid fields
	      var className = 'inputEx-'+((state == inputEx.stateRequired) ? inputEx.stateInvalid : state);
	      Dom.addClass(this.divEl, className );
      }
	
	   if(this.options.showMsg) {
	      this.displayMessage( this.getStateString(state) );
      }
	   
	   this.previousState = state;
	},

   /**
    * Get the string for the given state
    */
	getStateString: function(state) {
      if(state == inputEx.stateRequired) {
         return this.options.messages.required;
      }
      else if(state == inputEx.stateInvalid) {
         return this.options.messages.invalid;
      }
      else {
         return '';
      }
	},

   /**
    * Returns the current state (given its value)
    * @return {String} One of the following states: 'empty', 'required', 'valid' or 'invalid'
    */
	getState: function() { 
	   // if the field is empty :
	   if( this.isEmpty() ) {
	      return this.options.required ? inputEx.stateRequired : inputEx.stateEmpty;
	   }
	   return this.validate() ? inputEx.stateValid : inputEx.stateInvalid;
	},

   /**
    * Validation of the field
    * @return {Boolean} field validation status (true/false)
    */
	validate: function() {
      return true;
   },

   /**
    * Function called on the focus event
    * @param {Event} e The original 'focus' event
    */
	onFocus: function(e) {
	   var el = this.getEl();
	   Dom.removeClass(el, 'inputEx-empty');
	   Dom.addClass(el, 'inputEx-focused');
	},

   /**
    * Function called on the blur event
    * @param {Event} e The original 'blur' event
    */
	onBlur: function(e) {
	   Dom.removeClass(this.getEl(), 'inputEx-focused');
	   
	   // Call setClassFromState on Blur
	   this.setClassFromState();
	},

   /**
    * onChange event handler
    * @param {Event} e The original 'change' event
    */
	onChange: function(e) {
      this.fireUpdatedEvt();
	},

   /**
    * Close the field and eventually opened popups...
    */
	close: function() {
	},

   /**
    * Disable the field
    */
	disable: function() {
	},

   /**
    * Enable the field
    */
	enable: function() {
	},

   /**
    * Focus the field
    */
   focus: function() {
   },
   
   /**
    * Purge all event listeners and remove the component from the dom
    */
   destroy: function() {
      var el = this.getEl();
      
      // Unsubscribe all listeners on the updatedEvt
      this.updatedEvt.unsubscribeAll();
      
      // Remove from DOM
      if(Dom.inDocument(el)) {
         el.parentNode.removeChild(el);
      }
      
      // recursively purge element
      util.Event.purgeElement(el, true);
   },
   
   /**
    * Update the message 
    * @param {String} msg Message to display
    */
   displayMessage: function(msg) {
      if(!this.fieldContainer) { return; }
      if(!this.msgEl) {
         this.msgEl = inputEx.cn('div', {className: 'inputEx-message'});
          try{
             var divElements = this.divEl.getElementsByTagName('div');
             this.divEl.insertBefore(this.msgEl, divElements[(divElements.length-1>=0)?divElements.length-1:0]); //insertBefore the clear:both div
          }catch(e){alert(e);}
      }
      this.msgEl.innerHTML = msg;
   },

   /**
    * Show the field
    */
   show: function() {
      this.divEl.style.display = '';
   },
   
   /**
    * Hide the field
    */
   hide: function() {
      this.divEl.style.display = 'none';
   },
   
   /**
    * Clear the field by setting the field value to this.options.value
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this clear should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */
   clear: function(sendUpdatedEvt) {
      this.setValue(lang.isUndefined(this.options.value) ? '' : this.options.value, sendUpdatedEvt);
   },
   
   /**
    * Should return true if empty
    */
   isEmpty: function() {
      return this.getValue() === '';
   }
   
};

})();(function() {
   
   var inputEx = YAHOO.inputEx, lang = YAHOO.lang, Dom = YAHOO.util.Dom, Event = YAHOO.util.Event;
   
/**
 * @class Handle a group of fields
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options The following options are added for Groups and subclasses:
 * <ul>
 *   <li>fields: Array of input fields declared like { label: 'Enter the value:' , type: 'text' or fieldClass: inputEx.Field, optional: true/false, inputParams: {inputparams object} }</li>
 *   <li>legend: The legend for the fieldset (default is an empty string)</li>
 *   <li>collapsible: Boolean to make the group collapsible (default is false)</li>
 *   <li>collapsed: If collapsible only, will be collapsed at creation (default is false)</li>
 *   <li>flatten:</li>
 * </ul>
 */
inputEx.Group = function(options) {
   inputEx.Group.superclass.constructor.call(this,options);
   
   if(this.hasInteractions) {
      for(var i = 0 ; i < this.inputs.length ; i++) {
         this.runInteractions(this.inputs[i],this.inputs[i].getValue());
      }
   }
};
lang.extend(inputEx.Group, inputEx.Field, 
/**
 * @scope inputEx.Group.prototype   
 */   
{
   
   /**
    * Adds some options: legend, collapsible, fields...
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
   setOptions: function(options) {
   
   	this.options = {};
   	
   	this.options.className = options.className || 'inputEx-Group';
   	
   	this.options.fields = options.fields;
   	
   	this.options.id = options.id;
   	
   	this.options.name = options.name;
   	
   	this.options.value = options.value;
   	
   	this.options.flatten = options.flatten;
   
      this.options.legend = options.legend || '';
   
      // leave this for compatibility reasons
      this.inputConfigs = options.fields;
   
      this.options.collapsible = lang.isUndefined(options.collapsible) ? false : options.collapsible;
      this.options.collapsed = lang.isUndefined(options.collapsed) ? false : options.collapsed;
      
      this.options.disabled = lang.isUndefined(options.disabled) ? false : options.disabled;
      
      // Array containing the list of the field instances
      this.inputs = [];

      // Associative array containing the field instances by names
      this.inputsNames = {};
   },

   /**
    * Render the group
    */
   render: function() {
   
      // Create the div wrapper for this group
	   this.divEl = inputEx.cn('div', {className: this.options.className});
	   if(this.options.id) {
   	   this.divEl.id = this.options.id;
   	}
  	   
  	   this.renderFields(this.divEl);  	  
  	   
  	   if(this.options.disabled) {
  	      this.disable();
  	   }
   },
   
   /**
    * Render all the fields.
    * We use the parentEl so that inputEx.Form can append them to the FORM tag
    */
   renderFields: function(parentEl) {
      
      this.fieldset = inputEx.cn('fieldset');
      this.legend = inputEx.cn('legend', {className: 'inputEx-Group-legend'});
   
      // Option Collapsible
      //TODO: <MF> should it be renamed to 'collapsed'?
      if(this.options.collapsible) {
         var collapseImg = inputEx.cn('div', {className: 'inputEx-Group-collapseImg'}, null, ' ');
         this.legend.appendChild(collapseImg);
         inputEx.sn(this.fieldset,{className:'inputEx-Expanded'});
      }
   
      if(!lang.isUndefined(this.options.legend) && this.options.legend !== ''){
         this.legend.appendChild( document.createTextNode(" "+this.options.legend) );
      }
   
      if( this.options.collapsible || (!lang.isUndefined(this.options.legend) && this.options.legend !== '') ) {
         this.fieldset.appendChild(this.legend);
      }
  	   
      // Iterate this.createInput on input fields
      for (var i = 0 ; i < this.options.fields.length ; i++) {
         var input = this.options.fields[i];
        
         // Render the field
         var field = this.renderField(input);
         this.fieldset.appendChild(field.getEl() );
  	   }
  	
  	   // Collapsed at creation ?
  	   if(this.options.collapsed) {
  	      this.toggleCollapse();
  	   }
  	
  	   // Append the fieldset
  	   parentEl.appendChild(this.fieldset);
   },
  
   /**
    * Instanciate one field given its parameters, type or fieldClass
    * @param {Object} fieldOptions The field properties as required bu inputEx.buildField
    */
   renderField: function(fieldOptions) {

      // Instanciate the field
      var fieldInstance = inputEx.buildField(fieldOptions);      
      
	   this.inputs.push(fieldInstance);
      
      // Create an index to access fields by their name
      if(fieldInstance.options.name) {
         this.inputsNames[fieldInstance.options.name] = fieldInstance;
      }
      
      // Create the this.hasInteractions to run interactions at startup
      if(!this.hasInteractions && fieldOptions.interactions) {
         this.hasInteractions = true;
      }
      
	   // Subscribe to the field "updated" event to send the group "updated" event
      fieldInstance.updatedEvt.subscribe(this.onChange, this, true);
   	  
      return fieldInstance;
   },
  
   /**
    * Add a listener for the 'collapsible' option
    */
   initEvents: function() {
      if(this.options.collapsible) {
         Event.addListener(this.legend, "click", this.toggleCollapse, this, true);
      }
   },

   /**
    * Toggle the collapse state
    */
   toggleCollapse: function() {
      if(Dom.hasClass(this.fieldset, 'inputEx-Expanded')) {
         Dom.replaceClass(this.fieldset, 'inputEx-Expanded', 'inputEx-Collapsed');
      }
      else {
         Dom.replaceClass(this.fieldset, 'inputEx-Collapsed','inputEx-Expanded');
      }
   },
   
   /**
    * Validate each field
    * @returns {Boolean} true if all fields validate and required fields are not empty
    */
   validate: function() {
      var response = true;
      
      // Validate all the sub fields
      for (var i = 0 ; i < this.inputs.length ; i++) {
   	   var input = this.inputs[i];
   	   input.setClassFromState(); // update field classes (mark invalid fields...)
   	   var state = input.getState();
   	   if( state == inputEx.stateRequired || state == inputEx.stateInvalid ) {
   		   response = false; // but keep looping on fields to set classes
   	   }
      }
      return response;
   },
   
   /**
    * Enable all fields in the group
    */
   enable: function() {
 	   for (var i = 0 ; i < this.inputs.length ; i++) {
 	      this.inputs[i].enable();
      }
   },
   
   /**
    * Disable all fields in the group
    */
   disable: function() {
 	   for (var i = 0 ; i < this.inputs.length ; i++) {
 	      this.inputs[i].disable();
      }
   },
   
   /**
    * Set the values of each field from a key/value hash object
     * @param {Any} value The group value
     * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */
   setValue: function(oValues, sendUpdatedEvt) {
      if(!oValues) {
         return;
      }
	   for (var i = 0 ; i < this.inputs.length ; i++) {
	      var field = this.inputs[i];
	      var name = field.options.name;
	      if(name && !lang.isUndefined(oValues[name]) ) {
	         field.setValue(oValues[name], false); // don't fire the updated event !
	      }
	      else {
	         field.clear(false);
	      }
      }
      
	   if(sendUpdatedEvt !== false) {
	      // fire update event
         this.fireUpdatedEvt();
      }
   },
   
   /**
    * Return an object with all the values of the fields
    */
   getValue: function() {
	   var o = {};
	   for (var i = 0 ; i < this.inputs.length ; i++) {
	      var v = this.inputs[i].getValue();
	      if(this.inputs[i].options.name) {
	         if(this.inputs[i].options.flatten && lang.isObject(v) ) {
	            lang.augmentObject( o, v);
	         }
	         else {
		         o[this.inputs[i].options.name] = v;
	         }
	      }
      }
	   return o;
   },
  
   /**
    * Close the group (recursively calls "close" on each field, does NOT hide the group )
    * Call this function before hidding the group to close any field popup
    */
   close: function() {
      for (var i = 0 ; i < this.inputs.length ; i++) {
 	      this.inputs[i].close();
      }
   },

   /**
    * Set the focus to the first input in the group
    */
   focus: function() {
      if( this.inputs.length > 0 ) {
         this.inputs[0].focus();
      }
   },

   /**
    * Return the sub-field instance by its name property
    * @param {String} fieldName The name property
    */
   getFieldByName: function(fieldName) {
      if( !this.inputsNames.hasOwnProperty(fieldName) ) {
         return null;
      }
      return this.inputsNames[fieldName];
   },
   
   
   /**
    * Called when one of the group subfields is updated.
    * @param {String} eventName Event name
    * @param {Array} args Array of [fieldValue, fieldInstance] 
    */
   onChange: function(eventName, args) {

      // Run interactions
      var fieldValue = args[0];
      var fieldInstance = args[1];
      this.runInteractions(fieldInstance,fieldValue);
      
      //this.setClassFromState();
      
      this.fireUpdatedEvt();
   },

   /**
    * Run an action (for interactions)
    * @param {Object} action inputEx action object
    * @param {Any} triggerValue The value that triggered the interaction
    */
   runAction: function(action, triggerValue) {
      var field = this.getFieldByName(action.name);
      if( YAHOO.lang.isFunction(field[action.action]) ) {
         field[action.action].call(field);
      }
      else if( YAHOO.lang.isFunction(action.action) ) {
         action.action.call(field, triggerValue);
      }
      else {
         throw new Error("action "+action.action+" is not a valid action for field "+action.name);
      }
   },
   
   /**
    * Run the interactions for the given field instance
    * @param {inputEx.Field} fieldInstance Field that just changed
    * @param {Any} fieldValue Field value
    */
   runInteractions: function(fieldInstance,fieldValue) {
      
      var index = inputEx.indexOf(fieldInstance, this.inputs);
      var fieldConfig = this.options.fields[index];
      if( YAHOO.lang.isUndefined(fieldConfig.interactions) ) return;
      
      // Let's run the interactions !
      var interactions = fieldConfig.interactions;
      for(var i = 0 ; i < interactions.length ; i++) {
         var interaction = interactions[i];
         if(interaction.valueTrigger === fieldValue) {
            for(var j = 0 ; j < interaction.actions.length ; j++) {
               this.runAction(interaction.actions[j], fieldValue);
            }
         }
      }
      
   },
   
	/**
	 * Clear all subfields
	 * @param {boolean} [sendUpdatedEvt] (optional) Wether this clear should fire the updatedEvt or not (default is true, pass false to NOT send the event)
	 */
	clear: function(sendUpdatedEvt) {
	   for(var i = 0 ; i < this.inputs.length ; i++) {
	      this.inputs[i].clear(false);
	   }
	   if(sendUpdatedEvt !== false) {
	      // fire update event
         this.fireUpdatedEvt();
      }
	}
   
   
});

   
/**
 * Register this class as "group" type
 */
inputEx.registerType("group", inputEx.Group);


})();(function () {
   var util = YAHOO.util, lang = YAHOO.lang, Event = YAHOO.util.Event, inputEx = YAHOO.inputEx, Dom = util.Dom;

/**
 * @class Create a group of fields within a FORM tag and adds buttons
 * @extends inputEx.Group
 * @constructor
 * @param {Object} options The following options are added for Forms:
 * <ul>
 *   <li>buttons: list of button definition objects {value: 'Click Me', type: 'submit'}</li>
 *   <li>ajax: send the form through an ajax request (submit button should be present): {method: 'POST', uri: 'myScript.php', callback: same as YAHOO.util.Connect.asyncRequest callback}</li>
 *   <li>showMask: adds a mask over the form while the request is running (default is false)</li>
 * </ul>
 */
inputEx.Form = function(options) {
   inputEx.Form.superclass.constructor.call(this, options);
};

lang.extend(inputEx.Form, inputEx.Group,
/**
 * @scope inputEx.Form.prototype
 */
{

   /**
    * Adds buttons and set ajax default parameters
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
   setOptions: function(options) {
      inputEx.Form.superclass.setOptions.call(this, options);

      this.buttons = [];

      this.options.buttons = options.buttons || [];

      this.options.action = options.action;
   	this.options.method = options.method;

      if(options.ajax) {
         this.options.ajax = {};
         this.options.ajax.method = options.ajax.method || 'POST';
         this.options.ajax.uri = options.ajax.uri || 'default.php';
         this.options.ajax.callback = options.ajax.callback || {};
         this.options.ajax.callback.scope = options.ajax.callback.scope || this;
         this.options.ajax.showMask = lang.isUndefined(options.ajax.showMask) ? false : options.ajax.showMask;
      }
      
      if (lang.isFunction(options.onSubmit)) {
         this.options.onSubmit = options.onSubmit;
      }
   },


   /**
    * Render the group
    */
   render: function() {
      // Create the div wrapper for this group
  	   this.divEl = inputEx.cn('div', {className: this.options.className});
	   if(this.options.id) {
   	   this.divEl.id = this.options.id;
   	}
   	  	   
  	   // Create the FORM element
      this.form = inputEx.cn('form', {method: this.options.method || 'POST', action: this.options.action || '', className: this.options.className || 'inputEx-Form'});
      this.divEl.appendChild(this.form);

	   // Set the autocomplete attribute to off to disable firefox autocompletion
	   this.form.setAttribute('autocomplete','off');
   	
      // Set the name of the form
      if(this.options.formName) { this.form.name = this.options.formName; }
  	   
  	   this.renderFields(this.form);

      this.renderButtons();
      
      if(this.options.disabled) {
  	      this.disable();
  	   }	  
   },


   /**
    * Render the buttons
    */
   renderButtons: function() {

      this.buttonDiv = inputEx.cn('div', {className: 'inputEx-Form-buttonBar'});

	   var button, buttonEl;
	   for(var i = 0 ; i < this.options.buttons.length ; i++ ) {
	      button = this.options.buttons[i];
	      buttonEl = inputEx.cn('input', {type: button.type, value: button.value});
	      if( button.onClick ) { buttonEl.onclick = button.onClick; }
	      this.buttons.push(buttonEl);
	      this.buttonDiv.appendChild(buttonEl);
	   }

	   this.form.appendChild(this.buttonDiv);
   },


   /**
    * Init the events
    */
   initEvents: function() {
      inputEx.Form.superclass.initEvents.call(this);

      // Handle the submit event
      Event.addListener(this.form, 'submit', this.options.onSubmit || this.onSubmit,this,true);
   },

   /**
    * Intercept the 'onsubmit' event and stop it if !validate
    * If the ajax option object is set, use YUI async Request to send the form
    * @param {Event} e The original onSubmit event
    */
   onSubmit: function(e) {
      
      // do nothing if does not validate
	   if ( !this.validate() ) {
		   Event.stopEvent(e); // no submit
		   return; // no ajax submit
	   }
	   
	   if(this.options.ajax) {
		   Event.stopEvent(e);
	      this.asyncRequest();
	   }
   },

   /**
    * Send the form value in JSON through an ajax request
    */
   asyncRequest: function() {

      if(this.options.ajax.showMask) { this.showMask(); }
	   var postData = "value="+lang.JSON.stringify(this.getValue());
      util.Connect.asyncRequest(this.options.ajax.method, this.options.ajax.uri, {
         success: function(o) {
            if(this.options.ajax.showMask) { this.hideMask(); }
            if( lang.isFunction(this.options.ajax.callback.success) ) {
               this.options.ajax.callback.success.call(this.options.ajax.callback.scope,o);
            }
         },

         failure: function(o) {
            if(this.options.ajax.showMask) { this.hideMask(); }
            if( lang.isFunction(this.options.ajax.callback.failure) ) {
               this.options.ajax.callback.failure.call(this.options.ajax.callback.scope,o);
            }
         },

         scope:this
      }, postData);
   },

   /**
    * Create a Mask over the form
    */
   renderMask: function() {
      if(this.maskRendered) return;

      // position as "relative" to position formMask inside as "absolute"
      Dom.setStyle(this.divEl, "position", "relative");

      // set zoom = 1 to fix hasLayout issue with IE6/7
      if (YAHOO.env.ua.ie) { Dom.setStyle(this.divEl, "zoom", 1); }

      // Render mask over the divEl
      this.formMask = inputEx.cn('div', {className: 'inputEx-Form-Mask'},
         {
            display: 'none',
            // Use offsetWidth instead of Dom.getStyle(this.divEl,"width") because
            // would return "auto" with IE instead of size in px
            width: this.divEl.offsetWidth+"px",
            height: this.divEl.offsetHeight+"px"
         },
         "<div class='inputEx-Form-Mask-bg'/><center><br/><div class='inputEx-Form-Mask-spinner'></div><br /><span>"+inputEx.messages.ajaxWait+"</span></div>");
      this.divEl.appendChild(this.formMask);
      this.maskRendered = true;
   },

   /**
    * Show the form mask
    */
   showMask: function() {
      this.renderMask();

      // Hide selects in IE 6
      this.toggleSelectsInIE(false);

      this.formMask.style.display = '';
   },

   /**
    * Hide the form mask
    */
   hideMask: function() {

      // Show selects back in IE 6
      this.toggleSelectsInIE(true);

      this.formMask.style.display = 'none';
   },

   /*
   * Method to hide selects in IE 6 when masking the form (else they would appear over the mask)
   */
   toggleSelectsInIE: function(show) {
      // IE 6 only
      if (!!YAHOO.env.ua.ie && YAHOO.env.ua.ie < 7) {
         var method = !!show ? YAHOO.util.Dom.removeClass : YAHOO.util.Dom.addClass;
         var that = this;
         YAHOO.util.Dom.getElementsBy(
            function() {return true;},
            "select",
            this.divEl,
            function(el) {method.call(that,el,"inputEx-hidden");}
         );
      }
   },


   /**
    * Enable all fields and buttons in the form
    */
   enable: function() {
      inputEx.Form.superclass.enable.call(this);
      for (var i = 0 ; i < this.buttons.length ; i++) {
 	      this.buttons[i].disabled = false;
      }
   },

   /**
    * Disable all fields and buttons in the form
    */
   disable: function() {
      inputEx.Form.superclass.disable.call(this);
      for (var i = 0 ; i < this.buttons.length ; i++) {
 	      this.buttons[i].disabled = true;
      }
   }

});


// Specific waiting message in ajax submit
inputEx.messages.ajaxWait = "Please wait...";;

/**
* Register this class as "form" type
*/
inputEx.registerType("form", inputEx.Form);


})();
(function() {
	
   var inputEx = YAHOO.inputEx, lang = YAHOO.lang, Dom = YAHOO.util.Dom;
	
/**
 * @class A meta field to put N fields on the same line, separated by separators
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options Added options:
 * <ul>
 *    <li>separators: array of string inserted</li>
 *    <li>fields: list of fields in inputEx-typed-JSON</li>
 * </ul>
 */
inputEx.CombineField = function(options) {
   inputEx.CombineField.superclass.constructor.call(this, options);
};
	
lang.extend( inputEx.CombineField, inputEx.Field, 
/**
 * @scope inputEx.CombineField.prototype   
 */   
{
   /**
    * Set the default values of the options
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
   setOptions: function(options) {
      inputEx.CombineField.superclass.setOptions.call(this, options);
      
      // Overwrite options
      this.options.className = options.className ? options.className : 'inputEx-Field inputEx-CombineField';
      
      // Added options
      this.options.separators = options.separators;
      this.options.fields = options.fields;
   },
	   
	/**
	 * Render the two subfields
	 */
	renderComponent: function() {
	    
	   this.inputs = [];
	   
	   this.appendSeparator(0);
	   
	   if(!this.options.fields) {
	      return;
	   }
	   
	   for(var i = 0 ; i < this.options.fields.length ; i++) {
	      
	      if (this.options.required) {
            this.options.fields[i].required = true;
         }
         
	      var field = this.renderField(this.options.fields[i]);
	      // remove the line breaker (<div style='clear: both;'>)
	      field.divEl.removeChild(field.divEl.childNodes[field.divEl.childNodes.length-1]);
      	// make the field float left
      	YAHOO.util.Dom.setStyle(field.getEl(), 'float', 'left');
      	this.fieldContainer.appendChild(field.getEl());
      	
      	this.appendSeparator(i+1);
	   }
	      
	},
	
	appendSeparator: function(i) {
	   if(this.options.separators && this.options.separators[i]) {
	      var sep = inputEx.cn('div', {className: 'inputEx-CombineField-separator'}, null, this.options.separators[i]);
	      this.fieldContainer.appendChild(sep);
      }
	},
	
	/**
    * Instanciate one field given its parameters, type or fieldClass
    * @param {Object} fieldOptions The field properties as required bu inputEx.buildField
    */
   renderField: function(fieldOptions) {
      
      // Subfields should inherit required property
      if (this.options.required) {
         if (!fieldOptions.inputParams) {fieldOptions.inputParams = {};}
         fieldOptions.inputParams.required = true;
      }
      
      // Instanciate the field
      var fieldInstance = inputEx(fieldOptions);
      
	   this.inputs.push(fieldInstance);
      
	   // Subscribe to the field "updated" event to send the group "updated" event
      fieldInstance.updatedEvt.subscribe(this.onChange, this, true);
      // Subscribe sub-field "blur" event to trigger class setting at combineField level !
      YAHOO.util.Event.addBlurListener(fieldInstance.getEl(),this.onBlur, this, true);
   	  
      return fieldInstance;
   },

	
	/**
    * Validate each field
    * @returns {Boolean} true if all fields validate and required fields are not empty
    */
   validate: function() {
      // Validate all the sub fields
      for (var i = 0 ; i < this.inputs.length ; i++) {
   	   var input = this.inputs[i];
   	   var state = input.getState();
   	   if( state == inputEx.stateRequired || state == inputEx.stateInvalid ) {
   		   return false;
   	   }
      }
      return true;
   },
	   
	/**
	 * Set the value
	 * @param {Array} values [value1, value2, ...]
	 * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
	 */
	setValue: function(values, sendUpdatedEvt) {
	   for(var i = 0 ; i < this.inputs.length ; i++) {
	      this.inputs[i].setValue(values[i], false);
	   }
	   
	   // Call Field.setValue to set class and fire updated event
		inputEx.CombineField.superclass.setValue.call(this,values, sendUpdatedEvt);
	},
	
	/**
	 * Specific getValue 
	 * @return {Array} An array of values [value1, value2, ...]
	 */   
	getValue: function() {
	   var values = [];
	   for(var i = 0 ; i < this.inputs.length ; i++) {
	      values.push(this.inputs[i].getValue());
	   }
	   return values;
	},
	
	/**
	 * Call setClassFromState on all children
	 */
	setClassFromState: function() {
	   inputEx.CombineField.superclass.setClassFromState.call(this);
	   
	   for(var i = 0 ; i < this.inputs.length ; i++) {
	      this.inputs[i].setClassFromState();
	   }
	},
	
	/**
	 * Clear all subfields
	 * @param {boolean} [sendUpdatedEvt] (optional) Wether this clear should fire the updatedEvt or not (default is true, pass false to NOT send the event)
	 */
	clear: function(sendUpdatedEvt) {
	   for(var i = 0 ; i < this.inputs.length ; i++) {
	      this.inputs[i].clear(false);
	   }
	   
	   // must reset field style explicitly
	   //  -> case different from Field.prototype.clear (which calls setValue, which calls setClassFromState)
	   this.setClassFromState();
	   
	   if(sendUpdatedEvt !== false) {
	      // fire update event
         this.fireUpdatedEvt();
      }
	},
   
   /**
    * Useful for getState to return correct state (required, empty, etc...)
    */
   isEmpty: function() {
      for(var i = 0 ; i < this.inputs.length ; i++) {
	      if (!this.inputs[i].isEmpty()) return false;
	   }
	   return true;
   }
	
});
	
/**
 * Register this class as "combine" type
 */
inputEx.registerType("combine", inputEx.CombineField);
	
})();(function() {

   var inputEx = YAHOO.inputEx, lang = YAHOO.lang, Event = YAHOO.util.Event, Dom = YAHOO.util.Dom;

/**
 * @class Basic string field (equivalent to the input type "text")
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options Added options:
 * <ul>
 *	  <li>regexp: regular expression used to validate (otherwise it always validate)</li>
 *   <li>size: size attribute of the input</li>
 *   <li>maxLength: maximum size of the string field (no message display, uses the maxlength html attribute)</li>
 *   <li>minLength: minimum size of the string field (will display an error message if shorter)</li>
 *   <li>typeInvite: string displayed when the field is empty</li>
 *   <li>readonly: set the field as readonly</li>
 * </ul>
 */
inputEx.StringField = function(options) {
   inputEx.StringField.superclass.constructor.call(this, options);

	  if(this.options.typeInvite) {
	     this.updateTypeInvite();
	  }
};

lang.extend(inputEx.StringField, inputEx.Field,
/**
 * @scope inputEx.StringField.prototype
 */
{
   /**
    * Set the default values of the options
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
	setOptions: function(options) {
	   inputEx.StringField.superclass.setOptions.call(this, options);

	   this.options.regexp = options.regexp;
	   this.options.size = options.size;
	   this.options.maxLength = options.maxLength;
	   this.options.minLength = options.minLength;
	   this.options.typeInvite = options.typeInvite;
	   this.options.readonly = options.readonly;
   },


   /**
    * Render an 'INPUT' DOM node
    */
   renderComponent: function() {

      // This element wraps the input node in a float: none div
      this.wrapEl = inputEx.cn('div', {className: 'inputEx-StringField-wrapper'});

      // Attributes of the input field
      var attributes = {};
      attributes.type = 'text';
      attributes.id = this.divEl.id?this.divEl.id+'-field':YAHOO.util.Dom.generateId();
      if(this.options.size) attributes.size = this.options.size;
      if(this.options.name) attributes.name = this.options.name;
      if(this.options.readonly) attributes.readonly = 'readonly';

      if(this.options.maxLength) attributes.maxLength = this.options.maxLength;

      // Create the node
      this.el = inputEx.cn('input', attributes);

      // Append it to the main element
      this.wrapEl.appendChild(this.el);
      this.fieldContainer.appendChild(this.wrapEl);
   },

   /**
    * Register the change, focus and blur events
    */
   initEvents: function() {
	   Event.addListener(this.el, "change", this.onChange, this, true);

       if (YAHOO.env.ua.ie){ // refer to inputEx-95
            var field = this.el;
            new YAHOO.util.KeyListener(this.el, {keys:[13]}, {fn:function(){
                field.blur();
                field.focus();
            }}).enable();
       }

	   Event.addFocusListener(this.el, this.onFocus, this, true);
	   Event.addBlurListener(this.el, this.onBlur, this, true);

	   Event.addListener(this.el, "keypress", this.onKeyPress, this, true);
	   Event.addListener(this.el, "keyup", this.onKeyUp, this, true);
   },

   /**
    * Return the string value
    * @param {String} The string value
    */
   getValue: function() {
	   return (this.options.typeInvite && this.el.value == this.options.typeInvite) ? '' : this.el.value;
   },

   /**
    * Function to set the value
    * @param {String} value The new value
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */
   setValue: function(value, sendUpdatedEvt) {
      this.el.value = value;

      // call parent class method to set style and fire updatedEvt
      inputEx.StringField.superclass.setValue.call(this, value, sendUpdatedEvt);
   },

   /**
    * Uses the optional regexp to validate the field value
    */
   validate: function() {
      var val = this.getValue();

      // empty field
      if (val == '') {
         // validate only if not required
         return !this.options.required;
      }

      // Check regex matching and minLength (both used in password field...)
      var result = true;

      // if we are using a regular expression
      if( this.options.regexp ) {
	      result = result && val.match(this.options.regexp);
      }
      if( this.options.minLength ) {
	      result = result && val.length >= this.options.minLength;
      }
      return result;
   },

   /**
    * Disable the field
    */
   disable: function() {
      this.el.disabled = true;
   },

   /**
    * Enable the field
    */
   enable: function() {
      this.el.disabled = false;
   },

   /**
    * Set the focus to this field
    */
   focus: function() {
      // Can't use lang.isFunction because IE >= 6 would say focus is not a function (IE says it's an object) !!
      if(!!this.el && !lang.isUndefined(this.el.focus) ) {
         this.el.focus();
      }
   },

	/**
    * Add the minLength string message handling
    */
	getStateString: function(state) {
	   if(state == inputEx.stateInvalid && this.options.minLength && this.el.value.length < this.options.minLength) {
	      return inputEx.messages.stringTooShort[0]+this.options.minLength+inputEx.messages.stringTooShort[1];
      }
	   return inputEx.StringField.superclass.getStateString.call(this, state);
	},

   /**
    * Display the type invite after setting the class
    */
   setClassFromState: function() {
	   inputEx.StringField.superclass.setClassFromState.call(this);

	   // display/mask typeInvite
	   if(this.options.typeInvite) {
	      this.updateTypeInvite();
      }
	},

	updateTypeInvite: function() {

	   // field not focused
      if (!Dom.hasClass(this.divEl, "inputEx-focused")) {

         // show type invite if field is empty
         if(this.isEmpty()) {
	         Dom.addClass(this.divEl, "inputEx-typeInvite");
	         this.el.value = this.options.typeInvite;

	      // important for setValue to work with typeInvite
         } else {
            Dom.removeClass(this.divEl, "inputEx-typeInvite");
         }

      // field focused : remove type invite
      } else {
	      if(Dom.hasClass(this.divEl,"inputEx-typeInvite")) {
	         // remove text
	         this.el.value = "";

	         // remove the "empty" state and class
	         this.previousState = null;
	         Dom.removeClass(this.divEl,"inputEx-typeInvite");
         }
      }
	},

	/**
	 * Clear the typeInvite when the field gains focus
	 */
	onFocus: function(e) {
	   inputEx.StringField.superclass.onFocus.call(this,e);

	   if(this.options.typeInvite) {
         this.updateTypeInvite();
      }
	},

	onKeyPress: function(e) {
	   // override me
	},

   onKeyUp: function(e) {
      // override me
      //
      //   example :
      //
      //   lang.later(0, this, this.setClassFromState);
      //
      //     -> Set style immediatly when typing in the field
      //     -> Call setClassFromState escaping the stack (after the event has been fully treated, because the value has to be updated)
   }

});


inputEx.messages.stringTooShort = ["This field should contain at least "," numbers or characters"];

/**
 * Register this class as "string" type
 */
inputEx.registerType("string", inputEx.StringField);

})();
(function() {

   var inputEx = YAHOO.inputEx, lang = YAHOO.lang, Event = YAHOO.util.Event, Dom = YAHOO.util.Dom;

/**
 * @class An autocomplete field that wraps the YUI autocompleter
 * @constructor
 * @extends inputEx.StringField
 * @param {Object} options Added options for Autocompleter
 * <ul>
 *	  <li>datasource: the datasource</li>
 *	  <li>autoComp: autocompleter options</li>
 *   <li>returnValue: function to format the returned value (optional)</li>
 * </ul>
 */
inputEx.AutoComplete = function(options) {
   inputEx.AutoComplete.superclass.constructor.call(this, options);
};

lang.extend(inputEx.AutoComplete, inputEx.StringField, 
/**
 * @scope inputEx.AutoComplete.prototype   
 */   
{

   /**
    * Adds autocomplete options
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
   setOptions: function(options) {
      inputEx.AutoComplete.superclass.setOptions.call(this, options);
      
      // Overwrite options
      this.options.className = options.className ? options.className : 'inputEx-Field inputEx-AutoComplete';
      
      // Added options
      this.options.datasource = options.datasource;
      this.options.autoComp = options.autoComp;
      this.options.returnValue = options.returnValue;
   },
   
   /**
    * Custom event init
    * <ul>
    *   <li>listen to autocompleter textboxBlurEvent instead of this.el "blur" event</li>
    *   <li>listener to autocompleter textboxBlurEvent added in buildAutocomplete method</li>
    * </ul>
    */
   initEvents: function() {	
	   inputEx.AutoComplete.superclass.initEvents.call(this);
	   
	   // remove standard blur listener
	   Event.removeBlurListener(this.el, this.onBlur);
   },

   /**
    * Render the hidden list element
    */
   renderComponent: function() {
   
      // This element wraps the input node in a float: none div
      this.wrapEl = inputEx.cn('div', {className: 'inputEx-StringField-wrapper'});
      
      // Attributes of the input field
      var attributes = {
         type: 'text',
         id: YAHOO.util.Dom.generateId()
      };
      if(this.options.size) attributes.size = this.options.size;
      if(this.options.readonly) attributes.readonly = 'readonly';
      if(this.options.maxLength) attributes.maxLength = this.options.maxLength;
   
      // Create the node
      this.el = inputEx.cn('input', attributes);
      
      // Create the hidden input
      var hiddenAttrs = {
         type: 'hidden',
         value: ''
      };
      if(this.options.name) hiddenAttrs.name = this.options.name;
      this.hiddenEl = inputEx.cn('input', hiddenAttrs);
      
      // Append it to the main element
      this.wrapEl.appendChild(this.el);
      this.wrapEl.appendChild(this.hiddenEl);
      this.fieldContainer.appendChild(this.wrapEl);
   
      // Render the list :
      this.listEl = inputEx.cn('div', {id: Dom.generateId() });
      this.fieldContainer.appendChild(this.listEl);
       
      Event.onAvailable([this.el, this.listEl], this.buildAutocomplete, this, true);
   },
   
   /**
    * Build the YUI autocompleter
    */
   buildAutocomplete: function() {
      // Call this function only when this.el AND this.listEl are available
      if(!this._nElementsReady) { this._nElementsReady = 0; }
      this._nElementsReady++;
      if(this._nElementsReady != 2) return;
      
      // Instantiate AutoComplete
      this.oAutoComp = new YAHOO.widget.AutoComplete(this.el.id, this.listEl.id, this.options.datasource, this.options.autoComp);

      // subscribe to the itemSelect event
      this.oAutoComp.itemSelectEvent.subscribe(this.itemSelectHandler, this, true);
      
      // subscribe to the textboxBlur event (instead of "blur" event on this.el)
      //                                    |-------------- autocompleter ----------|
      //    -> order : "blur" on this.el -> internal callback -> textboxBlur event -> this.onBlur callback
      //    -> so fired after autocomp internal "blur" callback (which would erase typeInvite...)
      this.oAutoComp.textboxBlurEvent.subscribe(this.onBlur, this, true);
   },
   
   /**
    * itemSelect handler
    * @param {} sType
    * @param {} aArgs
    */
   itemSelectHandler: function(sType, aArgs) {
   	var aData = aArgs[2];
   	this.setValue( this.options.returnValue ? this.options.returnValue(aData) : aData[0] );
   },
   
   /**
    * onChange event handler
    * @param {Event} e The original 'change' event
    */
	onChange: function(e) {
	   this.setClassFromState();
	   
	   // Clear the field when no value 
      YAHOO.lang.later(50, this, function() {
         if(this.el.value == "") {
            this.setValue("");
         }
      });
      
      this.fireUpdatedEvt();
	},
   
   /**
    * Set the value
    * @param {Any} value Value to set
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */
   setValue: function(value, sendUpdatedEvt) {
      this.hiddenEl.value = value;
      
      // "inherited" from inputex.Field :
      //    (can't inherit of inputex.StringField because would set this.el.value...)
      //
	   // set corresponding style
   	this.setClassFromState();
	   
	   if(sendUpdatedEvt !== false) {
	      // fire update event
         this.fireUpdatedEvt();
      }
   },
   
   /**
    * Return the hidden value (stored in a hidden input)
    */
   getValue: function() {
      return this.hiddenEl.value;
   }

});


/**
* Register this class as "autocomplete" type
*/
inputEx.registerType("autocomplete", inputEx.AutoComplete);

})();
(function() {
	
	var inputEx = YAHOO.inputEx, lang = YAHOO.lang, Event = YAHOO.util.Event, Dom = YAHOO.util.Dom;
	
/**
 * @class Create a checkbox.
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options Added options for CheckBoxes:
 * <ul>
 *   <li>sentValues: 2D vector of values for checked/unchecked states (default is [true, false])</li>
 * </ul>
 */
inputEx.CheckBox = function(options) {
	inputEx.CheckBox.superclass.constructor.call(this,options);
};
	
lang.extend(inputEx.CheckBox, inputEx.Field, 
/**
 * @scope inputEx.CheckBox.prototype   
 */
{
	   
	/**
	 * Adds the CheckBox specific options
	 * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
	 */
	setOptions: function(options) {
	   inputEx.CheckBox.superclass.setOptions.call(this, options);
	   
	   // Overwrite options:
	   this.options.className = options.className ? options.className : 'inputEx-Field inputEx-CheckBox';
	   
	   this.options.rightLabel = options.rightLabel || '';
	   
	   // Added options
	   this.sentValues = options.sentValues || [true, false];
	   this.options.sentValues = this.sentValues; // for compatibility
	   this.checkedValue = this.sentValues[0];
	   this.uncheckedValue = this.sentValues[1];
	},
	   
	/**
	 * Render the checkbox and the hidden field
	 */
	renderComponent: function() {
	
   	var checkBoxId = this.divEl.id?this.divEl.id+'-field':YAHOO.util.Dom.generateId();
   	
	   this.el = inputEx.cn('input', { id: checkBoxId, type: 'checkbox', checked:(this.options.checked === false) ? false : true });
	   this.fieldContainer.appendChild(this.el);
	
	   this.rightLabelEl = inputEx.cn('label', {"for": checkBoxId, className: 'inputEx-CheckBox-rightLabel'}, null, this.options.rightLabel);
	   this.fieldContainer.appendChild(this.rightLabelEl);
	
	   // Keep state of checkbox in a hidden field (format : this.checkedValue or this.uncheckedValue)
	   this.hiddenEl = inputEx.cn('input', {type: 'hidden', name: this.options.name || '', value: this.el.checked ? this.checkedValue : this.uncheckedValue});
	   this.fieldContainer.appendChild(this.hiddenEl);
	},
	   
	/**
	 * Clear the previous events and listen for the "change" event
	 */
	initEvents: function() {
	   Event.addListener(this.el, "change", this.onChange, this, true);	
	   
	   // Awful Hack to work in IE6 and below (the checkbox doesn't fire the change event)
	   // It seems IE 8 removed this behavior from IE7 so it only works with IE 7 ??
	   /*if( YAHOO.env.ua.ie && parseInt(YAHOO.env.ua.ie,10) != 7 ) {
	      Event.addListener(this.el, "click", function() { this.fireUpdatedEvt(); }, this, true);	
	   }*/
	   if( YAHOO.env.ua.ie ) {
	      Event.addListener(this.el, "click", function() { YAHOO.lang.later(10,this,this.fireUpdatedEvt); }, this, true);	
	   }
	   
	   Event.addFocusListener(this.el, this.onFocus, this, true);
	   Event.addBlurListener(this.el, this.onBlur, this, true);
	},
	   
	/**
	 * Function called when the checkbox is toggled
	 * @param {Event} e The original 'change' event
	 */
	onChange: function(e) {
	   this.hiddenEl.value = this.el.checked ? this.checkedValue : this.uncheckedValue;
	
      // In IE the fireUpdatedEvent is sent by the click ! We need to send it only once ! 
      if( !YAHOO.env.ua.ie ) {
	      inputEx.CheckBox.superclass.onChange.call(this,e);
      }
	},
	
	/**
	 * Get the state value
	 * @return {Any} one of [checkedValue,uncheckedValue]
	 */
	getValue: function() {
	      return this.el.checked ? this.checkedValue : this.uncheckedValue;
	},
	
	/**
	 * Set the value of the checkedbox
	 * @param {Any} value The value schould be one of [checkedValue,uncheckedValue]
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
	 */
	setValue: function(value, sendUpdatedEvt) {
	   if (value===this.checkedValue) {
			this.hiddenEl.value = value;
			this.el.checked = true;
		}
	   else {
	      // DEBUG :
	      /*if (value!==this.uncheckedValue && lang.isObject(console) && lang.isFunction(console.log) ) {
	         console.log("inputEx.CheckBox: value is *"+value+"*, schould be in ["+this.checkedValue+","+this.uncheckedValue+"]");
         }*/
			this.hiddenEl.value = value;
			this.el.checked = false;
		}
		
		// Call Field.setValue to set class and fire updated event
		inputEx.CheckBox.superclass.setValue.call(this,value, sendUpdatedEvt);
	},
	
	/**
    * Disable the field
    */
   disable: function() {
      this.el.disabled = true;
   },

   /**
    * Enable the field
    */
   enable: function() {
      this.el.disabled = false;
   }
	
});   
	
/**
 * Register this class as "boolean" type
 */
inputEx.registerType("boolean", inputEx.CheckBox);
	
})();(function() {
	
   var inputEx = YAHOO.inputEx, lang = YAHOO.lang, Event = YAHOO.util.Event, Dom = YAHOO.util.Dom;
	
/**
 * @class Create a Color picker input field
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options Added options for ColorField :
 * <ul>
 *   <li>colors: list of colors to load as palette</li>
 *   <li>palette: default palette to be used (if colors option not provided)</li>
 *   <li>cellPerLine: how many colored cells in a row on the palette</li>
 *   <li>ratio: screen-like ratio to display the palette, syntax: [with,height], default: [16,9] (if cellPerLine not provided)</li>
 *   <li>overlayPadding: padding inside the popup palette</li>
 *   <li>cellWidth: width of a colored cell</li>
 *   <li>cellHeight: height of a colored cell</li>
 *   <li>cellMargin: margin of a colored cell (cell spacing = 2*cellMarging)</li>
 * </ul>
 */
inputEx.ColorField = function(options) {
	inputEx.ColorField.superclass.constructor.call(this,options);
};
lang.extend(inputEx.ColorField, inputEx.Field, 
/**
 * @scope inputEx.ColorField.prototype   
 */
{
   
	/**
	 * Adds the 'inputEx-ColorField' default className
	 * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
	 */
   setOptions: function(options) {
   	inputEx.ColorField.superclass.setOptions.call(this, options);
   	
   	// Overwrite options
   	this.options.className = options.className ? options.className : 'inputEx-Field inputEx-ColorField inputEx-PickerField';
   	
   	// Added options
   	this.options.palette = options.palette;
   	this.options.colors = options.colors;
   	
   	if (options.ratio) { this.options.ratio = options.ratio;}
   	if (options.cellPerLine) { this.options.cellPerLine = options.cellPerLine;}
   	if (options.overlayPadding) { this.options.overlayPadding = options.overlayPadding;}
   	if (options.cellHeight) { this.options.cellHeight = options.cellHeight;}
   	if (options.cellWidth) { this.options.cellWidth = options.cellWidth;}
   	if (options.cellMargin) { this.options.cellMargin = options.cellMargin;}
   },
   
	/**
	 * Render the color button and the colorpicker popup
	 */
	renderComponent: function() {
	   
	   // A hidden input field to store the color code 
	   this.el = inputEx.cn('input', {
	      type: 'hidden', 
	      name: this.options.name || '', 
	      value: this.options.value || '#DD7870' });
	   	   
	   // Create a colored area
	   this.colorEl = inputEx.cn('div', {className: 'inputEx-ColorField-button'}, {backgroundColor: this.el.value});
	
      // This element wraps the input node in a float: none div
      this.wrapEl = inputEx.cn('div', {className: 'inputEx-PickerField-wrapper'});
	   this.wrapEl.appendChild(this.el);
	   this.wrapEl.appendChild(this.colorEl);

	   // Create overlay
      this.oOverlay = new YAHOO.widget.Overlay(Dom.generateId(), { visible: false });
      this.oOverlay.setBody(" ");
      this.oOverlay.body.id = Dom.generateId();
      
      // Create button
      this.button = new YAHOO.widget.Button({ type: "menu", menu: this.oOverlay, label: "&nbsp;&nbsp;&nbsp;&nbsp;" });       
      this.button.appendTo(this.wrapEl);
            
      // Render the overlay
      this.oOverlay.render(this.wrapEl);
      // HACK: Set position absolute to the overlay
      Dom.setStyle(this.oOverlay.body.parentNode, "position", "absolute");
      
      // toggle Menu when clicking on colorEl
      Event.addListener(this.colorEl,'mousedown',function(e){
         
         if (!this.oOverlay.cfg.getProperty("visible")) {
            
            // Stop event to prevent following "click" event to hide the menu !
            Event.stopEvent(e); 
            
            // palette may not have been rendered yet
            this.renderPalette();
            
            // Show menu
            this.button._showMenu();
         }
      },this,true);
      
      
      // Lazy load palette
      //   -> "mousedown" and not "click" because sometimes "click" is not fired !
      this.button.on('mousedown', this.renderPalette, this, true);

	   // Elements are bound to divEl
      this.fieldContainer.appendChild(this.wrapEl);
	},
	
	renderPalette: function() {
      
      // render once !
      if (this.paletteRendered) return;

      // set default palette to be used
      var defaultPalette = this.options.palette || 1;

      // set colors available
      this.colors = this.options.colors || this.setDefaultColors(defaultPalette);
      this.length = this.colors.length;

      // set PopUp size ratio (default 16/9 ratio)
      this.ratio = this.options.ratio || [16,9];

      // set color grid dimensions
      this.cellPerLine = this.options.cellPerLine || Math.ceil(Math.sqrt(this.length*this.ratio[0]/this.ratio[1]));
      this.cellPerColumn = Math.ceil(this.length/this.cellPerLine);
      this.overlayPadding = this.options.overlayPadding || 7;

      // set cell dimensions
      this.cellWidth = this.options.cellWidth || 17;
      this.cellHeight = this.options.cellHeight || 17;
      this.cellMargin = this.options.cellMargin || 4;

      // Render the color grid
      var overlayBody = document.getElementById(this.oOverlay.body.id);
      var colorGrid = this.renderColorGrid();
      overlayBody.appendChild(colorGrid);

      // Set overlay dimensions
      var width = (this.cellWidth + 2*this.cellMargin) * this.cellPerLine + (YAHOO.env.ua.ie == 6 ? 3*this.overlayPadding : 0);
      var height = (this.cellHeight + 2*this.cellMargin) * this.cellPerColumn + (YAHOO.env.ua.ie == 6 ? 3*this.overlayPadding : 0);

      Dom.setStyle(overlayBody, "width", width+"px");
      Dom.setStyle(overlayBody, "height", height+"px");
      Dom.setStyle(overlayBody, "padding", this.overlayPadding+"px");

      // Unsubscribe the event so this function is called only once
      this.button.unsubscribe("mousedown", this.renderPalette); 

      this.paletteRendered = true;
	},
	
	/**
	 * Set the colors to set in the picker 
	 * @param {int} index Index of the palette to use
	 * @return {Array} List of colors to choose from
	 */
	setDefaultColors: function(index) {
		return inputEx.ColorField.palettes[index-1];
	},
	      
	/**
	 * This creates a color grid
	 */
	renderColorGrid: function() {
	   var grid = inputEx.cn('div');
	   for(var i = 0 ; i < this.length ; i++) {
	      var square = inputEx.cn('div', {className: 'inputEx-ColorField-square'},{backgroundColor: this.colors[i], width:this.cellWidth+"px", height:this.cellHeight+"px", margin:this.cellMargin+"px" });
	   	Event.addListener(square, "mousedown", this.onColorClick, this, true );
	   	grid.appendChild(square);
      }
	   return grid;
	},
	   
	/**
	 * Handle a color selection
	 * @param {Event} e The original click event
	 */
	onColorClick: function(e) {
	   
		var square = Event.getTarget(e);
		
		// Stop the event to prevent a selection
		Event.stopEvent(e);
	   		   	
	   // Overlay closure
      this.oOverlay.hide();
       
	   // SetValue
		var color = Dom.getStyle(square,'background-color');
		var hexaColor = inputEx.ColorField.ensureHexa(color);
	   this.setValue(hexaColor);
	},
	
	/**
	 * Set the value
	 * @param {String} value Color to set
	 * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
	 */
	setValue: function(value, sendUpdatedEvt) {
	   this.el.value = value;
	   Dom.setStyle(this.colorEl, 'background-color', this.el.value);

		// Call Field.setValue to set class and fire updated event
		inputEx.ColorField.superclass.setValue.call(this,value, sendUpdatedEvt);
	},
	   
	/**
	 * Return the color value
	 * @return {String} Color value
	 */
	getValue: function() {
	   return this.el.value;
	},
	
	/**
	 * Call overlay when field is removed
	 */
	close: function() {
	  this.oOverlay.hide();
	}
	  
}); 
	
// Specific message for the container
inputEx.messages.selectColor = "Select a color :";
	
/**
 * Default palettes
 */
inputEx.ColorField.palettes = [
   ["#FFEA99","#FFFF66","#FFCC99","#FFCAB2","#FF99AD","#FFD6FF","#FF6666","#E8EEF7","#ADC2FF","#ADADFF","#CCFFFF","#D6EAAD","#B5EDBC","#CCFF99"],
   ["#DEDFDE","#FFFF6B","#EFCB7B","#FFBE94","#FFB6B5","#A5E3FF","#A5CBFF","#99ABEF","#EFB2E7","#FF9AAD","#94E7C6","#A5FFD6","#CEFFA5","#E7EF9C","#FFE38C"],
   ["#000000","#993300","#333300","#003300","#003366","#000080","#333399","#333333","#800000","#FF6600","#808000","#008000","#008080","#0000FF","#666699","#808080","#FF0000","#FF9900","#99CC00","#339966","#33CCCC","#3366FF","#800080","#969696","#FF00FF","#FFCC00","#FFFF00","#00FF00","#00FFFF","#00CCFF","#993366","#C0C0C0","#FF99CC","#FFCC99","#FFFF99","#CCFFCC","#CCFFFF","#99CCFF","#CC99FF","#F0F0F0"],
   ["#FFFFCC","#FFFF99","#CCFFCC","#CCFF66","#99FFCC","#CCFFFF","#66CCCC","#CCCCFF","#99CCFF","#9999FF","#6666CC","#9966CC","#CC99FF","#FFCCFF","#FF99FF","#CC66CC","#FFCCCC","#FF99CC","#FFCCCC","#CC6699","#FF9999","#FF9966","#FFCC99","#FFFFCC","#FFCC66","#FFFF99","#CCCC66"],
   ["#D0D0D0","#31A8FA","#8EC1E5","#58D7CF","#89E2BB","#A7F7F8","#F6B77C","#FE993F","#FE6440","#F56572","#FA9AA3","#F7B1CA","#E584AF","#D1C3EF","#AB77B8","#C69FE7","#90D28A","#C2F175","#EDEA9A","#F3DF70","#F8D1AE","#F98064","#F54F5E","#EC9099","#F0B5BA","#EDA0BB","#D375AC","#BC8DBE","#8C77B8"],
   // idem in pastel tone (colors above with opacity 0.6 on white background)
   ["#EEEEEE","#84CBFC","#BCDAF0","#9BE7E3","#B9EED7","#CBFBFB","#FAD4B1","#FFC28C","#FFA28D","#F9A3AB","#FCC3C8","#FBD1E0","#F0B6CF","#E4DBF6","#CDAED5","#DDC6F1","#BDE4B9","#DBF7AD","#F5F3C3","#F8ECAA","#FBE4CF","#FCB3A2","#F9969F","#F4BDC2","#F6D3D6","#F5C6D7","#E5ADCE","#D7BBD8","#BAAED5"]
];	

//  -> ensure color has hexadecimal format like "#FF8E00"
inputEx.ColorField.ensureHexa = function (color) {
   var rgb, hexaColor;
   
   // remove spaces
   color = color.replace(/\s/g, "");
   
   // Firefox, Safari
   //   -> format "rgb(255,143,28)"
   if (!!color.match(/^rgb\((?:\d{1,3},){2}\d{1,3}\)$/)) {
      
	   // Convert integer (int or string) to hexadecimal (2 chars)
	   //   ex: "214" -> "d6"
      var DecToHex = function(dec) {
         var r = parseInt(dec,10).toString(16);
         if (r.length == 1) r = "0"+r;
         return r;
      };
   
      rgb = color.split(/([(,)])/);
      hexaColor = '#'+DecToHex(rgb[2])+DecToHex(rgb[4])+DecToHex(rgb[6]);
   
   // IE, Opera
   //   -> format "#FE6D34"
   } else if (!!color.match(/^#[\da-fA-F]{6}$/)) {
      hexaColor = color;
      
   } else {
      // defaults to white if invalid color
      hexaColor = "#FFFFFF";
   }
   
   return hexaColor;
};

/**
 * Register this class as "color" type
 */
inputEx.registerType("color", inputEx.ColorField);
	
})();(function() {
	
   var inputEx = YAHOO.inputEx, lang = YAHOO.lang, Event = YAHOO.util.Event, Dom = YAHOO.util.Dom;
	
/**
 * @class A Date Field. 
 * @extends inputEx.StringField
 * @constructor
 * @param {Object} options Add the folowing options: 
 * <ul>
 *	   <li>dateFormat: default to 'm/d/Y'</li>
 * </ul>
 */
inputEx.DateField = function(options) {
	inputEx.DateField.superclass.constructor.call(this,options);
};
	
lang.extend(inputEx.DateField, inputEx.StringField, 
/**
 * @scope inputEx.DateField.prototype   
 */   
{
	/**
	 * Adds the 'inputEx-DateField' default className
	 * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
	 */
   setOptions: function(options) {
   	inputEx.DateField.superclass.setOptions.call(this, options);
   	
   	// Overwrite options
   	this.options.className = options.className ? options.className : 'inputEx-Field inputEx-DateField';
   	this.options.messages.invalid = inputEx.messages.invalidDate;
   	
   	// Added options
   	this.options.dateFormat = options.dateFormat || inputEx.messages.defaultDateFormat;
   },
	   
	/**
	 * Specific Date validation depending of the 'format' option
	 */
	validate: function() {
	   var value = this.el.value;
	   var ladate = value.split("/");
	   if( ladate.length != 3) { return false; }
	   if ( isNaN(parseInt(ladate[0],10)) || isNaN(parseInt(ladate[1],10)) || isNaN(parseInt(ladate[2],10))) { return false; }
	   var formatSplit = this.options.dateFormat.split("/");
	   var yearIndex = inputEx.indexOf('Y',formatSplit);
	   if (ladate[yearIndex].length!=4) { return false; } // Avoid 3-digits years...
	   var d = parseInt(ladate[ inputEx.indexOf('d',formatSplit) ],10);
	   var Y = parseInt(ladate[yearIndex],10);
	   var m = parseInt(ladate[ inputEx.indexOf('m',formatSplit) ],10)-1;
	   var unedate = new Date(Y,m,d);
	   var annee = unedate.getFullYear();
	   return ((unedate.getDate() == d) && (unedate.getMonth() == m) && (annee == Y));
	},
	
	   
	/**
	 * Format the date according to options.dateFormat
	 * @param {Date} val Date to set
	 * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
	 */
	setValue: function(val, sendUpdatedEvt) {
	
	   // Don't try to parse a date if there is no date
	   if( val === '' ) {
	      inputEx.DateField.superclass.setValue.call(this, '', sendUpdatedEvt);
	      return;
	   }
	   var str = "";
	   // DATETIME
	   if (val instanceof Date) {
	      str = this.options.dateFormat.replace('Y',val.getFullYear());
	      var m = val.getMonth()+1;
	      str = str.replace('m', ((m < 10)? '0':'')+m);
	      var d = val.getDate();
	      str = str.replace('d', ((d < 10)? '0':'')+d);
	   } 
	   // else date must match this.options.dateFormat
	   else {
	     str = val;
	   }
	
	   inputEx.DateField.superclass.setValue.call(this, str, sendUpdatedEvt);
	},
	   
	/**
	 * Return value in DATETIME format (use getFormattedValue() to have 04/10/2002-like format)
	 * @return {Date} The javascript Date object
	 */
	getValue: function() {
	   // let parent class function check if typeInvite, etc...
	   var value = inputEx.DateField.superclass.getValue.call(this);

	   // Hack to validate if field not required and empty
	   if (value === '') { return '';}
	   
	   //var ladate = this.el.value.split("/");
	   var ladate = value.split("/");
	   var formatSplit = this.options.dateFormat.split('/');
	   var d = parseInt(ladate[ inputEx.indexOf('d',formatSplit) ],10);
	   var Y = parseInt(ladate[ inputEx.indexOf('Y',formatSplit) ],10);
	   var m = parseInt(ladate[ inputEx.indexOf('m',formatSplit) ],10)-1;
	   return (new Date(Y,m,d));
	}

});
	
// Specific message for the container
inputEx.messages.invalidDate = "Invalid date, ex: 03/27/2008";
	
/**
 * Register this class as "date" type
 */
inputEx.registerType("date", inputEx.DateField);
	
})();(function() {

   var inputEx = YAHOO.inputEx, lang = YAHOO.lang, Event = YAHOO.util.Event;

/**
 * @class inputEx.DateSplitField
 * @extends inputEx.CombineField
 */
inputEx.DateSplitField = function(options) {
   	
   if(!options.dateFormat) {options.dateFormat = inputEx.messages.defaultDateFormat; }
   
   var formatSplit = options.dateFormat.split("/");
   this.yearIndex = inputEx.indexOf('Y',formatSplit);
   this.monthIndex = inputEx.indexOf('m',formatSplit);
   this.dayIndex = inputEx.indexOf('d',formatSplit);
   
   options.fields = [];
   for(var i = 0 ; i < 3 ; i++) {
      if(i == this.dayIndex) {
         options.fields.push({type: 'integer', inputParams: { typeInvite: inputEx.messages.dayTypeInvite, size: 2} });
      }
      else if(i == this.yearIndex) {
         options.fields.push({type: 'integer', inputParams: { typeInvite: inputEx.messages.yearTypeInvite, size: 4} });
      }
      else {
         options.fields.push({type: 'integer', inputParams: {typeInvite: inputEx.messages.monthTypeInvite, size: 2} });
      }
   }

   options.separators = options.separators || [false,"&nbsp;","&nbsp;",false];
   
	inputEx.DateSplitField.superclass.constructor.call(this,options);

   this.initAutoTab();
};

lang.extend(inputEx.DateSplitField, inputEx.CombineField, {
   
   /**
	 * Set the value. Format the date according to options.dateFormat
	 * @param {Date} val Date to set
	 * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
	 */
   setValue: function(value, sendUpdatedEvt) {
      var values = [];
      
      // !value catches "" (empty field), and invalid dates
      if(!value || !lang.isFunction(value.getTime) || !lang.isNumber(value.getTime()) ) {
         values[this.monthIndex] = "";
         values[this.yearIndex] = "";
         values[this.dayIndex] = "";
      } else {
         for(var i = 0 ; i < 3 ; i++) {
            values.push( i == this.dayIndex ? value.getDate() : (i==this.yearIndex ? value.getFullYear() : value.getMonth()+1 ) );
         }
      }
      inputEx.DateSplitField.superclass.setValue.call(this, values, sendUpdatedEvt);
   },
   
   getValue: function() {
      if (this.isEmpty()) return "";
      
      var values = inputEx.DateSplitField.superclass.getValue.call(this);
      
      return new Date(values[this.yearIndex], values[this.monthIndex]-1, values[this.dayIndex] );
   },
   
   validate: function() {
      var subFieldsValidation = inputEx.DateSplitField.superclass.validate.call(this);
      if (!subFieldsValidation) return false;
      
      var values = inputEx.DateSplitField.superclass.getValue.call(this);
      var day = values[this.dayIndex];
      var month = values[this.monthIndex];
      var year = values[this.yearIndex];
      
      var val = this.getValue();
      //console.log("datesplit value = ",val);
      
      // 3 empty fields
      if (val == "") return true;
      
      // if a field is empty, it will be set by default (day : 31, month:12, year: 1899/1900)
      //   -> val == "" MUST be checked first !
      if (day == "" || month == "" || year == "") return false;
      
      if (year < 0 || year > 9999 || day < 1 || day > 31 || month < 1 || month > 12) return false;
      
      // val == any date -> true
      // val == "Invalid Date" -> false
      return (val != "Invalid Date");
   },
   
	isEmpty: function() {
	   var values = inputEx.DateSplitField.superclass.getValue.call(this);
	   return (values[this.monthIndex] == "" && values[this.yearIndex] == "" &&  values[this.dayIndex] == "");
	},
	
	initAutoTab: function() {
	   // "keypress" event codes for numeric keys (keyboard & numpad) 
	   //  (warning : "keydown" codes are different with numpad)
	   var numKeyCodes = [48,49,50,51,52,53,54,55,56,57];
	   
      // verify charCode (don't auto tab when pressing "tab", "arrow", etc...)
	   var checkNumKey = function(charCode) {
   	   for (var i=0, length=numKeyCodes.length; i < length; i++) {
   	      if (charCode == numKeyCodes[i]) return true;
   	   }
   	   return false;       
	   };
	   
	   // Function that checks charCode and execute tab action
	   var that = this;
	   var autoTab = function(inputIndex) {
         // later to let input update its value
   	   lang.later(0, that, function() {
      	   var input = that.inputs[inputIndex];
      	   
      	   // check input.el.value (string) because getValue doesn't work
      	   // example : if input.el.value == "06", getValue() == 6 (length == 1 instead of 2)
      	   if (input.el.value.length == input.options.size) {
      	      that.inputs[inputIndex+1].focus();
      	   }
   	   });
	   };
	   
	   // add listeners on inputs
	   Event.addListener(this.inputs[0].el, "keypress", function(e) {
	      if (checkNumKey(Event.getCharCode(e))) {
            autoTab(0);
         }
   	}, this, true);
	   Event.addListener(this.inputs[1].el, "keypress", function(e) {
	      if (checkNumKey(Event.getCharCode(e))) {
            autoTab(1);
         }
   	}, this, true);
	}
   
});

inputEx.messages.monthTypeInvite = "Month";
inputEx.messages.dayTypeInvite = "Day";
inputEx.messages.yearTypeInvite = "Year";

/**
* Register this class as "birthdate" type
*/
inputEx.registerType("datesplit", inputEx.DateSplitField);

})();(function() {

   var inputEx = YAHOO.inputEx, lang = YAHOO.lang, Event = YAHOO.util.Event, Dom = YAHOO.util.Dom;

/**
 * @class A DatePicker Field.
 * @extends inputEx.DateField
 * @constructor
 * @param {Object} options No added option for this field (same as DateField)
 * <ul>
 *   <li>calendar: yui calendar configuration object</li>
 * </ul>
 */
inputEx.DatePickerField = function(options) {
   inputEx.DatePickerField.superclass.constructor.call(this,options);
};

lang.extend(inputEx.DatePickerField, inputEx.DateField, 
/**
 * @scope inputEx.DatePickerField.prototype   
 */   
{
   /**
    * Set the default date picker CSS classes
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
   setOptions: function(options) {
      inputEx.DatePickerField.superclass.setOptions.call(this, options);
      
      // Overwrite options
      this.options.className = options.className ? options.className : 'inputEx-Field inputEx-DateField inputEx-PickerField inputEx-DatePickerField';
      this.options.readonly = true;
      
      // Added options
      this.options.calendar = options.calendar || inputEx.messages.defautCalendarOpts;
   },
   
   /**
    * Render the input field and the minical container
    */
   renderComponent: function() {
      
      inputEx.DatePickerField.superclass.renderComponent.call(this);
      
      
      // Create overlay
      this.oOverlay = new YAHOO.widget.Overlay(Dom.generateId(), { visible: false });
      this.oOverlay.setBody(" ");
      this.oOverlay.body.id = Dom.generateId();
      
      // Create button
      this.button = new YAHOO.widget.Button({ type: "menu", menu: this.oOverlay, label: "&nbsp;&nbsp;&nbsp;&nbsp;" });       
      this.button.appendTo(this.wrapEl);
            
      // Render the overlay
      this.oOverlay.render(this.wrapEl);
      // HACK: Set position absolute to the overlay
      Dom.setStyle(this.oOverlay.body.parentNode, "position", "absolute");
      
      
      Event.addListener(this.el,'click',function(){
         // calendar may not have been rendered yet
         this.renderCalendar();
         
         if (!this.oOverlay.justHidden) {
            this.button._showMenu();
         }
      },this,true);
      
      this.oOverlay.hideEvent.subscribe(function() {
         this.oOverlay.justHidden = true;
         YAHOO.lang.later(250,this,function(){this.oOverlay.justHidden=false;});
      },this,true);
      
      
      // Subscribe to the first click
      this.button.on('click', this.renderCalendar, this, true);
   },

   
   /**
    * Called ONCE to render the calendar lazily
    */
   renderCalendar: function() {
      // if already rendered, ignore call
      if (!!this.calendarRendered) return;
      
      // Render the calendar
      var calendarId = Dom.generateId();
      this.calendar = new YAHOO.widget.Calendar(calendarId,this.oOverlay.body.id, this.options.calendar );
      
      
      /*
      this.calendar.cfg.setProperty("DATE_FIELD_DELIMITER", "/");
      this.calendar.cfg.setProperty("MDY_DAY_POSITION", 1);
      this.calendar.cfg.setProperty("MDY_MONTH_POSITION", 2);
      this.calendar.cfg.setProperty("MDY_YEAR_POSITION", 3);
      this.calendar.cfg.setProperty("MD_DAY_POSITION", 1);
      this.calendar.cfg.setProperty("MD_MONTH_POSITION", 2);*/

      // localization
      if(inputEx.messages.shortMonths) this.calendar.cfg.setProperty("MONTHS_SHORT", inputEx.messages.shortMonths);
      if(inputEx.messages.months) this.calendar.cfg.setProperty("MONTHS_LONG", inputEx.messages.months);
      if(inputEx.messages.weekdays1char) this.calendar.cfg.setProperty("WEEKDAYS_1CHAR", inputEx.messages.weekdays1char);
      if(inputEx.messages.shortWeekdays) this.calendar.cfg.setProperty("WEEKDAYS_SHORT", inputEx.messages.shortWeekdays);
      
      // HACK to keep focus on calendar/overlay 
      // so overlay is not hidden when changing page in calendar
      // (inspired by YUI examples)
      var focusDay = function () {

         var oCalendarTBody = Dom.get(calendarId).tBodies[0],
            aElements = oCalendarTBody.getElementsByTagName("a"),
            oAnchor;

         if (aElements.length > 0) {
         
            Dom.batch(aElements, function (element) {
               if (Dom.hasClass(element.parentNode, "today")) {
                  oAnchor = element;
               }
            });
            
            if (!oAnchor) {
               oAnchor = aElements[0];
            }

            // Focus the anchor element using a timer since Calendar will try 
            // to set focus to its next button by default
            
            lang.later(0, oAnchor, function () {
               try {
                  oAnchor.focus();
               }
               catch(e) {}
            });
         
         }
         
      };

      // Set focus to either the current day, or first day of the month in 
      // the Calendar when the month changes (renderEvent is fired)
      this.calendar.renderEvent.subscribe(focusDay, this.calendar, true);
      
      // Open minical on correct date / month if field contains a value
      this.oOverlay.beforeShowEvent.subscribe(this.beforeShowOverlay, this, true);
      
      // Render the calendar on the right page !
      //    ->  this.calendar.render(); is not enough...
      this.beforeShowOverlay();
      
      this.calendar.selectEvent.subscribe(function (type,args,obj) {
         // Horrible HACK
         // stop here if called from beforeShowOverlay
         if (!!this.ignoreNextSelectEvent) {
             this.ignoreNextSelectEvent = false;
             return;
         }
         
         this.oOverlay.hide();
         var date = args[0][0];
         var year = date[0], month = date[1], day = date[2];
         
         // set value (updatedEvt fired by setValue)
         this.setValue(new Date(year,month-1, day) );
         
      }, this, true);
      
      // Unsubscribe the event so this function is called only once
      this.button.unsubscribe("click", this.renderCalendar); 
      
      this.calendarRendered = true;
   },
   
   // Select the right date and display the right page on calendar, when the field has a value
   beforeShowOverlay: function() {
      var date = this.getValue();
      if (!!date && !!this.calendar) {
         
         // Horrible HACK (don't fire Field updatedEvt when selecting date)
         this.ignoreNextSelectEvent = true;
         // select the previous date in calendar
         this.calendar.select(date);
         
         this.calendar.cfg.setProperty("pagedate",(date.getMonth()+1)+"/"+date.getFullYear());
         this.calendar.render(); // refresh calendar
      }
   }
   
});

inputEx.messages.defautCalendarOpts = { navigator: true };

/**
 * Register this class as "datepicker" type
 */
inputEx.registerType("datepicker", inputEx.DatePickerField);

})();(function() {

   var inputEx = YAHOO.inputEx;

/**
 * @class Field that adds the email regexp for validation. Result is always lower case.
 * @extends inputEx.StringField
 * @constructor
 * @param {Object} options inputEx.Field options object
 */
inputEx.EmailField = function(options) {
   inputEx.EmailField.superclass.constructor.call(this,options);
};
YAHOO.lang.extend(inputEx.EmailField, inputEx.StringField, 
/**
 * @scope inputEx.EmailField.prototype   
 */   
{
   
   /**
    * Set the email regexp and invalid message
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
   setOptions: function(options) {
      inputEx.EmailField.superclass.setOptions.call(this, options);
      // Overwrite options
      this.options.messages.invalid = inputEx.messages.invalidEmail;
      this.options.regexp = inputEx.regexps.email;
   },
   
   /**
    * Set the value to lower case since email have no case
    * @return {String} The email string
    */
   getValue: function() {
      return this.el.value.toLowerCase();
   }

});
   
// Specific message for the email field
inputEx.messages.invalidEmail = "Invalid email, ex: sample@test.com";

/**
 * Register this class as "email" type
 */
inputEx.registerType("email", inputEx.EmailField);

})();(function() {

   var inputEx = YAHOO.inputEx;

/**
 * @class Create a hidden input, inherits from inputEx.Field
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options inputEx.Field options object
 */
inputEx.HiddenField = function(options) {
	inputEx.HiddenField.superclass.constructor.call(this,options);
};

YAHOO.lang.extend(inputEx.HiddenField, inputEx.Field, 
/**
 * @scope inputEx.HiddenField.prototype   
 */   
{
   
   /**
    * Doesn't render much...
    */
   render: function() {
      this.type = inputEx.HiddenField;
	   this.divEl = inputEx.cn('div', null, {display: 'none'});
	   
	   this.el = inputEx.cn('input', {type: 'hidden'});
	   if(this.options.name) this.el.name = this.options.name;
	   this.divEl.appendChild(this.el);
   },

   /**
    * Stores the value in a local variable
    * @param {Any} val The value to set
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */
   setValue: function(val, sendUpdatedEvt) {
      this.el.value = val;

      // Call Field.setValue to set class and fire updated event
		inputEx.HiddenField.superclass.setValue.call(this,val, sendUpdatedEvt);
   },

   /**
    * Get the previously stored value
    * @return {Any} the previously stored value
    */
   getValue: function() {
      return this.el.value;
   }

});
   
/**
 * Register this class as "hidden" type
 */
inputEx.registerType("hidden", inputEx.HiddenField);

})();(function() {

   var inputEx = YAHOO.inputEx, lang = YAHOO.lang, Event = YAHOO.util.Event, Dom = YAHOO.util.Dom;

/**
 * @class Meta field providing in place editing (the editor appears when you click on the formatted value). 
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options Added options:
 * <ul>
 *   <li>visu</li>
 *   <li>editorField</li>
 *   <li>animColors</li>
 * </ul>
 */
inputEx.InPlaceEdit = function(options) {
   inputEx.InPlaceEdit.superclass.constructor.call(this, options);
};

lang.extend(inputEx.InPlaceEdit, inputEx.Field, 
/**
 * @scope inputEx.InPlaceEdit.prototype   
 */   
{
   /**
    * Set the default values of the options
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
   setOptions: function(options) {
      inputEx.InPlaceEdit.superclass.setOptions.call(this, options);
      
      this.options.animColors = options.animColors || {from: '#ffff99' , to: '#ffffff'};
      /*this.options.formatDom = options.formatDom;
      this.options.formatValue = options.formatValue;*/
      this.options.visu = options.visu;
      this.options.editorField = options.editorField;
   },

   /**
    * Override renderComponent to create 2 divs: the visualization one, and the edit in place form
    */
   renderComponent: function() {
      this.renderVisuDiv();
	   this.renderEditor();
   },
   
   /**
    * Render the editor
    */
   renderEditor: function() {
      
      this.editorContainer = inputEx.cn('div', {className: 'inputEx-InPlaceEdit-editor'}, {display: 'none'});
      
      // Render the editor field
      this.editorField = inputEx.buildField(this.options.editorField);
   
      this.editorContainer.appendChild( this.editorField.getEl() );
      Dom.setStyle(this.editorField.getEl(), 'float', 'left');
      
      this.okButton = inputEx.cn('input', {type: 'button', value: inputEx.messages.okEditor, className: 'inputEx-InPlaceEdit-OkButton'});
      Dom.setStyle(this.okButton, 'float', 'left');
      this.editorContainer.appendChild(this.okButton);
      
      this.cancelLink = inputEx.cn('a', {className: 'inputEx-InPlaceEdit-CancelLink'}, null, inputEx.messages.cancelEditor);
      this.cancelLink.href = ""; // IE required (here, not in the cn fct)
      Dom.setStyle(this.cancelLink, 'float', 'left');
      this.editorContainer.appendChild(this.cancelLink);
      
      // Line breaker
      this.editorContainer.appendChild( inputEx.cn('div',null, {clear: 'both'}) );
      
      //this.divEl.appendChild(this.editorContainer);
      this.fieldContainer.appendChild(this.editorContainer);
      
   },
   
   /**
    * Set the color when hovering the field
    * @param {Event} e The original mouseover event
    */
   onVisuMouseOver: function(e) {
      if(this.colorAnim) {
         this.colorAnim.stop(true);
      }
      inputEx.sn(this.formattedContainer, null, {backgroundColor: this.options.animColors.from });
   },
   
   /**
    * Start the color animation when hovering the field
    * @param {Event} e The original mouseout event
    */
   onVisuMouseOut: function(e) {
      // Start animation
      if(this.colorAnim) {
         this.colorAnim.stop(true);
      }
      this.colorAnim = new YAHOO.util.ColorAnim(this.formattedContainer, {backgroundColor: this.options.animColors}, 1);
      this.colorAnim.onComplete.subscribe(function() { Dom.setStyle(this.formattedContainer, 'background-color', ''); }, this, true);
      this.colorAnim.animate();   
   },
   
   /**
    * Create the div that will contain the visualization of the value
    */
   renderVisuDiv: function() {
      this.formattedContainer = inputEx.cn('div', {className: 'inputEx-InPlaceEdit-visu'});
      
      if( lang.isFunction(this.options.formatDom) ) {
         this.formattedContainer.appendChild( this.options.formatDom(this.options.value) );
      }
      else if( lang.isFunction(this.options.formatValue) ) {
         this.formattedContainer.innerHTML = this.options.formatValue(this.options.value);
      }
      else {
         this.formattedContainer.innerHTML = lang.isUndefined(this.options.value) ? inputEx.messages.emptyInPlaceEdit: this.options.value;
      }
      
      this.fieldContainer.appendChild(this.formattedContainer);
      
   },

   /**
    * Adds the events for the editor and color animations
    */
   initEvents: function() {  
      Event.addListener(this.formattedContainer, "click", this.openEditor, this, true);
            
      // For color animation
      Event.addListener(this.formattedContainer, 'mouseover', this.onVisuMouseOver, this, true);
      Event.addListener(this.formattedContainer, 'mouseout', this.onVisuMouseOut, this, true);
         
      // Editor: 
      Event.addListener(this.okButton, 'click', this.onOkEditor, this, true);
      Event.addListener(this.cancelLink, 'click', this.onCancelEditor, this, true);
         
      if(this.editorField.el) {
         // Register some listeners
         Event.addListener(this.editorField.el, "keyup", this.onKeyUp, this, true);
         Event.addListener(this.editorField.el, "keydown", this.onKeyDown, this, true);
      }
   },
   
   /**
    * Handle some keys events to close the editor
    * @param {Event} e The original keyup event
    */
   onKeyUp: function(e) {
      // Enter
      if( e.keyCode == 13) {
         this.onOkEditor();
      }
      // Escape
      if( e.keyCode == 27) {
         this.onCancelEditor(e);
      }
   },
   
   /**
    * Handle the tabulation key to close the editor
    * @param {Event} e The original keydown event
    */
   onKeyDown: function(e) {
      // Tab
      if(e.keyCode == 9) {
         this.onOkEditor();
      }
   },
   
   /**
    * Validate the editor (ok button, enter key or tabulation key)
    */
   onOkEditor: function() {
      var newValue = this.editorField.getValue();
      this.setValue(newValue);
      
      this.editorContainer.style.display = 'none';
      this.formattedContainer.style.display = '';
      
      var that = this;
      setTimeout(function() {that.updatedEvt.fire(newValue);}, 50);      
   },

   
   /**
    * Close the editor on cancel (cancel button, blur event or escape key)
    * @param {Event} e The original event (click, blur or keydown)
    */
   onCancelEditor: function(e) {
      Event.stopEvent(e);
      this.editorContainer.style.display = 'none';
      this.formattedContainer.style.display = '';
   },
   
   /**
    * Display the editor
    */
   openEditor: function() {
      var value = this.getValue();
      this.editorContainer.style.display = '';
      this.formattedContainer.style.display = 'none';
   
      if(!lang.isUndefined(value)) {
         this.editorField.setValue(value);   
      }
      
      // Set focus in the element !
      this.editorField.focus();
   
      // Select the content
      if(this.editorField.el && lang.isFunction(this.editorField.el.setSelectionRange) && (!!value && !!value.length)) {
         this.editorField.el.setSelectionRange(0,value.length);
      }
      
   },
   
   /**
    * Returned the previously stored value
    * @return {Any} The value of the subfield
    */
   getValue: function() {
      var editorOpened = (this.editorContainer.style.display == '');
	   return editorOpened ? this.editorField.getValue() : this.value;
   },

   /**
    * Set the value and update the display
    * @param {Any} value The value to set
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */
   setValue: function(value, sendUpdatedEvt) {   
      // Store the value
	   this.value = value;
   
      if(lang.isUndefined(value) || value == "") {
         inputEx.renderVisu(this.options.visu, inputEx.messages.emptyInPlaceEdit, this.formattedContainer);
      }
      else {
         inputEx.renderVisu(this.options.visu, this.value, this.formattedContainer);
      }
      
      // If the editor is opened, update it 
      if(this.editorContainer.style.display == '') {
         this.editorField.setValue(value);
      }
      
      inputEx.InPlaceEdit.superclass.setValue.call(this, value, sendUpdatedEvt);
   },
   
   /**
    * Close the editor when calling the close function on this field
    */
   close: function() {
      this.editorContainer.style.display = 'none';
      this.formattedContainer.style.display = '';
	}

});
  
inputEx.messages.emptyInPlaceEdit = "(click to edit)";
inputEx.messages.cancelEditor = "cancel";
inputEx.messages.okEditor = "Ok";

/**
 * Register this class as "inplaceedit" type
 */
inputEx.registerType("inplaceedit", inputEx.InPlaceEdit);

})();(function() {

   var inputEx = YAHOO.inputEx, lang = YAHOO.lang, Event = YAHOO.util.Event;

/**
 * @class A field limited to number inputs
 * @extends inputEx.StringField
 * @constructor
 * @param {Object} options Added options:
 * <ul>
 *    <li>negative: boolean indicating if we accept boolean numbers</li>
 * </ul>
 */
inputEx.IntegerField = function(options) {
   inputEx.IntegerField.superclass.constructor.call(this,options);
};
YAHOO.lang.extend(inputEx.IntegerField, inputEx.StringField, 
/**
 * @scope inputEx.IntegerField.prototype   
 */
{
   /**
    * Adds the negative option
    * @method setOptions
    * @param {Object} options
    */
   setOptions: function(options) {
      inputEx.IntegerField.superclass.setOptions.call(this, options);
      
      this.options.negative = lang.isUndefined(options.negative) ? false : options.negative;
   },
   
   /**
    * Get the value
    * @return {int} The integer value
    */
   getValue: function() {
      // don't return NaN if empty field
      if ((this.options.typeInvite && this.el.value == this.options.typeInvite) || this.el.value == '') {
         return '';
      }
      
      return parseInt(this.el.value, 10);
   },
   
   /**
    * Validate  if is a number
    * @method validate
    */
   validate: function() {
      var v = this.getValue();
      
      // empty field is OK
      if (v == "") return true;
      
      if(isNaN(v)) return false;
      return !!this.el.value.match(new RegExp(this.options.negative ? "^[+-]?[0-9]*$" : "^\\+?[0-9]*$") );
   }
   
});

/**
 * Register this class as "integer" type
 */
inputEx.registerType("integer", inputEx.IntegerField);

})();(function() {
	
   var inputEx = YAHOO.inputEx, lang = YAHOO.lang, Event = YAHOO.util.Event, Dom = YAHOO.util.Dom;
	
/**
 * @class   Meta field to create a list of other fields
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options Added options:
 * <ul>
 *   <li>sortable: Add arrows to sort the items if true (default false)</li>
 *   <li>elementType: an element type definition (default is {type: 'string'})</li>
 *   <li>useButtons: use buttons instead of links (default false)</li>
 *   <li>unique: require values to be unique (default false)</li>
 *   <li>listAddLabel: if useButtons is false, text to add an item</li>
 *   <li>listRemoveLabel: if useButtons is false, text to remove an item</li>
 * </ul>
 */
inputEx.ListField = function(options) {
	   
   /**
    * List of all the subField instances
    */
   this.subFields = [];
	   
   inputEx.ListField.superclass.constructor.call(this, options);
};
lang.extend(inputEx.ListField,inputEx.Field, 
/**
 * @scope inputEx.ListField.prototype   
 */   
{
	   
	/**
	 * Set the ListField classname
	 * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
	 */
	setOptions: function(options) {
	   inputEx.ListField.superclass.setOptions.call(this, options);
	   
	   this.options.className = options.className ? options.className : 'inputEx-Field inputEx-ListField';
	   
	   this.options.sortable = lang.isUndefined(options.sortable) ? false : options.sortable;
	   this.options.elementType = options.elementType || {type: 'string'};
	   this.options.useButtons = lang.isUndefined(options.useButtons) ? false : options.useButtons;
	   this.options.unique = lang.isUndefined(options.unique) ? false : options.unique;
	   
	   this.options.listAddLabel = options.listAddLabel || inputEx.messages.listAddLink;
	   this.options.listRemoveLabel = options.listRemoveLabel || inputEx.messages.listRemoveLink;
	},
	   
	/**
	 * Render the addButton 
	 */
	renderComponent: function() {
	      
	   // Add element button
	   if(this.options.useButtons) {
	      this.addButton = inputEx.cn('img', {src: inputEx.spacerUrl, className: 'inputEx-ListField-addButton'});
	      this.fieldContainer.appendChild(this.addButton);
      }
	      
	   // List label
	   this.fieldContainer.appendChild( inputEx.cn('span', null, {marginLeft: "4px"}, this.options.listLabel) );
	      
	   // Div element to contain the children
	   this.childContainer = inputEx.cn('div', {className: 'inputEx-ListField-childContainer'});
	   this.fieldContainer.appendChild(this.childContainer);
	   
	   // Add link
	   if(!this.options.useButtons) {
	      this.addButton = inputEx.cn('a', {className: 'inputEx-List-link'}, null, this.options.listAddLabel);
	      this.fieldContainer.appendChild(this.addButton);
      }
	},
	   
	/**
	 * Handle the click event on the add button
	 */
	initEvents: function() {
	   Event.addListener(this.addButton, 'click', this.onAddButton, this, true);
	},
	
	/**
    * Validate each field
    * @returns {Boolean} true if all fields validate, required fields are not empty and unique constraint (if specified) is not violated
    */
   validate: function() {
      var response = true;
      var uniques = {};

      // Validate all the sub fields
      for (var i = 0 ; i < this.subFields.length && response; i++) {
         var input = this.subFields[i];
         input.setClassFromState(); // update field classes (mark invalid fields...)
         var state = input.getState();
         if( state == inputEx.stateRequired || state == inputEx.stateInvalid ) {
            response = false; // but keep looping on fields to set classes
         }
         if(this.options.unique) {
            var hash = lang.dump(input.getValue());
            //logDebug('listfied index ',i, 'hash', hash);
            if(uniques[hash]) {
               response = false;    // not unique
            } else {
               uniques[hash] = true;
            }
          }
      }
      return response;
   },
	   
	/**
	 * Set the value of all the subfields
	 * @param {Array} value The list of values to set
	 * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
	 */
	setValue: function(value, sendUpdatedEvt) {
	   
	   if(!lang.isArray(value) ) {
	      // TODO: throw exceptions ?
	      return;
	   }
	      
	   // Set the values (and add the lines if necessary)
	   for(var i = 0 ; i < value.length ; i++) {
	      if(i == this.subFields.length) {
	         this.addElement(value[i]);
	      }
	      else {
	         this.subFields[i].setValue(value[i], false);
	      }
	   }
	      
	   // Remove additional subFields
	   var additionalElements = this.subFields.length-value.length;
	   if(additionalElements > 0) {
	      for(var i = 0 ; i < additionalElements ; i++) { 
	         this.removeElement(value.length);
	      }
	   };
	   
	   inputEx.ListField.superclass.setValue.call(this, value, sendUpdatedEvt);
	},
	   
	/**
	 * Return the array of values
	 * @return {Array} The array
	 */
	getValue: function() {
	   var values = [];
	   for(var i = 0 ; i < this.subFields.length ; i++) {
	      values[i] = this.subFields[i].getValue();
	   }
	   return values;
	},
	   
	/**
	 * Adds an element
	 * @param {Any} The initial value of the subfield to create
	 * @return {inputEx.Field} SubField added instance
	 */
	addElement: function(value) {
	
	   // Render the subField
	   var subFieldEl = this.renderSubField(value);
	      
	   // Adds it to the local list
	   this.subFields.push(subFieldEl);
	   
	   return subFieldEl;
	},
	
	/**
	 * Add a new element to the list and fire updated event
	 * @param {Event} e The original click event
	 */
	onAddButton: function(e) {
	   Event.stopEvent(e);
	   
	   // Add a field with no value: 
	   var subFieldEl = this.addElement();
	   
	   // Focus on this field
	   subFieldEl.focus();
	   
	   // Fire updated !
	   this.fireUpdatedEvt();
	},
	   
	/**
	 * Adds a new line to the List Field
 	 * @param {Any} The initial value of the subfield to create
	 * @return  {inputEx.Field} instance of the created field (inputEx.Field or derivative)
	 */
	renderSubField: function(value) {
	      
	   // Div that wraps the deleteButton + the subField
	   var newDiv = inputEx.cn('div');
	      
	   // Delete button
	   if(this.options.useButtons) {
	      var delButton = inputEx.cn('img', {src: inputEx.spacerUrl, className: 'inputEx-ListField-delButton'});
	      Event.addListener( delButton, 'click', this.onDelete, this, true);
	      newDiv.appendChild( delButton );
      }
	      
	   // Instanciate the new subField
	   var opts = lang.merge({}, this.options.elementType);
	   if(!opts.inputParams) opts.inputParams = {};
	   if(!lang.isUndefined(value)) opts.inputParams.value = value;
	   
	   var el = inputEx.buildField(opts);
	   
	   var subFieldEl = el.getEl();
	   Dom.setStyle(subFieldEl, 'margin-left', '4px');
	   Dom.setStyle(subFieldEl, 'float', 'left');
	   newDiv.appendChild( subFieldEl );
	   
	   // Subscribe the onChange event to resend it 
	   el.updatedEvt.subscribe(this.onChange, this, true);
	
	   // Arrows to order:
	   if(this.options.sortable) {
	      var arrowUp = inputEx.cn('div', {className: 'inputEx-ListField-Arrow inputEx-ListField-ArrowUp'});
	      Event.addListener(arrowUp, 'click', this.onArrowUp, this, true);
	      var arrowDown = inputEx.cn('div', {className: 'inputEx-ListField-Arrow inputEx-ListField-ArrowDown'});
	      Event.addListener(arrowDown, 'click', this.onArrowDown, this, true);
	      newDiv.appendChild( arrowUp );
	      newDiv.appendChild( arrowDown );
	   }
	   
	   // Delete link
	   if(!this.options.useButtons) {
	      var delButton = inputEx.cn('a', {className: 'inputEx-List-link'}, null, this.options.listRemoveLabel);
	      Event.addListener( delButton, 'click', this.onDelete, this, true);
	      newDiv.appendChild( delButton );
      }
	
	   // Line breaker
	   newDiv.appendChild( inputEx.cn('div', null, {clear: "both"}) );
	
	   this.childContainer.appendChild(newDiv);
	      
	   return el;
	},
	   
	/**
	 * Switch a subField with its previous one
	 * Called when the user clicked on the up arrow of a sortable list
	 * @param {Event} e Original click event
	 */
	onArrowUp: function(e) {
	   var childElement = Event.getTarget(e).parentNode;
	   
	   var previousChildNode = null;
	   var nodeIndex = -1;
	   for(var i = 1 ; i < childElement.parentNode.childNodes.length ; i++) {
	      var el=childElement.parentNode.childNodes[i];
	      if(el == childElement) {
	         previousChildNode = childElement.parentNode.childNodes[i-1];
	         nodeIndex = i;
	         break;
	      }
	   }
	   
	   if(previousChildNode) {
	      // Remove the line
	      var removedEl = this.childContainer.removeChild(childElement);
	      
	      // Adds it before the previousChildNode
	      var insertedEl = this.childContainer.insertBefore(removedEl, previousChildNode);
	      
	      // Swap this.subFields elements (i,i-1)
	      var temp = this.subFields[nodeIndex];
	      this.subFields[nodeIndex] = this.subFields[nodeIndex-1];
	      this.subFields[nodeIndex-1] = temp;
	      
	      // Color Animation
	      if(this.arrowAnim) {
	         this.arrowAnim.stop(true);
	      }
	      this.arrowAnim = new YAHOO.util.ColorAnim(insertedEl, {backgroundColor: { from: '#eeee33' , to: '#eeeeee' }}, 0.4);
	      this.arrowAnim.onComplete.subscribe(function() { Dom.setStyle(insertedEl, 'background-color', ''); });
	      this.arrowAnim.animate();
	      
	      // Fire updated !
	      this.fireUpdatedEvt();
	   }
	},
	
	/**
	 * Switch a subField with its next one
	 * Called when the user clicked on the down arrow of a sortable list
	 * @param {Event} e Original click event
	 */
	onArrowDown: function(e) {
	   var childElement = Event.getTarget(e).parentNode;
	   
	   var nodeIndex = -1;
	   var nextChildNode = null;
	   for(var i = 0 ; i < childElement.parentNode.childNodes.length ; i++) {
	      var el=childElement.parentNode.childNodes[i];
	      if(el == childElement) {
	         nextChildNode = childElement.parentNode.childNodes[i+1];
	         nodeIndex = i;
	         break;
	      }
	   }
	   
	   if(nextChildNode) {
	      // Remove the line
	      var removedEl = this.childContainer.removeChild(childElement);
	      // Adds it after the nextChildNode
	      var insertedEl = Dom.insertAfter(removedEl, nextChildNode);
	      
	      // Swap this.subFields elements (i,i+1)
	      var temp = this.subFields[nodeIndex];
	      this.subFields[nodeIndex] = this.subFields[nodeIndex+1];
	      this.subFields[nodeIndex+1] = temp;
	      
	      // Color Animation
	      if(this.arrowAnim) {
	         this.arrowAnim.stop(true);
	      }
	      this.arrowAnim = new YAHOO.util.ColorAnim(insertedEl, {backgroundColor: { from: '#eeee33' , to: '#eeeeee' }}, 1);
	      this.arrowAnim.onComplete.subscribe(function() { Dom.setStyle(insertedEl, 'background-color', ''); });
	      this.arrowAnim.animate();
	      
	      // Fire updated !
	      this.fireUpdatedEvt();
	   }
	},
	   
	/**
	 * Called when the user clicked on a delete button.
	 * @param {Event} e The original click event
	 */
	onDelete: function(e) {
	      
	   Event.stopEvent(e);
	      
	   // Get the wrapping div element
	   var elementDiv = Event.getTarget(e).parentNode;
	   
	   // Get the index of the subField
	   var index = -1;
	   
	   var subFieldEl = elementDiv.childNodes[this.options.useButtons ? 1 : 0];
	   for(var i = 0 ; i < this.subFields.length ; i++) {
	      if(this.subFields[i].getEl() == subFieldEl) {
	         index = i;
	         break;
	      }
	   }
	      
	   // Remove it
	   if(index != -1) {
	      this.removeElement(index);
	   }
	      
	   // Fire the updated event
	   this.fireUpdatedEvt();
	},
	   
	/**
	 * Remove the line from the dom and the subField from the list.
	 * @param {integer} index The index of the element to remove
	 */
	removeElement: function(index) {
	   var elementDiv = this.subFields[index].getEl().parentNode;
	      
	   this.subFields[index] = undefined;
	   this.subFields = inputEx.compactArray(this.subFields);
	      
	   // Remove the element
	   elementDiv.parentNode.removeChild(elementDiv);
	}
	
});
	
/**
 * Register this class as "list" type
 */
inputEx.registerType("list", inputEx.ListField);


inputEx.messages.listAddLink = "Add";
inputEx.messages.listRemoveLink = "remove";
	
})();(function() {

   var inputEx = YAHOO.inputEx, Event = YAHOO.util.Event, lang = YAHOO.lang;

/**
 * @class A field limited to number inputs (floating)
 * @extends inputEx.StringField
 * @constructor
 * @param {Object} options inputEx.Field options object
 */
inputEx.NumberField = function(options) {
   inputEx.NumberField.superclass.constructor.call(this,options);
};
YAHOO.lang.extend(inputEx.NumberField, inputEx.StringField, 
/**
 * @scope inputEx.NumberField.prototype   
 */
{
   /**
    * Return a parsed float (javascript type number)
    * @return {Number} The parsed float
    */
   getValue: function() {
      // don't return NaN if empty field
      if ((this.options.typeInvite && this.el.value == this.options.typeInvite) || this.el.value == '') {
         return '';
      }
      
      return parseFloat(this.el.value);
   },
   
   /**
    * Check if the entered number is a float
    */
   validate: function() { 
      var v = this.getValue();
      
      // empty field is OK
      if (v == "") return true;
      
      if(isNaN(v)) return false;
	   
	   // We have to check the number with a regexp, otherwise "0.03a" is parsed to a valid number 0.03
	   return !!this.el.value.match(/^([\+\-]?((([0-9]+(\.)?)|([0-9]*\.[0-9]+))([eE][+-]?[0-9]+)?))$/);
   }

});

/**
 * Register this class as "number" type
 */
inputEx.registerType("number", inputEx.NumberField);

})();(function() {
	
   var inputEx = YAHOO.inputEx;
	
/**
 * @class A meta field to put 2 fields on the same line
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options Added options:
 * <ul>
 *    <li>leftFieldOptions: the left field type definition object (same as groups)</li>
 *    <li>rightFieldOptions: the right field type definition object (same as groups)</li>
 * </ul>
 */
inputEx.PairField = function(options) {
   options.fields = [options.leftFieldOptions || {}, options.rightFieldOptions || {}];
   options.separators = [false, " : ", false];
   inputEx.PairField.superclass.constructor.call(this, options);
};
	
YAHOO.lang.extend( inputEx.PairField, inputEx.CombineField);
	
/**
 * Register this class as "pair" type
 */
inputEx.registerType("pair", inputEx.PairField);
	
})();(function() {
	
   var inputEx = YAHOO.inputEx,Event=YAHOO.util.Event,lang=YAHOO.lang;
	
/**
 * @class Create a password field.
 * @extends inputEx.StringField
 * @constructor
 * @param {Object} options inputEx.Field options object
 * <ul>
 *   <li>confirmPasswordField: the PasswordField instance to compare to when using 2 password fields for password creation (please use the setConfirmationField method)</li>
 *   <li>strengthIndicator: display a widget to indicate password strength (default false)</li>
 *   <li>capsLockWarning: display a warning if CapsLock is on (default false)</li>
 * </ul>
 */
inputEx.PasswordField = function(options) {
	inputEx.PasswordField.superclass.constructor.call(this,options);
};
lang.extend(inputEx.PasswordField, inputEx.StringField, 
/**
 * @scope inputEx.PasswordField.prototype   
 */  
{
   
	/**
	 * Add the password regexp, strengthIndicator, capsLockWarning
	 * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
	 */
	setOptions: function(options) {
	   inputEx.PasswordField.superclass.setOptions.call(this, options);
	   
   	this.options.className = options.className ? options.className : "inputEx-Field inputEx-PasswordField";
	   
	   // Add the password regexp
	   this.options.regexp = inputEx.regexps.password;
	  
		// display a strength indicator
		this.options.strengthIndicator = YAHOO.lang.isUndefined(options.strengthIndicator) ? false : options.strengthIndicator;
		
		// capsLockWarning
		this.options.capsLockWarning = YAHOO.lang.isUndefined(options.capsLockWarning) ? false : options.capsLockWarning;
		
	},
	
	/**
	 * Set the el type to 'password'
	 */
	renderComponent: function() {
	   // IE doesn't want to set the "type" property to 'password' if the node has a parent
	   // even if the parent is not in the DOM yet !!
	   
	   
      // This element wraps the input node in a float: none div
      this.wrapEl = inputEx.cn('div', {className: 'inputEx-StringField-wrapper'});
	      
		// Attributes of the input field
	   var attributes = {};
	   attributes.type = 'password';
	   attributes.size = this.options.size;
	   if(this.options.name) attributes.name = this.options.name;
	
	   // Create the node
		this.el = inputEx.cn('input', attributes);
		
		// Append it to the main element
		this.wrapEl.appendChild(this.el);
      this.fieldContainer.appendChild(this.wrapEl);
		
		// Caps lock warning
		if(this.options.capsLockWarning) {
		   this.capsLockWarning = inputEx.cn('div',{className: 'capsLockWarning'},{display: 'none'},inputEx.messages.capslockWarning);
		   this.wrapEl.appendChild(this.capsLockWarning);
	   }
	   
	   // Password strength indicator
		if(this.options.strengthIndicator) {
		   this.strengthEl = inputEx.cn('div', {className: 'inputEx-Password-StrengthIndicator'}, null, inputEx.messages.passwordStrength);
		   this.strengthBlocks = [];
		   for(var i = 0 ; i < 4 ; i++) {
		      this.strengthBlocks[i] = inputEx.cn('div', {className: 'inputEx-Password-StrengthIndicatorBlock'});
		      this.strengthEl.appendChild( this.strengthBlocks[i] );
		   }
		   this.wrapEl.appendChild(this.strengthEl);
		}
	},
	   
	/**
	 * Set this field as the confirmation for the targeted password field:
	 * @param {inputEx.PasswordField} passwordField The target password field
	 */
	setConfirmationField: function(passwordField) {
	   this.options.confirmPasswordField = passwordField;
	   this.options.messages.invalid = inputEx.messages.invalidPasswordConfirmation;
	   this.options.confirmPasswordField.options.confirmationPasswordField = this;
	},
	
	/**
	 * The validation adds the confirmation password field support
	 */
	validate: function() {
	   if(this.options.confirmPasswordField) {
	      if(this.options.confirmPasswordField.getValue() != this.getValue() ) {
	         return false;
	      }
	   }
	   return inputEx.PasswordField.superclass.validate.call(this);
	},
	
	/**
	 * Change the state string
	 */
	getStateString: function(state) {
	   if(state == inputEx.stateInvalid && this.options.minLength && this.el.value.length < this.options.minLength) {  
	      return inputEx.messages.invalidPassword[0]+this.options.minLength+inputEx.messages.invalidPassword[1];
      }
	   return inputEx.StringField.superclass.getStateString.call(this, state);
	},
	
	/**
	 * Update the state of the confirmation field
	 * @param {Event} e The original input event
	 */
	onInput: function(e) {
	   inputEx.PasswordField.superclass.onInput.call(this,e);
	   if(this.options.confirmationPasswordField) {
	      this.options.confirmationPasswordField.setClassFromState();
	   }
	},
	
	/**
	 * callback to display the capsLockWarning
	 */
	onKeyPress: function(e) {
	   inputEx.PasswordField.superclass.onKeyPress.call(this,e);
	   
	   if(this.options.capsLockWarning) {
         var ev = e ? e : window.event;
         if (!ev) {
            return;
         }
         var targ = ev.target ? ev.target : ev.srcElement;
      
         // get key pressed
         var which = -1;
         if (ev.which) {
            which = ev.which;
         } else if (ev.keyCode) {
            which = ev.keyCode;
         }
         // get shift status
         var shift_status = false;
         if (ev.shiftKey) {
            shift_status = ev.shiftKey;
         } else if (ev.modifiers) {
            shift_status = !!(ev.modifiers & 4);
         }
         var displayWarning = ((which >= 65 && which <=  90) && !shift_status) ||
                              ((which >= 97 && which <= 122) && shift_status);
         this.setCapsLockWarning(displayWarning);
      }
      
	},
	
	/**
	 * onkeyup callback to update the strength indicator
	 */
	onKeyUp: function(e) {
 	   inputEx.PasswordField.superclass.onKeyUp.call(this,e);
       if(this.options.strengthIndicator) {
          lang.later( 0, this, this.updateStrengthIndicator);
       }
     },
     
     /**
      * Show or hide the caps lock warning given the status
      */
     setCapsLockWarning: function(status) {
        this.capsLockWarning.style.display = status ? '' : 'none';
     },
     
     /**
      * Update the strength indicator (called by onKeyPress)
      */
     updateStrengthIndicator: function() {
  	     var strength = inputEx.PasswordField.getPasswordStrength(this.getValue());
        for(var i = 0 ; i < 4 ; i++) {
           var on = (strength >= i*25) && (strength>0);
           YAHOO.util.Dom.setStyle(this.strengthBlocks[i],"background-color", on ? "#4AE817" : "#FFFFFF");
		  }
     }
   
	
});

/**
 * Return an integer within [0,100] that quantify the password strength
 * Function taken from Mozilla Code: (changed a little bit the values)
 * http://lxr.mozilla.org/seamonkey/source/security/manager/pki/resources/content/password.js
 */
inputEx.PasswordField.getPasswordStrength = function(pw) {
    // Here is how we weigh the quality of the password
    // number of characters
    // numbers
    // non-alpha-numeric chars
    // upper and lower case characters

    //length of the password
    var pwlength=(pw.length);
    //if (pwlength>5)
    //     pwlength=5;
    if (pwlength>7)
         pwlength=7;

    //use of numbers in the password
    var numnumeric = pw.replace (/[0-9]/g, "");
    var numeric=(pw.length - numnumeric.length);
    if (numeric>3)
        numeric=3;

    //use of symbols in the password
    var symbols = pw.replace (/\W/g, "");
    var numsymbols=(pw.length - symbols.length);
    if (numsymbols>3)
        numsymbols=3;

    //use of uppercase in the password
    var numupper = pw.replace (/[A-Z]/g, "");
    var upper=(pw.length - numupper.length);
    if (upper>3)
        upper=3;

    //var pwstrength=((pwlength*10)-20) + (numeric*10) + (numsymbols*15) + (upper*10);
    var pwstrength=((pwlength*10)-20) + (numeric*10) + (numsymbols*20) + (upper*10);

    // make sure we're give a value between 0 and 100
    if ( pwstrength < 0 ) { pwstrength = 0; }
    if ( pwstrength > 100 ) { pwstrength = 100;}
    return pwstrength;
};

	
// Specific message for the password field
inputEx.messages.invalidPassword = ["The password schould contain at least "," numbers or characters"];
inputEx.messages.invalidPasswordConfirmation = "Passwords are different !";
inputEx.messages.capslockWarning = "Warning: CapsLock is on";
inputEx.messages.passwordStrength = "Password Strength";

/**
 * Register this class as "password" type
 */
inputEx.registerType("password", inputEx.PasswordField);
	
})();(function() {	
	var inputEx = YAHOO.inputEx, lang = YAHOO.lang, Event = YAHOO.util.Event, Dom = YAHOO.util.Dom;
	
/**
 * @class Create a radio button. Here are the added options :
 * <ul>
 *    <li>choices: list of choices (array of string)</li>
 *    <li>values: list of returned values (array )</li>
 *    <li>allowAny: add an option with a string field</li>
 * </ul>
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options inputEx.Field options object
 */
inputEx.RadioField = function(options) {
	inputEx.RadioField.superclass.constructor.call(this,options);
};
	
lang.extend(inputEx.RadioField, inputEx.Field, 
/**
 * @scope inputEx.RadioField.prototype   
 */
{
	   
	/**
	 * Adds the Radio button specific options
	 * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
	 */
	setOptions: function(options) {
	   inputEx.RadioField.superclass.setOptions.call(this, options);

      this.options.className = options.className ? options.className : 'inputEx-Field inputEx-RadioField';
	   if (lang.isUndefined(options.allowAny) || options.allowAny === false ) {
        this.options.allowAny = false;
      } else {
        this.options.allowAny = {};
        if (lang.isArray(options.allowAny.separators)) { this.options.allowAny.separators = options.allowAny.separators;};
        this.options.allowAny.validator = (lang.isFunction(options.allowAny.validator)) ? options.allowAny.validator : function(val) {return true;};
        this.options.allowAny.value = (!lang.isUndefined(options.allowAny.value)) ? options.allowAny.value : "";
      }
      
      this.options.choices = options.choices;
      // values == choices if not provided
	   this.options.values = lang.isArray(options.values) ? options.values : options.choices;
	},
	   
	/**
	 * Render the checkbox and the hidden field
	 */
	renderComponent: function() {
	
	   this.optionEls = [];
	
	   for(var i = 0 ; i < this.options.choices.length ; i++) {
	
	      var div = inputEx.cn('div', {className: 'inputEx-RadioField-choice'});
	      
	      // radioId MUST be different for each option,
	      // so add "-opt"+i (where i = option's position) to generated id
	      var radioId = this.divEl.id ? this.divEl.id+'-field-opt'+i : YAHOO.util.Dom.generateId();
	      
	      var radio = inputEx.cn('input', { id: radioId,type: 'radio', name: this.options.name, value: this.options.values[i] });
           
         div.appendChild(radio);
         var label = inputEx.cn('label', {"for": radioId, className: 'inputEx-RadioField-rightLabel'}, null, ""+this.options.choices[i]);
      	div.appendChild(label);
	      
      	
      	this.fieldContainer.appendChild( div );
      	
      	this.optionEls.push(radio);
     }
     
     // Build a "any" radio combined with a StringField
     if(this.options.allowAny) {
        var div = inputEx.cn('div', {className: 'inputEx-RadioField-choice'});
        
        if(YAHOO.env.ua.ie) {
           this.radioAny = document.createElement("<input type='radio' name='"+this.options.name+"'>");
        }
        else {
           this.radioAny = inputEx.cn('input', { type: 'radio', name: this.options.name });
        }
	     div.appendChild(this.radioAny);
	     
        this.anyField = new inputEx.StringField({value:this.options.allowAny.value});
        Dom.setStyle(this.radioAny, "float","left");
        Dom.setStyle(this.anyField.getEl(), "float","left");
        this.anyField.disable();
        
        if (this.options.allowAny.separators) {
     	     var sep = inputEx.cn("div",null,{margin:"3px"},this.options.allowAny.separators[0] || '');
     	     Dom.setStyle(sep, "float","left");
     	     div.appendChild(sep);
  	     }
  	     
     	  div.appendChild(this.anyField.getEl());
     	  
        if (this.options.allowAny.separators) {
     	     var sep = inputEx.cn("div",null,{margin:"3px"},this.options.allowAny.separators[1] || '');
     	     Dom.setStyle(sep, "float","left");
     	     div.appendChild(sep);
  	     }
  	     
  	     this.fieldContainer.appendChild( div );
     	  this.optionEls.push(this.radioAny);
     }
     
	},
	   
	/**
	 * Listen for change events on all radios
	 */
	initEvents: function() {
	   Event.addListener(this.optionEls, "change", this.onChange, this, true);
	   
	   Event.addFocusListener(this.optionEls, this.onFocus, this, true);
	   Event.addBlurListener(this.optionEls, this.onBlur, this, true);


	   if( YAHOO.env.ua.ie ) {
	      Event.addListener(this.optionEls, "click", function() { YAHOO.lang.later(10,this,this.fireUpdatedEvt); }, this, true);	
	   }
	   
	   if(this.anyField)	{
	      this.anyField.updatedEvt.subscribe(function(e) {
	         inputEx.RadioField.superclass.onChange.call(this,e);
	      }, this, true);
	      
	      // Update radio field style after editing anyField content !
	      Event.addBlurListener(this.anyField.el, this.onBlur, this, true);
	   }
	},
	   
	/**
	 * Function called when the checkbox is toggled
	 * @param {Event} e The original 'change' event
	 */
	onChange: function(e) {
	   // Enable/disable the "any" field
      if(this.radioAny) {
         if(this.radioAny == Event.getTarget(e) ) {
            this.anyField.enable();
            lang.later( 50 , this.anyField , "focus");
         }
         else {
            this.anyField.disable();
         }
      }
      // In IE the fireUpdatedEvent is sent by the click ! We need to send it only once ! 
      if( !YAHOO.env.ua.ie ) {
	      inputEx.RadioField.superclass.onChange.call(this,e);
      }
	},
	
	/**
	 * Get the field value
	 * @return {Any} 
	 */
	getValue: function() {
	   for(var i = 0 ; i < this.optionEls.length ; i++) {
	      if(this.optionEls[i].checked) {
	         if(this.radioAny && this.radioAny == this.optionEls[i]) {
	            var val = this.anyField.getValue();
	            return val;
	         }
	         return this.options.values[i];
	      }
	   }
	   return "";
	},
	
	/**
	 * Set the value of the checkedbox
	 * @param {Any} value The value schould be one of this.options.values (which defaults to this.options.choices if missing) if allowAny option not true.
	 * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
	 */
	setValue: function(value, sendUpdatedEvt) {
	   var checkAny = true, anyEl;
	   
	   for(var i = 0 ; i < this.optionEls.length ; i++) {
	      if (value == this.options.values[i]) {
	         this.optionEls[i].checked = true;
	         checkAny = false;
         } else {
            this.optionEls[i].checked = false;
         }
         
         if(this.radioAny && this.radioAny == this.optionEls[i]) {
            anyEl = this.optionEls[i];
         }
	   }
	   
	   if(this.radioAny && checkAny) {
         anyEl.checked = true;
         this.anyField.enable(); // enable anyField
         this.anyField.setValue(value, false);
      }
	   
      // call parent class method to set style and fire updatedEvt
      inputEx.StringField.superclass.setValue.call(this, value, sendUpdatedEvt);
	},
	
	validate: function() {
	   if (this.options.allowAny) {
	      for(var i = 0 ; i < this.optionEls.length ; i++) {
   	      if(this.optionEls[i].checked) {
   	         // if "any" option checked
   	         if(this.radioAny && this.radioAny == this.optionEls[i]) {
   	            var val = this.anyField.getValue();
         	      return this.options.allowAny.validator(val);
   	         }
   	      }
   	   }
	   }
	   
	   return true;
	}
	
});   
	
/**
 * Register this class as "radio" type
 */
inputEx.registerType("radio", inputEx.RadioField);
	
})();(function() {
	
   var inputEx = YAHOO.inputEx, lang = YAHOO.lang;
	
/**
 * @class Wrapper for the Rich Text Editor from YUI
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options Added options:
 * <ul>
 *   <li>opts: the options to be added when calling the RTE constructor (see YUI RTE)</li>
 *   <li>type: if == 'simple', the field will use the SimpleEditor. Any other value will use the Editor class.</li>
 * </ul>
 */
inputEx.RTEField = function(options) {
   inputEx.RTEField.superclass.constructor.call(this,options);
};
lang.extend(inputEx.RTEField, inputEx.Field, 
/**
 * @scope inputEx.RTEField.prototype   
 */  
{   
   /**
    * Set the default values of the options
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
  	setOptions: function(options) {
  	   inputEx.RTEField.superclass.setOptions.call(this, options);
  	   
  	   this.options.opts = options.opts || {};
  	   this.options.type = options.type;
   },
   
	/**
	 * Render the field using the YUI Editor widget
	 */	
	renderComponent: function() {
	   if(!inputEx.RTEfieldsNumber) { inputEx.RTEfieldsNumber = 0; }
	   
	   var id = "inputEx-RTEField-"+inputEx.RTEfieldsNumber;
	   var attributes = {id:id};
      if(this.options.name) attributes.name = this.options.name;
      
	   this.el = inputEx.cn('textarea', attributes);
	   
	   inputEx.RTEfieldsNumber += 1;
	   this.fieldContainer.appendChild(this.el);
	
	   //This is the default config
	   var _def = {
	       height: '300px',
	       width: '580px',
	       dompath: true
	   };
	   //The options object
	   var o = this.options.opts;
	   //Walk it to set the new config object
	   for (var i in o) {
	        if (lang.hasOwnProperty(o, i)) {
	            _def[i] = o[i];
	        }
	   }
	   //Check if options.type is present and set to simple, if it is use SimpleEditor instead of Editor
	   var editorType = ((this.options.type && (this.options.type == 'simple')) ? YAHOO.widget.SimpleEditor : YAHOO.widget.Editor);
	
	   //If this fails then the code is not loaded on the page
	   if (editorType) {
	       this.editor = new editorType(id, _def);
	       this.editor.render();
	   } else {
	    alert('Editor is not on the page');
	   }
	},
	
	/**
	 * Set the html content
	 * @param {String} value The html string
	 * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
	 */
	setValue: function(value, sendUpdatedEvt) {
	   if(this.editor) {
	      var iframeId = this.el.id+"_editor";
	      
	      // if editor iframe not rendered
	      if (!YAHOO.util.Dom.get(iframeId)) {
	         // put value in textarea : will be processed by this.editor._setInitialContent (clean html, etc...)
	         this.el.value = value;
	         
	      } else {
	         this.editor.setEditorHTML(value);
         }
      }
	   
   	if(sendUpdatedEvt !== false) {
   	   // fire update event
         this.fireUpdatedEvt();
      }
	},
	
	/**
	 * Get the html string
	 * @return {String} the html string
	 */
	getValue: function() {
	   try {
	      this.editor.saveHTML();
         return this.el.value;
	   }
	   catch(ex) {}
	}
	
});
	
/**
 * Register this class as "html" type
 */
inputEx.registerType("html", inputEx.RTEField);
	
})();(function() {

   var inputEx = YAHOO.inputEx, Event = YAHOO.util.Event, lang = YAHOO.lang;

/**
 * @class Create a select field
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options Added options:
 * <ul>
 *	   <li>selectValues: contains the list of options values</li>
 *	   <li>selectOptions: list of option element texts</li>
 *    <li>multiple: boolean to allow multiple selections</li>
 * </ul>
 */
inputEx.SelectField = function(options) {
	inputEx.SelectField.superclass.constructor.call(this,options);
 };
lang.extend(inputEx.SelectField, inputEx.Field, 
/**
 * @scope inputEx.SelectField.prototype
 */   
{
   /**
    * Set the default values of the options
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
	setOptions: function(options) {
	   inputEx.SelectField.superclass.setOptions.call(this,options);
	   
	   this.options.multiple = lang.isUndefined(options.multiple) ? false : options.multiple;
	   this.options.selectValues = [];
	   this.options.selectOptions = [];
	   
	   for (var i=0, length=options.selectValues.length; i<length; i++) {
	      
	      this.options.selectValues.push(options.selectValues[i]);
	      // ""+  hack to convert into text (values may be 0 for example)
	      this.options.selectOptions.push(""+((options.selectOptions && !lang.isUndefined(options.selectOptions[i])) ? options.selectOptions[i] : options.selectValues[i]));
	      
      }
      
   },
   
   /**
    * Build a select tag with options
    */
   renderComponent: function() {

      this.el = inputEx.cn('select', {id: this.divEl.id?this.divEl.id+'-field':YAHOO.util.Dom.generateId(), name: this.options.name || ''});
      
      if (this.options.multiple) {this.el.multiple = true; this.el.size = this.options.selectValues.length;}
      
      this.optionEls = {};
      
      var optionEl;
      for( var i = 0 ; i < this.options.selectValues.length ; i++) {
         
         optionEl = inputEx.cn('option', {value: this.options.selectValues[i]}, null, this.options.selectOptions[i]);
         
         this.optionEls[this.options.selectOptions[i]] = optionEl;
         this.el.appendChild(optionEl);
      }
      this.fieldContainer.appendChild(this.el);
   },  
   
   /**
    * Register the "change" event
    */
   initEvents: function() {
      Event.addListener(this.el,"change", this.onChange, this, true);
	   Event.addFocusListener(this.el, this.onFocus, this, true);
	   Event.addBlurListener(this.el, this.onBlur, this, true);
   },
   
   /**
    * Set the value
    * @param {String} value The value to set
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */
   setValue: function(value, sendUpdatedEvt) {
      var index = 0;
      var option;
      for(var i = 0 ; i < this.options.selectValues.length ; i++) {
         if(value === this.options.selectValues[i]) {
            option = this.el.childNodes[i];
		      option.selected = "selected";
         }
      }
      
		// Call Field.setValue to set class and fire updated event
		inputEx.SelectField.superclass.setValue.call(this,value, sendUpdatedEvt);
   },
   
   /**
    * Return the value
    * @return {Any} the selected value from the selectValues array
    */
   getValue: function() {
      return this.options.selectValues[this.el.selectedIndex];
   },
   
   /**
    * Disable the field
    */
   disable: function() {
      this.el.disabled = true;
   },

   /**
    * Enable the field
    */
   enable: function() {
      this.el.disabled = false;
   },
   
   /**
    * Add an option in the selector
    * @param {Object} item
    */
   addOption: function(config) {

      var value = config.value;
      var option = ""+(!lang.isUndefined(config.option) ? config.option : config.value);
      var nbOptions = this.options.selectOptions.length;
      
      // position of new option (default last)
      var position = nbOptions;
      
      if (lang.isNumber(config.position) && config.position >= 0 && config.position <= position) {
         position = parseInt(config.position,10);
         
      } else if (lang.isString(config.before)) {
         
            for (var i = 0 ; i < nbOptions ; i++) {
               if (this.options.selectOptions[i] === config.before) {
                  position = i;
                  break;
               }
            }
            
      } else if (lang.isString(config.after)) {

            for (var i = 0 ; i < nbOptions ; i++) {
               if (this.options.selectOptions[i] === config.after) {
                  position = i+1;
                  break;
               }
            }
      }
      
      // update values and options lists
      this.options.selectValues = this.options.selectValues.slice(0,position).concat([value]).concat(this.options.selectValues.slice(position,nbOptions));
      this.options.selectOptions = this.options.selectOptions.slice(0,position).concat([option]).concat(this.options.selectOptions.slice(position,nbOptions));

      // new option in select
      var newOption = inputEx.cn('option', {value: value}, null, option);
      this.optionEls[option] = newOption;
      
      if (position<nbOptions) {
         YAHOO.util.Dom.insertBefore(newOption,this.el.childNodes[position]);
      } else {
         this.el.appendChild(newOption);
      }

      // select new option
      if (!!config.selected) {
         // setTimeout for IE6 (let time to create dom option)
         var that = this;
         setTimeout(function() {that.setValue(value);},0);
      }
   },

   removeOption: function(config) {

      var position;
      var nbOptions = this.options.selectOptions.length;
      var selectedIndex = this.el.selectedIndex;
      
      if (lang.isNumber(config.position) && config.position >= 0 && config.position <= nbOptions) {
         
         position = parseInt(config.position,10);
         
      } else if (lang.isString(config.option)) {
         
            for (var i = 0 ; i < nbOptions ; i++) {
               if (this.options.selectOptions[i] === config.option) {
                  position = i;
                  break;
               }
            }
            
      } else if (lang.isString(config.value)) {

            for (var i = 0 ; i < nbOptions ; i++) {
               if (this.options.selectValues[i] === config.value) {
                  position = i;
                  break;
               }
            }
      }
      
      if (!lang.isNumber(position)) {
         throw new Error("SelectField : invalid or missing position, option or value in removeOption");
      }

      // remove from selectValues / selectOptions array
      this.options.selectValues.splice(position,1);
      var removedOption = this.options.selectOptions.splice(position,1);

      // remove from selector
      this.el.removeChild(this.optionEls[removedOption]);
      delete this.optionEls[removedOption];
      
      // clear if previous selected value doesn't exist anymore
      if (selectedIndex == position) {
         this.clear();
      }
   }
   
});

/**
 * Register this class as "select" type
 */
inputEx.registerType("select", inputEx.SelectField);

})();(function() {

   var inputEx = YAHOO.inputEx, Event = YAHOO.util.Event;

/**
 * @class Create a textarea input
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options Added options:
 * <ul>
 *	   <li>rows: rows attribute</li>
 *	   <li>cols: cols attribute</li>
 * </ul>
 */
inputEx.Textarea = function(options) {
	inputEx.Textarea.superclass.constructor.call(this,options);
};
YAHOO.lang.extend(inputEx.Textarea, inputEx.StringField, 
/**
 * @scope inputEx.Textarea.prototype   
 */   
{

   /**
    * Set the specific options (rows and cols)
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
   setOptions: function(options) {
      inputEx.Textarea.superclass.setOptions.call(this, options);
      this.options.rows = options.rows || 6;
      this.options.cols = options.cols || 23;
   },
   
   /**
    * Render an 'INPUT' DOM node
    */
   renderComponent: function() {
      
      // This element wraps the input node in a float: none div
      this.wrapEl = inputEx.cn('div', {className: 'inputEx-StringField-wrapper'});
      
      // Attributes of the input field
      var attributes = {};
      attributes.id = this.divEl.id?this.divEl.id+'-field':YAHOO.util.Dom.generateId();
      attributes.rows = this.options.rows;
      attributes.cols = this.options.cols;
      if(this.options.name) attributes.name = this.options.name;
      
      //if(this.options.maxLength) attributes.maxLength = this.options.maxLength;
   
      // Create the node
      this.el = inputEx.cn('textarea', attributes, null, this.options.value);
      
      // Append it to the main element
      this.wrapEl.appendChild(this.el);
      this.fieldContainer.appendChild(this.wrapEl);
   },
   
	/**
    * Uses the optional regexp to validate the field value
    */
   validate: function() { 
      var previous = inputEx.Textarea.superclass.validate.call(this);
      
      // emulate maxLength property for textarea
      //   -> user can still type but field is invalid
      if (this.options.maxLength) {
         previous = previous && this.getValue().length <= this.options.maxLength;
      }
      
      return previous;
   },
   
   /**
    * Add the minLength string message handling
    */
    getStateString: function(state) {
	   if(state == inputEx.stateInvalid && this.options.minLength && this.el.value.length < this.options.minLength) {  
	      return inputEx.messages.stringTooShort[0]+this.options.minLength+inputEx.messages.stringTooShort[1];
	   
	   // Add message too long
      } else if (state == inputEx.stateInvalid && this.options.maxLength && this.el.value.length > this.options.maxLength) {
         return inputEx.messages.stringTooLong[0]+this.options.maxLength+inputEx.messages.stringTooLong[1];
      }
	   return inputEx.Textarea.superclass.getStateString.call(this, state);
	}

});

inputEx.messages.stringTooLong = ["This field should contain at most "," numbers or characters"];

/**
 * Register this class as "text" type
 */
inputEx.registerType("text", inputEx.Textarea);

})();(function() {

   var inputEx = YAHOO.inputEx, Event = YAHOO.util.Event, lang = YAHOO.lang;

/**
 * @class A field limited to number inputs (floating)
 * @extends inputEx.CombineField
 * @constructor
 * @param {Object} options inputEx.Field options object
 */
inputEx.TimeField = function(options) {
   
   
   var h = [];
   for(var i = 0 ; i < 24 ; i++) { var s="";if(i<10){s="0";} s+= i;h.push(s);}
   var m = [];
   var secs = [];
   for(var i = 0 ; i < 60 ; i++) { var s="";if(i<10){s="0";} s+= i;m.push(s);secs.push(s);}
   options.fields = [
      {type: 'select', inputParams: {selectOptions: h, selectValues: h} },
      {type: 'select', inputParams: {selectOptions: m, selectValues: m} },
      {type: 'select', inputParams: {selectOptions: secs, selectValues: secs} }
   ];
   options.separators = options.separators || [false,":",":",false];
   inputEx.TimeField.superclass.constructor.call(this,options);
};
lang.extend(inputEx.TimeField, inputEx.CombineField, 
/**
 * @scope inputEx.TimeField.prototype   
 */
{   
   /**
    * Returns a string like HH:MM:SS
    * @return {String} Hour string
    */
   getValue: function() {
      var values = inputEx.TimeField.superclass.getValue.call(this);
      return values.join(':');
   },

   /**
    * Set the value 
    * @param {String} str Hour string (format HH:MM:SS)
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */
   setValue: function(str, sendUpdatedEvt) {
      inputEx.TimeField.superclass.setValue.call(this, str.split(':'), sendUpdatedEvt);
   }

});

/**
 * Register this class as "time" type
 */
inputEx.registerType("time", inputEx.TimeField);

})();(function() {

   var inputEx = YAHOO.inputEx, Event = YAHOO.util.Event, lang = YAHOO.lang;

/**
 * @class A field limited to number inputs (floating)
 * @extends inputEx.CombineField
 * @constructor
 * @param {Object} options Added options
 * <ul>
 *    <li>dateFormat: same as DateField</li>
 * </ul>
 */
inputEx.DateTimeField = function(options) {
   options.fields = [
      {type: 'datepicker', inputParams: {}},
      {type: 'time', inputParams: {}}
   ];
   if(options.dateFormat) {
      options.fields[0].inputParams.dateFormat = options.dateFormat;
   }
   options.separators = options.separators || [false, "&nbsp;&nbsp;", false];
   inputEx.DateTimeField.superclass.constructor.call(this,options);
};
lang.extend(inputEx.DateTimeField, inputEx.CombineField, 
/**
 * @scope inputEx.DateTimeField.prototype   
 */
{   
   /**
    * Concat the values to return a date
    * @return {Date} The javascript Date object
    */
   getValue: function() {
      var d = this.inputs[0].getValue();
      if( d == '' ) return null;
      var a = this.inputs[1].getValue().split(':');
      
      d.setHours(a[0]);
      d.setMinutes(a[1]);
      d.setSeconds(a[2]);
      
      return d;
   },

   /**
    * Set the value of both subfields
    * @param {Date} val Date to set
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */
   setValue: function(val, sendUpdatedEvt) {
      if(!lang.isObject(val)) {return;}
      var h = val.getHours();
      var m = val.getMinutes();
      var s = val.getSeconds();
      var time = ([(h < 10 ? '0':'')+h, (m < 10 ? '0':'')+m, (s < 10 ? '0':'')+s]).join(':');
      inputEx.DateTimeField.superclass.setValue.call(this, [val, time], sendUpdatedEvt);
   }

});



/**
 * Register this class as "time" type
 */
inputEx.registerType("datetime", inputEx.DateTimeField);

})();(function() {

   var inputEx = YAHOO.inputEx;

/**
 * @class Create a uneditable field where you can stick the html you want
 * Added Options:
 * <ul>
 *    <li>visu: inputEx visu type</li>
 * </ul>
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options inputEx.Field options object
 */
inputEx.UneditableField = function(options) {
	inputEx.UneditableField.superclass.constructor.call(this,options);
};
YAHOO.lang.extend(inputEx.UneditableField, inputEx.Field, 
/**
 * @scope inputEx.UneditableField.prototype   
 */
{
   
   /**
    * Set the default values of the options
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
	setOptions: function(options) {
      inputEx.UneditableField.superclass.setOptions.call(this,options);
      this.options.visu = options.visu;
   },
   
   /**
    * Store the value and update the visu
    * @param {Any} val The value that will be sent to the visu
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */
   setValue: function(val, sendUpdatedEvt) {
      this.value = val;
      
      inputEx.renderVisu(this.options.visu, val, this.fieldContainer);
      
	   inputEx.UneditableField.superclass.setValue.call(this, val, sendUpdatedEvt);
   },
   
   /**
    * Return the stored value
    * @return {Any} The previously stored value
    */
   getValue: function() {
      return this.value;
   }
   
});

/**
 * Register this class as "url" type
 */
inputEx.registerType("uneditable", inputEx.UneditableField);

})();(function() {

   var inputEx = YAHOO.inputEx, lang = YAHOO.lang;

/**
 * @class Adds an url regexp, and display the favicon at this url
 * @extends inputEx.StringField
 * @constructor
 * @param {Object} options inputEx.Field options object
 * <ul>
 *   <li>favicon: boolean whether the domain favicon.ico should be displayed or not (default is true, except for https)</li>
 * </ul>
 */
inputEx.UrlField = function(options) {
   inputEx.UrlField.superclass.constructor.call(this,options);
};

lang.extend(inputEx.UrlField, inputEx.StringField,
/**
 * @scope inputEx.UrlField.prototype
 */
{

   /**
    * Adds the invalid Url message
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
   setOptions: function(options) {
      inputEx.UrlField.superclass.setOptions.call(this, options);

      this.options.className = options.className ? options.className : "inputEx-Field inputEx-UrlField";
      this.options.messages.invalid = inputEx.messages.invalidUrl;
      this.options.favicon = lang.isUndefined(options.favicon) ? (("https:" == document.location.protocol) ? false : true) : options.favicon;
      this.options.size = options.size || 50;

      // validate with url regexp
      this.options.regexp = inputEx.regexps.url;
   },

   /**
    * Adds a img tag before the field to display the favicon
    */
   render: function() {
      inputEx.UrlField.superclass.render.call(this);
      this.el.size = this.options.size;

      if(!this.options.favicon) {
         YAHOO.util.Dom.addClass(this.el, 'nofavicon');
      }

      // Create the favicon image tag
      if(this.options.favicon) {
         this.favicon = inputEx.cn('img', {src: inputEx.spacerUrl});
         this.fieldContainer.insertBefore(this.favicon,this.fieldContainer.childNodes[0]);

         // focus field when clicking on favicon
         YAHOO.util.Event.addListener(this.favicon,"click",function(){this.focus();},this,true);
      }
   },

   setClassFromState: function() {
      inputEx.UrlField.superclass.setClassFromState.call(this);

      if(this.options.favicon) {
         // try to update with url only if valid url (else pass null to display inputEx.spacerUrl)
         this.updateFavicon((this.previousState == inputEx.stateValid) ? this.getValue() : null);
      }
   },


   updateFavicon: function(url) {
      var newSrc = url ? url.match(/https?:\/\/[^\/]*/)+'/favicon.ico' : inputEx.spacerUrl;
      if(newSrc != this.favicon.src) {

         // Hide the favicon
         inputEx.sn(this.favicon, null, {visibility: 'hidden'});

         // Change the src
         this.favicon.src = newSrc;

         // Set the timer to launch displayFavicon in 1s
         if(this.timer) { clearTimeout(this.timer); }
         var that = this;
         this.timer = setTimeout(function(){that.displayFavicon();}, 1000);
      }
   },

   /**
    * Display the favicon if the icon was found (use of the naturalWidth property)
    */
   displayFavicon: function() {
      inputEx.sn(this.favicon, null, {visibility: (this.favicon.naturalWidth!=0) ? 'visible' : 'hidden'});
   }


});

inputEx.messages.invalidUrl = "Invalid URL, ex: http://www.test.com";


/**
 * Register this class as "url" type
 */
inputEx.registerType("url", inputEx.UrlField);

})();(function() {

   var inputEx = YAHOO.inputEx, DD = YAHOO.util.DragDropMgr, Dom = YAHOO.util.Dom, Event = YAHOO.util.Event;



/**
 * @class DDProxy for DDList items (used by DDList)
 * @extends YAHOO.util.DDProxy
 * @constructor
 * @param {String} id
 */
inputEx.widget.DDListItem = function(id) {

    inputEx.widget.DDListItem.superclass.constructor.call(this, id);

    // Prevent lateral draggability
    this.setXConstraint(0,0);

    this.goingUp = false;
    this.lastY = 0;
};

YAHOO.extend(inputEx.widget.DDListItem, YAHOO.util.DDProxy, {

    startDrag: function(x, y) {
        // make the proxy look like the source element
        var dragEl = this.getDragEl();
        var clickEl = this.getEl();
        Dom.setStyle(clickEl, "visibility", "hidden");
        this._originalIndex = inputEx.indexOf(clickEl ,clickEl.parentNode.childNodes);
        dragEl.className = clickEl.className;
        dragEl.innerHTML = clickEl.innerHTML;
    },

    endDrag: function(e) {
        Dom.setStyle(this.id, "visibility", "");
        
        // Fire the reordered event if position in list has changed
        var clickEl = this.getEl();
        var newIndex = inputEx.indexOf(clickEl ,clickEl.parentNode.childNodes);
        if(this._originalIndex != newIndex) {
           this._list.listReorderedEvt.fire();
        }
    },

    onDragDrop: function(e, id) {

        // If there is one drop interaction, the li was dropped either on the list,
        // or it was dropped on the current location of the source element.
        if (DD.interactionInfo.drop.length === 1) {

            // The position of the cursor at the time of the drop (YAHOO.util.Point)
            var pt = DD.interactionInfo.point; 

            // The region occupied by the source element at the time of the drop
            var region = DD.interactionInfo.sourceRegion; 

            // Check to see if we are over the source element's location.  We will
            // append to the bottom of the list once we are sure it was a drop in
            // the negative space (the area of the list without any list items)
            if (!region.intersect(pt)) {
                var destEl = Dom.get(id);
                if (destEl.nodeName.toLowerCase() != "li") {
                   var destDD = DD.getDDById(id);
                   destEl.appendChild(this.getEl());
                   destDD.isEmpty = false;
                   DD.refreshCache();
                }
            }

        }
    },

    onDrag: function(e) {

        // Keep track of the direction of the drag for use during onDragOver
        var y = Event.getPageY(e);

        if (y < this.lastY) {
            this.goingUp = true;
        } else if (y > this.lastY) {
            this.goingUp = false;
        }

        this.lastY = y;
    },

    onDragOver: function(e, id) {
    
        var srcEl = this.getEl();
        var destEl = Dom.get(id);

        // We are only concerned with list items, we ignore the dragover
        // notifications for the list.
        if (destEl.nodeName.toLowerCase() == "li") {
            var orig_p = srcEl.parentNode;
            var p = destEl.parentNode;

            if (this.goingUp) {
                p.insertBefore(srcEl, destEl); // insert above
            } else {
                p.insertBefore(srcEl, destEl.nextSibling); // insert below
            }

            DD.refreshCache();
        }
    }
});


/**
 * @class Create a sortable list 
 * @extends inputEx.widget.DDList
 * @constructor
 * @param {Object} options Options:
 * <ul>
 *	   <li>id: id of the ul element</li>
 *	   <li>value: initial value of the list</li>
 * </ul>
 */
inputEx.widget.DDList = function(options) {
   
   this.ul = inputEx.cn('ul');
   
   if(options.id) {
      this.ul.id = options.id;
   }
   
   if(options.value) {
      this.setValue(options.value);
   }
   
   /**
	 * @event
	 * @param {Any} itemValue value of the removed item
	 * @desc YAHOO custom event fired when an item is removed
	 */
	this.itemRemovedEvt = new YAHOO.util.CustomEvent('itemRemoved', this);
	
	/**
	 * @event
	 * @desc YAHOO custom event fired when the list is reordered
	 */
   this.listReorderedEvt = new YAHOO.util.CustomEvent('listReordered', this);
   
   // append it immediatly to the parent DOM element
	if(options.parentEl) {
	   if( YAHOO.lang.isString(options.parentEl) ) {
	     Dom.get(options.parentEl).appendChild(this.ul);  
	   }
	   else {
	      options.parentEl.appendChild(this.ul);
      }
	}
};

inputEx.widget.DDList.prototype = {
   
   addItem: function(value) {
      var li = inputEx.cn('li', {className: 'inputEx-DDList-item'});
      li.appendChild( inputEx.cn('span', null, null, value) );
      var removeLink = inputEx.cn('a', null, null, "remove"); 
      li.appendChild( removeLink );
      Event.addListener(removeLink, 'click', function(e) {
         var a = Event.getTarget(e);
         var li = a.parentNode;
         this.removeItem( inputEx.indexOf(li,this.ul.childNodes) );
      }, this, true);
      var item = new inputEx.widget.DDListItem(li);
      item._list = this;
      this.ul.appendChild(li);
   },
   
   /*
   * private method to remove an item
   */
   _removeItem: function(i) {
      
      var itemValue = this.ul.childNodes[i].childNodes[0].innerHTML;
      
      this.ul.removeChild(this.ul.childNodes[i]);
      
      return itemValue;
   },
   
   /*
   *  public metnod to remove an item
   *    _removeItem function + event firing
   */
   removeItem: function(i) {
      var itemValue = this._removeItem(i);
      
      // Fire the itemRemoved Event
      this.itemRemovedEvt.fire(itemValue);
   },
   
   getValue: function() {
      var value = [];
      for(var i = 0 ; i < this.ul.childNodes.length ; i++) {
         value.push(this.ul.childNodes[i].childNodes[0].innerHTML);
      }
      return value;
   },
   
   updateItem: function(i,value) {
      this.ul.childNodes[i].childNodes[0].innerHTML = value;
   },
   
   setValue: function(value) {
      // if trying to set wrong value (or ""), reset
      if (!YAHOO.lang.isArray(value)) {
         value = [];
      }
      
      var oldNb = this.ul.childNodes.length;
      var newNb = value.length;
      
      for(var i = 0 ; i < newNb ; i++) {
         if(i < oldNb) {
            this.updateItem(i, value[i]);
         }
         else {
            this.addItem(value[i]);
         }
      }
      
      // remove extra li items if any
      for(var j = newNb; j < oldNb; j++) {
         this._removeItem(newNb); // newNb is always the index of first li to remove (not j !)
      }
   }
   
};


})();(function() {

   var inputEx = YAHOO.inputEx;

/**
 * @class Create a multi select field
 * @extends inputEx.SelectField
 * @constructor
 * @param {Object} options Added options:
 * <ul>
 *	   <li>selectValues: contains the list of options values</li>
 *	   <li>selectOptions: list of option element texts</li>
 * </ul>
 */
inputEx.MultiSelectField = function(options) {
	inputEx.MultiSelectField.superclass.constructor.call(this,options);
 };
YAHOO.lang.extend(inputEx.MultiSelectField, inputEx.SelectField, 
/**
 * @scope inputEx.MultiSelectField.prototype   
 */   
{
   
   /**
    * Build the DDList
    */
   renderComponent: function() {
      inputEx.MultiSelectField.superclass.renderComponent.call(this);
      
      this.ddlist = new inputEx.widget.DDList({parentEl: this.fieldContainer});
   },  
   
   /**
    * Register the "change" event
    */
   initEvents: function() {
      YAHOO.util.Event.addListener(this.el,"change", this.onAddNewItem, this, true);
      this.ddlist.itemRemovedEvt.subscribe(this.onItemRemoved, this, true);
      this.ddlist.listReorderedEvt.subscribe(this.fireUpdatedEvt, this, true);
   },
   
   /**
    * Re-enable the option element when an item is removed by the user
    */
   onItemRemoved: function(e,params) {
      var itemValue = params[0];
      var index = inputEx.indexOf(itemValue, this.options.selectValues);
      this.el.childNodes[index].disabled = false;
      this.fireUpdatedEvt();
   },
   
   /**
    * Add an item to the list when the select changed
    */
   onAddNewItem: function() {
      if(this.el.selectedIndex != 0) {
         
         // Add the value to the ddlist
         this.ddlist.addItem(this.options.selectValues[this.el.selectedIndex]);
         
         // mark option disabled
         this.el.childNodes[this.el.selectedIndex].disabled = true;
      
         // Return to the first Element
         this.el.selectedIndex = 0;
         
         this.fireUpdatedEvt();
      }
   },
   
   /**
    * Set the value of the list
    * @param {String} value The value to set
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */
   setValue: function(value, sendUpdatedEvt) {
      
      this.ddlist.setValue(value);
      
      // Re-enable all options
      for(var i = 0 ; i < this.el.childNodes.length ; i++) {
         this.el.childNodes[i].disabled = false;
      }
      // disable selected options
      for(i = 0 ; i < value.length ; i++) {
         var index = inputEx.indexOf(value[i], this.options.selectValues);
         this.el.childNodes[index].disabled = true;
      }
	   
	   if(sendUpdatedEvt !== false) {
	      // fire update event
         this.fireUpdatedEvt();
      }
   },
   
   /**
    * Return the value
    * @return {Any} the selected value from the selectValues array
    */
   getValue: function() {
      return this.ddlist.getValue();
   }
   
});

/**
 * Register this class as "multiselect" type
 */
inputEx.registerType("multiselect", inputEx.MultiSelectField);

})();(function() {

   var inputEx = YAHOO.inputEx, lang = YAHOO.lang, Event = YAHOO.util.Event, Dom = YAHOO.util.Dom;

/**
 * @class An autocomplete field that wraps the YUI autocompleter
 * @constructor
 * @extends inputEx.StringField
 * @param {Object} options Added options for Autocompleter
 * <ul>
 *	  <li>datasource: the datasource</li>
 *	  <li>autoComp: autocompleter options</li>
 *   <li>returnValue: function to format the returned value (optional)</li>
 * </ul>
 */
inputEx.AutoComplete = function(options) {
   inputEx.AutoComplete.superclass.constructor.call(this, options);
};

lang.extend(inputEx.AutoComplete, inputEx.StringField, 
/**
 * @scope inputEx.AutoComplete.prototype   
 */   
{

   /**
    * Adds autocomplete options
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
   setOptions: function(options) {
      inputEx.AutoComplete.superclass.setOptions.call(this, options);
      
      // Overwrite options
      this.options.className = options.className ? options.className : 'inputEx-Field inputEx-AutoComplete';
      
      // Added options
      this.options.datasource = options.datasource;
      this.options.autoComp = options.autoComp;
      this.options.returnValue = options.returnValue;
   },
   
   /**
    * Custom event init
    * <ul>
    *   <li>listen to autocompleter textboxBlurEvent instead of this.el "blur" event</li>
    *   <li>listener to autocompleter textboxBlurEvent added in buildAutocomplete method</li>
    * </ul>
    */
   initEvents: function() {	
	   inputEx.AutoComplete.superclass.initEvents.call(this);
	   
	   // remove standard blur listener
	   Event.removeBlurListener(this.el, this.onBlur);
   },

   /**
    * Render the hidden list element
    */
   renderComponent: function() {
   
      // This element wraps the input node in a float: none div
      this.wrapEl = inputEx.cn('div', {className: 'inputEx-StringField-wrapper'});
      
      // Attributes of the input field
      var attributes = {
         type: 'text',
         id: YAHOO.util.Dom.generateId()
      };
      if(this.options.size) attributes.size = this.options.size;
      if(this.options.readonly) attributes.readonly = 'readonly';
      if(this.options.maxLength) attributes.maxLength = this.options.maxLength;
   
      // Create the node
      this.el = inputEx.cn('input', attributes);
      
      // Create the hidden input
      var hiddenAttrs = {
         type: 'hidden',
         value: ''
      };
      if(this.options.name) hiddenAttrs.name = this.options.name;
      this.hiddenEl = inputEx.cn('input', hiddenAttrs);
      
      // Append it to the main element
      this.wrapEl.appendChild(this.el);
      this.wrapEl.appendChild(this.hiddenEl);
      this.fieldContainer.appendChild(this.wrapEl);
   
      // Render the list :
      this.listEl = inputEx.cn('div', {id: Dom.generateId() });
      this.fieldContainer.appendChild(this.listEl);
       
      Event.onAvailable([this.el, this.listEl], this.buildAutocomplete, this, true);
   },
   
   /**
    * Build the YUI autocompleter
    */
   buildAutocomplete: function() {
      // Call this function only when this.el AND this.listEl are available
      if(!this._nElementsReady) { this._nElementsReady = 0; }
      this._nElementsReady++;
      if(this._nElementsReady != 2) return;
      
      // Instantiate AutoComplete
      this.oAutoComp = new YAHOO.widget.AutoComplete(this.el.id, this.listEl.id, this.options.datasource, this.options.autoComp);

      // subscribe to the itemSelect event
      this.oAutoComp.itemSelectEvent.subscribe(this.itemSelectHandler, this, true);
      
      // subscribe to the textboxBlur event (instead of "blur" event on this.el)
      //                                    |-------------- autocompleter ----------|
      //    -> order : "blur" on this.el -> internal callback -> textboxBlur event -> this.onBlur callback
      //    -> so fired after autocomp internal "blur" callback (which would erase typeInvite...)
      this.oAutoComp.textboxBlurEvent.subscribe(this.onBlur, this, true);
   },
   
   /**
    * itemSelect handler
    * @param {} sType
    * @param {} aArgs
    */
   itemSelectHandler: function(sType, aArgs) {
   	var aData = aArgs[2];
   	this.setValue( this.options.returnValue ? this.options.returnValue(aData) : aData[0] );
   },
   
   /**
    * onChange event handler
    * @param {Event} e The original 'change' event
    */
	onChange: function(e) {
	   this.setClassFromState();
	   
	   // Clear the field when no value 
      YAHOO.lang.later(50, this, function() {
         if(this.el.value == "") {
            this.setValue("");
         }
      });
      
      this.fireUpdatedEvt();
	},
   
   /**
    * Set the value
    * @param {Any} value Value to set
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */
   setValue: function(value, sendUpdatedEvt) {
      this.hiddenEl.value = value;
      
      // "inherited" from inputex.Field :
      //    (can't inherit of inputex.StringField because would set this.el.value...)
      //
	   // set corresponding style
   	this.setClassFromState();
	   
	   if(sendUpdatedEvt !== false) {
	      // fire update event
         this.fireUpdatedEvt();
      }
   },
   
   /**
    * Return the hidden value (stored in a hidden input)
    */
   getValue: function() {
      return this.hiddenEl.value;
   }

});


/**
* Register this class as "autocomplete" type
*/
inputEx.registerType("autocomplete", inputEx.AutoComplete);

})();
(function() {

   var inputEx = YAHOO.inputEx;

/**
 * @class Create a multi autocomplete field
 * @extends inputEx.AutoComplete
 * @constructor
 * @param {Object} options Added options:
 * <ul>
 * </ul>
 */
inputEx.MultiAutoComplete = function(options) {
	inputEx.MultiAutoComplete.superclass.constructor.call(this,options);
 };
YAHOO.lang.extend(inputEx.MultiAutoComplete, inputEx.AutoComplete, 
/**
 * @scope inputEx.MultiAutoComplete.prototype   
 */   
{
   
   /**
    * Build the DDList
    */
   renderComponent: function() {
      inputEx.MultiAutoComplete.superclass.renderComponent.call(this);
      
      this.ddlist = new inputEx.widget.DDList({parentEl: this.fieldContainer});
      this.ddlist.itemRemovedEvt.subscribe(function() {
         this.setClassFromState();
         this.fireUpdatedEvt();
      }, this, true);
      this.ddlist.listReorderedEvt.subscribe(this.fireUpdatedEvt, this, true);
   },  
   
   itemSelectHandler: function(sType, aArgs) {
   	var aData = aArgs[2];
   	this.ddlist.addItem( this.options.returnValue ? this.options.returnValue(aData) : aData[0] );
   	this.el.value = "";
   	this.fireUpdatedEvt();
   },
   
   /**
    * Set the value
    * @param {String} value The value to set
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */
   setValue: function(value, sendUpdatedEvt) {
      this.ddlist.setValue(value);
      
      // set corresponding style
	   this.setClassFromState();
	   
	   if(sendUpdatedEvt !== false) {
	      // fire update event
         this.fireUpdatedEvt();
      }
   },
   
   /**
    * Return the value
    * @return {Any} the selected value from the selectValues array
    */
   getValue: function() {
      return this.ddlist.getValue();
   },
   
   /**
    * Return (stateEmpty|stateRequired) if the value equals the typeInvite attribute
    */
   getState: function() { 
      var val = this.getValue();
      
	   // if nothing in the list
	   if( val.length === 0) {
	      return this.options.required ? inputEx.stateRequired : inputEx.stateEmpty;
	   }
      
	   return this.validate() ? inputEx.stateValid : inputEx.stateInvalid;
	},
	
	/**
    * TODO : how to validate ?
    */
   validate: function() { 
      return true;
   },
   
   /**
    * onChange event handler
    * @param {Event} e The original 'change' event
    */
	onChange: function(e) {
	   // erase inherited version, so don't trash previous value if input is empty
	}
   
   
});

/**
 * Register this class as "multiautocomplete" type
 */
inputEx.registerType("multiautocomplete", inputEx.MultiAutoComplete);

})();(function() {

   var inputEx = YAHOO.inputEx;

/**
 * @class Create a uneditable field where you can stick the html you want
 * Added Options:
 * <ul>
 *    <li>visu: inputEx visu type</li>
 * </ul>
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options inputEx.Field options object
 */
inputEx.UneditableField = function(options) {
	inputEx.UneditableField.superclass.constructor.call(this,options);
};
YAHOO.lang.extend(inputEx.UneditableField, inputEx.Field, 
/**
 * @scope inputEx.UneditableField.prototype   
 */
{
   
   /**
    * Set the default values of the options
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
	setOptions: function(options) {
      inputEx.UneditableField.superclass.setOptions.call(this,options);
      this.options.visu = options.visu;
   },
   
   /**
    * Store the value and update the visu
    * @param {Any} val The value that will be sent to the visu
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */
   setValue: function(val, sendUpdatedEvt) {
      this.value = val;
      
      inputEx.renderVisu(this.options.visu, val, this.fieldContainer);
      
	   inputEx.UneditableField.superclass.setValue.call(this, val, sendUpdatedEvt);
   },
   
   /**
    * Return the stored value
    * @return {Any} The previously stored value
    */
   getValue: function() {
      return this.value;
   }
   
});

/**
 * Register this class as "url" type
 */
inputEx.registerType("uneditable", inputEx.UneditableField);

})();(function () {
     var inputEx = YAHOO.inputEx,lang=YAHOO.lang;
     
/**
 * @class Create a slider using YUI widgets
 * @extends inputEx.Field
 * @constructor
 * @param {Object} options inputEx.Field options object
 */
inputEx.SliderField = function(options) {
   inputEx.SliderField.superclass.constructor.call(this,options);
};

YAHOO.lang.extend(inputEx.SliderField, inputEx.Field, 
/**
 * @scope inputEx.SliderField.prototype   
 */  
{
   /**
    * Set the classname to 'inputEx-SliderField'
    * @param {Object} options Options object (inputEx inputParams) as passed to the constructor
    */
   setOptions: function(options) {
      inputEx.SliderField.superclass.setOptions.call(this, options);
      
      this.options.className = options.className ? options.className : 'inputEx-SliderField';
   	   
      this.options.minValue = lang.isUndefined(options.minValue) ? 0 : options.minValue;
      this.options.maxValue = lang.isUndefined(options.maxValue) ? 100 : options.maxValue;
      
      this.options.displayValue = lang.isUndefined(options.displayValue) ? true : options.displayValue;
   },
      
   /**
    * render a slider widget
    */
   renderComponent: function() {
            
      this.sliderbg = inputEx.cn('div', {id: YAHOO.util.Dom.generateId(), className: 'inputEx-SliderField-bg'});
      this.sliderthumb = inputEx.cn('div', {className: 'inputEx-SliderField-thumb'} );      
      this.sliderbg.appendChild(this.sliderthumb);
      this.fieldContainer.appendChild(this.sliderbg);
      
      if(this.options.displayValue) {
         this.valueDisplay = inputEx.cn('div', {className: 'inputEx-SliderField-value'}, null, String(this.options.minValue) );
         this.fieldContainer.appendChild(this.valueDisplay);
      }
      
      this.fieldContainer.appendChild( inputEx.cn('div',null,{clear: 'both'}) );
            
      this.slider = YAHOO.widget.Slider.getHorizSlider(this.sliderbg, this.sliderthumb, 0,100);
   },
   
   initEvents: function() {
      
      // Fire the updated event when we released the slider
      // the slider 'change' event would generate too much events (if used in a group, it gets validated too many times)
      this.slider.on('slideEnd', this.fireUpdatedEvt, this, true);
      
      // Update the displayed value
      if(this.options.displayValue) {
         this.updatedEvt.subscribe( function(e,params) {
            var val = params[0];
            this.valueDisplay.innerHTML = val;
         }, this, true);
      }
   },
   
   /**
    * Function to set the value
    * @param {Any} value The new value
    * @param {boolean} [sendUpdatedEvt] (optional) Wether this setValue should fire the updatedEvt or not (default is true, pass false to NOT send the event)
    */  
   setValue: function(val, sendUpdatedEvt) {
      
      var v = val;
      if(v < this.options.minValue) {
         v = this.options.minValue;
      }
      if(v > this.options.maxValue) {
         v = this.options.maxValue;
      }
      
      var percent = Math.floor(v-this.options.minValue)*100/this.options.maxValue;
      
      this.slider.setValue(percent);
      
      inputEx.SliderField.superclass.setValue.call(this, val, sendUpdatedEvt);
   },

   /**
    * Get the value from the slider
    * @return {int} The integer value
    */
   getValue: function() {
      var val = Math.floor(this.options.minValue+(this.options.maxValue-this.options.minValue)*this.slider.getValue()/100);
      return val;
   }
    
});

/**
 * Register this class as "slider" type
 */
inputEx.registerType("slider", inputEx.SliderField);

})();
