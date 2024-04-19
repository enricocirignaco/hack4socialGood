
/**
 *
 *  MD5 (Message-Digest Algorithm)
 *  http://www.webtoolkit.info/
 *
 **/

function MD5(string) {

  function RotateLeft(lValue, iShiftBits) {
    return (lValue << iShiftBits) | (lValue >>> (32 - iShiftBits));
  }

  function AddUnsigned(lX, lY) {
    var lX4, lY4, lX8, lY8, lResult;
    lX8 = (lX & 0x80000000);
    lY8 = (lY & 0x80000000);
    lX4 = (lX & 0x40000000);
    lY4 = (lY & 0x40000000);
    lResult = (lX & 0x3FFFFFFF) + (lY & 0x3FFFFFFF);
    if (lX4 & lY4) {
      return (lResult ^ 0x80000000 ^ lX8 ^ lY8);
    }
    if (lX4 | lY4) {
      if (lResult & 0x40000000) {
        return (lResult ^ 0xC0000000 ^ lX8 ^ lY8);
      } else {
        return (lResult ^ 0x40000000 ^ lX8 ^ lY8);
      }
    } else {
      return (lResult ^ lX8 ^ lY8);
    }
  }

  function F(x, y, z) {
    return (x & y) | ((~x) & z);
  }

  function G(x, y, z) {
    return (x & z) | (y & (~z));
  }

  function H(x, y, z) {
    return (x ^ y ^ z);
  }

  function I(x, y, z) {
    return (y ^ (x | (~z)));
  }

  function FF(a, b, c, d, x, s, ac) {
    a = AddUnsigned(a, AddUnsigned(AddUnsigned(F(b, c, d), x), ac));
    return AddUnsigned(RotateLeft(a, s), b);
  };

  function GG(a, b, c, d, x, s, ac) {
    a = AddUnsigned(a, AddUnsigned(AddUnsigned(G(b, c, d), x), ac));
    return AddUnsigned(RotateLeft(a, s), b);
  };

  function HH(a, b, c, d, x, s, ac) {
    a = AddUnsigned(a, AddUnsigned(AddUnsigned(H(b, c, d), x), ac));
    return AddUnsigned(RotateLeft(a, s), b);
  };

  function II(a, b, c, d, x, s, ac) {
    a = AddUnsigned(a, AddUnsigned(AddUnsigned(I(b, c, d), x), ac));
    return AddUnsigned(RotateLeft(a, s), b);
  };

  function ConvertToWordArray(string) {
    var lWordCount;
    var lMessageLength = string.length;
    var lNumberOfWords_temp1 = lMessageLength + 8;
    var lNumberOfWords_temp2 = (lNumberOfWords_temp1 - (lNumberOfWords_temp1 % 64)) / 64;
    var lNumberOfWords = (lNumberOfWords_temp2 + 1) * 16;
    var lWordArray = Array(lNumberOfWords - 1);
    var lBytePosition = 0;
    var lByteCount = 0;
    while (lByteCount < lMessageLength) {
      lWordCount = (lByteCount - (lByteCount % 4)) / 4;
      lBytePosition = (lByteCount % 4) * 8;
      lWordArray[lWordCount] = (lWordArray[lWordCount] | (string.charCodeAt(lByteCount) << lBytePosition));
      lByteCount++;
    }
    lWordCount = (lByteCount - (lByteCount % 4)) / 4;
    lBytePosition = (lByteCount % 4) * 8;
    lWordArray[lWordCount] = lWordArray[lWordCount] | (0x80 << lBytePosition);
    lWordArray[lNumberOfWords - 2] = lMessageLength << 3;
    lWordArray[lNumberOfWords - 1] = lMessageLength >>> 29;
    return lWordArray;
  };

  function WordToHex(lValue) {
    var WordToHexValue = "", WordToHexValue_temp = "", lByte, lCount;
    for (lCount = 0; lCount <= 3; lCount++) {
      lByte = (lValue >>> (lCount * 8)) & 255;
      WordToHexValue_temp = "0" + lByte.toString(16);
      WordToHexValue = WordToHexValue + WordToHexValue_temp.substr(WordToHexValue_temp.length - 2, 2);
    }
    return WordToHexValue;
  };

  function Utf8Encode(string) {
    string = string.replace(/\r\n/g, "\n");
    var utftext = "";

    for (var n = 0; n < string.length; n++) {

      var c = string.charCodeAt(n);

      if (c < 128) {
        utftext += String.fromCharCode(c);
      }
      else if ((c > 127) && (c < 2048)) {
        utftext += String.fromCharCode((c >> 6) | 192);
        utftext += String.fromCharCode((c & 63) | 128);
      }
      else {
        utftext += String.fromCharCode((c >> 12) | 224);
        utftext += String.fromCharCode(((c >> 6) & 63) | 128);
        utftext += String.fromCharCode((c & 63) | 128);
      }

    }

    return utftext;
  };

  var x = Array();
  var k, AA, BB, CC, DD, a, b, c, d;
  var S11 = 7, S12 = 12, S13 = 17, S14 = 22;
  var S21 = 5, S22 = 9, S23 = 14, S24 = 20;
  var S31 = 4, S32 = 11, S33 = 16, S34 = 23;
  var S41 = 6, S42 = 10, S43 = 15, S44 = 21;

  string = Utf8Encode(string);

  x = ConvertToWordArray(string);

  a = 0x67452301;
  b = 0xEFCDAB89;
  c = 0x98BADCFE;
  d = 0x10325476;

  for (k = 0; k < x.length; k += 16) {
    AA = a;
    BB = b;
    CC = c;
    DD = d;
    a = FF(a, b, c, d, x[k + 0], S11, 0xD76AA478);
    d = FF(d, a, b, c, x[k + 1], S12, 0xE8C7B756);
    c = FF(c, d, a, b, x[k + 2], S13, 0x242070DB);
    b = FF(b, c, d, a, x[k + 3], S14, 0xC1BDCEEE);
    a = FF(a, b, c, d, x[k + 4], S11, 0xF57C0FAF);
    d = FF(d, a, b, c, x[k + 5], S12, 0x4787C62A);
    c = FF(c, d, a, b, x[k + 6], S13, 0xA8304613);
    b = FF(b, c, d, a, x[k + 7], S14, 0xFD469501);
    a = FF(a, b, c, d, x[k + 8], S11, 0x698098D8);
    d = FF(d, a, b, c, x[k + 9], S12, 0x8B44F7AF);
    c = FF(c, d, a, b, x[k + 10], S13, 0xFFFF5BB1);
    b = FF(b, c, d, a, x[k + 11], S14, 0x895CD7BE);
    a = FF(a, b, c, d, x[k + 12], S11, 0x6B901122);
    d = FF(d, a, b, c, x[k + 13], S12, 0xFD987193);
    c = FF(c, d, a, b, x[k + 14], S13, 0xA679438E);
    b = FF(b, c, d, a, x[k + 15], S14, 0x49B40821);
    a = GG(a, b, c, d, x[k + 1], S21, 0xF61E2562);
    d = GG(d, a, b, c, x[k + 6], S22, 0xC040B340);
    c = GG(c, d, a, b, x[k + 11], S23, 0x265E5A51);
    b = GG(b, c, d, a, x[k + 0], S24, 0xE9B6C7AA);
    a = GG(a, b, c, d, x[k + 5], S21, 0xD62F105D);
    d = GG(d, a, b, c, x[k + 10], S22, 0x2441453);
    c = GG(c, d, a, b, x[k + 15], S23, 0xD8A1E681);
    b = GG(b, c, d, a, x[k + 4], S24, 0xE7D3FBC8);
    a = GG(a, b, c, d, x[k + 9], S21, 0x21E1CDE6);
    d = GG(d, a, b, c, x[k + 14], S22, 0xC33707D6);
    c = GG(c, d, a, b, x[k + 3], S23, 0xF4D50D87);
    b = GG(b, c, d, a, x[k + 8], S24, 0x455A14ED);
    a = GG(a, b, c, d, x[k + 13], S21, 0xA9E3E905);
    d = GG(d, a, b, c, x[k + 2], S22, 0xFCEFA3F8);
    c = GG(c, d, a, b, x[k + 7], S23, 0x676F02D9);
    b = GG(b, c, d, a, x[k + 12], S24, 0x8D2A4C8A);
    a = HH(a, b, c, d, x[k + 5], S31, 0xFFFA3942);
    d = HH(d, a, b, c, x[k + 8], S32, 0x8771F681);
    c = HH(c, d, a, b, x[k + 11], S33, 0x6D9D6122);
    b = HH(b, c, d, a, x[k + 14], S34, 0xFDE5380C);
    a = HH(a, b, c, d, x[k + 1], S31, 0xA4BEEA44);
    d = HH(d, a, b, c, x[k + 4], S32, 0x4BDECFA9);
    c = HH(c, d, a, b, x[k + 7], S33, 0xF6BB4B60);
    b = HH(b, c, d, a, x[k + 10], S34, 0xBEBFBC70);
    a = HH(a, b, c, d, x[k + 13], S31, 0x289B7EC6);
    d = HH(d, a, b, c, x[k + 0], S32, 0xEAA127FA);
    c = HH(c, d, a, b, x[k + 3], S33, 0xD4EF3085);
    b = HH(b, c, d, a, x[k + 6], S34, 0x4881D05);
    a = HH(a, b, c, d, x[k + 9], S31, 0xD9D4D039);
    d = HH(d, a, b, c, x[k + 12], S32, 0xE6DB99E5);
    c = HH(c, d, a, b, x[k + 15], S33, 0x1FA27CF8);
    b = HH(b, c, d, a, x[k + 2], S34, 0xC4AC5665);
    a = II(a, b, c, d, x[k + 0], S41, 0xF4292244);
    d = II(d, a, b, c, x[k + 7], S42, 0x432AFF97);
    c = II(c, d, a, b, x[k + 14], S43, 0xAB9423A7);
    b = II(b, c, d, a, x[k + 5], S44, 0xFC93A039);
    a = II(a, b, c, d, x[k + 12], S41, 0x655B59C3);
    d = II(d, a, b, c, x[k + 3], S42, 0x8F0CCC92);
    c = II(c, d, a, b, x[k + 10], S43, 0xFFEFF47D);
    b = II(b, c, d, a, x[k + 1], S44, 0x85845DD1);
    a = II(a, b, c, d, x[k + 8], S41, 0x6FA87E4F);
    d = II(d, a, b, c, x[k + 15], S42, 0xFE2CE6E0);
    c = II(c, d, a, b, x[k + 6], S43, 0xA3014314);
    b = II(b, c, d, a, x[k + 13], S44, 0x4E0811A1);
    a = II(a, b, c, d, x[k + 4], S41, 0xF7537E82);
    d = II(d, a, b, c, x[k + 11], S42, 0xBD3AF235);
    c = II(c, d, a, b, x[k + 2], S43, 0x2AD7D2BB);
    b = II(b, c, d, a, x[k + 9], S44, 0xEB86D391);
    a = AddUnsigned(a, AA);
    b = AddUnsigned(b, BB);
    c = AddUnsigned(c, CC);
    d = AddUnsigned(d, DD);
  }

  var temp = WordToHex(a) + WordToHex(b) + WordToHex(c) + WordToHex(d);

  return temp.toLowerCase();
}

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Contains JavaScript for TYPO3 Core Form generator - AKA "TCEforms"
 */

var TBE_EDITOR = {
  /* Example:
    elements: {
      'data-parentPid-table-uid': {
        'field': {
          'range':		[0, 100],
          'rangeImg':		'',
          'required':		true,
          'requiredImg':	''
        }
      }
    },
  */

  elements: {},
  nested: {'field': {}, 'level': {}},
  ignoreElements: [],
  actionChecks: {submit: []},
  customEvalFunctions: {},

  formname: 'editform',
  isChanged: 0,

  doSaveFieldName: 0,

  labels: {},

  clearBeforeSettingFormValueFromBrowseWin: [],

  // Handling of data structures:
  removeElement: function(record) {
    if (TBE_EDITOR.elements && TBE_EDITOR.elements[record]) {
      delete(TBE_EDITOR.elements[record]);
    }
  },
  removeElementArray: function(removeStack) {
    if (removeStack && removeStack.length) {
      TBE_EDITOR.ignoreElements = removeStack;
      for (var i = removeStack.length; i >= 0; i--) {
        TBE_EDITOR.removeElement(removeStack[i]);
      }
      TBE_EDITOR.ignoreElements = [];
    }
  },
  getElement: function(record, field, type) {
    var result = null;
    var element;

    if (TBE_EDITOR.elements && TBE_EDITOR.elements[record] && TBE_EDITOR.elements[record][field]) {
      element = TBE_EDITOR.elements[record][field];
      if (type) {
        if (element[type]) result = element;
      } else {
        result = element;
      }
    }

    return result;
  },
  checkElements: function() {
    return (document.getElementsByClassName('has-error').length == 0);
  },
  addActionChecks: function(type, checks) {
    TBE_EDITOR.actionChecks[type].push(checks);
  },

  fieldChanged_fName: function(fName, el) {
    var idx = 2;
    var table = TBE_EDITOR.split(fName, "[", idx);
    var uid = TBE_EDITOR.split(fName, "[", idx + 1);
    var field = TBE_EDITOR.split(fName, "[", idx + 2);

    table = table.substr(0, table.length - 1);
    uid = uid.substr(0, uid.length - 1);
    field = field.substr(0, field.length - 1);
    TBE_EDITOR.fieldChanged(table, uid, field, el);
  },
  fieldChanged: function(table, uid, field, el) {
    var theField = 'data[' + table + '][' + uid + '][' + field + ']';
    TBE_EDITOR.isChanged = 1;

    // modify the "field has changed" info by adding a class to the container element (based on palette or main field)
    var $formField = $('[name="' + el + '"]');
    var $humanReadableField = $('[data-formengine-input-name="' + el + '"]');
    if (!$formField.is($humanReadableField)) {
      $humanReadableField.triggerHandler('change');
    }
    // add class to palette field
    $formField.closest('.t3js-formengine-palette-field').addClass('has-change');

    if (TYPO3.FormEngine && TYPO3.FormEngine.Validation) {
      TYPO3.FormEngine.Validation.updateInputField(theField);
      TYPO3.FormEngine.Validation.validate();
    }
  },
  isFormChanged: function(noAlert) {
    if (TBE_EDITOR.isChanged && !noAlert && confirm(TYPO3.lang['FormEngine.fieldsChanged'])) {
      return 0;
    }
    return TBE_EDITOR.isChanged;
  },
  checkAndDoSubmit: function(sendAlert) {
    if (TBE_EDITOR.checkSubmit(sendAlert)) {
      TBE_EDITOR.submitForm();
    }
  },
  /**
   * Checks if the form can be submitted according to any possible restrains like required values, item numbers etc.
   * Returns true if the form can be submitted, otherwise false (and might issue an alert message, if "sendAlert" is 1)
   * If "sendAlert" is false, no error message will be shown upon false return value (if "1" then it will).
   * If "sendAlert" is "-1" then the function will ALWAYS return true regardless of constraints (except if login has expired) - this is used in the case where a form field change requests a form update and where it is accepted that constraints are not observed (form layout might change so other fields are shown...)
   */
  checkSubmit: function(sendAlert) {
    var funcIndex, funcMax, funcRes;
    var OK = 1;
    var STOP = 0;

    // $this->additionalJS_submit:
    if (TBE_EDITOR.actionChecks && TBE_EDITOR.actionChecks.submit) {
      for (funcIndex = 0, funcMax = TBE_EDITOR.actionChecks.submit.length; funcIndex < funcMax; funcIndex++) {
        try {
          eval(TBE_EDITOR.actionChecks.submit[funcIndex]);
        } catch (error) {
        }
      }
    }

    if (STOP) {
      // return false immediately, if the code in additionalJS_submit set STOP variable.
      return false;
    }

    if (!OK) {
      if (!confirm(unescape("SYSTEM ERROR: One or more Rich Text Editors on the page could not be contacted. This IS an error, although it should not be regular.\nYou can save the form now by pressing OK, but you will loose the Rich Text Editor content if you do.\n\nPlease report the error to your administrator if it persists."))) {
        return false;
      } else {
        OK = 1;
      }
    }
    if (!TBE_EDITOR.checkElements()) {
      OK = 0;
    }

    if (OK || sendAlert == -1) {
      return true;
    } else {
      if (sendAlert) {
        var t = (opener != null && typeof opener.top.TYPO3 !== 'undefined' ? opener.top : top);
        t.TYPO3.Modal.confirm(
          t.TYPO3.lang['alert'] || 'Alert',
          TYPO3.lang['FormEngine.fieldsMissing'],
          t.TYPO3.Severity.error,
          [
            {
              text: t.TYPO3.lang['button.ok'] || 'OK',
              active: true,
              btnClass: 'btn-default',
              name: 'ok'
            }
          ]
        ).on('button.clicked', function(e) {
          t.TYPO3.Modal.dismiss();
        });
      }
      return false;
    }
  },
  submitForm: function() {
    if (TBE_EDITOR.doSaveFieldName) {
      document[TBE_EDITOR.formname][TBE_EDITOR.doSaveFieldName].value = 1;
    }

    const elements = [
      'button[form]',
      'button[name^="_save"]',
      'a[data-name^="_save"]',
      'button[name="CMD"][value^="save"]',
      'a[data-name="CMD"][data-value^="save"]',
    ].join(',');

    const button = document.querySelector(elements);
    if (button !== null) {
      button.disabled = true;

      TYPO3.Icons.getIcon('spinner-circle-dark', TYPO3.Icons.sizes.small).done(function (markup) {
        button.querySelector('.t3js-icon').outerHTML = markup;
      });
    }

    // Set a short timeout to allow other JS processes to complete, in particular those from
    // EXT:backend/Resources/Public/JavaScript/FormEngine.js (reference: http://forge.typo3.org/issues/58755).
    // TODO: This should be solved in a better way when this script is refactored.
    window.setTimeout(function() {
      var formElement = document.getElementsByName(TBE_EDITOR.formname).item(0);
      $('[data-active-password]:not([type=password])').each(
        function(index, element) {
          element.setAttribute('type', 'password');
          element.blur();
        }
      );
      formElement.submit();
    }, 100);
  },
  split: function(theStr1, delim, index) {
    var theStr = "" + theStr1;
    var lengthOfDelim = delim.length;
    sPos = -lengthOfDelim;
    if (index < 1) {
      index = 1;
    }
    for (var a = 1; a < index; a++) {
      sPos = theStr.indexOf(delim, sPos + lengthOfDelim);
      if (sPos == -1) {
        return null;
      }
    }
    ePos = theStr.indexOf(delim, sPos + lengthOfDelim);
    if (ePos == -1) {
      ePos = theStr.length;
    }
    return (theStr.substring(sPos + lengthOfDelim, ePos));
  },
  curSelected: function(theField) {
    var fObjSel = $('[data-formengine-input-name="' + theField + '"]').get(1);
    var retVal = "";
    if (fObjSel) {
      if (fObjSel.type == 'select-multiple' || fObjSel.type == 'select-one') {
        var l = fObjSel.length;
        for (a = 0; a < l; a++) {
          if (fObjSel.options[a].selected == 1) {
            retVal += fObjSel.options[a].value + ",";
          }
        }
      }
    }
    return retVal;
  },
  rawurlencode: function(str, maxlen) {
    var output = str;
    if (maxlen) output = output.substr(0, 200);
    output = encodeURIComponent(output);
    return output;
  },
  str_replace: function(match, replace, string) {
    var input = '' + string;
    var matchStr = '' + match;
    if (!matchStr) {
      return string;
    }
    var output = '';
    var pointer = 0;
    var pos = input.indexOf(matchStr);
    while (pos != -1) {
      output += '' + input.substr(pointer, pos - pointer) + replace;
      pointer = pos + matchStr.length;
      pos = input.indexOf(match, pos + 1);
    }
    output += '' + input.substr(pointer);
    return output;
  }
};

// backwards compatibility for extensions
var TBE_EDITOR_setHiddenContent = TBE_EDITOR.setHiddenContent;
var TBE_EDITOR_isChanged = TBE_EDITOR.isChanged;
var TBE_EDITOR_fieldChanged_fName = TBE_EDITOR.fieldChanged_fName;
var TBE_EDITOR_fieldChanged = TBE_EDITOR.fieldChanged;
var TBE_EDITOR_isFormChanged = TBE_EDITOR.isFormChanged;
var TBE_EDITOR_checkAndDoSubmit = TBE_EDITOR.checkAndDoSubmit;
var TBE_EDITOR_checkSubmit = TBE_EDITOR.checkSubmit;
var TBE_EDITOR_submitForm = TBE_EDITOR.submitForm;
var TBE_EDITOR_split = TBE_EDITOR.split;
var TBE_EDITOR_curSelected = TBE_EDITOR.curSelected;
var TBE_EDITOR_rawurlencode = TBE_EDITOR.rawurlencode;
var TBE_EDITOR_str_replace = TBE_EDITOR.str_replace;


var typo3form = {
  fieldSet: function(theField, evallist, is_in, checkbox, checkboxValue) {
    if (document[TBE_EDITOR.formname][theField]) {
      var theFObj = new evalFunc_dummy(evallist, is_in, checkbox, checkboxValue);
      var theValue = document[TBE_EDITOR.formname][theField].value;
      if (checkbox && theValue == checkboxValue) {
        document.querySelector('form[name="' + TBE_EDITOR.formname + '"] [data-formengine-input-name="' + theField + '"]').value = "";
        if (document[TBE_EDITOR.formname][theField + "_cb"]) document[TBE_EDITOR.formname][theField + "_cb"].checked = "";
      } else {
        document.querySelector('form[name="' + TBE_EDITOR.formname + '"] [data-formengine-input-name="' + theField + '"]').value = evalFunc.outputObjValue(theFObj, theValue);
        if (document[TBE_EDITOR.formname][theField + "_cb"]) document[TBE_EDITOR.formname][theField + "_cb"].checked = "on";
      }
    }
  },
  fieldGet: function(theField, evallist, is_in, checkbox, checkboxValue, checkbox_off, checkSetValue) {
    if (document[TBE_EDITOR.formname][theField]) {
      var theFObj = new evalFunc_dummy(evallist, is_in, checkbox, checkboxValue);
      if (checkbox_off) {
        if (document[TBE_EDITOR.formname][theField + "_cb"].checked) {
          var split = evallist.split(',');
          for (var i = 0; split.length > i; i++) {
            var el = split[i].replace(/ /g, '');
            if (el == 'datetime' || el == 'date') {
              var now = new Date();
              checkSetValue = Date.parse(now) / 1000 - now.getTimezoneOffset() * 60;
              break;
            } else if (el == 'time' || el == 'timesec') {
              checkSetValue = evalFunc_getTimeSecs(new Date());
              break;
            }
          }
          document[TBE_EDITOR.formname][theField].value = checkSetValue;
        } else {
          document[TBE_EDITOR.formname][theField].value = checkboxValue;
        }
      } else {
        document[TBE_EDITOR.formname][theField].value = evalFunc.evalObjValue(theFObj, document.querySelector('form[name="' + TBE_EDITOR.formname + '"] [data-formengine-input-name="' + theField + '"]').value);
      }
      typo3form.fieldSet(theField, evallist, is_in, checkbox, checkboxValue);
    }
  }
};

// @TODO: This function is a copy from jsfunc.evalfield.js
// @TODO: Remove it later, after TBE_EDITOR is not used anymore.
function evalFunc_dummy(evallist, is_in, checkbox, checkboxValue) {
  this.evallist = evallist;
  this.is_in = is_in;
  this.checkboxValue = checkboxValue;
  this.checkbox = checkbox;
}

// backwards compatibility for extensions
var typo3FormFieldSet = typo3form.fieldSet;
var typo3FormFieldGet = typo3form.fieldGet;

/*<![CDATA[*/

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 *  Inline-Relational-Record Editing
 */

var inline = {
  classVisible: 'panel-visible',
  classCollapsed: 'panel-collapsed',
  structureSeparator: '-',
  flexFormSeparator: '---',
  flexFormSubstitute: ':',
  noTitleString: (TYPO3.lang ? TYPO3.lang['FormEngine.noRecordTitle'] : '[No title]'),
  lockedAjaxMethod: {},
  sourcesLoaded: {},
  data: {},
  isLoading: false,
  methodRequestMap: {
    'details': 'record_inline_details',
    'create': 'record_inline_create',
    'synchronizelocalize': 'record_inline_synchronizelocalize',
    'expandcollapse': 'record_inline_expandcollapse'
  },
  addMethod: function(method, route) {
    this.methodRequestMap[method] = route;
  },
  addToDataArray: function(object) {
    $.each(object, function(key, value) {
      if (!inline.data[key]) {
        inline.data[key] = {};
      }
      $.extend(inline.data[key], value);
    });
  },
  toggleEvent: function(event) {
    var $triggerElement = $(event.target);
    if ($triggerElement.parents('.t3js-formengine-irre-control').length == 1) {
      return;
    }

    var $recordHeader = $triggerElement.closest('.panel-heading');
    inline.expandCollapseRecord(
      $recordHeader.attr('id').replace(/_header$/, ''),
      $recordHeader.attr('data-expandSingle')
    );
  },
  expandCollapseRecord: function(objectId, expandSingle) {
    var currentUid = this.parseObjectId('none', objectId, 1);
    var objectPrefix = this.parseObjectId('full', objectId, 0, 1);
    var escapedObjectId = this.escapeObjectId(objectId);

    var $currentObject = $('#' + escapedObjectId + '_div');
    // if content is not loaded yet, get it now from server
    if (inline.isLoading) {
      return false;
    } else if ($('#' + escapedObjectId + '_fields').length > 0 && $('#' + escapedObjectId + '_fields').html().substr(0, 16) === '<!--notloaded-->') {
      inline.isLoading = true;
      var headerIdentifier = '#' + escapedObjectId + '_header';
      // add loading-indicator
      require(['nprogress'], function(NProgress) {
        inline.progress = NProgress;
        inline.progress.configure({parent: headerIdentifier, showSpinner: false});
        inline.progress.start();
      });
      return this.getRecordDetails(objectId);
    }

    var isCollapsed = $currentObject.hasClass(this.classCollapsed);
    var collapse = [];
    var expand = [];

    // if only a single record should be visibly for that set of records
    // and the record clicked itself is no visible, collapse all others
    if (expandSingle && $currentObject.hasClass(this.classCollapsed)) {
      collapse = this.collapseAllRecords(objectId, objectPrefix, currentUid);
    }

    inline.toggleElement(objectId);

    if (this.isNewRecord(objectId)) {
      this.updateExpandedCollapsedStateLocally(objectId, isCollapsed);
    } else if (isCollapsed) {
      expand.push(currentUid);
    } else if (!isCollapsed) {
      collapse.push(currentUid);
    }

    this.setExpandedCollapsedState(objectId, expand.join(','), collapse.join(','));

    return false;
  },

  toggleElement: function(objectId) {
    var escapedObjectId = this.escapeObjectId(objectId);
    var $jQueryObject = $('#' + escapedObjectId + '_div');

    if ($jQueryObject.hasClass(this.classCollapsed)) {
      $jQueryObject.removeClass(this.classCollapsed).addClass(this.classVisible);
      $jQueryObject.find('#' + escapedObjectId + '_header .t3-icon-irre-collapsed').removeClass('t3-icon-irre-collapsed').addClass('t3-icon-irre-expanded');
    } else {
      $jQueryObject.removeClass(this.classVisible).addClass(this.classCollapsed);
      $jQueryObject.find('#' + escapedObjectId + '_header .t3-icon-irre-expanded').addClass('t3-icon-irre-collapsed').removeClass('t3-icon-irre-expanded');
    }
  },
  collapseAllRecords: function(objectId, objectPrefix, callingUid) {
    // get the form field, where all records are stored
    var objectName = 'data' + this.parseObjectId('parts', objectId, 3, 2, true);
    var formObj = document.getElementsByName(objectName);
    var collapse = [];

    if (formObj.length) {
      // the uid of the calling object (last part in objectId)
      var recObjectId = '', escapedRecordObjectId;

      var records = this.trimExplode(',', formObj[0].value);
      for (var i = 0; i < records.length; i++) {
        recObjectId = objectPrefix + this.structureSeparator + records[i];
        escapedRecordObjectId = this.escapeObjectId(recObjectId);

        var $recordEntry = $('#' + escapedRecordObjectId + '_div');
        if (records[i] != callingUid && $recordEntry.hasClass(this.classVisible)) {
          $recordEntry.removeClass(this.classVisible).addClass(this.classCollapsed);
          if (this.isNewRecord(recObjectId)) {
            this.updateExpandedCollapsedStateLocally(recObjectId, 0);
          } else {
            collapse.push(records[i]);
          }
        }
      }
    }

    return collapse;
  },

  updateExpandedCollapsedStateLocally: function(objectId, value) {
    var ucName = 'uc[inlineView]' + this.parseObjectId('parts', objectId, 3, 2, true);
    var ucFormObj = document.getElementsByName(ucName);
    if (ucFormObj.length) {
      ucFormObj[0].value = value;
    }
  },

  getRecordDetails: function(objectId) {
    var context = this.getContext(this.parseObjectId('full', objectId, 0, 1));
    inline.makeAjaxCall(this.methodRequestMap.details, [objectId], true, context);
    return false;
  },

  createNewRecord: function(objectId, recordUid) {
    if (this.isBelowMax(objectId)) {
      var context = this.getContext(objectId);
      if (recordUid) {
        objectId += this.structureSeparator + recordUid;
      }
      this.makeAjaxCall(this.methodRequestMap.create, [objectId], true, context);
    } else {
      var message = TYPO3.lang['FormEngine.maxItemsAllowed'].replace('{0}', this.data.config[objectId].max);
      var matches = objectId.match(/^(data-\d+-.*?-\d+-.*?)-(.*?)$/);
      var title = '';
      if (matches) {
        title = $('#' + matches[1] + '_records').data('title');
      }
      top.TYPO3.Notification.error(title, message, 5);
    }
    return false;
  },

  synchronizeLocalizeRecords: function(objectId, type) {
    var context = this.getContext(objectId);
    this.makeAjaxCall(this.methodRequestMap.synchronizelocalize, [objectId, type], true, context);
    return false;
  },

  setExpandedCollapsedState: function(objectId, expand, collapse) {
    var context = this.getContext(objectId);
    this.makeAjaxCall(this.methodRequestMap.expandcollapse, [objectId, expand, collapse], false, context);
  },

  makeAjaxCall: function(method, params, lock, context) {
    var url = '', urlParams = '', options = {};
    if (method && params && params.length && this.lockAjaxMethod(method, lock)) {
      url = TYPO3.settings.ajaxUrls[method];
      urlParams = '';
      for (var i = 0; i < params.length; i++) {
        urlParams += '&ajax[' + i + ']=' + encodeURIComponent(params[i]);
      }
      if (context) {
        urlParams += '&ajax[context]=' + encodeURIComponent(JSON.stringify(context));
      }
      options = {
        type: 'POST',
        data: urlParams,
        success: function(data, message, jqXHR) {
          inline.isLoading = false;
          inline.processAjaxResponse(method, jqXHR);
          if (inline.progress) {
            inline.progress.done();
          }
        },
        error: function(jqXHR) {
          inline.isLoading = false;
          inline.showAjaxFailure(method, jqXHR);
          if (inline.progress) {
            inline.progress.done();
          }
        }
      };

      $.ajax(url, options);
    }
  },

  lockAjaxMethod: function(method, lock) {
    if (!lock || !inline.lockedAjaxMethod[method]) {
      inline.lockedAjaxMethod[method] = true;
      return true;
    } else {
      return false;
    }
  },

  unlockAjaxMethod: function(method) {
    inline.lockedAjaxMethod[method] = false;
  },

  processAjaxResponse: function(method, xhr, json) {
    var processedCount = 0, sourcesWaiting = [];
    if (!json && xhr) {
      json = xhr.responseJSON;
    }
    if (json.hasErrors) {
      $.each(json.messages, function(position, message) {
        top.TYPO3.Notification.error(message.title, message.message);
      });
    }
    // If there are elements the should be added to the <HEAD> tag (e.g. for RTEhtmlarea):
    if (json.stylesheetFiles) {
      $.each(json.stylesheetFiles, function(index, stylesheetFile) {
        if (!stylesheetFile) {
          return;
        }
        var element = document.createElement('link');
        element['rel'] = 'stylesheet';
        element['type'] = 'text/css';
        element['href'] = stylesheetFile;
        $('head').get(0).appendChild(element);
        processedCount++;
        delete(json.stylesheetFiles[index]);
      });
    }
    if (processedCount) {
      window.setTimeout(function() {
        inline.reprocessAjaxResponse(method, json, sourcesWaiting);
      }, 40);
    } else {
      if (method) {
        inline.unlockAjaxMethod(method);
      }
      if (json.scriptCall && json.scriptCall.length > 0) {
        $.each(json.scriptCall, function(index, value) {
          eval(value);
        });
      }
      TYPO3.FormEngine.reinitialize();
      TYPO3.FormEngine.Validation.initializeInputFields();
      TYPO3.FormEngine.Validation.validate();
    }
  },

  // Check if dynamically added scripts are loaded and restart inline.processAjaxResponse():
  reprocessAjaxResponse: function(method, json, sourcesWaiting) {
    var sourcesLoaded = true;
    if (sourcesWaiting && sourcesWaiting.length) {
      $.each(sourcesWaiting, function(index, source) {
        if (!inline.sourcesLoaded[source]) {
          sourcesLoaded = false;
          return false;
        }
      });
    }
    if (sourcesLoaded) {
      $.each(sourcesWaiting, function(index, source) {
        delete(inline.sourcesLoaded[source]);
      });
      window.setTimeout(function() {
        inline.processAjaxResponse(method, null, json);
      }, 80);
    } else {
      window.setTimeout(function() {
        inline.reprocessAjaxResponse(method, json, sourcesWaiting);
      }, 40);
    }
  },

  sourceLoadedHandler: function(element) {
    if (element && element.src) {
      inline.sourcesLoaded[element.src] = true;
    }
  },

  showAjaxFailure: function(method, xhr) {
    inline.unlockAjaxMethod(method);
    top.TYPO3.Notification.error('Error ' + xhr.status, xhr.statusText, 0);
  },

  // foreign_selector: used by selector box (type='select')
  importNewRecord: function(objectId) {
    var $selector = $('#' + this.escapeObjectId(objectId) + '_selector');
    var selectedIndex = $selector.prop('selectedIndex');
    if (selectedIndex != -1) {
      var context = this.getContext(objectId);
      var selectedValue = $selector.val();
      if (!this.data.unique || !this.data.unique[objectId]) {
        $selector.find('option').eq(selectedIndex).prop('selected', false);
      }
      this.makeAjaxCall(this.methodRequestMap.create, [objectId, selectedValue], true, context);
    }
    return false;
  },

  // foreign_selector: used by element browser (type='group/db')
  importElement: function(objectId, table, uid) {
    var context = this.getContext(objectId);
    inline.makeAjaxCall(this.methodRequestMap.create, [objectId, uid], true, context);
  },

  importElementMultiple: function(objectId, table, uidArray, type) {
    $.each(uidArray, function(index, uid) {
      inline.delayedImportElement(objectId, table, uid, type);
    });
  },
  delayedImportElement: function(objectId, table, uid, type) {
    if (inline.lockedAjaxMethod[this.methodRequestMap.create] == true) {
      window.setTimeout("inline.delayedImportElement('" + objectId + "','" + table + "'," + uid + ", null );",
        300);
    } else {
      inline.importElement(objectId, table, uid, type);
    }
  },
  // Check uniqueness for element browser:
  checkUniqueElement: function(objectId, table, uid) {
    if (this.checkUniqueUsed(objectId, uid, table)) {
      return {passed: false, message: 'There is already a relation to the selected element!'};
    } else {
      return {passed: true};
    }
  },

  // Checks if a record was used and should be unique:
  checkUniqueUsed: function(objectId, uid, table) {
    if (!this.data.unique || !this.data.unique[objectId]) {
      return false;
    }

    var unique = this.data.unique[objectId];
    var values = this.getValuesFromHashMap(unique.used);

    // for select: only the uid is stored
    if (unique['type'] == 'select') {
      if (values.indexOf(uid) != -1) {
        return true;
      }

      // for group/db: table and uid is stored in an assoc array
    } else if (unique.type == 'groupdb') {
      for (var i = values.length - 1; i >= 0; i--) {
        // if the pair table:uid is already used:
        if (values[i].table == table && values[i].uid == uid) {
          return true;
        }
      }
    }

    return false;
  },

  setUniqueElement: function(objectId, table, uid, type, elName) {
    var recordUid = this.parseFormElementName('none', elName, 1, 1);
    this.setUnique(objectId, recordUid, uid);
  },

  getValuesFromHashMap: function(hashMap) {
    return $.map(hashMap, function(value, key) {
      return value;
    });
  },

  // Remove all select items already used
  // from a newly retrieved/expanded record
  removeUsed: function(objectId, recordUid) {
    if (!this.data.unique || !this.data.unique[objectId]) {
      return;
    }

    var unique = this.data.unique[objectId];
    if (unique.type != 'select') {
      return;
    }

    var recordObj = document.getElementsByName('data[' + unique.table + '][' + recordUid + '][' + unique.field + ']');
    var values = this.getValuesFromHashMap(unique.used);
    if (recordObj.length) {
      if (recordObj[0].hasOwnProperty('options')) {
        var selectedValue = recordObj[0].options[recordObj[0].selectedIndex].value;
        for (var i = 0; i < values.length; i++) {
          if (values[i] != selectedValue) {
            var $recordObject = $(recordObj[0]);
            this.removeSelectOption($recordObject, values[i]);
          }
        }
      }
    }
  },
  // this function is applied to a newly inserted record by AJAX
  // it removes the used select items, that should be unique
  setUnique: function(objectId, recordUid, selectedValue) {
    if (!this.data.unique || !this.data.unique[objectId]) {
      return;
    }
    var $selector = $('#' + this.escapeObjectId(objectId) + '_selector');

    var unique = this.data.unique[objectId];
    if (unique.type == 'select') {
      if (!(unique.selector && unique.max == -1)) {
        var formName = 'data' + this.parseObjectId('parts', objectId, 3, 1, true);
        var formObj = document.getElementsByName(formName);
        var recordObj = document.getElementsByName('data[' + unique.table + '][' + recordUid + '][' + unique.field + ']');
        var values = this.getValuesFromHashMap(unique.used);
        if ($selector.length) {
          // remove all items from the new select-item which are already used in other children
          if (recordObj.length) {
            var $recordObject = $(recordObj[0]);
            for (var i = 0; i < values.length; i++) {
              this.removeSelectOption($recordObject, values[i]);
            }
            // set the selected item automatically to the first of the remaining items if no selector is used
            if (!unique.selector) {
              selectedValue = recordObj[0].options[0].value;
              recordObj[0].options[0].selected = true;
              this.updateUnique(recordObj[0], objectId, formName, recordUid);
              this.handleChangedField(recordObj[0], objectId + '[' + recordUid + ']');
            }
          }
          for (var i = 0; i < values.length; i++) {
            this.removeSelectOption($selector, values[i]);
          }
          if (typeof this.data.unique[objectId].used.length != 'undefined') {
            this.data.unique[objectId].used = {};
          }
          this.data.unique[objectId].used[recordUid] = selectedValue;
        }
        // remove the newly used item from each select-field of the child records
        if (formObj.length && this.selectOptionExists($selector, selectedValue)) {
          var records = this.trimExplode(',', formObj[0].value);
          for (var i = 0; i < records.length; i++) {
            recordObj = document.getElementsByName('data[' + unique.table + '][' + records[i] + '][' + unique.field + ']');
            if (recordObj.length && records[i] != recordUid) {
              var $recordObject = $(recordObj[0]);
              this.removeSelectOption($recordObject, selectedValue);
            }
          }
        }
      }
    } else if (unique.type == 'groupdb') {
      // add the new record to the used items:
      this.data.unique[objectId].used[recordUid] = {'table': unique.elTable, 'uid': selectedValue};
    }

    // remove used items from a selector-box
    if (unique.selector == 'select' && this.selectOptionExists($selector, selectedValue)) {
      this.removeSelectOption($selector, selectedValue);
      this.data.unique[objectId]['used'][recordUid] = selectedValue;
    }
  },

  domAddNewRecord: function(method, insertObjectId, objectPrefix, htmlData) {
    var $insertObject = $('#' + this.escapeObjectId(insertObjectId));
    if (this.isBelowMax(objectPrefix)) {
      if (method == 'bottom') {
        $insertObject.append(htmlData);
      } else if (method == 'after') {
        $insertObject.after(htmlData);
      }
    } else {
      var message = TYPO3.lang['FormEngine.maxItemsAllowed'].replace('{0}', this.data.config[objectPrefix].max);
      var title = $insertObject.data('title');
      top.TYPO3.Notification.error(title, message);
    }
  },

  domAddRecordDetails: function(objectId, objectPrefix, expandSingle, htmlData) {
    var hiddenValue, formObj, valueObj;
    var escapeObjectId = this.escapeObjectId(objectId);
    var $objectDiv = $('#' + escapeObjectId + '_fields');
    if ($objectDiv.length == 0 || $objectDiv.html().substr(0, 16) !== '<!--notloaded-->') {
      return;
    }

    var elName = this.parseObjectId('full', objectId, 2, 0, true);

    var $formObj = $('[data-formengine-input-name="' + elName + '[hidden]"]');
    var $valueObj = $('[name="' + elName + '[hidden]"]');

    // It might be the case that a child record
    // cannot be hidden at all (no hidden field)
    if ($formObj.length && $valueObj.length) {
      hiddenValue = $formObj[0].checked;
      $formObj.first().remove();
      $valueObj.first().remove();
    }

    // Update DOM
    $objectDiv.html(htmlData);

    formObj = document.querySelector('[data-formengine-input-name="' + elName + '[hidden]"]');
    valueObj = document.getElementsByName(elName + '[hidden]');

    // Set the hidden value again
    if (typeof formObj !== 'undefined' && formObj !== null && valueObj.length) {
      valueObj[0].value = hiddenValue ? 1 : 0;
      formObj.checked = hiddenValue;
    }

    // now that the content is loaded, set the expandState
    this.expandCollapseRecord(objectId, expandSingle);
  },

  changeSorting: function(objectId, direction) {
    var objectName = 'data' + this.parseObjectId('parts', objectId, 3, 2, true);
    var objectPrefix = this.parseObjectId('full', objectId, 0, 1);
    var formObj = document.getElementsByName(objectName);

    if (!formObj.length) {
      return false;
    }

    // the uid of the calling object (last part in objectId)
    var callingUid = this.parseObjectId('none', objectId, 1);
    var records = this.trimExplode(',', formObj[0].value);
    var current = records.indexOf(callingUid);
    var changed = false;

    // move up
    if (direction > 0 && current > 0) {
      records[current] = records[current - 1];
      records[current - 1] = callingUid;
      changed = true;

      // move down
    } else if (direction < 0 && current < records.length - 1) {
      records[current] = records[current + 1];
      records[current + 1] = callingUid;
      changed = true;
    }

    if (changed) {
      formObj[0].value = records.join(',');
      var cAdj = direction > 0 ? 1 : 0; // adjustment
      var objectIdPrefix = '#' + this.escapeObjectId(objectPrefix) + this.structureSeparator;
      $(objectIdPrefix + records[current - cAdj] + '_div').insertBefore(
        $(objectIdPrefix + records[current + 1 - cAdj] + '_div')
      );
      this.redrawSortingButtons(objectPrefix, records);
      $(formObj).addClass('has-change');
      $(document).trigger('inline:sorting-changed');
      $(document).trigger('change');
    }

    return false;
  },

  dragAndDropSorting: function(element) {
    var objectId = element.getAttribute('id').replace(/_records$/, '');
    var objectName = 'data' + inline.parseObjectId('parts', objectId, 3, 0, true);
    var formObj = document.getElementsByName(objectName);
    var $element = $(element);

    if (!formObj.length) {
      return;
    }

    var checked = [];
    var order = [];
    $element.find('.sortableHandle').each(function(i, e) {
      order.push($(e).data('id').toString());
    });
    var records = this.trimExplode(',', formObj[0].value);

    // check if ordered uid is really part of the records
    // virtually deleted items might still be there but ordering shouldn't saved at all on them
    for (var i = 0; i < order.length; i++) {
      if (records.indexOf(order[i]) != -1) {
        checked.push(order[i]);
      }
    }

    formObj[0].value = checked.join(',');

    if (inline.data.config && inline.data.config[objectId]) {
      var table = inline.data.config[objectId].table;
      inline.redrawSortingButtons(objectId + inline.structureSeparator + table, checked);
      $(formObj).addClass('has-change');
      $(document).trigger('change');
    }
  },

  createDragAndDropSorting: function(objectId) {
    require(['jquery', 'jquery-ui/sortable'], function($) {
      var $sortingContainer = $('#' + inline.escapeObjectId(objectId));

      if ($sortingContainer.hasClass('ui-sortable')) {
        $sortingContainer.sortable('enable');
        return;
      }

      $sortingContainer.sortable({
        containment: 'parent',
        handle: '.sortableHandle',
        zIndex: '4000',
        axis: 'y',
        tolerance: 'pointer',
        stop: function() {
          inline.dragAndDropSorting($sortingContainer[0]);
        }
      });
    });
  },

  destroyDragAndDropSorting: function(objectId) {
    require(['jquery', 'jquery-ui/sortable'], function($) {
      var $sortingContainer = $('#' + inline.escapeObjectId(objectId));
      if (!$sortingContainer.hasClass('ui-sortable')) {
        return;
      }
      $sortingContainer.sortable('disable');
    });
  },

  redrawSortingButtons: function(objectPrefix, records) {
    var i, $headerObj, sortUp, sortDown, partOfHeaderObj, iconIdentifier;

    // if no records were passed, fetch them from form field
    if (typeof records == 'undefined') {
      records = [];
      var objectName = 'data' + this.parseObjectId('parts', objectPrefix, 3, 1, true);
      var formObj = document.getElementsByName(objectName);
      if (formObj.length) {
        records = this.trimExplode(',', formObj[0].value);
      }
    }
    partOfHeaderObj = this.escapeObjectId(objectPrefix) + this.structureSeparator;
    require(['TYPO3/CMS/Backend/Icons'], function(Icons) {
      for (i = 0; i < records.length; i++) {
        if (!records[i].length) {
          continue;
        }
        $headerObj = $('#' + partOfHeaderObj + records[i] + '_header');
        sortUp = $headerObj.find('.sortingUp');
        iconIdentifier = 'actions-move-up';
        if (sortUp) {
          if (i == 0) {
            sortUp.addClass('disabled');
            iconIdentifier = 'empty-empty';
          } else {
            sortUp.removeClass('disabled');
          }
          Icons.getIcon(iconIdentifier, Icons.sizes.small).done(function(markup) {
            sortUp.find('.t3js-icon').replaceWith(markup);
          });
        }
        sortDown = $headerObj.find('.sortingDown');
        iconIdentifier = 'actions-move-down';
        if (sortDown) {
          if (i == records.length - 1) {
            sortDown.addClass('disabled');
            iconIdentifier = 'empty-empty';
          } else {
            sortDown.removeClass('disabled');
          }
          Icons.getIcon(iconIdentifier, Icons.sizes.small).done(function(markup) {
            sortDown.find('.t3js-icon').replaceWith(markup);
          });
        }
      }
    });
  },

  memorizeAddRecord: function(objectPrefix, newUid, afterUid, selectedValue) {
    if (this.isBelowMax(objectPrefix)) {
      var objectName = 'data' + this.parseObjectId('parts', objectPrefix, 3, 1, true);
      var formObj = document.getElementsByName(objectName);

      if (formObj.length) {
        var records = [];
        if (formObj[0].value.length) {
          records = this.trimExplode(',', formObj[0].value);
        }

        if (afterUid) {
          var newRecords = [];
          for (var i = 0; i < records.length; i++) {
            if (records[i].length) {
              newRecords.push(records[i]);
            }
            if (afterUid == records[i]) {
              newRecords.push(newUid);
            }
          }
          records = newRecords;
        } else {
          records.push(newUid);
        }
        formObj[0].value = records.join(',');

        $(formObj).addClass('has-change');
        $(document).trigger('change');
      }

      this.redrawSortingButtons(objectPrefix, records);

      if (this.data.unique && this.data.unique[objectPrefix]) {
        this.setUnique(objectPrefix, newUid, selectedValue);
      }
    }

    // if we reached the maximum of possible records after this action, hide the new buttons
    if (!this.isBelowMax(objectPrefix)) {
      var objectParent = this.parseObjectId('full', objectPrefix, 0, 1);
      var md5 = this.getObjectMD5(objectParent);
      this.hideElementsWithClassName('.inlineNewButton' + (md5 ? '.' + md5 : ''), objectParent);
      this.hideElementsWithClassName('.inlineNewRelationButton' + (md5 ? '.' + md5 : ''), objectParent);
      this.hideElementsWithClassName('.inlineNewFileUploadButton' + (md5 ? '.' + md5 : ''), objectParent);
      this.hideElementsWithClassName('.t3js-online-media-add-btn' + (md5 ? '.' + md5 : ''), objectParent);
      this.hideElementsWithClassName('.inlineForeignSelector' + (md5 ? '.' + md5 : ''), 't3-form-field-item');
    }

    if (TBE_EDITOR) {
      TBE_EDITOR.fieldChanged_fName(objectName, formObj);
    }
  },

  memorizeRemoveRecord: function(objectName, removeUid) {
    var formObj = document.getElementsByName(objectName);
    if (formObj.length) {
      var parts = [],
        indexOfRemoveUid = -1;
      if (formObj[0].value.length) {
        parts = this.trimExplode(',', formObj[0].value);
        indexOfRemoveUid = parts.indexOf(removeUid);
        if (indexOfRemoveUid !== -1) {
          delete parts[indexOfRemoveUid];
        }
        formObj[0].value = parts.join(',');
        if (TBE_EDITOR) {
          TBE_EDITOR.fieldChanged_fName(objectName, formObj);
        }

        $(formObj).addClass('has-change');
        $(document).trigger('change');
        return parts.length;
      }
    }
    return false;
  },

  updateUnique: function(srcElement, objectPrefix, formName, recordUid) {
    if (!this.data.unique || !this.data.unique[objectPrefix]) {
      return;
    }

    var unique = this.data.unique[objectPrefix];
    var oldValue = unique.used[recordUid];

    if (unique.selector == 'select') {
      var selector = $('#' + this.escapeObjectId(objectPrefix) + '_selector');
      this.removeSelectOption(selector, srcElement.value);
      if (typeof oldValue != 'undefined') {
        this.readdSelectOption(selector, oldValue, unique);
      }
    }

    if (unique.selector && unique.max == -1) {
      return;
    }

    var formObj = document.getElementsByName(formName);
    if (!unique || !formObj.length) {
      return;
    }

    var records = this.trimExplode(',', formObj[0].value);
    var recordObj;
    for (var i = 0; i < records.length; i++) {
      recordObj = document.getElementsByName('data[' + unique.table + '][' + records[i] + '][' + unique.field + ']');
      if (recordObj.length && recordObj[0] != srcElement) {
        var $recordObject = $(recordObj[0]);
        this.removeSelectOption($recordObject, srcElement.value);
        if (typeof oldValue != 'undefined') {
          this.readdSelectOption($recordObject, oldValue, unique);
        }
      }
    }
    this.data.unique[objectPrefix].used[recordUid] = srcElement.value;
  },

  revertUnique: function(objectPrefix, elName, recordUid) {
    if (!this.data.unique || !this.data.unique[objectPrefix]) {
      return;
    }

    var unique = this.data.unique[objectPrefix];
    var fieldObj = elName ? document.getElementsByName(elName + '[' + unique.field + ']') : null;
    var recordContainer = document.querySelector('#' + this.escapeObjectId(objectPrefix + '-' + recordUid + '_div'));

    if (unique.type == 'select') {
      var fieldObjValue;
      if (fieldObj && fieldObj.length) {
        fieldObjValue = fieldObj[0].value;
      } else if (recordContainer !== null && recordContainer.dataset.tableUniqueOriginalValue !== '') {
        fieldObjValue = recordContainer.dataset.tableUniqueOriginalValue;
      } else {
        return;
      }

      delete(this.data.unique[objectPrefix].used[recordUid]);

      if (unique.selector == 'select') {
        if (!isNaN(fieldObjValue)) {
          var $selector = $('#' + this.escapeObjectId(objectPrefix) + '_selector');
          this.readdSelectOption($selector, fieldObjValue, unique);
        }
      }

      if (unique.selector && unique.max == -1) {
        return;
      }

      var formName = 'data' + this.parseObjectId('parts', objectPrefix, 3, 1, true);
      var formObj = document.getElementsByName(formName);
      if (!formObj.length) {
        return;
      }

      var records = this.trimExplode(',', formObj[0].value);
      var recordObj;
      // walk through all inline records on that level and get the select field
      for (var i = 0; i < records.length; i++) {
        recordObj = document.getElementsByName('data[' + unique.table + '][' + records[i] + '][' + unique.field + ']');
        if (recordObj.length) {
          var $recordObject = $(recordObj[0]);
          this.readdSelectOption($recordObject, fieldObjValue, unique);
        }
      }
    } else if (unique.type == 'groupdb') {
      delete(this.data.unique[objectPrefix].used[recordUid])
    }
  },

  enableDisableRecord: function(objectIdentifier, fieldName) {
    var elName = this.parseObjectId('full', objectIdentifier, 2, 0, true) + '[' + fieldName + ']';
    var formObj = document.querySelector('[data-formengine-input-name="' + elName + '"]');
    var valueObj = document.getElementsByName(elName);
    var escapedObjectIdentifier = this.escapeObjectId(objectIdentifier);
    var $container = $('#' + escapedObjectIdentifier + '_div');
    var $icon = $container.find('.t3js-' + escapedObjectIdentifier + '_disabled .t3js-icon');

    // It might be the case that there's no hidden field
    if (typeof formObj !== 'undefined' && formObj !== null && valueObj.length) {
      formObj.click();
      valueObj[0].value = formObj.checked ? 1 : 0;
      TBE_EDITOR.fieldChanged_fName(elName, elName);
    }

    if ($icon.length) {
      require(['TYPO3/CMS/Backend/Icons'], function(Icons) {
        var hiddenClass = 't3-form-field-container-inline-hidden',
          isHidden = $container.hasClass(hiddenClass),
          toggleIcon;

        if (isHidden) {
          toggleIcon = 'actions-edit-hide';
          $container.removeClass(hiddenClass);
        } else {
          toggleIcon = 'actions-edit-unhide';
          $container.addClass(hiddenClass);
        }

        Icons.getIcon(toggleIcon, Icons.sizes.small).done(function(markup) {
          $icon.replaceWith(markup);
        });
      });
    }

    return false;
  },

  deleteRecord: function(objectId, options) {
    var i, j, inlineRecords, records, childObjectId, childTable;
    var objectPrefix = this.parseObjectId('full', objectId, 0, 1);
    var elName = this.parseObjectId('full', objectId, 2, 0, true);
    var shortName = this.parseObjectId('parts', objectId, 2, 0, true);
    var recordUid = this.parseObjectId('none', objectId, 1);
    var beforeDeleteIsBelowMax = this.isBelowMax(objectPrefix);

    // revert the unique settings if available
    this.revertUnique(objectPrefix, elName, recordUid);

    // Remove from TBE_EDITOR (required fields, required range, etc.):
    if (TBE_EDITOR && TBE_EDITOR.removeElement) {
      var removeStack = [];
      // Iterate over all child records:
      inlineRecords = $('.inlineRecord', '#' + objectId + '_div');
      // Remove nested child records from TBE_EDITOR required/range checks:
      for (i = inlineRecords.length - 1; i >= 0; i--) {
        if (inlineRecords.get(i).value.length) {
          records = this.trimExplode(',', inlineRecords.get(i).value);
          childObjectId = this.data.map[inlineRecords.get(i).name];
          childTable = this.data.config[childObjectId].table;
          for (j = records.length - 1; j >= 0; j--) {
            removeStack.push('data[' + childTable + '][' + records[j] + ']');
          }
        }
      }
      removeStack.push('data' + shortName);
      TBE_EDITOR.removeElementArray(removeStack);
    }

    // Mark this container as deleted
    $('#' + this.escapeObjectId(objectId) + '_div')
      .addClass('inlineIsDeletedRecord')
      .addClass('t3js-inline-record-deleted');

    // If the record is new and was never saved before, just remove it from DOM:
    if (this.isNewRecord(objectId) || options && options.forceDirectRemoval) {
      this.fadeAndRemove(objectId + '_div');
      // If the record already exists in storage, mark it to be deleted on clicking the save button:
    } else {
      document.getElementsByName('cmd' + shortName + '[delete]')[0].disabled = false;
      $('#' + this.escapeObjectId(objectId) + '_div').fadeOut(200);
    }

    var recordCount = this.memorizeRemoveRecord(
      'data' + this.parseObjectId('parts', objectId, 3, 2, true),
      recordUid
    );

    if (recordCount <= 1) {
      this.destroyDragAndDropSorting(this.parseObjectId('full', objectId, 0, 2) + '_records');
    }
    this.redrawSortingButtons(objectPrefix);

    // if the NEW-button was hidden and now we can add again new children, show the button
    if (!beforeDeleteIsBelowMax && this.isBelowMax(objectPrefix)) {
      var objectParent = this.parseObjectId('full', objectPrefix, 0, 1);
      var md5 = this.getObjectMD5(objectParent);
      this.showElementsWithClassName('.inlineNewButton' + (md5 ? '.' + md5 : ''), objectParent);
      this.showElementsWithClassName('.inlineNewRelationButton' + (md5 ? '.' + md5 : ''), objectParent);
      this.showElementsWithClassName('.inlineNewFileUploadButton' + (md5 ? '.' + md5 : ''), objectParent);
      this.showElementsWithClassName('.t3js-online-media-add-btn' + (md5 ? '.' + md5 : ''), objectParent);
      this.showElementsWithClassName('.inlineForeignSelector' + (md5 ? '.' + md5 : ''), 't3-form-field-item');
    }
    TYPO3.FormEngine.Validation.validate();
    return false;
  },

  parseFormElementName: function(wrap, formElementName, rightCount, skipRight) {
    var idParts = this.splitFormElementName(formElementName);

    if (!wrap) {
      wrap = 'full';
    }
    if (!skipRight) {
      skipRight = 0;
    }

    var elParts = [];
    for (var i = 0; i < skipRight; i++) {
      idParts.pop();
    }

    if (rightCount > 0) {
      for (var i = 0; i < rightCount; i++) {
        elParts.unshift(idParts.pop());
      }
    } else {
      for (var i = 0; i < -rightCount; i++) {
        idParts.shift();
      }
      elParts = idParts;
    }

    return this.constructFormElementName(wrap, elParts);
  },

  splitFormElementName: function(formElementName) {
    // remove left and right side "data[...|...]" -> '...|...'
    formElementName = formElementName.substr(0, formElementName.lastIndexOf(']')).substr(formElementName.indexOf('[') + 1);
    return formElementName.split('][');
  },

  splitObjectId: function(objectId) {
    objectId = objectId.substr(objectId.indexOf(this.structureSeparator) + 1);
    objectId = objectId.split(this.flexFormSeparator).join(this.flexFormSubstitute);
    return objectId.split(this.structureSeparator);
  },

  constructFormElementName: function(wrap, parts) {
    var elReturn;

    if (wrap == 'full') {
      elReturn = 'data[' + parts.join('][') + ']';
      elReturn = elReturn.split(this.flexFormSubstitute).join('][');
    } else if (wrap == 'parts') {
      elReturn = '[' + parts.join('][') + ']';
      elReturn = elReturn.split(this.flexFormSubstitute).join('][');
    } else if (wrap == 'none') {
      elReturn = parts.length > 1 ? parts : parts.join('');
    }

    return elReturn;
  },

  constructObjectId: function(wrap, parts) {
    var elReturn;

    if (wrap == 'full') {
      elReturn = 'data' + this.structureSeparator + parts.join(this.structureSeparator);
      elReturn = elReturn.split(this.flexFormSubstitute).join(this.flexFormSeparator);
    } else if (wrap == 'parts') {
      elReturn = this.structureSeparator + parts.join(this.structureSeparator);
      elReturn = elReturn.split(this.flexFormSubstitute).join(this.flexFormSeparator);
    } else if (wrap == 'none') {
      elReturn = parts.length > 1 ? parts : parts.join('');
    }

    return elReturn;
  },

  parseObjectId: function(wrap, objectId, rightCount, skipRight, returnAsFormElementName) {
    var idParts = this.splitObjectId(objectId);

    if (!wrap) {
      wrap = 'full';
    }
    if (!skipRight) {
      skipRight = 0;
    }

    var elParts = [];
    for (var i = 0; i < skipRight; i++) {
      idParts.pop();
    }

    if (rightCount > 0) {
      for (var i = 0; i < rightCount; i++) {
        elParts.unshift(idParts.pop());
      }
    } else {
      for (var i = 0; i < -rightCount; i++) {
        idParts.shift();
      }
      elParts = idParts;
    }

    return returnAsFormElementName
      ? this.constructFormElementName(wrap, elParts)
      : this.constructObjectId(wrap, elParts);
  },

  handleChangedField: function(formField, objectId) {
    var formObj;
    if (typeof formField == 'object') {
      formObj = formField;
    } else {
      formObj = document.getElementsByName(formField);
      if (formObj.length) {
        formObj = formObj[0];
      }
    }

    if (formObj != undefined) {
      var value;
      if (formObj.nodeName == 'SELECT') {
        value = formObj.options[formObj.selectedIndex].text;
      } else {
        value = formObj.value;
      }
      $('#' + this.escapeObjectId(objectId) + '_label').text(value.length ? value : this.noTitleString);
    }
    return true;
  },

  arrayAssocCount: function(object) {
    var count = 0;
    if (typeof object.length != 'undefined') {
      count = object.length;
    } else {
      for (var i in object) {
        count++;
      }
    }
    return count;
  },

  isBelowMax: function(objectPrefix) {
    var isBelowMax = true;
    var objectName = 'data' + this.parseObjectId('parts', objectPrefix, 3, 1, true);
    var formObj = document.getElementsByName(objectName);

    if (this.data.config && this.data.config[objectPrefix] && formObj.length) {
      var recordCount = formObj[0].value ? this.trimExplode(',', formObj[0].value).length : 0;
      if (recordCount >= this.data.config[objectPrefix].max) {
        isBelowMax = false;
      }
    }
    if (isBelowMax && this.data.unique && this.data.unique[objectPrefix]) {
      var unique = this.data.unique[objectPrefix];
      if (this.arrayAssocCount(unique.used) >= unique.max && unique.max >= 0) {
        isBelowMax = false;
      }
    }
    return isBelowMax;
  },

  getOptionsHash: function($selectObj) {
    var optionsHash = {};
    $selectObj.find('option').each(function(i, option) {
      optionsHash[option.value] = i;
    });
    return optionsHash;
  },

  removeSelectOption: function($selectObj, value) {
    var optionsHash = this.getOptionsHash($selectObj);
    if (optionsHash[value] != undefined) {
      $selectObj.find('option').eq(optionsHash[value]).remove();
    }
  },

  selectOptionExists: function($selector, value) {
    return $selector.find('option[value="' + value + '"]').length > 0;
  },

  readdSelectOption: function($selectObj, value, unique) {
    if (!$selectObj.length || this.selectOptionExists($selectObj, value)) {
      return;
    }

    var index = null;
    var optionsHash = this.getOptionsHash($selectObj);

    for (var possibleValue in unique.possible) {
      if (possibleValue == value) {
        break;
      }
      if (optionsHash[possibleValue] != undefined) {
        index = optionsHash[possibleValue];
      }
    }

    if (index == null) {
      index = 0;
    } else if (index < $selectObj.find('option').length) {
      index++;
    }
    // recreate the <option> tag
    var readdOption = document.createElement('option');
    readdOption.text = unique.possible[value];
    readdOption.value = value;
    // add the <option> at the right position
    // I didn't find a possibility to add an option to a predefined position
    // with help of an index in jQuery. So we realized it the "old" style
    var selectObj = $selectObj.get(0);
    selectObj.add(readdOption, document.all ? index : selectObj.options[index]);
  },

  hideElementsWithClassName: function(selector, parentElement) {
    $('#' + this.escapeObjectId(parentElement)).find(selector).fadeOut(200);
  },

  showElementsWithClassName: function(selector, parentElement) {
    $('#' + this.escapeObjectId(parentElement)).find(selector).fadeIn(200);
  },

  // sets the opacity to 0.2 and then fades in to opacity 1
  fadeOutFadeIn: function(objectId) {
    $('#' + this.escapeObjectId(objectId)).css({opacity: 0.2}).fadeTo(200, 1, 'linear');
  },

  isNewRecord: function(objectId) {
    var $selector = $('#' + this.escapeObjectId(objectId) + '_div');
    return $selector.length && $selector.hasClass('inlineIsNewRecord');
  },

  // Find and fix nested of inline and tab levels if a new element was created dynamically (it doesn't know about its nesting):
  findContinuedNestedLevel: function(nested, objectId) {
    if (this.data.nested && this.data.nested[objectId]) {
      // Remove the first element from the new nested stack, it's just a hint:
      nested.shift();
      nested = this.data.nested[objectId].concat(nested);
    }
    return nested;
  },

  getObjectMD5: function(objectPrefix) {
    var md5 = false;
    if (this.data.config && this.data.config[objectPrefix] && this.data.config[objectPrefix].md5) {
      md5 = this.data.config[objectPrefix].md5;
    }
    return md5
  },

  fadeAndRemove: function(element) {
    $('#' + this.escapeObjectId(element)).fadeOut(200, function() {
      $(this).remove();
      TYPO3.FormEngine.Validation.validate();
    });
  },

  getContext: function(objectId) {
    var result = null;

    if (objectId !== '' && typeof this.data.config[objectId] !== 'undefined' && typeof this.data.config[objectId].context !== 'undefined') {
      result = this.data.config[objectId].context;
    }

    return result;
  },

  /**
   * Escapes object identifiers to be used in jQuery.
   *
   * @param {String} objectId
   * @return string
   */
  escapeObjectId: function(objectId) {
    var escapedObjectId;
    escapedObjectId = objectId.replace(/:/g, '\\:');
    escapedObjectId = escapedObjectId.replace(/\./g, '\\.');
    return escapedObjectId;
  },

  /**
   * Helper function to get clean trimmed array from comma list
   *
   * @param {String} delimiter
   * @param {String} string
   * @returns {Array}
   */
  trimExplode: function(delimiter, string) {
    var result = [];
    var items = string.split(delimiter);
    for (var i = 0; i < items.length; i++) {
      var item = items[i].trim();
      if (item.length > 0) {
        result.push(item);
      }
    }
    return result;
  }
};

/*]]>*/
$(function() {
  $(document).on('click', '[data-toggle="formengine-inline"]', function(event) {
    inline.toggleEvent(event);
  });
});

// Expose to public
// @internal
TYPO3.inline = inline;
