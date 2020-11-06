<?php

namespace App\Http\Controllers;

use App\Models\Channel;

class ChannelSettingsController extends Controller {

    public function edit(Channel $channel) {
        return view('channels.settings.edit', [
            'channel' => $channel
        ]);
    }

    public function update() {
        return;
    }

}
