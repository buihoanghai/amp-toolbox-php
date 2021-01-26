<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpImg extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::IMG,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ALT,
            ],
            [
                SpecRule::NAME => Attribute::ATTRIBUTION,
            ],
            [
                SpecRule::NAME => Attribute::CROSSORIGIN,
            ],
            [
                SpecRule::NAME => Attribute::OBJECT_FIT,
            ],
            [
                SpecRule::NAME => Attribute::OBJECT_POSITION,
            ],
            [
                SpecRule::NAME => Attribute::PLACEHOLDER,
            ],
            [
                SpecRule::NAME => Attribute::REFERRERPOLICY,
            ],
            [
                SpecRule::NAME => '[alt]',
            ],
            [
                SpecRule::NAME => '[attribution]',
            ],
            [
                SpecRule::NAME => '[src]',
            ],
            [
                SpecRule::NAME => '[srcset]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
            'lightboxable-elements',
            'mandatory-src-or-srcset',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-img/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::INTRINSIC,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
