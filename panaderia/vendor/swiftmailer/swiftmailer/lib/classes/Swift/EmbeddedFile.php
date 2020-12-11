<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * An embedded file, in a multipart message.
 *
 * @author Chris Corbyn
 */
class Swift_EmbeddedFile extends Swift_Mime_EmbeddedFile
{
    /**
     * Create a new EmbeddedFile.
     *
     * Details may be optionally provided to the constructor.
     *
     * @param string|Swift_OutputByteStream $data
     * @param string                        $filename
     * @param string                        $contentType
     */
    public function __construct($data = null, $filename = null, $contentType = null)
    {
<<<<<<< HEAD
        \call_user_func_array(
=======
        call_user_func_array(
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
            [$this, 'Swift_Mime_EmbeddedFile::__construct'],
            Swift_DependencyContainer::getInstance()
                ->createDependenciesFor('mime.embeddedfile')
            );

        $this->setBody($data);
        $this->setFilename($filename);
        if ($contentType) {
            $this->setContentType($contentType);
        }
    }

    /**
     * Create a new EmbeddedFile from a filesystem path.
     *
     * @param string $path
     *
     * @return Swift_Mime_EmbeddedFile
     */
    public static function fromPath($path)
    {
        return (new self())->setFile(new Swift_ByteStream_FileByteStream($path));
    }
}
