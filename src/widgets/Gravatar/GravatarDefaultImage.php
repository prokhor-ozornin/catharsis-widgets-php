<?php
namespace Catharsis\Web;

/**
 * Type of default image for Gravatar's avatar.
 */
final class GravatarDefaultImage
{
    /**
     * Do not load any image if none is associated with the email hash, instead return an HTTP 404 (File Not Found) response.
     */
    const NotFound = "404";

    /**
     * A simple, cartoon-style silhouetted outline of a person (does not vary by email hash).
     */
    const MysteryMan = "mm";

    /**
     * A geometric pattern based on an email hash.
     */
    const IdentIcon = "identicon";

    /**
     * A generated 'monster' with different colors, faces, etc.
     */
    const MonsterId = "monsterid";

    /**
     * Generated faces with differing features and backgrounds.
     */
    const Wavatar = "wavatar";

    /**
     * Awesome generated, 8-bit arcade-style pixelated faces.
     */
    const Retro = "retro";

    /**
     * A transparent PNG image (border added to HTML below for demonstration purposes).
     */
    const Blank = "blank";

    private function __construct()
    {

    }
}

?>
