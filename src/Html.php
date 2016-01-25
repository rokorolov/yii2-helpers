<?php

/**
 * @copyright Copyright (c) Roman Korolov, 2015
 * @link https://github.com/rokorolov/yii2-helpers
 * @license http://opensource.org/licenses/BSD-3-Clause
 * @version 1.0.0
 */

namespace rokorolov\helpers;

/**
 * Bootstrap HTML helper
 *
 * @author Roman Korolov <rokorolov@gmail.com>
 */
class Html extends \yii\helpers\Html
{
    const TYPE_DEFAULT = 'default';
    const TYPE_PRIMARY = 'primary';
    const TYPE_SUCCESS = 'success';
    const TYPE_INFO = 'info';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    
    const SIZE_TINY = 'xs';
    const SIZE_SMALL = 'sm';
    const SIZE_MEDIUM = 'md';
    const SIZE_LARGE = 'lg';
    
    /**
     * Generates a label.
     * 
     * @param string $content
     * @param string $type
     * @param array $options
     * @return string created label
     */
    public static function bsLabel($content, $type = '', $options = [])
    {
        if ($type == '') {
            $type = self::TYPE_DEFAULT;
        }
        static::addCssClass($options, 'label label-' . $type);
        return static::tag('span', $content, $options);
    }
    
    /**
     * Generates a badge.
     * 
     * @param string $content
     * @param string $type
     * @param array $options
     * @return string created badge
     */
    public static function bsBadge($content, $type = '', $options = [])
    {
        if ($type == '') {
            $type = self::TYPE_DEFAULT;
        }
        static::addCssClass($options, 'badge badge-' . $type);
        return static::tag('span', $content, $options);
    }
    
    /**
     * Generates a icon.
     * 
     * @param string $icon
     * @param array $options
     * @param string $tag
     * @param string $prefix
     * @return string created icon
     */
    public static function icon($icon, $options = [], $tag = 'i', $prefix = 'fa fa-')
    {
        static::addCssClass($options, $prefix . $icon);
        return static::tag($tag, '', $options);
    }
}
