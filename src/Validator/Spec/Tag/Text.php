<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Text extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::TEXT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'dx',
            ],
            [
                SpecRule::NAME => 'dy',
            ],
            [
                SpecRule::NAME => 'externalresourcesrequired',
            ],
            [
                SpecRule::NAME => 'lengthadjust',
            ],
            [
                SpecRule::NAME => 'rotate',
            ],
            [
                SpecRule::NAME => 'text-anchor',
            ],
            [
                SpecRule::NAME => 'textlength',
            ],
            [
                SpecRule::NAME => 'transform',
            ],
            [
                SpecRule::NAME => 'x',
            ],
            [
                SpecRule::NAME => 'y',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'svg-conditional-processing-attributes',
            'svg-core-attributes',
            'svg-presentation-attributes',
            'svg-style-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
        SpecRule::MANDATORY_ANCESTOR => Element::SVG,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
