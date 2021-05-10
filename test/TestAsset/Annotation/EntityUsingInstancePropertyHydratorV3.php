<?php

namespace LaminasTest\Form\TestAsset\Annotation;

use Laminas\Form\Annotation;

// @codingStandardsIgnoreStart
/**
 * @Annotation\Options({"use_as_base_fieldset":true})
 */
class EntityUsingInstancePropertyHydratorV3
{
    /**
     * @Annotation\Instance("LaminasTest\Form\TestAsset\Annotation\Entity")
     * @Annotation\Type("Laminas\Form\Fieldset")
     * @Annotation\Hydrator({"type":"Laminas\Hydrator\ClassMethodsHydrator", "options": {"underscoreSeparatedKeys": false}})
     */
    public $object;
}
// @codingStandardsIgnoreEnd
