<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class MetaNameAmpStoryGeneratorName extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::META,
        SpecRule::SPEC_NAME => 'meta name=amp-story-generator-name',
        SpecRule::UNIQUE => true,
        SpecRule::MANDATORY_PARENT => Element::HEAD,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::CONTENT,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::NAME,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_CASEI => [
                    'amp-story-generator-name',
                ],
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
