<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

final class AttrLists
{
    /** @var array */
    public $attrLists;

    public function __construct()
    {
        $this->attrLists = [
            [
                'name' => 'common-link-attrs',
                'attrs' => [
                    [
                        'name' => 'charset',
                        'valueCasei' => [
                            'utf-8',
                        ],
                    ],
                    [
                        'name' => 'color',
                    ],
                    [
                        'name' => 'crossorigin',
                    ],
                    [
                        'name' => 'hreflang',
                    ],
                    [
                        'name' => 'media',
                    ],
                    [
                        'name' => 'sizes',
                    ],
                    [
                        'name' => 'target',
                    ],
                    [
                        'name' => 'type',
                    ],
                ],
            ],
            [
                'name' => 'poool-access-attrs',
                'attrs' => [
                    [
                        'name' => 'poool-access-preview',
                        'requiresExtension' => [
                            'amp-access-poool',
                        ],
                    ],
                    [
                        'name' => 'poool-access-content',
                        'requiresExtension' => [
                            'amp-access-poool',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'cite-attr',
                'attrs' => [
                    [
                        'name' => 'cite',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'http',
                                'https',
                            ],
                            'allowEmpty' => true,
                        ],
                    ],
                ],
            ],
            [
                'name' => 'track-attrs-no-subtitles',
                'attrs' => [
                    [
                        'name' => 'default',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'kind',
                        'value' => [
                            'captions',
                            'chapters',
                            'descriptions',
                            'metadata',
                        ],
                    ],
                    [
                        'name' => 'label',
                    ],
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => false,
                        ],
                    ],
                    [
                        'name' => 'srclang',
                    ],
                ],
            ],
            [
                'name' => 'track-attrs-subtitles',
                'attrs' => [
                    [
                        'name' => 'default',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'kind',
                        'mandatory' => true,
                        'valueCasei' => [
                            'subtitles',
                        ],
                    ],
                    [
                        'name' => 'label',
                    ],
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => false,
                        ],
                    ],
                    [
                        'name' => 'srclang',
                        'mandatory' => true,
                    ],
                ],
            ],
            [
                'name' => 'svg-conditional-processing-attributes',
                'attrs' => [
                    [
                        'name' => 'requiredextensions',
                    ],
                    [
                        'name' => 'requiredfeatures',
                    ],
                    [
                        'name' => 'systemlanguage',
                    ],
                ],
            ],
            [
                'name' => 'svg-core-attributes',
                'attrs' => [
                    [
                        'name' => 'xml:lang',
                    ],
                    [
                        'name' => 'xml:space',
                    ],
                    [
                        'name' => 'xmlns',
                    ],
                    [
                        'name' => 'xmlns:xlink',
                    ],
                ],
            ],
            [
                'name' => 'svg-filter-primitive-attributes',
                'attrs' => [
                    [
                        'name' => 'height',
                    ],
                    [
                        'name' => 'result',
                    ],
                    [
                        'name' => 'width',
                    ],
                    [
                        'name' => 'x',
                    ],
                    [
                        'name' => 'y',
                    ],
                ],
            ],
            [
                'name' => 'svg-presentation-attributes',
                'attrs' => [
                    [
                        'name' => 'alignment-baseline',
                    ],
                    [
                        'name' => 'baseline-shift',
                    ],
                    [
                        'name' => 'clip',
                    ],
                    [
                        'name' => 'clip-path',
                    ],
                    [
                        'name' => 'clip-rule',
                    ],
                    [
                        'name' => 'color',
                    ],
                    [
                        'name' => 'color-interpolation',
                    ],
                    [
                        'name' => 'color-interpolation-filters',
                    ],
                    [
                        'name' => 'color-profile',
                    ],
                    [
                        'name' => 'color-rendering',
                    ],
                    [
                        'name' => 'cursor',
                    ],
                    [
                        'name' => 'direction',
                    ],
                    [
                        'name' => 'display',
                    ],
                    [
                        'name' => 'dominant-baseline',
                    ],
                    [
                        'name' => 'enable-background',
                    ],
                    [
                        'name' => 'fill',
                    ],
                    [
                        'name' => 'fill-opacity',
                    ],
                    [
                        'name' => 'fill-rule',
                    ],
                    [
                        'name' => 'filter',
                    ],
                    [
                        'name' => 'flood-color',
                    ],
                    [
                        'name' => 'flood-opacity',
                    ],
                    [
                        'name' => 'focusable',
                    ],
                    [
                        'name' => 'font-family',
                    ],
                    [
                        'name' => 'font-size',
                    ],
                    [
                        'name' => 'font-size-adjust',
                    ],
                    [
                        'name' => 'font-stretch',
                    ],
                    [
                        'name' => 'font-style',
                    ],
                    [
                        'name' => 'font-variant',
                    ],
                    [
                        'name' => 'font-weight',
                    ],
                    [
                        'name' => 'glyph-orientation-horizontal',
                    ],
                    [
                        'name' => 'glyph-orientation-vertical',
                    ],
                    [
                        'name' => 'image-rendering',
                    ],
                    [
                        'name' => 'kerning',
                    ],
                    [
                        'name' => 'letter-spacing',
                    ],
                    [
                        'name' => 'lighting-color',
                    ],
                    [
                        'name' => 'marker-end',
                    ],
                    [
                        'name' => 'marker-mid',
                    ],
                    [
                        'name' => 'marker-start',
                    ],
                    [
                        'name' => 'mask',
                    ],
                    [
                        'name' => 'opacity',
                    ],
                    [
                        'name' => 'overflow',
                    ],
                    [
                        'name' => 'pointer-events',
                    ],
                    [
                        'name' => 'shape-rendering',
                    ],
                    [
                        'name' => 'stop-color',
                    ],
                    [
                        'name' => 'stop-opacity',
                    ],
                    [
                        'name' => 'stroke',
                    ],
                    [
                        'name' => 'stroke-dasharray',
                    ],
                    [
                        'name' => 'stroke-dashoffset',
                    ],
                    [
                        'name' => 'stroke-linecap',
                    ],
                    [
                        'name' => 'stroke-linejoin',
                    ],
                    [
                        'name' => 'stroke-miterlimit',
                    ],
                    [
                        'name' => 'stroke-opacity',
                    ],
                    [
                        'name' => 'stroke-width',
                    ],
                    [
                        'name' => 'text-anchor',
                    ],
                    [
                        'name' => 'text-decoration',
                    ],
                    [
                        'name' => 'text-rendering',
                    ],
                    [
                        'name' => 'unicode-bidi',
                    ],
                    [
                        'name' => 'vector-effect',
                    ],
                    [
                        'name' => 'visibility',
                    ],
                    [
                        'name' => 'word-spacing',
                    ],
                    [
                        'name' => 'writing-mode',
                    ],
                ],
            ],
            [
                'name' => 'svg-transfer-function-attributes',
                'attrs' => [
                    [
                        'name' => 'amplitude',
                    ],
                    [
                        'name' => 'exponent',
                    ],
                    [
                        'name' => 'intercept',
                    ],
                    [
                        'name' => 'offset',
                    ],
                    [
                        'name' => 'slope',
                    ],
                    [
                        'name' => 'table',
                    ],
                    [
                        'name' => 'tablevalues',
                    ],
                ],
            ],
            [
                'name' => 'svg-xlink-attributes',
                'attrs' => [
                    [
                        'name' => 'xlink:actuate',
                    ],
                    [
                        'name' => 'xlink:arcrole',
                    ],
                    [
                        'name' => 'xlink:href',
                        'alternativeNames' => [
                            'href',
                        ],
                        'valueUrl' => [
                            'protocol' => [
                                'http',
                                'https',
                            ],
                            'allowEmpty' => false,
                        ],
                    ],
                    [
                        'name' => 'xlink:role',
                    ],
                    [
                        'name' => 'xlink:show',
                    ],
                    [
                        'name' => 'xlink:title',
                    ],
                    [
                        'name' => 'xlink:type',
                    ],
                ],
            ],
            [
                'name' => 'svg-style-attr',
                'attrs' => [
                    [
                        'name' => 'style',
                        'valueDocSvgCss' => true,
                    ],
                ],
            ],
            [
                'name' => 'input-common-attr',
                'attrs' => [
                    [
                        'name' => 'accept',
                    ],
                    [
                        'name' => 'accesskey',
                    ],
                    [
                        'name' => 'autocomplete',
                    ],
                    [
                        'name' => 'autofocus',
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    [
                        'name' => 'checked',
                    ],
                    [
                        'name' => 'disabled',
                    ],
                    [
                        'name' => 'height',
                    ],
                    [
                        'name' => 'inputmode',
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    [
                        'name' => 'list',
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    [
                        'name' => 'enterkeyhint',
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    [
                        'name' => 'max',
                    ],
                    [
                        'name' => 'maxlength',
                    ],
                    [
                        'name' => 'min',
                    ],
                    [
                        'name' => 'minlength',
                    ],
                    [
                        'name' => 'multiple',
                    ],
                    [
                        'name' => 'pattern',
                    ],
                    [
                        'name' => 'placeholder',
                    ],
                    [
                        'name' => 'readonly',
                    ],
                    [
                        'name' => 'required',
                    ],
                    [
                        'name' => 'selectiondirection',
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    [
                        'name' => 'size',
                    ],
                    [
                        'name' => 'spellcheck',
                    ],
                    [
                        'name' => 'step',
                    ],
                    [
                        'name' => 'tabindex',
                    ],
                    [
                        'name' => 'value',
                    ],
                    [
                        'name' => 'width',
                    ],
                    [
                        'name' => '[accept]',
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    [
                        'name' => '[accesskey]',
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    [
                        'name' => '[autocomplete]',
                    ],
                    [
                        'name' => '[checked]',
                    ],
                    [
                        'name' => '[disabled]',
                    ],
                    [
                        'name' => '[height]',
                    ],
                    [
                        'name' => '[inputmode]',
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    [
                        'name' => '[max]',
                    ],
                    [
                        'name' => '[maxlength]',
                    ],
                    [
                        'name' => '[min]',
                    ],
                    [
                        'name' => '[minlength]',
                    ],
                    [
                        'name' => '[multiple]',
                    ],
                    [
                        'name' => '[pattern]',
                    ],
                    [
                        'name' => '[placeholder]',
                    ],
                    [
                        'name' => '[readonly]',
                    ],
                    [
                        'name' => '[required]',
                    ],
                    [
                        'name' => '[selectiondirection]',
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    [
                        'name' => '[size]',
                    ],
                    [
                        'name' => '[spellcheck]',
                    ],
                    [
                        'name' => '[step]',
                    ],
                    [
                        'name' => '[value]',
                    ],
                    [
                        'name' => '[width]',
                    ],
                ],
            ],
            [
                'name' => 'amphtml-engine-attrs',
                'attrs' => [
                    [
                        'name' => 'async',
                        'mandatory' => true,
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'crossorigin',
                        'value' => [
                            'anonymous',
                        ],
                    ],
                    [
                        'name' => 'type',
                        'valueCasei' => [
                            'text/javascript',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'amphtml-module-engine-attrs',
                'attrs' => [
                    [
                        'name' => 'async',
                        'mandatory' => true,
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'crossorigin',
                        'mandatory' => true,
                        'value' => [
                            'anonymous',
                        ],
                    ],
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => [
                            'module',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'amphtml-nomodule-engine-attrs',
                'attrs' => [
                    [
                        'name' => 'async',
                        'mandatory' => true,
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'crossorigin',
                        'value' => [
                            'anonymous',
                        ],
                    ],
                    [
                        'name' => 'nomodule',
                        'mandatory' => true,
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'type',
                        'valueCasei' => [
                            'text/javascript',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'mandatory-src-or-srcset',
                'attrs' => [
                    [
                        'name' => 'src',
                        'alternativeNames' => [
                            'srcset',
                        ],
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'data',
                                'http',
                                'https',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'mandatory-src-amp4email',
                'attrs' => [
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin|(.|\s){{|}}(.|\s)|^{{.*[^}][^}]$|^[^{][^{].*}}$|^}}|{{$|{{#|{{/|{{\^',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => false,
                        ],
                    ],
                ],
            ],
            [
                'name' => 'optional-src-amp4email',
                'attrs' => [
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin|(.|\s){{|}}(.|\s)|^{{.*[^}][^}]$|^[^{][^{].*}}$|^}}|{{$|{{#|{{/|{{\^',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => false,
                        ],
                    ],
                ],
            ],
            [
                'name' => 'extended-amp-global',
                'attrs' => [
                    [
                        'name' => 'i-amphtml-layout',
                        'valueCasei' => [
                            'container',
                            'fill',
                            'fixed',
                            'fixed-height',
                            'flex-item',
                            'fluid',
                            'intrinsic',
                            'nodisplay',
                            'responsive',
                        ],
                        'enabledBy' => [
                            'transformed',
                        ],
                    ],
                    [
                        'name' => 'media',
                    ],
                    [
                        'name' => 'noloading',
                        'value' => [
                            '',
                        ],
                    ],
                ],
            ],
            [
                'name' => '$AMP_LAYOUT_ATTRS',
                'attrs' => [
                    [
                        'name' => 'disable-inline-width',
                    ],
                    [
                        'name' => 'height',
                    ],
                    [
                        'name' => 'heights',
                    ],
                    [
                        'name' => 'layout',
                    ],
                    [
                        'name' => 'sizes',
                    ],
                    [
                        'name' => 'width',
                    ],
                    [
                        'name' => '[height]',
                    ],
                    [
                        'name' => '[width]',
                    ],
                ],
            ],
            [
                'name' => 'nonce-attr',
                'attrs' => [
                    [
                        'name' => 'nonce',
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'common-extension-attrs',
                'attrs' => [
                    [
                        'name' => 'async',
                        'mandatory' => true,
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'crossorigin',
                        'value' => [
                            'anonymous',
                        ],
                    ],
                    [
                        'name' => 'nonce',
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    [
                        'name' => 'type',
                        'valueCasei' => [
                            'text/javascript',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'mandatory-id-attr',
                'attrs' => [
                    [
                        'name' => 'id',
                        'mandatory' => true,
                        'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                    ],
                ],
            ],
            [
                'name' => 'form-name-attr',
                'attrs' => [
                    [
                        'name' => 'name',
                        'disallowedValueRegex' => '(^|\s)(ATTRIBUTE_NODE|CDATA_SECTION_NODE|COMMENT_NODE|DOCUMENT_FRAGMENT_NODE|DOCUMENT_NODE|DOCUMENT_POSITION_CONTAINED_BY|DOCUMENT_POSITION_CONTAINS|DOCUMENT_POSITION_DISCONNECTED|DOCUMENT_POSITION_FOLLOWING|DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC|DOCUMENT_POSITION_PRECEDING|DOCUMENT_TYPE_NODE|ELEMENT_NODE|ENTITY_NODE|ENTITY_REFERENCE_NODE|NOTATION_NODE|PROCESSING_INSTRUCTION_NODE|TEXT_NODE|URL|URLUnencoded|__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|activeElement|addEventListener|adoptNode|alinkColor|all|anchors|append|appendChild|applets|baseURI|bgColor|body|captureEvents|caretPositionFromPoint|caretRangeFromPoint|characterSet|charset|childElementCount|childNodes|children|clear|cloneNode|close|compareDocumentPosition|compatMode|constructor|contains|contentType|cookie|createAttribute|createAttributeNS|createCDATASection|createComment|createDocumentFragment|createElement|createElementNS|createEvent|createExpression|createNSResolver|createNodeIterator|createProcessingInstruction|createRange|createTextNode|createTreeWalker|currentScript|defaultView|designMode|dir|dispatchEvent|doctype|documentElement|documentURI|domain|elementFromPoint|elementsFromPoint|embeds|enableStyleSheetsForSet|evaluate|execCommand|execCommandShowHelp|exitFullscreen|exitPictureInPicture|exitPointerLock|fgColor|firstChild|firstElementChild|focus|fonts|forms|fullscreen|fullscreenElement|fullscreenEnabled|getCSSCanvasContext|getElementById|getElementsByClassName|getElementsByName|getElementsByTagName|getElementsByTagNameNS|getOverrideStyle|getRootNode|getSelection|hasChildNodes|hasFocus|hasOwnProperty|hasStorageAccess|head|hidden|images|implementation|importNode|inputEncoding|insertBefore|isConnected|isDefaultNamespace|isEqualNode|isPrototypeOf|isSameNode|l10n|lastChild|lastElementChild|lastModified|lastStyleSheetSet|linkColor|links|location|lookupNamespaceURI|lookupPrefix|mozCancelFullScreen|mozFullScreen|mozFullScreenElement|mozFullScreenEnabled|mozSetImageElement|msCSSOMElementFloatMetrics|msCapsLockWarningOff|msElementsFromPoint|msElementsFromRect|nextSibling|nodeName|nodeType|nodeValue|normalize|onabort|onactivate|onafterscriptexecute|onanimationcancel|onanimationend|onanimationiteration|onanimationstart|onauxclick|onbeforeactivate|onbeforecopy|onbeforecut|onbeforedeactivate|onbeforeinput|onbeforepaste|onbeforescriptexecute|onblur|oncancel|oncanplay|oncanplaythrough|onchange|onclick|onclose|oncontextmenu|oncopy|oncuechange|oncut|ondblclick|ondeactivate|ondrag|ondragend|ondragenter|ondragexit|ondragleave|ondragover|ondragstart|ondrop|ondurationchange|onemptied|onended|onerror|onfocus|onfreeze|onfullscreenchange|onfullscreenerror|ongotpointercapture|oninput|oninvalid|onkeydown|onkeypress|onkeyup|onload|onloadeddata|onloadedmetadata|onloadend|onloadstart|onlostpointercapture|onmousedown|onmouseenter|onmouseleave|onmousemove|onmouseout|onmouseover|onmouseup|onmousewheel|onmozfullscreenchange|onmozfullscreenerror|onmscontentzoom|onmsgesturechange|onmsgesturedoubletap|onmsgestureend|onmsgesturehold|onmsgesturestart|onmsgesturetap|onmsinertiastart|onmsmanipulationstatechanged|onmssitemodejumplistitemremoved|onmsthumbnailclick|onpaste|onpause|onplay|onplaying|onpointercancel|onpointerdown|onpointerenter|onpointerleave|onpointerlockchange|onpointerlockerror|onpointermove|onpointerout|onpointerover|onpointerup|onprogress|onratechange|onreadystatechange|onrejectionhandled|onreset|onresize|onresume|onscroll|onsearch|onseeked|onseeking|onselect|onselectionchange|onselectstart|onshow|onstalled|onstop|onsubmit|onsuspend|ontimeupdate|ontoggle|ontransitioncancel|ontransitionend|ontransitionrun|ontransitionstart|onunhandledrejection|onvisibilitychange|onvolumechange|onwaiting|onwebkitanimationend|onwebkitanimationiteration|onwebkitanimationstart|onwebkitfullscreenchange|onwebkitfullscreenerror|onwebkitmouseforcechanged|onwebkitmouseforcedown|onwebkitmouseforceup|onwebkitmouseforcewillbegin|onwebkittransitionend|onwheel|open|origin|ownerDocument|parentElement|parentNode|pictureInPictureElement|pictureInPictureEnabled|plugins|pointerLockElement|preferredStyleSheetSet|prepend|previousSibling|propertyIsEnumerable|queryCommandEnabled|queryCommandIndeterm|queryCommandState|queryCommandSupported|queryCommandText|queryCommandValue|querySelector|querySelectorAll|readyState|referrer|registerElement|releaseCapture|releaseEvents|removeChild|removeEventListener|replaceChild|requestStorageAccess|rootElement|scripts|scrollingElement|selectedStyleSheetSet|styleSheetSets|styleSheets|textContent|title|toLocaleString|toSource|toString|updateSettings|valueOf|visibilityState|vlinkColor|wasDiscarded|webkitCancelFullScreen|webkitCurrentFullScreenElement|webkitExitFullscreen|webkitFullScreenKeyboardInputAllowed|webkitFullscreenElement|webkitFullscreenEnabled|webkitHidden|webkitIsFullScreen|webkitVisibilityState|write|writeln|xmlEncoding|xmlStandalone|xmlVersion)(\s|$)',
                    ],
                ],
            ],
            [
                'name' => 'name-attr',
                'attrs' => [
                    [
                        'name' => 'name',
                        'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                    ],
                ],
            ],
            [
                'name' => 'mandatory-name-attr',
                'attrs' => [
                    [
                        'name' => 'name',
                        'mandatory' => true,
                        'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                    ],
                ],
            ],
            [
                'name' => '$GLOBAL_ATTRS',
                'attrs' => [
                    [
                        'name' => 'itemid',
                    ],
                    [
                        'name' => 'itemprop',
                    ],
                    [
                        'name' => 'itemref',
                    ],
                    [
                        'name' => 'itemscope',
                    ],
                    [
                        'name' => 'itemtype',
                    ],
                    [
                        'name' => 'about',
                    ],
                    [
                        'name' => 'content',
                    ],
                    [
                        'name' => 'datatype',
                    ],
                    [
                        'name' => 'inlist',
                    ],
                    [
                        'name' => 'prefix',
                    ],
                    [
                        'name' => 'property',
                    ],
                    [
                        'name' => 'rel',
                        'disallowedValueRegex' => '(^|\s)(canonical|components|dns-prefetch|import|manifest|preconnect|preload|prerender|serviceworker|stylesheet|subresource)(\s|$)',
                    ],
                    [
                        'name' => 'resource',
                    ],
                    [
                        'name' => 'rev',
                    ],
                    [
                        'name' => 'style',
                        'valueDocCss' => true,
                    ],
                    [
                        'name' => 'typeof',
                    ],
                    [
                        'name' => 'vocab',
                    ],
                    [
                        'name' => 'accesskey',
                    ],
                    [
                        'name' => 'class',
                    ],
                    [
                        'name' => 'dir',
                    ],
                    [
                        'name' => 'draggable',
                    ],
                    [
                        'name' => 'hidden',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'id',
                        'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                    ],
                    [
                        'name' => 'lang',
                    ],
                    [
                        'name' => 'slot',
                    ],
                    [
                        'name' => 'tabindex',
                    ],
                    [
                        'name' => 'title',
                    ],
                    [
                        'name' => 'translate',
                    ],
                    [
                        'name' => 'aria-activedescendant',
                    ],
                    [
                        'name' => 'aria-atomic',
                    ],
                    [
                        'name' => 'aria-autocomplete',
                    ],
                    [
                        'name' => 'aria-busy',
                    ],
                    [
                        'name' => 'aria-checked',
                    ],
                    [
                        'name' => 'aria-controls',
                    ],
                    [
                        'name' => 'aria-current',
                    ],
                    [
                        'name' => 'aria-describedby',
                    ],
                    [
                        'name' => 'aria-disabled',
                    ],
                    [
                        'name' => 'aria-dropeffect',
                    ],
                    [
                        'name' => 'aria-expanded',
                    ],
                    [
                        'name' => 'aria-flowto',
                    ],
                    [
                        'name' => 'aria-grabbed',
                    ],
                    [
                        'name' => 'aria-haspopup',
                    ],
                    [
                        'name' => 'aria-hidden',
                    ],
                    [
                        'name' => 'aria-invalid',
                    ],
                    [
                        'name' => 'aria-label',
                    ],
                    [
                        'name' => 'aria-labelledby',
                    ],
                    [
                        'name' => 'aria-level',
                    ],
                    [
                        'name' => 'aria-live',
                    ],
                    [
                        'name' => 'aria-multiline',
                    ],
                    [
                        'name' => 'aria-multiselectable',
                    ],
                    [
                        'name' => 'aria-orientation',
                    ],
                    [
                        'name' => 'aria-owns',
                    ],
                    [
                        'name' => 'aria-posinset',
                    ],
                    [
                        'name' => 'aria-pressed',
                    ],
                    [
                        'name' => 'aria-readonly',
                    ],
                    [
                        'name' => 'aria-relevant',
                    ],
                    [
                        'name' => 'aria-required',
                    ],
                    [
                        'name' => 'aria-selected',
                    ],
                    [
                        'name' => 'aria-setsize',
                    ],
                    [
                        'name' => 'aria-sort',
                    ],
                    [
                        'name' => 'aria-valuemax',
                    ],
                    [
                        'name' => 'aria-valuemin',
                    ],
                    [
                        'name' => 'aria-valuenow',
                    ],
                    [
                        'name' => 'aria-valuetext',
                    ],
                    [
                        'name' => 'on',
                        'trigger' => [
                            'ifValueRegex' => 'tap:.*',
                            'alsoRequiresAttr' => [
                                'role',
                                'tabindex',
                            ],
                        ],
                    ],
                    [
                        'name' => 'role',
                    ],
                    [
                        'name' => 'placeholder',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'fallback',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'overflow',
                    ],
                    [
                        'name' => 'amp-access',
                    ],
                    [
                        'name' => 'amp-access-behavior',
                    ],
                    [
                        'name' => 'amp-access-hide',
                    ],
                    [
                        'name' => 'amp-access-id',
                    ],
                    [
                        'name' => 'amp-access-loader',
                    ],
                    [
                        'name' => 'amp-access-loading',
                    ],
                    [
                        'name' => 'amp-access-off',
                    ],
                    [
                        'name' => 'amp-access-on',
                    ],
                    [
                        'name' => 'amp-access-show',
                    ],
                    [
                        'name' => 'amp-access-style',
                    ],
                    [
                        'name' => 'amp-access-template',
                    ],
                    [
                        'name' => 'i-amp-access-id',
                    ],
                    [
                        'name' => 'validation-for',
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'visible-when-invalid',
                            ],
                        ],
                    ],
                    [
                        'name' => 'visible-when-invalid',
                        'value' => [
                            'badInput',
                            'customError',
                            'patternMismatch',
                            'rangeOverflow',
                            'rangeUnderflow',
                            'stepMismatch',
                            'tooLong',
                            'tooShort',
                            'typeMismatch',
                            'valueMissing',
                        ],
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'validation-for',
                            ],
                        ],
                    ],
                    [
                        'name' => 'amp-fx',
                        'valueRegexCasei' => '(fade-in|fade-in-scroll|float-in-bottom|float-in-top|fly-in-bottom|fly-in-left|fly-in-right|fly-in-top|parallax)(\s|fade-in|fade-in-scroll|float-in-bottom|float-in-top|fly-in-bottom|fly-in-left|fly-in-right|fly-in-top|parallax)*',
                        'requiresExtension' => [
                            'amp-fx-collection',
                        ],
                    ],
                    [
                        'name' => 'subscriptions-action',
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    [
                        'name' => 'subscriptions-actions',
                        'value' => [
                            '',
                        ],
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    [
                        'name' => 'subscriptions-decorate',
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    [
                        'name' => 'subscriptions-dialog',
                        'value' => [
                            '',
                        ],
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    [
                        'name' => 'subscriptions-display',
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    [
                        'name' => 'subscriptions-lang',
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    [
                        'name' => 'subscriptions-section',
                        'valueCasei' => [
                            'actions',
                            'content',
                            'content-not-granted',
                            'loading',
                        ],
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    [
                        'name' => 'subscriptions-service',
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    [
                        'name' => 'subscriptions-google-rtc',
                        'requiresExtension' => [
                            'amp-subscriptions-google',
                        ],
                    ],
                    [
                        'name' => 'next-page-hide',
                        'requiresExtension' => [
                            'amp-next-page',
                        ],
                    ],
                    [
                        'name' => 'next-page-replace',
                        'requiresExtension' => [
                            'amp-next-page',
                        ],
                    ],
                    [
                        'name' => '[aria-activedescendant]',
                    ],
                    [
                        'name' => '[aria-atomic]',
                    ],
                    [
                        'name' => '[aria-autocomplete]',
                    ],
                    [
                        'name' => '[aria-busy]',
                    ],
                    [
                        'name' => '[aria-checked]',
                    ],
                    [
                        'name' => '[aria-controls]',
                    ],
                    [
                        'name' => '[aria-describedby]',
                    ],
                    [
                        'name' => '[aria-disabled]',
                    ],
                    [
                        'name' => '[aria-dropeffect]',
                    ],
                    [
                        'name' => '[aria-expanded]',
                    ],
                    [
                        'name' => '[aria-flowto]',
                    ],
                    [
                        'name' => '[aria-grabbed]',
                    ],
                    [
                        'name' => '[aria-haspopup]',
                    ],
                    [
                        'name' => '[aria-hidden]',
                    ],
                    [
                        'name' => '[aria-invalid]',
                    ],
                    [
                        'name' => '[aria-label]',
                    ],
                    [
                        'name' => '[aria-labelledby]',
                    ],
                    [
                        'name' => '[aria-level]',
                    ],
                    [
                        'name' => '[aria-live]',
                    ],
                    [
                        'name' => '[aria-multiline]',
                    ],
                    [
                        'name' => '[aria-multiselectable]',
                    ],
                    [
                        'name' => '[aria-orientation]',
                    ],
                    [
                        'name' => '[aria-owns]',
                    ],
                    [
                        'name' => '[aria-posinset]',
                    ],
                    [
                        'name' => '[aria-pressed]',
                    ],
                    [
                        'name' => '[aria-readonly]',
                    ],
                    [
                        'name' => '[aria-relevant]',
                    ],
                    [
                        'name' => '[aria-required]',
                    ],
                    [
                        'name' => '[aria-selected]',
                    ],
                    [
                        'name' => '[aria-setsize]',
                    ],
                    [
                        'name' => '[aria-sort]',
                    ],
                    [
                        'name' => '[aria-valuemax]',
                    ],
                    [
                        'name' => '[aria-valuemin]',
                    ],
                    [
                        'name' => '[aria-valuenow]',
                    ],
                    [
                        'name' => '[aria-valuetext]',
                    ],
                    [
                        'name' => '[class]',
                    ],
                    [
                        'name' => '[hidden]',
                    ],
                    [
                        'name' => '[text]',
                    ],
                    [
                        'name' => 'autoscroll',
                        'requiresAncestor' => [
                            'marker' => [
                                'AUTOSCROLL',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'amp-audio-common',
                'attrs' => [
                    [
                        'name' => 'album',
                    ],
                    [
                        'name' => 'artist',
                    ],
                    [
                        'name' => 'artwork',
                    ],
                    [
                        'name' => 'controls',
                    ],
                    [
                        'name' => 'controlslist',
                    ],
                    [
                        'name' => 'loop',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'muted',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => true,
                        ],
                    ],
                    [
                        'name' => '[album]',
                    ],
                    [
                        'name' => '[artist]',
                    ],
                    [
                        'name' => '[artwork]',
                    ],
                    [
                        'name' => '[controlslist]',
                    ],
                    [
                        'name' => '[loop]',
                    ],
                    [
                        'name' => '[src]',
                    ],
                    [
                        'name' => '[title]',
                    ],
                ],
            ],
            [
                'name' => 'amp-base-carousel-common',
                'attrs' => [
                    [
                        'name' => 'advance-count',
                        'valueRegex' => '([^,]+\s+(-?\d+),\s*)*(-?\d+)',
                    ],
                    [
                        'name' => 'auto-advance',
                        'valueRegex' => '([^,]+\s+(true|false),\s*)*(true|false)',
                    ],
                    [
                        'name' => 'auto-advance-count',
                        'valueRegex' => '([^,]+\s+(-?\d+),\s*)*(-?\d+)',
                    ],
                    [
                        'name' => 'auto-advance-interval',
                        'valueRegex' => '([^,]+\s+(\d+),\s*)*(\d+)',
                    ],
                    [
                        'name' => 'auto-advance-loops',
                        'valueRegex' => '([^,]+\s+(\d+),\s*)*(\d+)',
                    ],
                    [
                        'name' => 'horizontal',
                        'valueRegex' => '([^,]+\s+(true|false),\s*)*(true|false)',
                    ],
                    [
                        'name' => 'loop',
                        'valueRegex' => '([^,]+\s+(true|false),\s*)*(true|false)',
                    ],
                    [
                        'name' => 'mixed-length',
                        'valueRegex' => '([^,]+\s+(true|false),\s*)*(true|false)',
                    ],
                    [
                        'name' => 'slide',
                        'valueRegex' => '([^,]+\s+(\d+),\s*)*(\d+)',
                    ],
                    [
                        'name' => 'snap',
                        'valueRegex' => '([^,]+\s+(true|false),\s*)*(true|false)',
                    ],
                    [
                        'name' => 'snap-align',
                        'valueRegex' => '([^,]+\s+(start|center),\s*)*(start|center)',
                    ],
                    [
                        'name' => 'snap-by',
                        'valueRegex' => '([^,]+\s+(\d+),\s*)*(\d+)',
                    ],
                    [
                        'name' => 'visible-count',
                        'valueRegex' => '([^,]+\s+(\d+(\.\d+)?),\s*)*(\d+(\.\d+)?)',
                    ],
                    [
                        'name' => '[advance-count]',
                    ],
                    [
                        'name' => '[auto-advance]',
                    ],
                    [
                        'name' => '[auto-advance-count]',
                    ],
                    [
                        'name' => '[auto-advance-interval]',
                    ],
                    [
                        'name' => '[auto-advance-loops]',
                    ],
                    [
                        'name' => '[horizontal]',
                    ],
                    [
                        'name' => '[loop]',
                    ],
                    [
                        'name' => '[mixed-length]',
                    ],
                    [
                        'name' => '[slide]',
                    ],
                    [
                        'name' => '[snap]',
                    ],
                    [
                        'name' => '[snap-align]',
                    ],
                    [
                        'name' => '[snap-by]',
                    ],
                    [
                        'name' => '[visible-count]',
                    ],
                ],
            ],
            [
                'name' => 'amp-carousel-common',
                'attrs' => [
                    [
                        'name' => 'arrows',
                        'value' => [
                            '',
                        ],
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    [
                        'name' => 'autoplay',
                        'valueRegex' => '(|[0-9]+)',
                    ],
                    [
                        'name' => 'controls',
                    ],
                    [
                        'name' => 'delay',
                        'valueRegex' => '[0-9]+',
                    ],
                    [
                        'name' => 'dots',
                        'value' => [
                            '',
                        ],
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    [
                        'name' => 'loop',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'slide',
                        'valueRegex' => '[0-9]+',
                    ],
                    [
                        'name' => 'type',
                        'value' => [
                            'carousel',
                            'slides',
                        ],
                    ],
                    [
                        'name' => '[slide]',
                    ],
                ],
            ],
            [
                'name' => 'amp-date-picker-common-attributes',
                'attrs' => [
                    [
                        'name' => 'allow-blocked-end-date',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'allow-blocked-ranges',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'blocked',
                    ],
                    [
                        'name' => 'day-size',
                        'valueRegex' => '[0-9]+',
                    ],
                    [
                        'name' => 'first-day-of-week',
                        'valueRegex' => '[0-6]',
                    ],
                    [
                        'name' => 'format',
                    ],
                    [
                        'name' => 'highlighted',
                    ],
                    [
                        'name' => 'locale',
                    ],
                    [
                        'name' => 'max',
                    ],
                    [
                        'name' => 'min',
                    ],
                    [
                        'name' => 'month-format',
                    ],
                    [
                        'name' => 'number-of-months',
                        'valueRegex' => '[0-9]+',
                    ],
                    [
                        'name' => 'open-after-clear',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'open-after-select',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'hide-keyboard-shortcuts-panel',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => false,
                        ],
                    ],
                    [
                        'name' => 'week-day-format',
                    ],
                    [
                        'name' => '[src]',
                    ],
                    [
                        'name' => '[max]',
                    ],
                    [
                        'name' => '[min]',
                    ],
                ],
            ],
            [
                'name' => 'amp-date-picker-range-type-attributes',
                'attrs' => [
                    [
                        'name' => 'end-date',
                    ],
                    [
                        'name' => 'end-input-selector',
                    ],
                    [
                        'name' => 'maximum-nights',
                        'valueRegex' => '[0-9]+',
                    ],
                    [
                        'name' => 'minimum-nights',
                        'valueRegex' => '[0-9]+',
                    ],
                    [
                        'name' => 'start-date',
                    ],
                    [
                        'name' => 'start-input-selector',
                    ],
                ],
            ],
            [
                'name' => 'amp-date-picker-single-type-attributes',
                'attrs' => [
                    [
                        'name' => 'date',
                    ],
                    [
                        'name' => 'input-selector',
                    ],
                ],
            ],
            [
                'name' => 'amp-date-picker-static-mode-attributes',
                'attrs' => [
                    [
                        'name' => 'fullscreen',
                        'value' => [
                            '',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'amp-date-picker-overlay-mode-attributes',
                'attrs' => [
                    [
                        'name' => 'touch-keyboard-editable',
                        'value' => [
                            '',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'amp-inputmask-common-attr',
                'attrs' => [
                    [
                        'name' => 'mask-output',
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'mask',
                            ],
                        ],
                    ],
                    [
                        'name' => 'type',
                        'value' => [
                            'text',
                            'tel',
                            'search',
                        ],
                    ],
                    [
                        'name' => '[type]',
                    ],
                ],
            ],
            [
                'name' => 'lightboxable-elements',
                'attrs' => [
                    [
                        'name' => 'lightbox',
                    ],
                    [
                        'name' => 'lightbox-thumbnail-id',
                        'valueRegexCasei' => '^[a-z][a-z\d_-]*',
                    ],
                ],
            ],
            [
                'name' => 'amp-megaphone-common',
                'attrs' => [
                    [
                        'name' => 'data-light',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'data-sharing',
                        'value' => [
                            '',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'amp-nested-menu-actions',
                'attrs' => [
                    [
                        'name' => 'amp-nested-submenu-close',
                        'mandatoryOneof' => '[\'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
                    ],
                    [
                        'name' => 'amp-nested-submenu-open',
                        'mandatoryOneof' => '[\'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
                    ],
                ],
            ],
            [
                'name' => 'interactive-shared-configs-attrs',
                'attrs' => [
                    [
                        'name' => 'id',
                        'mandatory' => true,
                    ],
                    [
                        'name' => 'prompt-text',
                    ],
                    [
                        'name' => 'endpoint',
                        'mandatory' => true,
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => false,
                            'allowEmpty' => false,
                        ],
                    ],
                    [
                        'name' => 'theme',
                        'value' => [
                            'light',
                            'dark',
                        ],
                    ],
                    [
                        'name' => 'chip-style',
                        'value' => [
                            'shadow',
                            'flat',
                            'transparent',
                        ],
                    ],
                    [
                        'name' => 'prompt-size',
                        'value' => [
                            'small',
                            'medium',
                            'large',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'interactive-options-text-attrs',
                'attrs' => [
                    [
                        'name' => 'option-1-text',
                        'mandatory' => true,
                    ],
                    [
                        'name' => 'option-2-text',
                        'mandatory' => true,
                    ],
                    [
                        'name' => 'option-3-text',
                    ],
                    [
                        'name' => 'option-4-text',
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'option-3-text',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'interactive-options-confetti-attrs',
                'attrs' => [
                    [
                        'name' => 'option-1-confetti',
                    ],
                    [
                        'name' => 'option-2-confetti',
                    ],
                    [
                        'name' => 'option-3-confetti',
                    ],
                    [
                        'name' => 'option-4-confetti',
                    ],
                ],
            ],
            [
                'name' => 'interactive-options-results-category-attrs',
                'attrs' => [
                    [
                        'name' => 'option-1-results-category',
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'option-2-results-category',
                            ],
                        ],
                    ],
                    [
                        'name' => 'option-2-results-category',
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'option-1-results-category',
                            ],
                        ],
                    ],
                    [
                        'name' => 'option-3-results-category',
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'option-2-results-category',
                                'option-3-text',
                            ],
                        ],
                    ],
                    [
                        'name' => 'option-4-results-category',
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'option-3-results-category',
                                'option-4-text',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'amp-video-iframe-common',
                'attrs' => [
                    [
                        'name' => 'album',
                    ],
                    [
                        'name' => 'alt',
                    ],
                    [
                        'name' => 'artist',
                    ],
                    [
                        'name' => 'artwork',
                    ],
                    [
                        'name' => 'attribution',
                    ],
                    [
                        'name' => 'autoplay',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'dock',
                        'requiresExtension' => [
                            'amp-video-docking',
                        ],
                    ],
                    [
                        'name' => 'implements-media-session',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'implements-rotate-to-fullscreen',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'referrerpolicy',
                    ],
                    [
                        'name' => 'rotate-to-fullscreen',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                        ],
                    ],
                    [
                        'name' => '[src]',
                    ],
                ],
            ],
            [
                'name' => 'amp-video-common',
                'attrs' => [
                    [
                        'name' => 'album',
                    ],
                    [
                        'name' => 'alt',
                    ],
                    [
                        'name' => 'artist',
                    ],
                    [
                        'name' => 'artwork',
                    ],
                    [
                        'name' => 'attribution',
                    ],
                    [
                        'name' => 'autoplay',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'controls',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'controlslist',
                    ],
                    [
                        'name' => 'crossorigin',
                    ],
                    [
                        'name' => 'disableremoteplayback',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'dock',
                        'requiresExtension' => [
                            'amp-video-docking',
                        ],
                    ],
                    [
                        'name' => 'loop',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'muted',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'noaudio',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'object-fit',
                    ],
                    [
                        'name' => 'object-position',
                    ],
                    [
                        'name' => 'placeholder',
                    ],
                    [
                        'name' => 'preload',
                        'value' => [
                            'auto',
                            'metadata',
                            'none',
                            '',
                        ],
                    ],
                    [
                        'name' => 'rotate-to-fullscreen',
                        'value' => [
                            '',
                        ],
                    ],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => true,
                        ],
                    ],
                    [
                        'name' => '[album]',
                    ],
                    [
                        'name' => '[alt]',
                    ],
                    [
                        'name' => '[artist]',
                    ],
                    [
                        'name' => '[artwork]',
                    ],
                    [
                        'name' => '[attribution]',
                    ],
                    [
                        'name' => '[controls]',
                    ],
                    [
                        'name' => '[controlslist]',
                    ],
                    [
                        'name' => '[loop]',
                    ],
                    [
                        'name' => '[poster]',
                    ],
                    [
                        'name' => '[preload]',
                    ],
                    [
                        'name' => '[src]',
                    ],
                    [
                        'name' => '[title]',
                    ],
                ],
            ],
        ];
    }
}
