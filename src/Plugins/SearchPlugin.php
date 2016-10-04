<?php

/**
 * This file is part of the Pehape libraries (http://pehape.cz)
 * Copyright (c) 2016 Tomas Rathouz <trathouz at gmail.com>
 */

namespace Pehape\DataTree\Plugins;

/**
 * SearchPlugin.
 *
 * @author Tomas Rathouz <trathouz at gmail.com>
 */
class SearchPlugin extends BasePlugin
{


    /** Render configuration. */
    public function renderConfiguration()
    {
        $template = $this->template;
        $template->setFile(__DIR__ . '/templates/search.latte');

        $template->treeId = $this->dataTree->getOption('elementId');
        $template->configuration = $this->configuration;
        $template->render();
    }


}