<?php

use WebXID\BotsMaster\Config;
use function WebXID\BotsMaster\includeTpl;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

includeTpl('admin/parts/header', [
    'errors' => $wx_errors ?? null,
    'messages' => $wx_messages ?? null
]);

?>
<div id="bots-master" class="container float-start">
    <div class="row mb-3">
        <div class="col-12">
            <h3><?php echo get_admin_page_title()?></h3>
            <hr>

        </div>
    </div>


    <div class="row">
        <div class="col-12 ">
            <form class="row" method="post" autocomplete="off">
                <div class="col-12 col-sm-6 mb-3">
                    <div class="mb-3">
                        <label for="floatingInput" class="form-label">Telegram Bot API Token</label>
                        <input type="text" style="-webkit-text-security: disc;" autocomplete="off" name="<?php echo Config::TELEGRAM_API_TOKEN?>" class="form-control" id="floatingInput" placeholder="777253030:AAFAwetR6k8ZmcW6ij95ab0pg2zstU4-X4w" value="<?php echo $telegram_api_token?>">
                    </div>

                    <div class="mb-3">
                        <label for="welcome-message" class="form-label"><?php echo __('Welcome message', 'bots_master');?></label>

                        <textarea class="form-control" id="welcome-message" name="<?php echo Config::WELCOME_MESSAGE;?>" ><?php echo $welcome_message?></textarea>

                        <?php includeTpl('admin/parts/message_editor_js', ['textarea_id' => 'welcome-message']); ?>

                    </div>

                    <div class="mb-3">
                        <label for="unknown-message" class="form-label"><?php echo __('What your bot has to response, if someone sends unexpected message or request?', 'bots_master')?></label>

                        <textarea class="form-control" id="unknown-message" name="<?php echo Config::UNKNOWN_MESSAGE?>" ><?php echo $unknown_message?></textarea>

                        <?php includeTpl('admin/parts/message_editor_js', ['textarea_id' => 'unknown-message']); ?>
                    </div>

                    <p class="submit">
                        <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php echo __('Save Changes')?>">
                    </p>
                </div>

                <div class="col-12 col-sm-6 mb-3">
                    <?php echo __('<h6>Checklist to get Telegram Bot API Token</h6>
                    <ol>
                        <li>Follow the link <a href="https://t.me/BotFather" target="_blank">https://t.me/BotFather</a></li>
                        <li>Create a bot <a href="https://youtu.be/aNmRNjME6mE?t=72" target="_blank">https://youtu.be/aNmRNjME6mE?t=72</a></li>
                        <li>Copy your API token <a href="https://imgur.com/CpWjw9w" target="_blank">https://imgur.com/CpWjw9w</a></li>
                    </ol>', 'bots_master')?>
                </div>

            </form>
        </div>
    </div>
</div>