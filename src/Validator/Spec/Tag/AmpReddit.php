<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpReddit
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::REDDIT,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_EMBEDLIVE,\n        SpecRule::VALUE_CASEI => [\n                        'false',\n                        'true',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_EMBEDPARENT,\n        SpecRule::VALUE_CASEI => [\n                        'false',\n                        'true',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_EMBEDTYPE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_CASEI => [\n                        'comment',\n                        'post',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::DATA_SRC,\n        SpecRule::MANDATORY => true,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-reddit',\n            ],\n];";
}