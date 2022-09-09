<?php

/*
 * This file is a part of the DiscordPHP project.
 *
 * Copyright (c) 2015-present David Cole <david.cole1340@gmail.com>
 *
 * This file is subject to the MIT license that is bundled
 * with this source code in the LICENSE.md file.
 */

namespace Discord\WebSockets\Events;

use Discord\WebSockets\Event;

/**
 * @link https://discord.com/developers/docs/topics/gateway#guild-scheduled-event-user-remove
 *
 * @since 7.0.0
 */
class GuildScheduledEventUserRemove extends Event
{
    /**
     * @inheritDoc
     */
    public function handle($data)
    {
        // TODO: Create WebSockets Event Part
        return $data;
    }
}
