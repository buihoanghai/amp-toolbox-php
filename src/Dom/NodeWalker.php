<?php

namespace AmpProject\Dom;

use DOMNode;

/**
 * Class AmpProject\Dom\NodeWalker.
 *
 * @package ampproject/amp-toolbox
 */
final class NodeWalker
{
    /**
     * Depth-first walk through the DOM tree.
     *
     * @param DOMNode $node Node to start walking from.
     * @return DOMNode|null Next node, or null if none found.
     */
    public static function nextNode(DOMNode $node)
    {
        // Walk downwards if there are children.
        if ($node->firstChild) {
            return $node->firstChild;
        }

        // Return direct sibling or walk upwards until we find a node with a sibling.
        while ($node) {
            if ($node->nextSibling) {
                return $node->nextSibling;
            }

            $node = $node->parentNode;
        }

        // Out of nodes, so we're done.
        return null;
    }

    /**
     * Skip the subtree that is descending from the provided node.
     *
     * @param DOMNode $node Node to skip the subtree of.
     * @return DOMNode|null The appropriate "next" node that will skip the current subtree, null if none found.
     */
    public static function skipNodeAndChildren(DOMNode $node)
    {
        if ($node->nextSibling) {
            return $node->nextSibling;
        }

        return self::skipNodeAndChildren($node->parentNode);
    }
}
