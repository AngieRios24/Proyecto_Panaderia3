<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Formatter;

<<<<<<< HEAD
use Symfony\Component\Console\Color;
=======
use Symfony\Component\Console\Exception\InvalidArgumentException;
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

/**
 * Formatter style class for defining styles.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class OutputFormatterStyle implements OutputFormatterStyleInterface
{
<<<<<<< HEAD
    private $color;
    private $foreground;
    private $background;
    private $options;
    private $href;
=======
    private static $availableForegroundColors = [
        'black' => ['set' => 30, 'unset' => 39],
        'red' => ['set' => 31, 'unset' => 39],
        'green' => ['set' => 32, 'unset' => 39],
        'yellow' => ['set' => 33, 'unset' => 39],
        'blue' => ['set' => 34, 'unset' => 39],
        'magenta' => ['set' => 35, 'unset' => 39],
        'cyan' => ['set' => 36, 'unset' => 39],
        'white' => ['set' => 37, 'unset' => 39],
        'default' => ['set' => 39, 'unset' => 39],
    ];
    private static $availableBackgroundColors = [
        'black' => ['set' => 40, 'unset' => 49],
        'red' => ['set' => 41, 'unset' => 49],
        'green' => ['set' => 42, 'unset' => 49],
        'yellow' => ['set' => 43, 'unset' => 49],
        'blue' => ['set' => 44, 'unset' => 49],
        'magenta' => ['set' => 45, 'unset' => 49],
        'cyan' => ['set' => 46, 'unset' => 49],
        'white' => ['set' => 47, 'unset' => 49],
        'default' => ['set' => 49, 'unset' => 49],
    ];
    private static $availableOptions = [
        'bold' => ['set' => 1, 'unset' => 22],
        'underscore' => ['set' => 4, 'unset' => 24],
        'blink' => ['set' => 5, 'unset' => 25],
        'reverse' => ['set' => 7, 'unset' => 27],
        'conceal' => ['set' => 8, 'unset' => 28],
    ];

    private $foreground;
    private $background;
    private $href;
    private $options = [];
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    private $handlesHrefGracefully;

    /**
     * Initializes output formatter style.
     *
     * @param string|null $foreground The style foreground color name
     * @param string|null $background The style background color name
     */
    public function __construct(string $foreground = null, string $background = null, array $options = [])
    {
<<<<<<< HEAD
        $this->color = new Color($this->foreground = $foreground ?: '', $this->background = $background ?: '', $this->options = $options);
=======
        if (null !== $foreground) {
            $this->setForeground($foreground);
        }
        if (null !== $background) {
            $this->setBackground($background);
        }
        if (\count($options)) {
            $this->setOptions($options);
        }
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    }

    /**
     * {@inheritdoc}
     */
    public function setForeground(string $color = null)
    {
<<<<<<< HEAD
        $this->color = new Color($this->foreground = $color ?: '', $this->background, $this->options);
=======
        if (null === $color) {
            $this->foreground = null;

            return;
        }

        if (!isset(static::$availableForegroundColors[$color])) {
            throw new InvalidArgumentException(sprintf('Invalid foreground color specified: "%s". Expected one of (%s).', $color, implode(', ', array_keys(static::$availableForegroundColors))));
        }

        $this->foreground = static::$availableForegroundColors[$color];
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    }

    /**
     * {@inheritdoc}
     */
    public function setBackground(string $color = null)
    {
<<<<<<< HEAD
        $this->color = new Color($this->foreground, $this->background = $color ?: '', $this->options);
=======
        if (null === $color) {
            $this->background = null;

            return;
        }

        if (!isset(static::$availableBackgroundColors[$color])) {
            throw new InvalidArgumentException(sprintf('Invalid background color specified: "%s". Expected one of (%s).', $color, implode(', ', array_keys(static::$availableBackgroundColors))));
        }

        $this->background = static::$availableBackgroundColors[$color];
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    }

    public function setHref(string $url): void
    {
        $this->href = $url;
    }

    /**
     * {@inheritdoc}
     */
    public function setOption(string $option)
    {
<<<<<<< HEAD
        $this->options[] = $option;
        $this->color = new Color($this->foreground, $this->background, $this->options);
=======
        if (!isset(static::$availableOptions[$option])) {
            throw new InvalidArgumentException(sprintf('Invalid option specified: "%s". Expected one of (%s).', $option, implode(', ', array_keys(static::$availableOptions))));
        }

        if (!\in_array(static::$availableOptions[$option], $this->options)) {
            $this->options[] = static::$availableOptions[$option];
        }
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    }

    /**
     * {@inheritdoc}
     */
    public function unsetOption(string $option)
    {
<<<<<<< HEAD
        $pos = array_search($option, $this->options);
        if (false !== $pos) {
            unset($this->options[$pos]);
        }

        $this->color = new Color($this->foreground, $this->background, $this->options);
=======
        if (!isset(static::$availableOptions[$option])) {
            throw new InvalidArgumentException(sprintf('Invalid option specified: "%s". Expected one of (%s).', $option, implode(', ', array_keys(static::$availableOptions))));
        }

        $pos = array_search(static::$availableOptions[$option], $this->options);
        if (false !== $pos) {
            unset($this->options[$pos]);
        }
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    }

    /**
     * {@inheritdoc}
     */
    public function setOptions(array $options)
    {
<<<<<<< HEAD
        $this->color = new Color($this->foreground, $this->background, $this->options = $options);
=======
        $this->options = [];

        foreach ($options as $option) {
            $this->setOption($option);
        }
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    }

    /**
     * {@inheritdoc}
     */
    public function apply(string $text)
    {
<<<<<<< HEAD
=======
        $setCodes = [];
        $unsetCodes = [];

>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
        if (null === $this->handlesHrefGracefully) {
            $this->handlesHrefGracefully = 'JetBrains-JediTerm' !== getenv('TERMINAL_EMULATOR') && !getenv('KONSOLE_VERSION');
        }

<<<<<<< HEAD
=======
        if (null !== $this->foreground) {
            $setCodes[] = $this->foreground['set'];
            $unsetCodes[] = $this->foreground['unset'];
        }
        if (null !== $this->background) {
            $setCodes[] = $this->background['set'];
            $unsetCodes[] = $this->background['unset'];
        }

        foreach ($this->options as $option) {
            $setCodes[] = $option['set'];
            $unsetCodes[] = $option['unset'];
        }

>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
        if (null !== $this->href && $this->handlesHrefGracefully) {
            $text = "\033]8;;$this->href\033\\$text\033]8;;\033\\";
        }

<<<<<<< HEAD
        return $this->color->apply($text);
=======
        if (0 === \count($setCodes)) {
            return $text;
        }

        return sprintf("\033[%sm%s\033[%sm", implode(';', $setCodes), $text, implode(';', $unsetCodes));
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    }
}
