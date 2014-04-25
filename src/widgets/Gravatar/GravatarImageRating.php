<?php
namespace Catharsis\Web;

/**
 * Rate of image that indicates whether it's appropriate for a certain audience.
 */
final class GravatarImageRating
{
    /**
     * Suitable for display on all websites with any audience type.
     */
    const G = "g";

    /**
     * May contain rude gestures, provocatively dressed individuals, the lesser swear words, or mild violence.
     */
    const PG = "pg";

    /**
     * May contain such things as harsh profanity, intense violence, nudity, or hard drug use.
     */
    const R = "r";

    /**
     * May contain hardcore sexual imagery or extremely disturbing violence.
     */
    const X = "x";
}

?>
