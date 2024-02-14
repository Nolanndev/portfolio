<?php

class CarViewer {
    public static function inlineDisplay($car) {
        return <<<EOT
            {$car->getConstructor()} {$car->getModel()} {$car->getYear()}
        EOT;
    }

    public static function detailsDisplay($car) {
        return <<<EOT
            <p><span style="font-weight:bold;">Constructor</span> {$car->getConstructor()}</p>
            <p><span style="font-weight:bold;">Model</span> {$car->getModel()}</p>
            <p><span style="font-weight:bold;">Year</span> {$car->getYear()}</p>
        EOT;
    }
}