<?php

/*
 * Author Url: https://imashen.cn   Welcome!
 * Copyright (c) 2021 Ashen
 * Please read LICENSE carefully~
 */

 namespace peartown\cexoplayer; use Flarum\Extend; use s9e\TextFormatter\Configurator; use Flarum\Frontend\Document; return [(new Extend\Frontend("\146\157\x72\x75\x6d"))->content(function (Document $document) { $document->head[] = "\xd\12\40\x20\40\40\x20\40\x20\x3c\x6c\x69\156\153\x20\x72\145\154\75\42\163\x74\x79\x6c\x65\x73\x68\x65\x65\x74\x22\40\x68\x72\x65\146\75\42\150\x74\x74\x70\x73\72\57\x2f\x63\144\x6e\x2e\152\x73\x64\145\154\151\166\x72\56\156\x65\x74\57\147\x68\57\x54\x61\x79\x6c\157\162\114\x6f\164\164\x6e\x65\162\57\x70\154\x61\x79\145\162\x40\155\141\x73\164\145\x72\57\x41\120\x6c\x61\171\x65\x72\56\x6d\151\156\56\x63\163\x73\42\76\15\12\x20\40\x20\40\x20\40\x20\74\x73\143\162\151\160\164\x20\163\x72\143\x3d\x22\x68\x74\164\x70\x73\72\x2f\57\x63\144\x6e\x2e\x6a\x73\x64\145\x6c\x69\166\x72\56\156\145\164\x2f\x67\x68\57\x54\x61\x79\154\x6f\162\x4c\x6f\164\x74\156\x65\x72\x2f\160\x6c\141\x79\145\162\100\x6d\x61\x73\x74\x65\x72\x2f\101\120\154\x61\171\145\162\56\155\x69\156\56\x6a\163\x22\76\74\x2f\x73\143\162\151\x70\164\76\15\xa\40\x20\x20\40\40\40\40\x3c\163\143\x72\x69\x70\164\40\x73\162\x63\75\42\150\164\164\x70\x73\72\x2f\x2f\x63\144\156\56\x6a\x73\x64\x65\154\151\x76\x72\x2e\156\x65\x74\57\x67\x68\57\160\145\x61\x72\164\x6f\x77\156\57\115\x65\x74\x69\156\147\112\x53\x40\x6d\141\x73\164\x65\162\x2f\163\x6f\165\162\x63\145\57\115\145\x74\x69\x6e\147\x2e\152\x73\x22\76\74\57\163\143\x72\151\x70\164\76\xd\12\x20\x20\40\x20\40\40\x20"; }), (new Extend\Formatter())->configure(function (Configurator $config) { $config->BBCodes->addCustom("\x5b\141\160\x6c\x61\x79\x2d\141\165\164\157\x20\x73\x72\x63\75\173\x55\x52\x4c\x3f\x7d\135\133\57\141\x70\x6c\x61\171\55\141\165\x74\x6f\x5d", "\x3c\155\145\x74\151\x6e\147\x2d\152\x73\x20\x61\x75\164\157\75\42\173\x55\x52\114\x7d\42\76\x3c\x2f\x6d\145\164\151\x6e\x67\x2d\x6a\x73\76"); $config->BBCodes->addCustom("\133\141\160\154\x61\171\x2d\x61\x75\x74\x6f\x5f\141\x20\163\162\x63\75\173\x55\122\x4c\77\x7d\x5d\x5b\x2f\141\x70\x6c\x61\171\x2d\x61\x75\x74\157\137\141\x5d", "\74\x6d\145\164\151\x6e\147\x2d\x6a\163\x20\141\x75\164\x6f\75\x22\x7b\x55\122\x4c\175\x22\40\141\165\x74\x6f\x70\154\141\171\75\42\164\x72\165\x65\x22\x3e\74\x2f\155\x65\x74\151\156\147\x2d\x6a\163\76"); })];