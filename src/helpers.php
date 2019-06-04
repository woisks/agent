<?php
declare(strict_types=1);

use Woisk\Agent\AgentService;

if (!function_exists('agent_info')) {
    /**
     * agent_info 2019/5/21 19:52
     *
     *
     * @return array
     */
    function agent_info(): array
    {
        return (new AgentService())->info();
    }
}