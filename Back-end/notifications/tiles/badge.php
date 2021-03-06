<?php
/*
 * Copyright (C) 2016 Alefe Souza <http://alefesouza.com>
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

include("../../functions.php");

$json = file_get_contents("http://api.meetup.com/".$meetupid."/events");

$events = json_decode($json);

$badge = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><badge value="'.count($events).'" />');

Header('Content-type: text/xml');
print($badge->asXML());
?>