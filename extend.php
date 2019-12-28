<?php
/*                                                                                   
 * Bilibili                                                                          
 */                                                                                  
                                                                                     namespace Pluveto\bilibili;                                                          
 

use Flarum\Extend;
use s9e\TextFormatter\Configurator;
return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
             $config->BBCodes->addCustom(
               '[bilibili aid={NUMBER1?} cid={NUMBER2?}][/bilibili]',
               '<iframe style="height: 40em; width: 100%" src="//player.bilibili.com/player.html?aid={NUMBER1}&cid={NUMBER2}&page=1" scrolling="no" border="0" frameborder="no" framespacing="0" allowfullscreen="true"></iframe>'
            );
        })
];
