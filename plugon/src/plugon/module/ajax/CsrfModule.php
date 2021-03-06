<?php
/*
 * Poggit
 *
 * Copyright (C) 2016 Plug On
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace plugon\module\ajax;

include_once realpath(dirname(__FILE__)) . '/../Module.php';
include_once realpath(dirname(__FILE__)) . '/../../session/SessionUtils.php';

use plugon\module\Module;
use plugon\session\SessionUtils;
class CsrfModule extends Module {
    /**
     * @return string
     */
    public function getName(){
        return "csrf";
    }
    public function output() {
        echo SessionUtils::getInstance()->createCsrf();
    }
    
}
