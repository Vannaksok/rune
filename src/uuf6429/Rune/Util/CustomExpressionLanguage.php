<?php

namespace uuf6429\Rune\Util;

use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

class CustomExpressionLanguage extends ExpressionLanguage
{
    protected function registerFunctions()
    {
        // disable default Symfony ExpressionLanguage functions
    }
}
