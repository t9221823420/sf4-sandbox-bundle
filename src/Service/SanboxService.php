<?php

namespace yozh\SandboxBundle\Service;

use Psr\Log\LoggerInterface;

/**
 * Class SanboxService
 * @package yozh\SandboxBundle\Service
 */
class SanboxService
{
    /**
     * SanboxService constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    
    public function hello()
    {
        $this->logger->info('Hello from SanboxService');
    }
    
    public function test()
    {
        return true;
    }
    
}
