<?php 

namespace App\Configs\Message;

class Flash {

    const MESSAGE_AFTER_SAVE_SUCCESSFULLY = 'Successful!';
    const MESSAGE_AFTER_INSERT_SUCCESSFULLY = self::MESSAGE_AFTER_SAVE_SUCCESSFULLY;
    const MESSAGE_AFTER_UPDATE_SUCCESSFULLY = self::MESSAGE_AFTER_SAVE_SUCCESSFULLY;
    
    const MESSAGE_AFTER_SAVE_ERROR = 'Error!';
    const MESSAGE_AFTER_INSERT_ERROR = self::MESSAGE_AFTER_SAVE_ERROR;
    const MESSAGE_AFTER_UPDATE_ERROR = self::MESSAGE_AFTER_SAVE_ERROR;
    
}

?>