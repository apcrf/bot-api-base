<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class StickerSetType.
 *
 * @see https://core.telegram.org/bots/api#stickerset
 */
class StickerSetType
{
    /**
     * Sticker set name.
     *
     * @var string
     */
    public $name;

    /**
     * Sticker set title.
     *
     * @var string
     */
    public $title;

    /**
     * if the sticker set contains masks.
     *
     * @var bool|null
     */
    public $containsMasks;

    /**
     * List of all set stickers.
     *
     * @var StickerType[]
     */
    public $stickers;
}
