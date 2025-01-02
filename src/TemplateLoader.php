<?php
/*
 * Tengine - Template Engine for PHP
 *
 * src/template_loader.php - Template loader
 */

namespace Cyberword\Tengine;

class TemplateLoader {
    private string $templates_folder_path;

    function __construct(string $path) {
        $templates_folder_path = $path;
    }
}