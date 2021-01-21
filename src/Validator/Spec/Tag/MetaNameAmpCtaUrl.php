<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class MetaNameAmpCtaUrl
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::META,\nSpecRule::SPEC_NAME => 'meta name=amp-cta-url',\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => Element::HEAD,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::CONTENT,\n        SpecRule::MANDATORY => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::NAME,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',\n        SpecRule::VALUE_CASEI => [\n                        'amp-cta-url',\n                    ],\n    ],\n],\nSpecRule::HTML_FORMAT => [\n                Format::AMP4ADS,\n            ],\n];";
}