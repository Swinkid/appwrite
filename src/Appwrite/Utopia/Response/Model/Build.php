<?php

namespace Appwrite\Utopia\Response\Model;

use Appwrite\Utopia\Response;
use Appwrite\Utopia\Response\Model;

class Build extends Model
{
    public function __construct()
    {
        $this
            ->addRule('$id', [
                'type' => self::TYPE_STRING,
                'description' => 'Build ID.',
                'default' => '',
                'example' => '5e5ea5c16897e',
            ])
            ->addRule('dateCreated', [
                'type' => self::TYPE_INTEGER,
                'description' => 'The tag creation date in Unix timestamp.',
                'default' => 0,
                'example' => 1592981250,
            ])
            // Build Status
            // Failed - The tag build has failed. More details can usually be found in buildStderr
            // Ready - The tag build was successful and the tag is ready to be deployed
            // Processing - The tag is currently waiting to have a build triggered
            // Building - The tag is currently being built
            ->addRule('status', [
                'type' => self::TYPE_STRING,
                'description' => 'The build status.',
                'default' => '',
                'example' => 'ready',
            ])
            ->addRule('stdout', [
                'type' => self::TYPE_STRING,
                'description' => 'The stdout of the build.',
                'default' => '',
                'example' => '',
            ])
            ->addRule('stderr', [
                'type' => self::TYPE_STRING,
                'description' => 'The stderr of the build.',
                'default' => '',
                'example' => '',
            ])
            ->addRule('time', [
                'type' => self::TYPE_INTEGER,
                'description' => 'The build time in seconds.',
                'default' => 0,
                'example' => 0,
            ])
        ;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName():string
    {
        return 'Build';
    }

    /**
     * Get Collection
     *
     * @return string
     */
    public function getType():string
    {
        return Response::MODEL_BUILD;
    }
}